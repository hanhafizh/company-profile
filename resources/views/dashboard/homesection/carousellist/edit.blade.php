@extends('templates_dashboard.main')

@section('title', 'Edit Carousel List')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Carousel List</h1>
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
                                Edit Carousel List</h5>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('homesection.index') }}" class="btn btn-primary mb-2"
                                style="margin-right: auto; ">Kembali</a>
                            <form action="{{ route('carousellist.update', $carousellist->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                        placeholder="Masukan deskripsi">{{ $carousellist->description }}</textarea>
                                </div>
                                @error('description')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                <img src="/image/carousellist/{{ $carousellist->image }}" alt="" class="img-fluid">
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
