<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'App\Http\Controllers\AuthController@signUp');
Route::get('login', 'App\Http\Controllers\AuthController@auth');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user','App\Http\Controllers\AuthController@getAuthUser');
    Route::get('orders','App\Http\Controllers\OrdersController@list');
    Route::get('orders/{id}','App\Http\Controllers\OrdersController@show');
});
