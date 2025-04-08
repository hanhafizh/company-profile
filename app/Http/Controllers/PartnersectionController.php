<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersectionController extends Controller
{
    public function index()
    {

        return view('dashboard.partnersection.index');
    }
}
