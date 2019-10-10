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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('vue')->group(function () {
    Route::get('chap122', function () {
        return view('vue_test.chap122');
    });
    Route::get('chap21', function () {
        return view('vue_test.chap21');
    });
    Route::get('chap213', function () {
        return view('vue_test.chap213');
    });
});
