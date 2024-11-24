<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userName = auth()->user()->name;   
        return view('dashboard.index', compact('userName'));

    }

    public function organization()
    {
        return view('dashboard.organizations.index');
    }

    public function event()
    {
        return view('dashboard.events.index');
    }
}
