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
    //return view('welcome');
    return view('medicare.index');
});


Route::get('/test', function () {
    //return view('welcome');
    return view('medicare.test.test');
});




Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/dashboard', function () {
    return view('medicare.dashboard.index');
});

Route::get('/product', 'ProductController@index');


