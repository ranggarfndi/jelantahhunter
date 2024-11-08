<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/penjemputan', function () {
    return view('penjemputan');
});

Route::get('/hadiah', function () {
    return view('hadiah');
});

Route::get('/profil', function () {
    return view('profil');
});

