<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/', function () {
    return view('Layout.base');
});
/*Routes des produits*/
Route::get('/boutique', 'ProductController@index')->name('Layout.base');
Route::get('/boutique/produit', 'ProductController@store')->name('include.store');
Route::get('/boutique/{slug}', 'ProductController@show')->name('include.show');
Route::get('/search', 'ProductController@search')->name('include.search');

/*Routes des paniers*/
Route::group(['middleware' => ['auth']], function () {
    Route::get('/panier', 'CartController@index')->name('cart.index');
    Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
    Route::put('/panier/{rowId}', 'CartController@update')->name('cart.update');
    Route::delete('/panier/{rowId}', 'CartController@destroy')->name('cart.destroy');
    Route::post('/coupon', 'CartController@storeCoupon')->name('cart.store.coupon');
    Route::delete('/coupon', 'CartController@destroyCoupon')->name('cart.destroy.coupon');

});


/*Routes de payement*/
Route::group(['middleware' => ['auth']], function () {
    Route::get('/paiement', 'CheckoutController@index')->name('checkout.index');
    Route::post('/paiement', 'CheckoutController@store')->name('checkout.store');
    Route::get('/merci', 'CheckoutController@thankyou')->name('checkout.thankyou');
    Route::get('/merci/telecharger', 'CheckoutController@getPost')->name('checkout.download');



});


Route::group(['prefix' => 'voyager'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

