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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/load_Djlist', 'ApiController@DJListsApI');

Route::post('/encrypt', 'DjlistController@encryptthis');

Route::post('/decrypt', 'DjlistController@decryptthis');

Route::post('/testdecrypt', 'DjlistController@testdecrypt');
Route::post('/testencrypt', 'DjlistController@testencrypt');
Route::post('/hex2base64', 'DjlistController@hexbase64');