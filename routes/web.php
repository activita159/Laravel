<?php

use GuzzleHttp\Middleware;
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



Route::get('/', 'ProductController@index');

Route::get('/details/{id}','ProductController@details');



//admin news  admin products


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::middleware('auth')->group(function () {

// });

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/create', 'ProductController@create');

    Route::post('/store', 'ProductController@store');

    Route::get('/edit/{id}','ProductController@edit');

    Route::post('/update/{id}', 'ProductController@update');

    Route::get('/delete/{id}','ProductController@delete');
});



