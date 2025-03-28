@extends('templates.main')
@section('title', 'Home')
@section('content')

    <!-- Hero Header Start -->
    @include('components.view.home.landing.landing')
    <!-- Hero Header End -->

    <!-- About Start -->
    @include('components.view.home.about.about')
    <!-- About End -->

    <!-- Carousel Start -->
    @include('components.view.home.carousel.carousel')
    <!-- Carousel end -->

    <!-- Feature Start -->
    @include('components.view.home.ourfeature.ourfeature')
    <!-- Feature End -->

    <!-- FAQ Start -->
    @include('components.view.home.faq.faq')
    <!-- FAQ End -->


@endsection
