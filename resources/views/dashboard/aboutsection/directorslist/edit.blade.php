@extends('templates_dashboard.main')

@section('title', 'Edit Direktor List')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Direktor List</h1>
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
                                Edit Direktor List</h5>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('aboutsection.index') }}" class="btn btn-primary mb-2"
                                style="margin-right: auto; ">Kembali</a>
                            <form action="{{ route('directorslist.update', $directorslist->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="name" placeholder="name"
                                        value="{{ $directorslist->name }}">
                                </div>
                                @error('name')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Posisi</label>
                                    <input type="text" class="form-control" name="position" placeholder="position"
                                        value="{{ $directorslist->position }}">
                                </div>
                                @error('position')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <img src="/image/directorslist/{{ $directorslist->image }}" alt="" class="img-fluid"
                                    style="width: 250px; height: 350px; object-fit: cover; border-radius: 20px;">
                                <div class="form-group">
                                    <label for="">Gambar <small class="text-muted">(Disarankan rasio
                                            4:3)</small></label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                @error('image')
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
