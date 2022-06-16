<?php

namespace App\Http\Controllers\User;

use App\Models\Address;
use App\Models\History;
use App\Models\Package;
use App\Models\Product;
use App\Models\Approval;
use App\Models\Investment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{
    public function index(){
        $approve = Approval::where('user_id',auth()->user()->id)->get()->count();
        // dd($approve);
        $coin = Http::get('https://api.roqqu.com/prod/v1/prices');

        $addr = Address::where("user_id",auth()->user()->id)->first();


        $invest = Investment::where("user_id",auth('web')->user()->id)->get();

        return view("user.dashboard")->with(['approve'=>$approve,'coin' =>  $coin->json()['data'],'investment'=>$invest,'address' => $addr]);
    }
    public function setting(){
        return view("user.setting");
    }
    public function approval(Request $request){

        // Artisan::call("storage:link");

        $path = Storage::disk('public')->putFile('prove',$request->file('file'));

         $data = ['user_id'=> $request->user_id,'amount'=>$request->amount,"path" => $path,"trans_id"=> $request->id];

         $created = Approval::create($data);

         if($created){

            return response()->json(["status"=>"successful",'data'=>"Payment validation sent successfully"]);
         }

       
    }

    public function package(){
        $package = Package::get();
        return response()->json($package);
    }

    public function activate($name){

        $data = Package::where('name','=',$name)->first();

        if(!$data){
            return back()->with(['msg'=>'unrecognised plan']);
        }

        if(auth()->user()->wallet->amount < $data->amount){
             return back()->with(['msg'=>'insufficient fund']);
        }

        $record = auth('web')->user()->wallet->amount - $data->amount;

        auth('web')->user()->wallet()->update(['amount' => $record]);

            $date = date("y-m-d");
            $expire = date("y-m-d",strtotime($data->duration."days"));

            $invest = Investment::create(['user_id'=>auth()->user()->id,'date'=> $date,'amount' => $data->amount,'roi'=> $data->roi,'duration'=> $data->duration,'created_at'=>$date,'expire_at'=>$expire]);
            if($invest){
                return back()->with(['msg' => 'investment activated successfully']);
            }
       
    }

    public function investment(Request $request){
            $data = Investment::get();
           return view("user.dashboard");
    }

    public function address(Request $request){

            $addr = Address::where('user_id',$request->id)->first();
        if($addr){
            $address = Address::where('user_id',$request->id)->update(['address'=> $request->address]);

            return response()->json("true");
        }else{
            $address = Address::create(['user_id'=> $request->id,'address'=> $request->address]);
            return response()->json("true");
        }
    }

}
