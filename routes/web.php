<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('index');
    

Route::get('/about', function () {
    return view('about');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/contact_us', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/privacy_policy', function () {
    return view('privacy_policy');
});

Route::get('/add_new_event', 'EventController@create')->name('add_event')->middleware('auth');

Route::get('/autocomplete', 'EventController@autocomplete')->name('autocomplete');

Route::get('/categorysearch', 'EventController@categorysearchcomplete');


Route::get('/search', function () {
    return view('search_view');
});

Route::get('/term_conditions', function () {
    return view('term_condition');
});

Route::get('/dashboard', function () {
    return view('user.dashbaord');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/event', 'HomeController@viewEvent')->name('event');

Route::get('/events', 'EventController@index');

Route::get('/filterevents', 'EventController@eventfilter');

Route::post('/save_event', 'EventController@store')->middleware('auth');


Route::get('/buyticket', 'HomeController@buyTicket')->name('buyticket');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::get('/confirmpay', 'HomeController@confirmPay')->name('confirmPay');

Route::get('/user', 'HomeController@getEventOwner')->name('user');

Route::get('/settheme', 'SettingsController@settheme');