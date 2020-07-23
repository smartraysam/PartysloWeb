<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

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
    if (!Session::has('theme')) {
        Session::put('theme',  "stylelight.css");
    }
    return view('index');
});

Route::get('/settheme',  'HomeController@settheme');

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


Route::get('/add_new_event', function () {
    return view('add_new_event');
});

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