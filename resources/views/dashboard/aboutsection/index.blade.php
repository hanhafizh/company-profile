@extends('templates_dashboard.main')

@section('title', 'About Section')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">About Section - Admin Pages</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">

        <!-- About content -->
        @include('dashboard.aboutsection.about.index')
        <!-- About content end -->

        <!-- Photogroup content -->
        @include('dashboard.aboutsection.photogroup.index')
        <!-- Photogroup content end -->

    </div>

    </div>
@endsection
