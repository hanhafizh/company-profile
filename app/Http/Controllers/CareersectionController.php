<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;


class CareersectionController extends Controller
{
    public function index()
    {
        $careers = Career::all();

        return view('dashboard.careersection.index', compact('careers'));
    }
}
