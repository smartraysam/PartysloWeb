<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/contact', function () {
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
    return view('term_conditions');
});


Route::get('/dashboard', function () {
    return view('user.dashbaord');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');