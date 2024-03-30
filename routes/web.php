<?php

use App\Models\Ktp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\{Timses\DashboardController as TimsesController, Admin\DashboardController as AdminController};

//ADMIN ROUTE
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'index')->name('admin.dashboard');
        Route::get('kpi-timses/{user}', 'getKpiByUsername')->name('kpi-timses');
    });

    //Operasional Page
    Route::get('operasional', fn() => view('admin.operasional'))->name('admin.operasional');
    // Grafik Kinerja
    Route::get('grafik-kinerja', function () {

        $chartjs = app()->chartjs
         ->name('barChartTest')
         ->type('bar')
         ->size(['width' => 400, 'height' => 200])
         ->labels(['Label x', 'Label y'])
         ->datasets([
             [
                 "label" => "My First dataset",
                 'backgroundColor' => ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [69, 59]
             ],
             [
                 "label" => "My First dataset",
                 'backgroundColor' => ['rgba(255, 99, 132, 0.3)', 'rgba(54, 162, 235, 0.3)'],
                 'data' => [65, 12]
             ]
         ])
         ->options([
            "scales" => [
                "y" => [
                    "beginAtZero" => true
                    ]
                ]
         ]);

        return view('admin.grafik-kinerja', [
            'chart' => $chartjs
        ]);
    })->name('admin.grafik-kinerja');
    // KTP pendukung
    Route::get('kpi-ktp-pendukung', function () {
        $ktp = Ktp::where('user_id', auth()->user()->id)->get(['name', 'nik', 'file']);
        return view('admin.kpi-ktp-pendukung', compact('ktp') );
    })->name('admin.kpi-ktp-pendukung');
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

    //OPERASIONAL
    Route::get('operasional', fn() => view('timses.operasional'))->name('timses.operasional');
    //KENDALA
    Route::get('kendala', fn() => view('timses.kendala'))->name('timses.kendala');
    //PERMINTAAN MASYARAKAT
    Route::get('permintaan', fn() => view('timses.permintaan'))->name('timses.permintaan');

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

