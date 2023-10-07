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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/thrive', function () {
    return view('thrive');
});

Route::get('/lab', function () {
    return view('lab');
});

Route::get('/menu', function () {
    return view('layout.header-menu');
});