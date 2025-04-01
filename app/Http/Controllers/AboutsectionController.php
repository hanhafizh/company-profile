<?php

namespace App\Http\Controllers;

use App\Models\Photogroup;
use App\Models\Visionmission;
use Illuminate\Http\Request;
use App\Models\About;


class AboutsectionController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $photogroups = Photogroup::all();
        $visionmissions = Visionmission::all();

        return view('dashboard.aboutsection.index', compact(

            'abouts',
            'photogroups',
            'visionmissions',
        ));
    }
}
