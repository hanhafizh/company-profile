<?php

namespace App\Http\Controllers;

use App\Models\Ourworks;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
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
