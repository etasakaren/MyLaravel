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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/messages', 'App\Http\Controllers\MessagesController@getMessages');
Route::get('/', 'App\Http\Controllers\PagesController@getHome');
Route::get('/contact', 'App\Http\Controllers\PagesController@getContact');
Route::get('/about', 'App\Http\Controllers\PagesController@getAbout');
Route::post('/contact/submit', 'App\Http\Controllers\MessagesController@submit');