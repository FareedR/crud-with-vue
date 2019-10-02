<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/books','BookController@indexBook');
Route::post('/store-book','BookController@storeBook');
Route::get('/edit-book/{id}','BookController@editBook');
Route::post('/update-book/{id}','BookController@updateBook');
Route::delete('/delete-book/{id}','BookController@deleteBook');