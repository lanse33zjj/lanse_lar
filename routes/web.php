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
//    return view('welcome');
    return "<p style='margin-top: 22%;text-align: center'>PHP是世界上最好的语言<p>";
});
Route::get('/a', function () {
    return view('welcome');
//    return "<p style='margin-top: 22%;text-align: center'>PHP是世界上最好的语言<p>";
});
Route::get('/b', function () {
    return 'wel';
//    return "<p style='margin-top: 22%;text-align: center'>PHP是世界上最好的语言<p>";
});