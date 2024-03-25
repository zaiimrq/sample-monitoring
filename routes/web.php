<?php

use App\Models\Ktp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadKtpController;

//ADMIN ROUTE

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-home', function () {
        $total_dukungan = Ktp::count();
        return view('admin-home', compact('total_dukungan'));
    })->name('admin-home');
    
    Route::get('/kpi-timses', function () {
        return view('kpi');
    })->name('kpi-timses');
});


// USER ROUTE
Route::middleware(['auth', 'role:timses'])->group(function () {
    Route::get('/dashboard', function (Request $request) {
        $ktp = Ktp::where('user_id', '=', $request->user()->id)->get();
        return view('user-home', compact('ktp'));
    })->name('dashboard');

    Route::post('/dashboard', UploadKtpController::class)->name('ktp.upload');
    Route::delete('/dashboard', [UploadKtpController::class, 'destroy'])->name('ktp.destroy');
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
