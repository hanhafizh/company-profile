@extends('templates.main')
@section('title', 'About')
@section('content')
    <!-- About Start -->
    @include('components.view.about.about')
    <!-- About End -->

    <!-- Photogroup Start -->
    @include('components.view.about.photogroup')
    <!-- Photogroup End -->

    <!-- Visi & Misi Start -->
    @include('components.view.about.visionmission')
    <!-- Visi & Misi End -->

    <!-- Jajaran Direksi Start -->
    @include('components.view.about.directors')
    <!-- Jajaran Direksi End -->

    <!-- Sertifikat Iso Start -->

    <!-- Sertifikat Iso End -->

@endsection
