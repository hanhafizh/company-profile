<?php

namespace App\Http\Controllers;

use App\Models\Partnerlist;
use Illuminate\Http\Request;

class PartnerlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnerlists = Partnerlist::all();

        return view('dashboard.partnersection.index', compact('partnerlists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.partnersection.partnerlist.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Tambahkan jenis dan ukuran gambar
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/partnerlist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = $imageName;
        } else {
            return redirect()->back()->with('error', 'Gambar wajib diunggah!');
        }

        Partnerlist::create($input);

        return redirect()->route('partnersection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partnerlist  $partnerlist
     * @return \Illuminate\Http\Response
     */
    public function show(Partnerlist $partnerlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partnerlist  $partnerlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Partnerlist $partnerlist)
    {
        return view('dashboard.partnersection.partnerlist.edit', compact('partnerlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partnerlist  $partnerlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partnerlist $partnerlist)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/partnerlist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);

            // Hapus gambar lama jika ada
            if ($partnerlist->image && file_exists(public_path('image/partnerlist/' . $partnerlist->image))) {
                unlink(public_path('image/partnerlist/' . $partnerlist->image));
            }

            $input['image'] = $imageName;
        }

        $partnerlist->update($input);

        return redirect()->route('partnersection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partnerlist  $partnerlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partnerlist $partnerlist)
    {
        // Hapus file gambar jika ada
        if ($partnerlist->image && file_exists(public_path('image/partnerlist/' . $partnerlist->image))) {
            unlink(public_path('image/partnerlist/' . $partnerlist->image));
        }

        $partnerlist->delete();

        return redirect()->route('partnersection.index')->with('success', 'Data berhasil dihapus!');
    }
}
