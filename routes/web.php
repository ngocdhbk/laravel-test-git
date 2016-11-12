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

Route::get('/test', function () {
    return "Hello world";
});

Route::get('/test2/{ten}', function ($ten) {
    return $ten;
});

Route::get('/test3/{ten}', function ($ten) {
    return $ten;
});