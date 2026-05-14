<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return "Ini adalah halaman About";
});

Route::get('/user/{name}', function ($name)
{ return "Halo, $name";

});