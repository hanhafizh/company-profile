@extends('templates_dashboard.main')

@section('title', 'Edit Faq')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Faq</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                Edit Faq</h5>
                        </div>
                        <div class="card-body">
                            <a href="/admin/faq" class="btn btn-primary mb-2" style="margin-right: auto; ">Kembali</a>
                            <form action="{{ route('faq.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="">Ask</label>
                                    <input type="text" class="form-control" name="ask" placeholder="ask"
                                        value="{{ $faq->ask }}">
                                </div>
                                @error('title')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title"
                                        value="{{ $faq->title }}">
                                </div>
                                @error('title')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                        placeholder="Description">{{ $faq->description }}</textarea>
                                </div>
                                @error('description')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
