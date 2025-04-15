@extends('templates_dashboard.main')

@section('title', 'Career Section')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Career Section - Admin Pages</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <!-- career content -->
        @include('dashboard.careersection.career.index')
        <!-- career content end -->
    </div>
    </div>
@endsection
