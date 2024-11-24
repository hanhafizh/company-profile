<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function organization()
    {
        return view('dashboard.configuration.organization');
    }

    public function event()
    {
        return view('dashboard.configuration.event');
    }
}
