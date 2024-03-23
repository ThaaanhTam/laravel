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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/view', function () {
    return view('view');
});
Route::get('/update', function () {
    return view('update');
});
Route::get('/index', function () {
    return view('index');
});
