@extends('templates.main')
@section('title', 'Ourwork')
@section('content')
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('ourwork') }}">Our Work</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $ourwork->title }}</li>
                </ol>
            </nav>

            <!-- Content -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="display-6 mb-4 text-center">{{ $ourwork->title }}</h2>
                    <img src="/image/ourworks/{{ $ourwork->image }}" class="img-fluid w-70 mb-4 mx-auto d-block"
                        alt="">
                    <p class="mb-4">{{ $ourwork->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
