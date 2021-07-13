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

Route::get('/home', function () {
    $comics= config("comics"); 

    return view('home', 
    [
        'comics' => $comics
    ]
);
});

Route::get('/movies', function () {    
    return view('movies');
});

Route::get('/all-comics', function () {
    $comics= config("comics"); 

    return view('all-comics', 
    [
        'comics' => $comics
    ]
);
});