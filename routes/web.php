<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/greeting', function () {
    return 'Hello World';
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/users', 'UserController@index');
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/users/{id}', 'UserController@show');
});
