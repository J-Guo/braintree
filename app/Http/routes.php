<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//show default braintree drop-in UI
Route::get('pay','HomeController@showPayment');
//show braintree drop-in UI with customized fields
Route::get('pay2','HomeController@showPayment2');
//show all transactions list
Route::get('transactions','HomeController@showTransactionsList');
//show transaction detail by id
Route::get('transactions/{id}','HomeController@showTransaction');

//braintree checkout function
Route::post('checkout','HomeController@checkout');
Route::post('checkout2','HomeController@checkout2');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
