<?php

namespace App\Http\Controllers;

use App\Models\Visionmission;
use Illuminate\Http\Request;

class VisionmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visionmissions = Visionmission::all();

        return view('dashboard.aboutsection.index', compact('visionmissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.aboutsection.vision-mission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'vision_title' => 'required',
            'vision_description' => 'required',
            'mission_title' => 'required',
            'mission_description' => 'required',
        ]);

        $input = $request->all();

        Visionmission::create($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visionmission  $visionmission
     * @return \Illuminate\Http\Response
     */
    public function show(Visionmission $visionmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visionmission  $visionmission
     * @return \Illuminate\Http\Response
     */
    public function edit(Visionmission $visionmission)
    {
        return view('dashboard.aboutsection.vision-mission.edit', compact('visionmission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visionmission  $visionmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visionmission $visionmission)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'vision_title' => 'required',
            'vision_description' => 'required',
            'mission_title' => 'required',
            'mission_description' => 'required',
        ]);

        $input = $request->all();

        $visionmission->update($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visionmission  $visionmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visionmission $visionmission)
    {
        $visionmission->delete();

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil dihapus!');
    }
}
