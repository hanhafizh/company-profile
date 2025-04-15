<?php

namespace App\Http\Controllers;

use App\Models\Careerlist;
use Illuminate\Http\Request;

class CareerlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careerlists = Careerlist::all();

        return view('dashboard.careersection.index', compact('careerlists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.careersection.careerlist.create');
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
            'title_career' => 'required',
            'description_career' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'category' => 'required',
            'job_type' => 'required',
            'requirements' => 'required',
            'responsibilities' => 'required',
            'deadline' => 'required|date',
        ]);

        $input = $request->all();

        Careerlist::create($input);

        return redirect()->route('careersection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Careerlist  $careerlist
     * @return \Illuminate\Http\Response
     */
    public function show(Careerlist $careerlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Careerlist  $careerlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Careerlist $careerlist)
    {
        return view('dashboard.careersection.careerlist.edit', compact('careerlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Careerlist  $careerlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Careerlist $careerlist)
    {
        $request->validate([
            'title_career' => 'required',
            'description_career' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'category' => 'required',
            'job_type' => 'required',
            'requirements' => 'required',
            'responsibilities' => 'required',
            'deadline' => 'required|date',
        ]);

        $input = $request->all();

        $careerlist->update($input);

        return redirect()->route('careersection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Careerlist  $careerlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Careerlist $careerlist)
    {
        $careerlist->delete();

        return redirect()->route('careersection.index')->with('success', 'Data berhasil dihapus!');
    }
}
