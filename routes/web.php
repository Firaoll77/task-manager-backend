<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use illuminate\Support\Facades\Route;

Route::get('/Home.html', function () {
    return view('Home');
});


use illuminate\Support\Facades\Route;

Route::get('/newHome.html', function () {
    return view('Home');
});
