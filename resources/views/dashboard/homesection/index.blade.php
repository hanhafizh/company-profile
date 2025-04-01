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
        @include('components.admin.home.landing')
        <!-- Landing content end -->
        <!-- About content -->
        {{-- @include('components.admin.about.about') --}}
        <!-- About content end -->
        <!-- Carousel content -->
        @include('components.admin.home.carousel')
        <!-- Carousel content end -->
        <!-- Carousel List content end -->
        @include('components.admin.home.carousel-list')
        <!-- Carousel List content end -->
        <!-- Feature content -->
        @include('components.admin.home.ourfeature')
        <!-- Feature content end -->
        <!-- Feature List content end -->
        @include('components.admin.home.ourfeature-list')
        <!-- Feature List content end -->
        <!-- Faq content -->
        @include('components.admin.home.faq')
        <!-- Faq content end -->
    </div>

    </div>
@endsection
