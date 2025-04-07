@extends('templates.main')
@section('title', 'Services')
@section('content')

    <!-- Service Start -->
    @include('components.view.service.service')
    <!-- Service End -->

    <!-- FAQ Start -->
    @include('components.view.home.faq.faq')
    <!-- FAQ End -->

@endsection
