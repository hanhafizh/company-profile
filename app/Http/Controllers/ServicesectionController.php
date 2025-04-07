<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Servicelist;

class ServicesectionController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $servicelists = Servicelist::all();

        return view('dashboard.servicesection.index', compact('services', 'servicelists'));
    }
}
