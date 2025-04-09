<?php

namespace App\Http\Controllers;

use App\Models\Photogroup;
use Illuminate\Http\Request;

class PhotogroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photogroups = Photogroup::all();
        // dd($photogroup);

        return view('dashboard.aboutsection.index', compact('photogroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.aboutsection.photogroup.create');
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
            $destinationPath = 'image/photogroup/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = $imageName;
        } else {
            return redirect()->back()->with('error', 'Gambar wajib diunggah!');
        }

        Photogroup::create($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photogroup  $photogroup
     * @return \Illuminate\Http\Response
     */
    public function show(Photogroup $photogroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photogroup  $photogroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Photogroup $photogroup)
    {
        return view('dashboard.aboutsection.photogroup.edit', compact('photogroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photogroup  $photogroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photogroup $photogroup)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/photogroup/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);

            // Hapus gambar lama jika ada
            if ($photogroup->image && file_exists(public_path('image/photogroup/' . $photogroup->image))) {
                unlink(public_path('image/photogroup/' . $photogroup->image));
            }

            $input['image'] = $imageName;
        }

        $photogroup->update($input);

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photogroup  $photogroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photogroup $photogroup)
    {
        // Hapus file gambar jika ada
        if ($photogroup->image && file_exists(public_path('image/photogroup/' . $photogroup->image))) {
            unlink(public_path('image/photogroup/' . $photogroup->image));
        }

        $photogroup->delete();

        return redirect()->route('aboutsection.index')->with('success', 'Data berhasil dihapus!');
    }
}
