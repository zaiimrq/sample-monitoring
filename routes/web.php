<?php

use App\Models\Ktp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Timses\DashboardController;
use Spatie\Permission\Models\Role;

//ADMIN ROUTE

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        $total_dukungan = Ktp::count();
        return view('admin.index', compact('total_dukungan'));
    })->name('admin.dashboard');
    
    Route::get('/dashboard/kpi-timses', function () {
        return view('admin.kpi-timses');
    })->name('kpi-timses');
});


// USER ROUTE
Route::prefix('timses')->middleware(['auth', 'role:timses'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('timses.dashboard');
        Route::post('dashboard', 'store')->name('ktp.upload');
        Route::delete('dashboard', 'destroy')->name('ktp.destroy');
    });

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
})->middleware(['auth'])->name('logout');

