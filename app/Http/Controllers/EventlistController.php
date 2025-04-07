<?php

namespace App\Http\Controllers;

use App\Models\Eventlist;
use Illuminate\Http\Request;

class EventlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventlists = Eventlist::all();

        return view('dashboard.eventsection.index', compact('eventlists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.eventsection.eventslist.create');
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
            $destinationPath = 'image/eventlist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = $imageName;
        } else {
            return redirect()->back()->with('error', 'Gambar wajib diunggah!');
        }

        Eventlist::create($input);

        return redirect()->route('eventsection.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function show(Eventlist $eventlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventlist $eventlist)
    {
        return view('dashboard.eventsection.eventslist.edit', compact('eventlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventlist $eventlist)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/eventlist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);

            // Hapus gambar lama jika ada
            if ($eventlist->image && file_exists(public_path('image/eventlist/' . $eventlist->image))) {
                unlink(public_path('image/eventlist/' . $eventlist->image));
            }

            $input['image'] = $imageName;
        }

        $eventlist->update($input);

        return redirect()->route('eventsection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventlist $eventlist)
    {
        $eventlist->delete();

        return redirect()->route('eventsection.index')->with('success', 'Data berhasil dihapus!');
    }
}
