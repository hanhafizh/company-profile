@extends('templates_dashboard.main')

@section('title', 'Tambah Visi dan Misi')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Visi dan Misi</h1>
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
                                Tambah Visi dan Misi Baru</h5>
                        </div>
                        <div class="card-body">
                            <a href="{{ url()->previous() }}" class="btn btn-primary mb-2"
                                style="margin-right: auto; ">Kembali</a>
                            <form action="{{ route('visionmission.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                @error('title')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Judul Kedua</label>
                                    <input type="text" class="form-control" name="sub_title" placeholder="sub_title">
                                </div>
                                @error('sub_title')
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
                                    <label for="">Judul Visi</label>
                                    <input type="text" class="form-control" name="vision_title"
                                        placeholder="vision_title">
                                </div>
                                @error('vision_title')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Deskripsi Visi <small class="text-muted">(Gunakan * untuk membuat
                                            menjadi poin-poin.)</label>
                                    <textarea name="vision_description" id="" cols="30" rows="10" class="form-control"
                                        placeholder="vision_description"></textarea>
                                </div>
                                @error('vision_description')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Judul Misi</label>
                                    <input type="text" class="form-control" name="mission_title"
                                        placeholder="mission_title">
                                </div>
                                @error('mission_title')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Deskripsi Misi <small class="text-muted">(Gunakan * untuk membuat
                                            menjadi poin-poin.)</label>
                                    <textarea name="mission_description" id="" cols="30" rows="10" class="form-control"
                                        placeholder="mission_description"></textarea>
                                </div>
                                @error('mission_description')
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
