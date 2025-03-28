<?php

namespace App\Http\Controllers;

use App\Models\Carousellist;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Faq;
use App\Models\Featurelist;
use App\Models\Landing;
use App\Models\Ourfeature;
use App\Models\Carousel;

class HomesectionController extends Controller
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

        return view('dashboard.homesection.index', compact(
            'landings',
            'abouts',
            'ourfeatures',
            'featurelists',
            'faqs',
            'carousels',
            'carousellists'
        ));
    }
}
