<?php

namespace App\Http\Controllers;

use App\Models\Featurelist;
use Illuminate\Http\Request;

class FeaturelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featurelists = Featurelist::all();
        // dd($featurelist);

        return view('dashboard.homesection.index', compact('featurelists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.homesection.featurelist.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Tambahkan jenis dan ukuran gambar
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/featurelist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = $imageName;
        } else {
            return redirect()->back()->with('error', 'Gambar wajib diunggah!');
        }

        Featurelist::create($input);

        return redirect()->route('homesection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Featurelist  $featurelist
     * @return \Illuminate\Http\Response
     */
    public function show(Featurelist $featurelist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Featurelist  $featurelist
     * @return \Illuminate\Http\Response
     */
    public function edit(Featurelist $featurelist)
    {
        return view('dashboard.homesection.featurelist.edit', compact('featurelist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Featurelist  $featurelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Featurelist $featurelist)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048', // Tambahkan jenis dan ukuran gambar
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/featurelist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);

            // Hapus gambar lama jika ada
            if ($featurelist->image && file_exists(public_path('image/featurelist/' . $featurelist->image))) {
                unlink(public_path('image/featurelist/' . $featurelist->image));
            }

            $input['image'] = $imageName;
        }

        $featurelist->update($input);

        return redirect()->route('homesection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Featurelist  $featurelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Featurelist $featurelist)
    {
        // Hapus file gambar jika ada
        if ($featurelist->image && file_exists(public_path('image/featurelist/' . $featurelist->image))) {
            unlink(public_path('image/featurelist/' . $featurelist->image));
        }

        $featurelist->delete();

        return redirect()->route('homesection.index')->with('success', 'Data berhasil dihapus!');
    }
}
