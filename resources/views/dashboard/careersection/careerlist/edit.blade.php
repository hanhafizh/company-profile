@extends('templates_dashboard.main')

@section('title', 'Edit Career List')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Career List</h1>
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
                                Edit Career List</h5>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('careersection.index') }}" class="btn btn-primary mb-2"
                                style="margin-right: auto; ">Kembali</a>
                            <form action="{{ route('careerlist.update', $careerlist->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Judul Karir</label>
                                        <input type="text" class="form-control" name="title_career"
                                            placeholder="title_career" value="{{ $careerlist->title_career }}">
                                        @error('title_career')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Deskripsi Karir</label>
                                        <input type="text" class="form-control" name="description_career"
                                            placeholder="description_career" value="{{ $careerlist->description_career }}">
                                        @error('description_career')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Nama Perusahaan</label>
                                        <input type="text" class="form-control" name="company_name"
                                            placeholder="company_name" value="{{ $careerlist->company_name }}">
                                        @error('company_name')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Lokasi</label>
                                        <input type="text" class="form-control" name="location" placeholder="location"
                                            value="{{ $careerlist->location }}">
                                        @error('location')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Kategori</label>
                                        <input type="text" class="form-control" name="category" placeholder="category"
                                            value="{{ $careerlist->category }}">
                                        @error('category')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Tipe Job</label>
                                        <input type="text" class="form-control" name="job_type" placeholder="job_type"
                                            value="{{ $careerlist->job_type }}">
                                        @error('job_type')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="">Persyaratan</label>
                                    <textarea class="form-control" name="requirements" rows="4" placeholder="requirements">{{ $careerlist->requirements }}</textarea>
                                </div>
                                @error('requirements')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="form-group">
                                    <label for="">Tanggung Jawab</label>
                                    <textarea class="form-control" name="responsibilities" rows="4" placeholder="responsibilities">{{ $careerlist->responsibilities }}</textarea>
                                </div>
                                @error('responsibilities')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                                <div class="form-group">
                                    <label for="">Deadline</label>
                                    <input type="datetime-local" class="form-control" name="deadline"
                                        min="{{ \Carbon\Carbon::parse($careerlist->created_at)->format('Y-m-d\TH:i') }}"
                                        value="{{ \Carbon\Carbon::parse($careerlist->deadline)->format('Y-m-d\TH:i') }}">
                                </div>
                                @error('deadline')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="form-group col-md-6">
                                    <label for="">Link</label>
                                    <input type="text" class="form-control" name="link" placeholder="link"
                                        value="{{ $careerlist->link }}">
                                    @error('link')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>

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
