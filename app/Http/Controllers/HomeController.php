<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Landing;
use App\Models\Ourfeature;
use App\Models\Ourworks;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $landings =  Landing::all();
        $abouts = About::all();
        $ourfeatures = Ourfeature::all();
        // dd($landings->toArray());

        return view('home.index', compact(
            'landings',
            'abouts',
            'ourfeatures',
        ));
    }

    public function about()
    {
        $abouts = About::all();
        return view('home.about', compact(
            'abouts',
        ));
    }

    public function services()
    {
        return view('home.service');
    }

    public function ourwork()
    {
        $ourworks = Ourworks::all();
        return view('home.ourwork', compact(
            'ourworks',
        ));
    }

    public function ourworkDetail($id)
    {
        $ourworks = Ourworks::findOrFail($id);

        return view('home.ourwork-detail', compact('ourworks'));
    }

    public function event()
    {
        return view('home.event');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function tes()
    {
        return view('dashboard');
    }
}
