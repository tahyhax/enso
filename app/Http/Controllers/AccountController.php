<?php

namespace App\Http\Controllers;

use LaravelEnso\Charts\app\Classes\BarChart;
use LaravelEnso\Charts\app\Classes\BubbleChart;
use LaravelEnso\Charts\app\Classes\LineChart;
use LaravelEnso\Charts\app\Classes\PieChart;
use LaravelEnso\Charts\app\Classes\RadarChart;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.index');
    }
}
