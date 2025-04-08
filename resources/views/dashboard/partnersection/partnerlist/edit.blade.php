@extends('templates_dashboard.main')

@section('title', 'Edit Sertifikat List')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Sertifikat List</h1>
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
                                Edit Sertifikat List</h5>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('aboutsection.index') }}" class="btn btn-primary mb-2"
                                style="margin-right: auto; ">Kembali</a>
                            <form action="{{ route('certificatelist.update', $certificatelist->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title"
                                        value="{{ $certificatelist->title }}">
                                </div>
                                @error('title')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                        placeholder="Description">{{ $certificatelist->description }}</textarea>
                                </div>
                                @error('description')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <img src="/image/certificatelist/{{ $certificatelist->image }}" alt=""
                                    class="img-fluid"
                                    style="height: 250px; width: 180px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"
                                    object-fit: cover; border-radius: 20px;">
                                <div class="form-group">
                                    <label for="">Gambar <small class="text-muted">(Disarankan ukuran
                                            A4)</small></label>
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
