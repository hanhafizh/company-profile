@extends('templates_dashboard.main')

@section('title', 'Tambah Our Work')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Our Work</h1>
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
                                Tambah Our Work Baru</h5>
                        </div>
                        <div class="card-body">
                            <a href="/admin/ourworks" class="btn btn-primary mb-2" style="margin-right: auto; ">Kembali</a>
                            <form action="{{ route('ourworks.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                @error('title')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                        placeholder="Description"></textarea>
                                </div>
                                @error('description')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Gambar</label>
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
