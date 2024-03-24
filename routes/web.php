<?php

use Illuminate\Support\Facades\Route;


//ADMIN ROUTE
Route::get('/', function () {
    return view('index');
});

Route::get('/admin-home', function () {
    return view('admin-home');
})->name('admin-home');

Route::get('/kpi-timses', function () {
    return view('kpi');
})->name('kpi-timses');


// USER ROUTE
Route::get('/dashboard', function () {
    return view('user-home');
})->name('dashboard');
