<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class OrganizationController extends Controller
{
    /**
     * Display a listing of organizations.
     */
    public function index()
    {
        // $organizations = Event::all();
        $organizations = [];
        $userName = auth()->user()->name ?? 'Guest';
        return view('dashboard.organizations.index', compact('organizations'))->with('userName', $userName);
    }

    /**
     * Show the form for creating a new event.
     */
    public function create()
    {
        $organizations = 'Tambah Acara';
        $userName = auth()->user()->name ?? 'Guest';
        return view('dashboard.organizations.form', compact('organizations'))->with('userName', $userName);
    }

    /**
     * Store a newly created event in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        // Event::create($request->all());

        return redirect()->route('organizations.list')->with('success', 'Event created successfully!');
    }

    /**
     * Show the form for editing the specified event.
     */
    public function edit($id)
    {
        // $event = Event::findOrFail($id);
        return view('dashboard.organizations.form', compact('event'));
    }

    /**
     * Update the specified event in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        // $event = Event::findOrFail($id);
        // $event->update($request->all());

        return redirect()->route('organizations.list')->with('success', 'Event updated successfully!');
    }
}