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
    public function index(): View
    {

        $chart = app()->chartjs
                    ->name('PieChart')
                    ->type('pie')
                    ->size(['width' => 400, 'height' => 200])
                    ->labels(['label x', 'label y'])
                           ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                'data' => [69, 59]
            ]
        ])
        ->options([]);

        return view('admin.index', [
            'total_dukungan' => Ktp::count(),
            'timses' => Role::findByName('timses')->users,
            'chart' => $chart
        ]);
    }

    public function getKpiByUsername(string $username)
    {
        return view('admin.kpi-timses', [
            'user' => User::where('username', '=', $username)->firstOrFail(['id', 'name'])
        ]);
    }
}
