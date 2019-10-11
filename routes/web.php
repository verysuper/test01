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
    Route::get('chap211', function () {
        return view('vue_test.chap211');
    });
    Route::get('chap213', function () {
        return view('vue_test.chap213');
    });
    Route::get('chap214', function () {
        return view('vue_test.chap214');
    });
    Route::get('chap321', function () {
        return view('vue_test.chap321');
    });
    Route::get('chap322', function () {
        return view('vue_test.chap322');
    });
    Route::get('chap422', function () {
        return view('vue_test.chap422');
    });
    Route::get('chap511', function () {
        return view('vue_test.chap511');
    });
    Route::get('chap531', function () {
        return view('vue_test.chap531');
    });
    Route::get('chap532', function () {
        return view('vue_test.chap532');
    });
    Route::get('chap533', function () {
        return view('vue_test.chap533');
    });
    Route::get('chap541', function () {
        return view('vue_test.chap541');
    });
});
