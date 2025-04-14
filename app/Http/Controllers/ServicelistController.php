<?php

namespace App\Http\Controllers;

use App\Models\Servicelist;
use Illuminate\Http\Request;

class ServicelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicelists = Servicelist::all();

        return view('servicesection.index', compact('servicelists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.servicesection.ourservicelist.create');
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
            'image' => 'required|mimes:jpeg,png,jpg,svg+xml|max:2048',
            'details.*.title' => 'required',
            'details.*.subtitle' => 'nullable',
            'details.*.image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        // Simpan gambar utama
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/servicelist/'), $imageName);
        }

        // Buat ServiceList
        $serviceList = Servicelist::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        // Loop dan simpan detail
        if ($request->has('details')) {
            foreach ($request->details as $detail) {
                $detailImage = null;

                if (isset($detail['image']) && $detail['image']) {
                    $detailImg = $detail['image'];
                    $detailImageName = date('YmdHis') . '_' . uniqid() . '.' . $detailImg->getClientOriginalExtension();
                    $detailImg->move(public_path('image/servicelist/details/'), $detailImageName);
                    $detailImage = $detailImageName;
                }

                $serviceList->details()->create([
                    'title' => $detail['title'],
                    'subtitle' => $detail['subtitle'] ?? null,
                    'image' => $detailImage,
                ]);
            }
        }

        return redirect()->route('servicesection.index')->with('success', 'Data berhasil disimpan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicelist  $servicelist
     * @return \Illuminate\Http\Response
     */
    public function show(Servicelist $servicelist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicelist  $servicelist
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicelist $servicelist)
    {
        return view('dashboard.servicesection.ourservicelist.edit', compact('servicelist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicelist  $servicelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicelist $servicelist)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg,svg+xml|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'image/servicelist/';
            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $imageName);

            // Hapus gambar lama jika ada
            if ($servicelist->image && file_exists(public_path('image/servicelist/' . $servicelist->image))) {
                unlink(public_path('image/servicelist/' . $servicelist->image));
            }

            $input['image'] = $imageName;
        }

        $servicelist->update($input);

        return redirect()->route('servicesection.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicelist  $servicelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicelist $servicelist)
    {
        // Hapus file gambar jika ada
        if ($servicelist->image && file_exists(public_path('image/servicelist/' . $servicelist->image))) {
            unlink(public_path('image/servicelist/' . $servicelist->image));
        }

        $servicelist->delete();

        return redirect()->route('servicesection.index')->with('success', 'Data berhasil dihapus!');
    }
}
