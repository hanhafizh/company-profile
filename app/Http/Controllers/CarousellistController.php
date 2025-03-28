<?php

namespace App\Http\Controllers;

use App\Models\Carousellist;
use Illuminate\Http\Request;

class CarousellistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousellists = Carousellist::all();
        // dd($carousellist);

        return view('dashboard.homesection.index', compact('carousellists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.homesection.carousellist.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/carousellist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = $imageName;
        } else {
            return redirect()->back()->with('error', 'Gambar wajib diunggah!');
        }

        Carousellist::create($input);

        return redirect()->route('homesection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carousellist  $carousellist
     * @return \Illuminate\Http\Response
     */
    public function show(Carousellist $carousellist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carousellist  $carousellist
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousellist $carousellist)
    {
        return view('dashboard.homesection.carousellist.edit', compact('carousellist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carousellist  $carousellist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousellist $carousellist)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048', // Tambahkan jenis dan ukuran gambar
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/carousellist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);

            // Hapus gambar lama jika ada
            if ($carousellist->image && file_exists(public_path('image/carousellist/' . $carousellist->image))) {
                unlink(public_path('image/carousellist/' . $carousellist->image));
            }

            $input['image'] = $imageName;
        }

        $carousellist->update($input);

        return redirect()->route('homesection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carousellist  $carousellist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousellist $carousellist)
    {
        // Hapus file gambar jika ada
        if ($carousellist->image && file_exists(public_path('image/carousellist/' . $carousellist->image))) {
            unlink(public_path('image/carousellist/' . $carousellist->image));
        }

        $carousellist->delete();

        return redirect()->route('homesection.index')->with('success', 'Data berhasil dihapus!');
    }
}
