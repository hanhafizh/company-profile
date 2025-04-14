@extends('templates.main')

@section('title', 'Our Work - Detail')

@section('content')
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/service">Our Service</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $servicelist->title }}</li>
                </ol>
            </nav>

            <!-- Content -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="display-6 mb-4 text-center">{{ $servicelist->title }}</h2>
                    <p class="mb-4 text-center">{{ $servicelist->description }}</p>
                </div>
                <div class="col-md-12">
                    @forelse ($servicelist->details as $detail)
                        <div class="mb-4">
                            <h5 class="text-center">{{ $detail->title }}</h5>
                            <p>{{ $detail->subtitle }}</p>
                            @if ($detail->image)
                                <div class="text-center">
                                    <img src="{{ asset('image/servicelist/details/' . $detail->image) }}" width="100%">
                                </div>
                            @endif
                        </div>
                    @empty
                        <p class="text-center text-muted">Tidak ada detail service.</p>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
@endsection
