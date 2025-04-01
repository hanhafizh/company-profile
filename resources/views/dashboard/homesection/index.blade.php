@extends('templates_dashboard.main')

@section('title', 'Home Section')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home Section - Admin Pages</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <!-- Landing content -->
        @include('dashboard.homesection.landing.index')
        <!-- Landing content end -->
        <!-- About content -->
        {{-- @include('components.admin.about.about') --}}
        <!-- About content end -->
        <!-- Carousel content -->
        @include('dashboard.homesection.carousel.index')
        <!-- Carousel content end -->
        <!-- Carousel List content end -->
        @include('dashboard.homesection.carousellist.index')
        <!-- Carousel List content end -->
        <!-- Feature content -->
        @include('dashboard.homesection.ourfeature.index')
        <!-- Feature content end -->
        <!-- Feature List content end -->
        @include('dashboard.homesection.featurelist.index')
        <!-- Feature List content end -->
        <!-- Faq content -->
        @include('dashboard.homesection.faq.index')
        <!-- Faq content end -->
    </div>

    </div>
@endsection
