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
Route::get('/v1/place', 'MobileapiController@getPlace');
Route::get('/v1/placedata', 'MobileapiController@getPlacebyid');
Route::get('/v1/dj', 'MobileapiController@getDJ');
Route::get('/v1/register', 'MobileapiController@register');
Route::get('/v1/login', 'MobileapiController@login');
Route::get('/v1/suggest', 'MobileapiController@getSuggestion');

Route::get('/v1/filter', 'MobileapiController@getFilter');
Route::get('/v1/category', 'MobileapiController@getCategory');
Route::get('/v1/nearby', 'MobileapiController@getNearby');
Route::get('/v1/search', 'MobileapiController@getSearch');

Route::get('/v1/searchevent', 'MobileapiController@getSearchEvent');