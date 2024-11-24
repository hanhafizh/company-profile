<?php

namespace App\Http\Controllers;

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
        return view('home.ourwork');
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
