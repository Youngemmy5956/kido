<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class,'index'])->name("index");

#User Authentification
Route::get('/login',[PublicController::class,'login'])->name('login')->middleware('guest');
Route::get('/register',[PublicController::class,'register'])->name('register')->middleware('guest');
Route::post("/register/store",[PublicController::class,'storeUser'])->name('storeUser')->middleware('guest');
Route::post("/register/login",[PublicController::class,'userLogin'])->name('userLogin')->middleware('guest');
Route::post('/logout',[PublicController::class,'logout'])->name('logout')->middleware('auth');



# User Dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::get("/dashboard/settings",[DashboardController::class,'setting'])->name('setting')->middleware('auth');
Route::get('/user/activate/{name}',[DashboardController::class,'activate'])->name('activate')->middleware('auth');
Route::post('/user/history',[DashboardController::class,'history'])->name('user.history')->middleware('auth');


# Admin Dashboard
Route::get("/admin/dashboard",[AdminController::class,"index"])->name("admin.dashboard");
Route::get("/admin/approve",[AdminController::class,"approve"])->name("admin.approve");
Route::get("/admin/approved/{approval}",[AdminController::class,"approved"])->name("approved");
Route::get("/admin/package/",[AdminController::class,"package"])->name("admin.package");
Route::get("/admin/product/",[AdminController::class,"product"])->name("admin.product");
Route::post("/admin/product/",[AdminController::class,"store_product"])->name("admin.product");
Route::post("/admin/package/create",[AdminController::class,"create_package"])->name("admin.create_package");