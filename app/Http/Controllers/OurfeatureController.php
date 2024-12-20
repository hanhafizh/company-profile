<?php

namespace App\Http\Controllers;

use App\Models\Ourfeature;
use Illuminate\Http\Request;

class OurfeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourfeatures = Ourfeature::all();
        // dd($ourfeature);

        return view('dashboard.ourfeature.index', compact('ourfeatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ourfeature.create');
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
            'description' => 'required',
        ]);

        $input = $request->all();

        Ourfeature::create($input);

        return redirect()->route('ourfeature.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ourfeature  $ourfeature
     * @return \Illuminate\Http\Response
     */
    public function show(Ourfeature $ourfeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ourfeature  $ourfeature
     * @return \Illuminate\Http\Response
     */
    public function edit(Ourfeature $ourfeature)
    {
        return view('dashboard.ourfeature.edit', compact('ourfeature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ourfeature  $ourfeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ourfeature $ourfeature)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        $ourfeature->update($input);

        return redirect()->route('ourfeature.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ourfeature  $ourfeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ourfeature $ourfeature)
    {

        $ourfeature->delete();

        return redirect()->route('ourfeature.index')->with('success', 'Data berhasil dihapus!');
    }
}
