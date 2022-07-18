<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Plan;
use App\Models\Product;
use App\Models\Approval;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Investment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{   
  
    public function login(){
        return view("admin.Auth.login");
    }

    public function index(){
        $users = User::get();
        return view("admin.index")->with(['users'=>$users]);
    }

    public function approve(){
        $approve = Approval::get();
        return view("admin.approve")->with(['approve' => $approve]);
    }
    public function approved(Approval $approval){
        $data = Plan::where('amount',$approval->amount)->first();
    
        $record = Investment::create([
            'user_id' =>$approval->user_id,
            'date' => date('h:i:sa d-m-Y'),
            'amount' => $approval->amount,
            'plan' => $data->name,
            'roi' => $data->roi,
            'duration' => $data->duration
        ]);
            if(!$record){
                return back();
            }
            $exp = strtotime("$data->duration days");
            $expiry = date('d-m-Y h:i:sa',$exp);

            History::create([
            'user_id' => $approval->user_id,
            'plan' => $data->name,
            'status' => true,
            'purchase_date' => date('h:i:sa d-m-Y'),
            'expiry_date' =>$expiry
            ]);
        $approval->delete();
        return back();
     
    }

    public function deny(Approval $approval){
        $approval->delete();
        return back();
    }

    public function package(){
        $packages = Plan::get();
        return view("admin.package")->with(['package'=>$packages]);
    }

    public function create_package(Request $request){

        $create = Plan::create($request->only(['name','amount','roi','duration']));

        if($create){
            return back()->with(['msg'=>"created successfully"]);
        }

        return back()->with(['msg' => "Oops something went wrong"]);
        
    }

    public function product(){
        return view("admin.product");
    }

    public function store_product(Request $request){

        $path = Storage::disk('public')->putFile('product',$request->file('file'));
        
        $data = Product::create(['name'=>$request->name,'content'=> $request->content,'path'=>$path]);

        if($data){
            return back()->with(['msg' => 'Product added successfully']);
        }else{
            return back()->with(['msg' => 'Oops something went wrong']);
        }
    }

    public function register(){
        $available = Admin::get()->count();
        if(!empty($available)){
            return redirect()->route('admin.login');
        }
        return view("admin.Auth.register");
    }
    public function register_admin(Request $request){
        $request->validate([
            'email' => 'required|email|unique:admin',
            'password' => 'required|confirmed'
        ]);

        Admin::create(['name' => $request->name,'email' => $request->email,'password' => Hash::make($request->password)]);
        if(auth('admin')->attempt($request->only("email","password"))){
            return redirect()->route("admin.dashboard");
        }else{
            return back()->with(['msg'=>"oops somethingb went wrong"]);
        }
    }

    public function admin_login(Request $request){
        $request->validate(['email' => 'required|email','password'=> 'required']);

        if(auth('admin')->attempt($request->only('email','password'))){
            return redirect()->route('admin.dashboard');
        }else{
            return back()->with(['msg' => 'Oops something went wrong']);
        }
    }

    public function logout(){
        auth('admin')->logout();
        session()->regenerateToken();
        session()->invalidate();
        return redirect()->route('admin.login');
    }
}
