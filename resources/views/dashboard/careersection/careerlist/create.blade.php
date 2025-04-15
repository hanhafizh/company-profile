@extends('templates_dashboard.main')

@section('title', 'Tambah Career List')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Career List</h1>
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
                            <h5 class="card-title mb-0">Tambah Career List</h5>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('careersection.index') }}" class="btn btn-primary mb-2">Kembali</a>
                            <form action="{{ route('careerlist.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Judul Karir</label>
                                        <input type="text" class="form-control" name="title_career"
                                            placeholder="Masukkan judul karir">
                                        @error('title_career')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="">Deskripsi Karir</label>
                                        <input type="text" class="form-control" name="description_career"
                                            placeholder="Masukkan deskripsi karir">
                                        @error('description_career')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Nama Perusahaan</label>
                                        <input type="text" class="form-control" name="company_name"
                                            placeholder="Masukkan nama perusahaan">
                                        @error('company_name')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="">Lokasi</label>
                                        <input type="text" class="form-control" name="location"
                                            placeholder="Masukkan lokasi">
                                        @error('location')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Kategori</label>
                                        <input type="text" class="form-control" name="category"
                                            placeholder="Masukkan kategori">
                                        @error('category')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="">Tipe Job</label>
                                        <input type="text" class="form-control" name="job_type"
                                            placeholder="Masukkan tipe job">
                                        @error('job_type')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="">Persyaratan</label>
                                    <textarea class="form-control" name="requirements" rows="4" placeholder="Masukkan persyaratan"></textarea>
                                    <small class="form-text text-muted">Gunakan tanda koma (,) untuk memisahkan setiap
                                        persyaratan.</small>
                                    @error('requirements')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggung Jawab</label>
                                    <textarea class="form-control" name="responsibilities" rows="4" placeholder="Masukkan tanggung jawab"></textarea>
                                    <small class="form-text text-muted">Gunakan tanda koma (,) untuk memisahkan setiap
                                        tanggung jawab.</small>
                                    @error('responsibilities')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="">Deadline</label>
                                    <input type="datetime-local" class="form-control" name="deadline"
                                        min="{{ now()->format('Y-m-d\TH:i') }}">
                                    @error('deadline')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Tambah Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
