<?php

use App\Http\Controllers\FavoritesController;
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
Route::get('/success', function () {
    return view('Home.thanks');
})->name('suc');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/signup', [SignUpController::class, 'insertSignUp'])->name('Form.SignUp');
Route::post('/Home', [SignUpController::class, 'storeSignUp'])->name('Form.StoreSignUp');
Route::post('/HOme', [SignUpController::class, 'checkLogin'])->name('Form.Login');

Route::group(['middleware' => ['authCheck']], function () {
    Route::get('/hello', [SignUpController::class, 'hello']);

    Route::post('/fav', [FavoritesController::class, 'storeFav'])->name('Home.Fav');
    Route::get('/favshow', [FavoritesController::class, 'showFav'])->name('Fav.show');
    Route::delete('/favorites/{id}', [FavoritesController::class, 'removeFavorite'])->name('removeFavorite');

});

//checkout
//Route::get('/checkout', [ProductController::class, 'showCheckoutPage'])->name('Form.Checkout');
Route::post('/checkoutProduct', [ProductController::class, 'checkoutProduct'])->name('Form.CheckoutProduct');
//img product
// Route::get('/banner', [ProductController::class, 'bannerForm'])->name('Form.Banner');
Route::post('/bannerSave', [ProductController::class, 'saveBannerData'])->name('Form.BannerSave');

Route::get('/banners/page', [ProductController::class, 'showPage'])->name('banners.page');
Route::get('/banners1/page', [ProductController::class, 'showPage1'])->name('banners1.page');

// Route::get('/cart', [HomeController::class, 'cart'])->name('Home.Cart');
Route::post('/session', [StripeController::class, 'session'])->name('stripe.session');

Route::get('/admin', [ProductController::class, 'showOrdersPage'])->name('orders');
Route::get('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');
Route::get('/inventory', [ProductController::class, 'inventory'])->name('inventory');
Route::get('/analytics', [ProductController::class, 'analytics'])->name('analytics');
Route::post('/productStore', [ProductController::class, 'productStore'])->name('Store');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/showcartitems', [ProductController::class, 'showcartitems'])->name('showcartitems');

Route::post('/bannertocart', [ProductController::class, 'store'])->name('cart.store');
Route::post('/bannertocart1', [ProductController::class, 'store1'])->name('cart1.store');

Route::get('/cart', [ProductController::class, 'cart'])->name('cart');

Route::post('/checkout', [ProductController::class, 'cartToCheckout'])->name('checkout.index');
Route::delete('/remove-product/{randomNumber}', [ProductController::class, 'removeProduct']);

Route::get('/catagorybanner', [ProductController::class, 'showBanner'])->name('Catagory.Banners');
Route::get('/catagoryhome', [ProductController::class, 'showHome'])->name('Catagory.Home');
Route::get('/catagorymen', [ProductController::class, 'showMen'])->name('Catagory.Men');
Route::get('/catagorywomen', [ProductController::class, 'showWomen'])->name('Catagory.Women');
Route::get('/catagorystat', [ProductController::class, 'showStat'])->name('Catagory.stat');
Route::get('/catagoryother', [ProductController::class, 'showOther'])->name('Catagory.Other');

