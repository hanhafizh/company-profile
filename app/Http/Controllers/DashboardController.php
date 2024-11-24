<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userName = auth()->user()->name ?? 'Guest';
        return view('dashboard.index')->with('userName', $userName);
    }

    public function organization()
    {
        $userName = auth()->user()->name ?? 'Guest';
        return view('dashboard.organizations.index')->with('userName', $userName);
    }
}
