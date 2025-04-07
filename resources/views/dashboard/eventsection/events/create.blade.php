@extends('templates_dashboard.main')

@section('title', 'Tambah Events')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Judul Events</h1>
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
                                Tambah Judul Events Baru</h5>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('homesection.index') }}" class="btn btn-primary mb-2"
                                style="margin-right: auto; ">Kembali</a>
                            <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" class="form-control" name="title" placeholder="Masukkan judul">
                                </div>
                                @error('title')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Judul kedua</label>
                                    <input type="text" class="form-control" name="sub_title"
                                        placeholder="Masukkan judul kedua">
                                </div>
                                @error('sub_title')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Deksripsi</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                        placeholder="Masukkan deskripsi"></textarea>
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
