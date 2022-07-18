<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Events\UserRegister;

class PublicController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware("guest");
    // }
    public function index(){
        return view("index");
    }
    public function login(){
        return view('Auth.login');
    }
    public function register(){
        return view('Auth.register');
    }
    public function storeUser(Request $request){
        $request->validate([
            'first_name' => ['required','alpha','min:3'],
            'last_name' => ['required','alpha','min:3'],
            'email' => ['required','email',Rule::unique('users','email'),'min:5'],
            'password' => ['required','confirmed']
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('dashboard');
    }

    public function userLogin(Request $request){
        $request->validate([
            'email'=> ['required'],
            'password' => ['required']
        ]);

        if(auth('web')->attempt($request->only('email','password'))){
            return redirect()->route('dashboard');
        }else{
            return back()->with('msg','Invalid login credentials');
        }
    }

    public function logout(Request $request){

        auth()->logout();
        session()->invalidate();
        return redirect()->route('index');
    }
}
