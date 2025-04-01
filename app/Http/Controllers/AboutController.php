<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        // dd($about);

        return view('dashboard.aboutsection.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.aboutsection.about.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Tambahkan jenis dan ukuran gambar
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/about/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = $imageName;
        } else {
            return redirect()->back()->with('error', 'Gambar wajib diunggah!');
        }

        About::create($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('dashboard.aboutsection.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048', // Tambahkan jenis dan ukuran gambar
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/about/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);

            // Hapus gambar lama jika ada
            if ($about->image && file_exists(public_path('image/about/' . $about->image))) {
                unlink(public_path('image/about/' . $about->image));
            }

            $input['image'] = $imageName;
        }

        $about->update($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        // Hapus file gambar jika ada
        if ($about->image && file_exists(public_path('image/about/' . $about->image))) {
            unlink(public_path('image/about/' . $about->image));
        }

        $about->delete();

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil dihapus!');
    }
}
