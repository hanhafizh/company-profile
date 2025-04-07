<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesectionController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('dashboard.servicesection.index', compact('services'));
    }
}
