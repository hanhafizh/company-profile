@extends('templates_dashboard.main')

@section('title', 'Event Section')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Event Section - Admin Pages</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <!-- Events content -->
        @include('dashboard.eventsection.events.index')
        <!-- Events content end -->
    </div>
    </div>
@endsection
