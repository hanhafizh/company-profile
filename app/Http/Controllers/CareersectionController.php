<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Careerlist;
use Illuminate\Http\Request;


class CareersectionController extends Controller
{
    public function index()
    {
        $careers = Career::all();
        $careerslist = Careerlist::all();

        return view('dashboard.careersection.index', compact('careers', 'careerslist'));
    }
}
