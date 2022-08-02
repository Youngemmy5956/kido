<?php

namespace App\Http\Controllers\User;

use App\Models\APW;
use App\Models\Plan;
use App\Models\Wallet;
use App\Models\History;
use App\Models\Approval;
use App\Models\Investment;
use Illuminate\Http\Request;
use App\Models\AwaitingPayment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{
    public function index(){
      $overview = Investment::where('user_id',auth('web')->id())->first();
        $history = History::where('user_id',auth('web')->id())->get();

        if(empty(APW::where("user_id",auth()->id())->first())){
            APW::create(
            ["user_id" => auth()->id()]
             );
        }
       
       return view("user.dashboard")->with(['overview'=>$overview,'history'=>$history]);
    }

    public function overview(){
        $overview = Investment::where('user_id',auth('web')->id())->first();
        $history = History::orderBy('created_at','desc')->where('user_id',auth('web')->id())->get();
       return view("user.dashboard")->with(['overview'=>$overview,'history'=>$history]);
    }

    public function reinvest(){
        $plans = Plan::get();
        $approval = Approval::where('user_id',auth('web')->id())->get();
        $invest = Investment::where('user_id',auth('web')->id())->get();
        $wallet = Wallet::get();
        return view('user.reinvest')->with(['plans'=>$plans,'approval'=>$approval,'invest' => $invest,'wallet' => $wallet]);
    }
    public function store_invest(Request $request){
       
        $path = Storage::disk('public')->putFile('approval',$request->file('file'));
        $approval = Approval::create(['user_id'=>auth('web')->id(),'amount'=>$request->plans,'path'=>$path]);
        if($approval){
            return redirect()->route('user.reinvest');
        }
        return back();
      
    }
    public function info(){
        return view('user.accountinfo');
    }
    public function transaction(){
        $await = AwaitingPayment::where('user_id',auth()->id())->get();
        return view('user.transactions')->with(['await' => $await]);
    }
    public function store_transaction(Request $request){
        $hist = History::where('user_id',auth()->id())->where('status',true)->first();
        if(empty($hist)){
             return back()->with(['msg'=>'You don\'t have a running investment at the moment']);
        }
        $exp = strtotime($hist->expiry_date);
        $date = strtotime('now');

        if($exp > $date){
            return back()->with(['msg'=>'you have a running investment that will expire on '.$hist->expiry_date]);
        }else{

            $await = AwaitingPayment::create([
                'user_id' => auth('web')->id(),
                'amount' => auth('web')->user()->investment->roi,
                'status' => 'pending',
                'transaction_date' => date('d-m-y h:i:sa'),
            ]);
            if($await){

                $hist->update(['status'=>false]);
                auth('web')->user()->investment->delete();
                return back()->with(['msg','Payemnt request sent successfully']);
            }
    }
}
    public function plans(){
        $history = History::where('user_id',auth('web')->id())->get();
        return view('user.referrals')->with(['history'=>$history]);
    }

    public function invested(){
         $history = History::where('user_id',auth('web')->id())->get();
        return view('user.plans')->with(['history'=>$history]);
    }



    public function logout(Request $request){
        auth('web')->logout();
        session()->regenerate();
        session()->invalidate();

        return redirect()->route('index');
    }
   

}
