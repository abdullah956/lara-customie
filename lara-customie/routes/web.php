<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'index'])->name('');
Route::get('/signup',[SignUpController::class,'insertSignUp'])->name('Form.SignUp');
Route::post('/Home',[SignUpController::class,'storeSignUp'])->name('Form.StoreSignUp');
Route::post('/HOme',[SignUpController::class,'checkLogin'])->name('Form.Login');

Route::group(['middleware'=> ['authCheck']], function () {
    Route::get('/hello',[SignUpController::class,'hello']);
});

//checkout
Route::get('/checkout',[ProductController::class,'checkoutPage'])->name('Form.Checkout');
Route::post('/checkoutProduct',[ProductController::class,'checkoutProduct'])->name('Form.CheckoutProduct');
//img product
Route::get('/banner',[ProductController::class,'bannerForm'])->name('Form.Banner');
Route::post('/bannerSave',[ProductController::class,'saveBannerData'])->name('Form.BannerSave');