<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


//ADMIN ROUTE

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-home', function () {
        return view('admin-home');
    })->name('admin-home');
    
    Route::get('/kpi-timses', function () {
        return view('kpi');
    })->name('kpi-timses');
});


// USER ROUTE
Route::middleware(['auth', 'role:timses'])->group(function () {
    Route::get('/dashboard', function () {
        return view('user-home');
    })->name('dashboard');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('login.store');
});

Route::get('logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
})->middleware(['auth'])->name('logout');; 
