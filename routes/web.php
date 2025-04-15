<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CertificatelistController;
use App\Http\Controllers\DirectorslistController;
use App\Http\Controllers\EventlistController;
use App\Http\Controllers\EventsectionController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PartnerlistController;
use App\Http\Controllers\PartnersectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicelistController;
use App\Http\Controllers\ServicesectionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutsectionController;
use App\Http\Controllers\CarousellistController;
use App\Http\Controllers\DirectorsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeaturelistController;
use App\Http\Controllers\HomesectionController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OurfeatureController;
use App\Http\Controllers\OurworksController;
use App\Http\Controllers\PhotogroupController;
use App\Http\Controllers\VisionmissionController;



// Page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/service', [HomeController::class, 'services'])->name('services');
Route::get('service/{id}', [HomeController::class, 'serviceDetail'])->name('serviceDetail');

Route::get('/ourwork', [HomeController::class, 'ourwork'])->name('ourwork');
Route::get('ourwork/{id}', [HomeController::class, 'ourworkDetail'])->name('ourworksDetail');

Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('event/{id}', [HomeController::class, 'eventDetail'])->name('eventsDetail');

Route::get('/partner', [HomeController::class, 'partner'])->name('partner');

Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('career/{id}', [HomeController::class, 'careerDetail'])->name('careersDetail');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/send', [HomeController::class, 'send'])->name('contact.send');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Group Middleware untuk Admin
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // homesection

    Route::get('admin/homesection', [HomesectionController::class, 'index'])->name('homesection.index');

    Route::resource('admin/landing', LandingController::class)->middleware('auth');

    Route::resource('admin/about', AboutController::class)->middleware('auth');

    Route::resource('admin/carousel', CarouselController::class)->middleware('auth');

    Route::resource('admin/carousellist', CarousellistController::class)->middleware('auth');

    Route::resource('admin/ourfeature', OurfeatureController::class)->middleware('auth');

    Route::resource('admin/featurelist', FeaturelistController::class)->middleware('auth');

    Route::resource('admin/faq', FaqController::class)->middleware('auth');

    // aboutsection

    Route::get('admin/aboutsection', [AboutsectionController::class, 'index'])->name('aboutsection.index');

    Route::resource('admin/photogroup', PhotogroupController::class)->middleware('auth');

    Route::resource('admin/visionmission', VisionmissionController::class)->middleware('auth');

    Route::resource('admin/directors', DirectorsController::class)->middleware('auth');

    Route::resource('admin/directorslist', DirectorslistController::class)->middleware('auth');

    Route::resource('admin/certificate', CertificateController::class)->middleware('auth');

    Route::resource('admin/certificatelist', CertificatelistController::class)->middleware('auth');

    // service

    Route::get('admin/servicesection', [ServicesectionController::class, 'index'])->name('servicesection.index');

    Route::resource('admin/service', ServiceController::class)->middleware('auth');

    Route::resource('admin/servicelist', ServicelistController::class)->middleware('auth');

    // ourworks

    Route::resource('admin/ourworks', OurworksController::class)->middleware('auth');

    // Event

    Route::get('admin/eventsection', [EventsectionController::class, 'index'])->name('eventsection.index');

    Route::resource('admin/event', EventController::class)->middleware('auth');

    Route::resource('admin/eventlist', EventlistController::class)->middleware('auth');

    // Partner

    Route::get('admin/partnersection', [PartnersectionController::class, 'index'])->name('partnersection.index');

    Route::resource('admin/partner', PartnerController::class)->middleware('auth');
    Route::resource('admin/partnerlist', PartnerlistController::class)->middleware('auth');

    // Configuration Group
    Route::prefix('setting')->group(function () {
        Route::prefix('organizations')->group(function () {
            Route::get('list', [OrganizationController::class, 'index'])->name('organizations.list');
            Route::get('create', [OrganizationController::class, 'create'])->name('organizations.create');
            Route::post('store', [OrganizationController::class, 'store'])->name('organizations.store');
            Route::get('edit/{id}', [OrganizationController::class, 'edit'])->name('organizations.edit');
            Route::put('update/{id}', [OrganizationController::class, 'update'])->name('organizations.update');
        });
    });

    // Logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::fallback(function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('404');
});
