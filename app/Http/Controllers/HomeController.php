<?php

namespace App\Http\Controllers;

use App\Models\Ourworks;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show($id)
    {
        // Ambil data ourwork berdasarkan ID
        // findOrFail otomatis akan mengembalikan 404 jika data tidak ditemukan
        $ourwork = Ourworks::findOrFail($id);

        // Kirim data ke view
        return view('home.ourwork-detail', compact('ourwork'));
    }
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function services()
    {
        return view('home.service');
    }

    public function ourwork()
    {
        $ourworks = Ourworks::all();
        return view('home.ourwork', compact(
            'ourworks',
        ));
    }

    public function event()
    {
        return view('home.event');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function tes()
    {
        return view('dashboard');
    }
}
