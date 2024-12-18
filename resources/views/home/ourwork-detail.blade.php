@extends('templates.main')

@section('title', 'Our Work - Detail')

@section('content')
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/ourwork">Our Work</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $ourworks->title }}</li>
                </ol>
            </nav>

            <!-- Content -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="display-6 mb-4 text-center">{{ $ourworks->title }}</h2>
                    <img src="/image/ourworks/{{ $ourworks->image }}" class="img-fluid w-70 mb-4 mx-auto d-block"
                        alt="{{ $ourworks->title }}">
                    <p class="mb-4">{{ $ourworks->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
