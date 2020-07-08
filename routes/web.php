<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\SaveController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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

// Main Page
Route::get('/','HomeController@home')->name('home');
Route::get('/contact','HomeController@contact')->name('contact');

// Shop
Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.show');

// Cart
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
Route::post('/cart/{product}/save','CartController@save')->name('cart.save');
Route::get('/cart/reset','CartController@reset')->name('cart.reset'); // Utilisé uniquement pour le dev

// Save
Route::delete('/save/{product}','SaveController@destroy')->name('save.destroy');
Route::post('/save/{product}/cart','SaveController@store')->name('save.store');

//Payment
Route::get('/checkout','CheckoutController@checkout')->name('checkout.index');
Route::post('/checkout','CheckoutController@store')->name('checkout.store');
Route::get('/checkout/success','CheckoutController@success')->name('checkout.success');

// Coupons
Route::post('/coupon','CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');


// Orders
Route::get('/orders','HomeController@orders')->name('orders')->middleware('auth');

// Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Authentification
Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    Session()->flush();

    return redirect('/');
})->name('logout');
