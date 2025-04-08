<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Partner::all();

        return view('dashboard.partnersection.index', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.partnersection.partner.create');
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

        Partner::create($input);

        return redirect()->route('partnersection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('dashboard.partnersection.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        $partner->update($input);

        return redirect()->route('partnersection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();

        return redirect()->route('partnersection.index')->with('success', 'Data berhasil dihapus!');
    }
}
