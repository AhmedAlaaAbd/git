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

    $name = "Ahmed";
    define("ROOT", 123);
    echo ROOT;
    $i = 8;
    return view('welcome', compact("name", "i"));
});

Route::get('/admin', function () {

    return view('welcome');
});
