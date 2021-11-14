<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;    //この行を追加
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

// books用のAPIルーティング
Route::group(['middleware' => ['api']], function(){

  Route::resource('books', 'Api\BooksController', ['except' => ['create', 'edit'] ]);

});vv

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});