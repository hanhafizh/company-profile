<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;




class ServicesectionController extends Controller
{
    public function index()
    {



        return view('dashboard.servicesection.index');
    }
}
