<?php

namespace App\Http\Controllers;

use App\Models\Directors;
use Illuminate\Http\Request;

class DirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Directors::all();

        return view('dashboard.aboutsection.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.aboutsection.directors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        Directors::create($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Directors  $directors
     * @return \Illuminate\Http\Response
     */
    public function show(Directors $directors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directors  $directors
     * @return \Illuminate\Http\Response
     */
    public function edit(Directors $director)
    {
        return view('dashboard.aboutsection.directors.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directors  $directors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directors $director)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        $director->update($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directors  $directors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directors $director)
    {
        $director->delete();

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil dihapus!');
    }
}
