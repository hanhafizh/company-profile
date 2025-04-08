@extends('templates_dashboard.main')

@section('title', 'About Section')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Partner Section - Admin Pages</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">

        <!-- Partner content -->
        @include('dashboard.partnersection.partner.index')
        <!-- Partner content end -->

        <!-- Partner list content -->
        @include('dashboard.partnersection.partnerlist.index')
        <!-- Partner list content end -->

    </div>

    </div>
@endsection
