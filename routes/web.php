<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::controller(HomeController::class)->as('home.')->group(function ()
{
    Route::get('/', 'index')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::get('/contact', 'contact')->name('contact')->middleware('verified');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/order-success', 'orderSuccess')->name('order-success');
    Route::get('/new-products', 'newProducts')->name('newProducts');
});
Route::controller(PageController::class)->as('page.')->group(function(){
    Route::get('delivery', 'delivery')->name('delivery');
    Route::get('requisites', 'requisites')->name('requisites');
    Route::get('payment', 'payment')->name('payment');
    Route::get('pickup', 'pickup')->name('pickup');
    Route::get('rules', 'rules')->name('rules');
    Route::get('return', 'return')->name('return');
    Route::get('service','service')->name('service');
    Route::get('installation', 'installation')->name('installation');
    Route::get('warranty','warranty')->name('warranty');
    Route::get('support','support')->name('support');
});
