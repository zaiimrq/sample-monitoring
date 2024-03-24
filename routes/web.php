<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin-home', function () {
    return view('admin-home');
})->name('admin-home');

Route::get('/kpi-timses', function () {
    return view('kpi');
})->name('kpi-timses');
