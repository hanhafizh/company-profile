@extends('templates.main')
@section('title', 'About')
@section('content')
    <!-- About Start -->
    @include('components.view.about.about')
    <!-- About End -->

    <!-- Photogroup Start -->
    @include('components.view.about.photogroup')
    <!-- Photogroup End -->

    <!-- Feature Start -->
    @include('components.view.home.ourfeature.ourfeature')
    <!-- Feature End -->

@endsection
