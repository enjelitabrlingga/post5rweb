<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Ini adalah halaman about";
});

Route::get('/user/{nama}', function ($nama) {
    return "Halo, $nama";
});


//route tanpa parameter

Route::get('/about', function () {
    return 'About - Belajar Routing Laravel';
});

Route::get('/', function () {
    return ' Home - Praktikum Laravel 11';
});

//route dengan parameter

Route::get('/user/{name}', function ($name) {
    return "Selamat datang, $name 👋";
});

Route::get('/angkatan/{tahun}', function ($tahun) {
    return " Angkatan: $tahun - Fakultas Teknologi Informasi";
});

Route::get('/kategori/{jenis}', function ($jenis) {
    return " Kategori Produk: $jenis";
});