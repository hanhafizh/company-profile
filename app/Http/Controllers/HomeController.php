<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Landing;
use App\Models\Ourfeature;
use App\Models\Featurelist;
use App\Models\Faq;
use App\Models\Carousel;
use App\Models\Carousellist;

use App\Models\About;
use App\Models\Photogroup;
use App\Models\Visionmission;
use App\Models\Certificate;
use App\Models\Certificatelist;
use App\Models\Directors;
use App\Models\Directorslist;
use App\Models\Service;
use App\Models\Servicelist;

use App\Models\Ourworks;

use App\Models\Event;
use App\Models\Eventlist;

class HomeController extends Controller
{

    public function index()
    {
        $landings =  Landing::all();
        $abouts = About::all();
        $ourfeatures = Ourfeature::all();
        $featurelists = Featurelist::all();
        $faqs = Faq::all();
        $carousels = Carousel::all();
        $carousellists = Carousellist::all();
        // dd($landings->toArray());

        return view('home.index', compact(
            'landings',
            'abouts',
            'ourfeatures',
            'featurelists',
            'faqs',
            'carousels',
            'carousellists'
        ));
    }

    public function about()
    {
        $abouts = About::all();
        $ourfeatures = Ourfeature::all();
        $featurelists = Featurelist::all();
        $photogroups = Photogroup::all();
        $visionmissions = Visionmission::all();
        $directors = Directors::all();
        $directorslist = Directorslist::all();
        $certificates = Certificate::all();
        $certificatelist = Certificatelist::all();

        return view('home.about', compact(
            'abouts',
            'ourfeatures',
            'featurelists',
            'photogroups',
            'visionmissions',
            'directors',
            'directorslist',
            'certificates',
            'certificatelist',
        ));
    }

    public function services()
    {
        $faqs = Faq::all();
        $services = Service::all();
        $servicelists = Servicelist::all();

        return view('home.service', compact(
            'faqs',
            'services',
            'servicelists'
        ));
    }

    public function ourwork()
    {
        $ourworks = Ourworks::all();
        return view('home.ourwork', compact(
            'ourworks',
        ));
    }

    public function ourworkDetail($id)
    {
        $ourworks = Ourworks::findOrFail($id);

        return view('home.ourwork-detail', compact('ourworks'));
    }

    public function event()
    {
        $events = Event::all();
        $eventlists = Eventlist::all();

        return view('home.event', compact('events', 'eventlists'));
    }

    public function eventDetail($id)
    {
        $eventlists = Eventlist::findOrFail($id);

        return view('home.event-detail', compact('eventlists'));
    }


    public function partner()
    {
        return view('home.partner');
    }

    public function contact()
    {
        return view('home.contact');
    }


    public function tes()
    {
        return view('dashboard');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::raw("Message from {$data['name']} ({$data['email']}):\n\n{$data['message']}", function ($mail) use ($data) {
            $mail->to('farhanhafizh77@gmail.com') // ganti dengan email tujuan
                ->subject($data['subject']);
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
