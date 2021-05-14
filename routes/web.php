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


// Route::middleware('auth')->group(function () {

// });

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/create', 'ProductController@create');

    Route::post('/store', 'ProductController@store');

    Route::get('/edit/{id}','ProductController@edit');

    Route::post('/update/{id}', 'ProductController@update');

    Route::get('/delete/{id}','ProductController@delete');

    Route::post('/delete_img','ProductController@delete_img');
});


Route::prefix('admin_type')->group(function () {
    Route::get('/', 'TypeController@index');

    Route::get('/create', 'TypeController@create');

    Route::post('/store', 'TypeController@store');

    Route::get('/edit/{id}','TypeController@edit');

    Route::post('/update/{id}', 'TypeController@update');

    Route::get('/delete/{id}','TypeController@delete');
});





