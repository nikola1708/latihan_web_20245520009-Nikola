<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('latihan/index');
});

Route::get('/latihan', function () {
    return view('latihan/latihan');
});

Route::get('/latihan_dua', function () {
    return view('latihan/latihan2');
});

Route::get('/home', function () {
    return view('latihan/home');
});