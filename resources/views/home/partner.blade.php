@extends('templates.main')
@section('title', 'Home')
@section('content')

    <!-- Partner Start -->
    @include('components.view.partner.partner')
    <!-- Partner End -->

    <!-- FAQ Start -->
    @include('components.view.home.faq.faq')
    <!-- FAQ End -->

@endsection
