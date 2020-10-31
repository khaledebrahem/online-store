<?php

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






Route::group(['prefix'=>'dashboard','as'=>'dashboard.','namespace'=>'Dashboard','middleware'=>'admin'],function (){

    Route::get('/','HomeController@Statistics');
    Route::resource('users','UserController');
    Route::resource('categories','CategoryController');
    Route::resource('products','productController');
    Route::resource('carts','cartController');

});



Route::get('loginn','Auth\loginController@loginForm')->middleware('guest')->name('login');
Route::get('logout','Auth\loginController@logout')->name('logout');
Route::get('register','Auth\loginController@registerForm')->middleware('guest')->name('register');
Route::post('register','Auth\loginController@registerPost')->name('registerPost');
Route::post('loginn','Auth\loginController@login')->name('loginPost');


Route::group(['as'=>'site.','namespace'=>'Site'],function (){
    Route::get('pay-page','CartController@cartConfirmation')->name('cartConfirmation');

    Route::get('cart','CartController@showCart')->name('showCart');
    Route::post('cart','CartController@cartStore')->name('cartStore');
    Route::get('/','HomeController@index');
    Route::get('/{id}','HomeController@singlePage')->name('singlePage');
    Route::get('add-to-cart/{id}','CartController@addToCart')->name('addToCart');
    Route::get('decrease-cart-item-qty/{id}','CartController@decreaseQty')->name('decreaseQty');


});
