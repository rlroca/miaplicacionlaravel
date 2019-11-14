<?php

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
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/bodoquito', function () {
    return view('bodoque');
});

Route::get('/ranita', function () {
    return view('ranita');
});

Route::get('/pollito', function () {
    return view('pollito');
});

Route::get('/mosquito', function () {
    return view('mosquito');
});

Route::get('/vaquita', function () {
    return view('vaquita');
});

Route::get('/pecesito', function () {
    return view('pecesito');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
