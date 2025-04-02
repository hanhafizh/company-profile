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

        <!-- Photogroup content -->
        @include('dashboard.aboutsection.vision-mission.index')
        <!-- Photogroup content end -->

        <!-- Direksi content -->
        @include('dashboard.aboutsection.directors.index')
        <!-- Direksi content end -->

        <!-- Direksi List content -->
        @include('dashboard.aboutsection.directorslist.index')
        <!-- Direksi List content end -->

        <!-- sertifikat content -->
        @include('dashboard.aboutsection.certificate.index')
        <!-- sertifikat content end -->

    </div>

    </div>
@endsection
