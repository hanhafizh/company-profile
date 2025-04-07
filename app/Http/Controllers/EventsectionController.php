<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class EventsectionController extends Controller
{
    public function index()
    {

        return view('dashboard.eventsection.index');
    }
}
