<?php

namespace App\Http\Controllers;

use App\Models\Photogroup;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userName = auth()->user()->name ?? 'Guest';
        $photogroup = PhotoGroup::all();

        return view('dashboard.index', compact('photogroup'))->with('userName', $userName,);
    }

    public function organization()
    {
        $userName = auth()->user()->name ?? 'Guest';
        return view('dashboard.organizations.index')->with('userName', $userName);
    }
}
