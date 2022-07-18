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
Route::controller(DashboardController::class)->group(function(){
    Route::middleware('auth')->group(function(){
        Route::get('/dashboard','index')->name('dashboard');
        Route::get("/dashboard/overview",'overview')->name('user.overview');
        Route::get('/dashboard/reinvest','reinvest')->name('user.reinvest');
        Route::post('/dashboard/reinvest','store_invest');
        Route::get('/dashboard/palns','plans')->name('user.plans');
        Route::get('/dashboard/transaction','transaction')->name('user.transaction');
        Route::post('/dashboard/transaction','store_transaction');
        Route::get('/dashboard/invested','invested')->name('user.invested');
        Route::get('/dashboard/info','info')->name('user.info');
        Route::post('/dashboard/logout','logout')->name("logout");
    });
});

 
# Admin Dashboard

Route::get("/admin/login",[AdminController::class,"login"])->name("admin.login");
Route::post("/admin/login",[AdminController::class,"admin_login"]);
<<<<<<< HEAD

Route::middleware('admin')->group(function(){
    Route::get("/admin/dashboard",[AdminController::class,"index"])->name("admin.dashboard");
    Route::get("/admin/approve",[AdminController::class,"approve"])->name("admin.approve");
    Route::get("/admin/approved/{approval}",[AdminController::class,"approved"])->name("approved");
    Route::get("/admin/deny/{approval}",[AdminController::class,"deny"])->name("deny");
    Route::get("/admin/package/",[AdminController::class,"package"])->name("admin.package");
    Route::get("/admin/product/",[AdminController::class,"product"])->name("admin.product");
    Route::post("/admin/product/",[AdminController::class,"store_product"])->name("admin.product");
    Route::post("/admin/package/create",[AdminController::class,"create_package"])->name("admin.create_package");
    Route::get("admin/logout",[AdminController::class,'logout'])->name('admin.logout');
});

Route::get("/admin/register",[AdminController::class,"register"])->name("admin.register");
Route::post("/admin/register",[AdminController::class,"register_admin"]);
=======
Route::get("/admin/approve",[AdminController::class,"approve"])->name("admin.approve");
Route::get("/admin/approved/{approval}",[AdminController::class,"approved"])->name("approved");
Route::get("/admin/package/",[AdminController::class,"package"])->name("admin.package");
Route::get("/admin/product/",[AdminController::class,"product"])->name("admin.product");
Route::post("/admin/product/",[AdminController::class,"store_product"])->name("admin.product");
Route::post("/admin/package/create",[AdminController::class,"create_package"])->name("admin.create_package");
Route::get("/admin/register",[AdminController::class,"register"])->name("admin.register")->middleware('admin');
Route::post("/admin/register",[AdminController::class,"register_admin"]);
>>>>>>> 390e40a8d8ed5e53f46cde90f3535c864b298bcd
