<?php

namespace App\Http\Controllers;

use App\Models\Certificatelist;
use Illuminate\Http\Request;

class CertificatelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificatelist = Certificatelist::all();

        return view('dashboard.aboutsection.index', compact('certificatelist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.aboutsection.certificatelist.create');
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
            $destinationPath = 'image/certificatelist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = $imageName;
        } else {
            return redirect()->back()->with('error', 'Gambar wajib diunggah!');
        }

        Certificatelist::create($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificatelist  $certificatelist
     * @return \Illuminate\Http\Response
     */
    public function show(Certificatelist $certificatelist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificatelist  $certificatelist
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificatelist $certificatelist)
    {
        return view('dashboard.aboutsection.certificatelist.edit', compact('certificatelist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificatelist  $certificatelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificatelist $certificatelist)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/certificatelist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);

            // Hapus gambar lama jika ada
            if ($certificatelist->image && file_exists(public_path('image/certificatelist/' . $certificatelist->image))) {
                unlink(public_path('image/certificatelist/' . $certificatelist->image));
            }

            $input['image'] = $imageName;
        }

        $certificatelist->update($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificatelist  $certificatelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificatelist $certificatelist)
    {
        if ($certificatelist->image && file_exists(public_path('image/certificatelist/' . $certificatelist->image))) {
            unlink(public_path('image/certificatelist/' . $certificatelist->image));
        }

        $certificatelist->delete();

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil dihapus!');
    }
}
