<?php

namespace App\Http\Controllers;

use App\Models\Servicelist;
use App\Models\ServiceListDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $servicelist->load('details');

        return view('servicelist.show', compact('servicelist'));
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,svg+xml|max:2048',
            'details.*.title' => 'required',
            'details.*.subtitle' => 'nullable',
            'details.*.image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $serviceList = Servicelist::findOrFail($id);
        $serviceList->title = $request->title;
        $serviceList->description = $request->description;

        // Handle main image update
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($serviceList->image && file_exists(public_path('image/servicelist/' . $serviceList->image))) {
                unlink(public_path('image/servicelist/' . $serviceList->image));
            }

            $image = $request->file('image');
            $imageName = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/servicelist/'), $imageName);
            $serviceList->image = $imageName;
        }

        $serviceList->save();

        // Update atau tambah detail
        $existingDetailIds = $serviceList->details()->pluck('id')->toArray();
        $incomingDetailIds = [];

        foreach ($request->details ?? [] as $detail) {
            if (isset($detail['id'])) {
                // Update existing detail
                $existingDetail = ServiceListDetails::find($detail['id']);
                if ($existingDetail) {
                    $existingDetail->title = $detail['title'];
                    $existingDetail->subtitle = $detail['subtitle'] ?? null;

                    if (isset($detail['image']) && $detail['image'] instanceof \Illuminate\Http\UploadedFile) {
                        // Delete old image if exists
                        if ($existingDetail->image && file_exists(public_path('image/servicelist/details/' . $existingDetail->image))) {
                            unlink(public_path('image/servicelist/details/' . $existingDetail->image));
                        }

                        $img = $detail['image'];
                        $imgName = date('YmdHis') . '_' . uniqid() . '.' . $img->getClientOriginalExtension();
                        $img->move(public_path('image/servicelist/details/'), $imgName);
                        $existingDetail->image = $imgName;
                    }

                    $existingDetail->save();
                    $incomingDetailIds[] = $existingDetail->id;
                }
            } else {
                // Create new detail
                $imgName = null;
                if (isset($detail['image']) && $detail['image'] instanceof \Illuminate\Http\UploadedFile) {
                    $img = $detail['image'];
                    $imgName = date('YmdHis') . '_' . uniqid() . '.' . $img->getClientOriginalExtension();
                    $img->move(public_path('image/servicelist/details/'), $imgName);
                }

                $newDetail = $serviceList->details()->create([
                    'title' => $detail['title'],
                    'subtitle' => $detail['subtitle'] ?? null,
                    'image' => $imgName,
                ]);
                $incomingDetailIds[] = $newDetail->id;
            }
        }

        // Hapus detail yang tidak dikirim (dianggap dihapus user)
        $toDelete = array_diff($existingDetailIds, $incomingDetailIds);
        if (!empty($toDelete)) {
            $detailsToDelete = ServiceListDetails::whereIn('id', $toDelete)->get();
            foreach ($detailsToDelete as $detail) {
                if ($detail->image && file_exists(public_path('image/servicelist/details/' . $detail->image))) {
                    unlink(public_path('image/servicelist/details/' . $detail->image));
                }
                $detail->delete();
            }
        }

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
