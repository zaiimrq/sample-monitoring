<?php

namespace App\Http\Controllers\Admin;

use App\Charts\DukunganChart;
use App\Models\Ktp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index(DukunganChart $dukunganChart): View
    {
        return view('admin.index', [
            'total_dukungan' => Ktp::count(),
            'timses' => Role::findByName('timses')->users,
            'chart' => $dukunganChart->build()
        ]);
    }

    public function getKpiByUsername(string $username)
    {
        return view('admin.kpi-timses', [
            'user' => User::where('username', '=', $username)->firstOrFail(['id', 'name'])
        ]);
    }
}
