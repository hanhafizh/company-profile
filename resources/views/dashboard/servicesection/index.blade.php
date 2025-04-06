@extends('templates_dashboard.main')

@section('title', 'Service Section')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Service Section - Admin Pages</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">

        <!-- Services Tittle content -->
        {{-- @include('dashboard.servicesection.ourservice.index') --}}
        <!-- Services Tittle content end -->

        <!-- Services list content -->
        {{-- @include('dashboard.servicesection.ourservicelist.index') --}}
        <!-- Services list content end -->


    </div>

    </div>
@endsection
