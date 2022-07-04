<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\AboutBtcController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\WalletController;
use App\Http\Controllers\Web\TeamController;
use App\Http\Controllers\Web\ServiceController;

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

// Route::get('/', [PublicController::class,'index'])->name("index");

    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('about-us', [AboutUsController::class, 'about'])->name('about');
    Route::get('our-wallet', [WalletController::class, 'wallet'])->name('wallet');
    Route::get('contact-us', [ContactController::class, 'contact'])->name('contact');
    Route::get('our-team', [TeamController::class, 'team'])->name('team');
    Route::get('about-btc', [AboutBtcController::class, 'about_btc'])->name('about_btc');
    Route::get('our-service', [ServiceController::class, 'service'])->name('service');



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
Route::get("/admin/dashboard",[AdminController::class,"index"])->name("admin.dashboard")->middleware('admin');
Route::get("/admin/login",[AdminController::class,"login"])->name("admin.login");
Route::post("/admin/login",[AdminController::class,"admin_login"]);
Route::get("/admin/approve",[AdminController::class,"approve"])->name("admin.approve");
Route::get("/admin/approved/{approval}",[AdminController::class,"approved"])->name("approved");
Route::get("/admin/package/",[AdminController::class,"package"])->name("admin.package");
Route::get("/admin/product/",[AdminController::class,"product"])->name("admin.product");
Route::post("/admin/product/",[AdminController::class,"store_product"])->name("admin.product");
Route::post("/admin/package/create",[AdminController::class,"create_package"])->name("admin.create_package");
Route::get("/admin/register",[AdminController::class,"register"])->name("admin.register")->middleware('admin');
Route::post("/admin/register",[AdminController::class,"register_admin"]);