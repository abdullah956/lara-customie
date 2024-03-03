<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\StripeController;

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
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/signup', [SignUpController::class, 'insertSignUp'])->name('Form.SignUp');
Route::post('/Home', [SignUpController::class, 'storeSignUp'])->name('Form.StoreSignUp');
Route::post('/HOme', [SignUpController::class, 'checkLogin'])->name('Form.Login');

Route::group(['middleware' => ['authCheck']], function () {
    Route::get('/hello', [SignUpController::class, 'hello']);
});

//checkout
Route::get('/checkout', [ProductController::class, 'showCheckoutPage'])->name('Form.Checkout');
Route::post('/checkoutProduct', [ProductController::class, 'checkoutProduct'])->name('Form.CheckoutProduct');
//img product
Route::get('/banner', [ProductController::class, 'bannerForm'])->name('Form.Banner');
Route::post('/bannerSave', [ProductController::class, 'saveBannerData'])->name('Form.BannerSave');



Route::get('/catagoryhome', [HomeController::class, 'catagoryHome'])->name('Catagory.Home');

Route::get('/cart', [HomeController::class, 'cart'])->name('Home.Cart');
Route::post('/session', [StripeController::class, 'session'])->name('stripe.session');

Route::get('/admin', [ProductController::class, 'showOrdersPage'])->name('orders');
Route::get('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');
Route::get('/inventory', [ProductController::class, 'inventory'])->name('inventory');
Route::get('/analytics', [ProductController::class, 'analytics'])->name('analytics');
Route::post('/productStore', [ProductController::class, 'productStore'])->name('Store');