<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");
Route::get('/login', function () {
    return view('auth.login');
})->name("login");
Route::get('/password-request', function () {
    return view('auth.login');
})->name("password.request");
Route::get('/register', function () {
    return view('auth.register');
})->name("register");

Route::post('/login', function () {
    return view('auth.login');
})->name("login");