<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersectionController extends Controller
{
    public function index()
    {
        $partners = Partner::all();

        return view('dashboard.partnersection.index', compact('partners'));
    }
}
