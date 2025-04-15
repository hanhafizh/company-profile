<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CareersectionController extends Controller
{
    public function index()
    {

        return view('dashboard.careersection.index');
    }
}
