<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


<?php

use Illuminate\Support\Facades\Route;

Route::get('/Home.html', function () {
    return view('Home');
});
