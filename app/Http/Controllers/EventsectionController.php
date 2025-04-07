<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsectionController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('dashboard.eventsection.index', compact('events'));
    }
}
