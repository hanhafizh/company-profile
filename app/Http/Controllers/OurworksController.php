<?php

namespace App\Http\Controllers;

use App\Models\Ourworks;
use Illuminate\Http\Request;

class OurworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourworks = Ourworks::all();
        // dd($ourworks);

        return view('dashboard.ourworks.index', compact('ourworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ourworks.create');
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
            $destinationPath = 'image/ourworks/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = $imageName;
        } else {
            return redirect()->back()->with('error', 'Gambar wajib diunggah!');
        }

        Ourworks::create($input);

        return redirect()->route('ourworks.index')->with('success', 'Data berhasil disimpan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ourworks  $ourwork
     * @return \Illuminate\Http\Response
     */
    public function show(Ourworks $ourwork)
    {
        return view('dashboard.ourworks.show', compact('ourwork'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ourworks  $ourwork
     * @return \Illuminate\Http\Response
     */
    public function edit(Ourworks $ourwork)
    {
        return view('dashboard.ourworks.edit', compact('ourwork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ourworks  $ourwork
     * @return \Illuminate\Http\Response
     */ public function update(Request $request, Ourworks $ourwork)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048', // Tambahkan jenis dan ukuran gambar
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/ourworks/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);

            // Hapus gambar lama jika ada
            if ($ourwork->image && file_exists(public_path('image/ourworks/' . $ourwork->image))) {
                unlink(public_path('image/ourworks/' . $ourwork->image));
            }

            $input['image'] = $imageName;
        }

        $ourwork->update($input);

        return redirect()->route('ourworks.index')->with('success', 'Data berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ourworks  $ourwork
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ourworks $ourwork)
    {
        // Hapus file gambar jika ada
        if ($ourwork->image && file_exists(public_path('image/ourworks/' . $ourwork->image))) {
            unlink(public_path('image/ourworks/' . $ourwork->image));
        }

        $ourwork->delete();

        return redirect()->route('ourworks.index')->with('success', 'Data berhasil dihapus!');
    }
}
