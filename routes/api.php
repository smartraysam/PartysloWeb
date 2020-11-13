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

Route::post('/v1/save_djlist', 'ApiController@DJListsApI');
Route::post('/v1/save_event', 'ApiController@FacebookEventAPI');

Route::get('/v1/events', 'MobileapiController@loadEvents');
Route::get('/v1/event', 'MobileapiController@getEvent');
Route::get('/v1/location', 'MobileapiController@getLocation');
Route::get('/v1/dj', 'MobileapiController@getDJ');
Route::get('/v1/register', 'MobileapiController@register');
Route::get('/v1/login', 'MobileapiController@login');