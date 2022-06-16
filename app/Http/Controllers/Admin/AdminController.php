<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Package;
use App\Models\Product;
use App\Models\Approval;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        $users = User::get();
        return view("admin.index")->with(['users'=>$users]);
    }

    public function approve(){
        $approve = Approval::get();
        return view("admin.approve")->with(['approve' => $approve]);
    }
    public function approved(Approval $approval){
        $approval->user->wallet()->update(['amount' => $approval->user->wallet->amount + $approval->amount]);
        Storage::disk('public')->delete($approval->path);
        $approval->delete();
        return back();
    }

    public function package(){
        $packages = Package::get();
        return view("admin.package")->with(['package'=>$packages]);
    }

    public function create_package(Request $request){

        $create = Package::create($request->only(['name','amount','roi','duration','content']));

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
}
