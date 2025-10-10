<?php

namespace App\Http\Controllers;

use
App\Http\Controllers\Controller;
use
Illuminate\Http\Request;

use App\Models\Station;
use App\Models\Sensor_data;
use App\Models\sensors;

class DashboardController extends Controller
{
    public function index()
    {
    //Metricas basicas
    $stations = Station::with('city')->orderBy('name')->get();
    $sensorsOnline = sensors::where('status', true)->count();
    $lastSync = Sensor_data::max('created_at');
    $dbDriver = strtoupper(config('database.defaul'));

return view('index', compact('stations','sensorsOnline', 'lastSync', 'dbDriver'));
    }
}
