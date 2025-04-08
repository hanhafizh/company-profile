<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Partnerlist;
use Illuminate\Http\Request;

class PartnersectionController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        $partnerlists = Partnerlist::all();

        return view('dashboard.partnersection.index', compact('partners', 'partnerlists'));
    }
}
