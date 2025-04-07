<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Eventlist;

class EventsectionController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $eventlists = Eventlist::all();

        return view('dashboard.eventsection.index', compact('events', 'eventlists'));
    }
}
