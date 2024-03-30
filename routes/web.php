<?php

use App\Models\Ktp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\{Timses\DashboardController as TimsesController, Admin\DashboardController as AdminController};
use Spatie\Permission\Models\Role;

//ADMIN ROUTE
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'index')->name('admin.dashboard');
        Route::get('dashboard/kpi-timses/{user}', 'getKpiByUsername')->name('kpi-timses');
    });

    //Operasional Page
    Route::get('operasional', fn() => view('admin.operasional'))->name('admin.operasional');
    // Grafik Kinerja
    Route::get('grafik-kinerja', fn()=> view('admin.grafik-kinerja'))->name('admin.grafik-kinerja');
    // KTP pendukung
    Route::get('kpi-ktp-pendukung', fn()=> view('admin.kpi-ktp-pendukung'))->name('admin.kpi-ktp-pendukung');
    // KTP pendukung
    Route::get('kpi-operasional', fn()=> view('admin.kpi-operasional'))->name('admin.kpi-operasional');
    // KTP pendukung
    Route::get('kpi-kendala', fn()=> view('admin.kpi-kendala'))->name('admin.kpi-kendala');
    // KTP pendukung
    Route::get('kpi-permintaan-masyarakat', fn()=> view('admin.kpi-permintaan-masyarakat'))->name('admin.kpi-permintaan-masyarakat');
});


// USER ROUTE
Route::prefix('timses')->middleware(['auth', 'role:timses'])->group(function () {
    Route::controller(TimsesController::class)->group(function () {
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

