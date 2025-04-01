<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Carousellist;
use App\Models\Directors;
use App\Models\Faq;
use App\Models\Featurelist;
use App\Models\Landing;
use App\Models\Ourfeature;
use App\Models\Ourworks;
use App\Models\Photogroup;
use App\Models\Visionmission;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $landings =  Landing::all();
        $abouts = About::all();
        $ourfeatures = Ourfeature::all();
        $featurelists = Featurelist::all();
        $faqs = Faq::all();
        $carousels = Carousel::all();
        $carousellists = Carousellist::all();
        // dd($landings->toArray());

        return view('home.index', compact(
            'landings',
            'abouts',
            'ourfeatures',
            'featurelists',
            'faqs',
            'carousels',
            'carousellists'
        ));
    }

    public function about()
    {
        $abouts = About::all();
        $ourfeatures = Ourfeature::all();
        $featurelists = Featurelist::all();
        $photogroups = Photogroup::all();
        $visionmissions = Visionmission::all();
        $directors = Directors::all();

        return view('home.about', compact(
            'abouts',
            'ourfeatures',
            'featurelists',
            'photogroups',
            'visionmissions',
            'directors'
        ));
    }

    public function services()
    {
        $faqs = Faq::all();
        return view('home.service', compact(
            'faqs'
        ));
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
