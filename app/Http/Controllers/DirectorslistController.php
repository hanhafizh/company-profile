<?php

namespace App\Http\Controllers;

use App\Models\Directorslist;
use Illuminate\Http\Request;

class DirectorslistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directorslists = Directorslist::all();


        return view('dashboard.aboutsection.index', compact('directorslists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.aboutsection.directorslist.create');
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
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Tambahkan jenis dan ukuran gambar
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/directorslist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = $imageName;
        } else {
            return redirect()->back()->with('error', 'Gambar wajib diunggah!');
        }

        Directorslist::create($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Directorslist  $directorslist
     * @return \Illuminate\Http\Response
     */
    public function show(Directorslist $directorslist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directorslist  $directorslist
     * @return \Illuminate\Http\Response
     */
    public function edit(Directorslist $directorslist)
    {
        return view('dashboard.aboutsection.directorslist.edit', compact('directorslist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directorslist  $directorslist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directorslist $directorslist)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Tambahkan jenis dan ukuran gambar
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/directorslist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);

            // Hapus gambar lama jika ada
            if ($directorslist->image && file_exists(public_path('image/directorslist/' . $directorslist->image))) {
                unlink(public_path('image/directorslist/' . $directorslist->image));
            }

            $input['image'] = $imageName;
        }

        $directorslist->update($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directorslist  $directorslist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directorslist $directorslist)
    {
        // Hapus file gambar jika ada
        if ($directorslist->image && file_exists(public_path('image/directorslist/' . $directorslist->image))) {
            unlink(public_path('image/directorslist/' . $directorslist->image));
        }

        $directorslist->delete();

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil dihapus!');
    }
}
