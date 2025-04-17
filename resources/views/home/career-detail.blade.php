@extends('templates.main')

@section('title', 'career')

@section('content')
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/career">Career</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $careerslist->title_career }}</li>
                </ol>
            </nav>
            <!-- Breadcrumbs end -->
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Our Careers</h4>
                <h1 class="display-5 mb-4">{{ $careerslist->title_career }}</h1>
            </div>

            <div class="mb-5">
                <ul
                    class="list-unstyled mb-1 mb-md-3 d-flex flex-column flex-md-row justify-content-center gap-3 text-start text-md-center">
                    {{-- Perusahaan --}}
                    <li><i class="bi bi-building"></i> {{ $careerslist->company_name }}</li>
                    {{-- Lokasi --}}
                    <li><i class="bi bi-geo-alt"></i> {{ $careerslist->location }}</li>
                    {{-- Kategori --}}
                    <li><i class="bi bi-briefcase"></i> {{ $careerslist->category }}</li>
                    {{-- Tipe --}}
                    <li><i class="bi bi-clock"></i> {{ $careerslist->job_type }}</li>
                </ul>
            </div>

            <div class="mb-5 alert alert-warning d-inline-block py-1 px-2" role="alert" style="font-size: 0.875rem;">
                Posted: {{ \Carbon\Carbon::parse($careerslist->created_at)->diffForHumans() }}
            </div>

            <div class="mb-5 alert alert-danger d-inline-block py-1 px-2" role="alert" style="font-size: 0.875rem;">
                Deadline: {{ \Carbon\Carbon::parse($careerslist->deadline)->format('d F Y H:i') }}
            </div>



            <div class="row">
                <div class="col-12 mb-4">
                    <h5 class="mb-2">Requirement:</h5>
                    <ul>
                        @foreach (explode(',', $careerslist->requirements) as $requirement)
                            <li>{{ trim($requirement) }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-12 mb-4">
                    <h5 class="mb-2">Responsibility:</h5>
                    <ul>
                        @foreach (explode(',', $careerslist->responsibilities) as $responsibility)
                            <li>{{ trim($responsibility) }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            @php
                $now = \Carbon\Carbon::now();
                $deadline = \Carbon\Carbon::parse($careerslist->deadline);
            @endphp

            @if ($now->gt($deadline))
                <a href="#" class="btn btn-primary btn-xl disabled" tabindex="-1" aria-disabled="true">Expired</a>
            @else
                <a href="https://{{ $careerslist->link }}" class="btn btn-primary btn-xl" target="_blank">Lamar Kerja</a>
            @endif
        </div>
    </div>
@endsection
