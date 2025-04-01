<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;


class AboutsectionController extends Controller
{
    public function index()
    {


        $abouts = About::all();


        return view('dashboard.aboutsection.index', compact(

            'abouts',
        ));
    }
}
