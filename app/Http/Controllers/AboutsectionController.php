<?php

namespace App\Http\Controllers;

use App\Models\Directors;
use App\Models\Photogroup;
use App\Models\Visionmission;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Directorslist;


class AboutsectionController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $photogroups = Photogroup::all();
        $visionmissions = Visionmission::all();
        $directors = Directors::all();
        $directorslist = Directorslist::all();

        return view('dashboard.aboutsection.index', compact(

            'abouts',
            'photogroups',
            'visionmissions',
            'directors',
            'directorslist',
        ));
    }
}
