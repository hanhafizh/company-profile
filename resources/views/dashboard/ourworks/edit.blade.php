@extends('templates_dashboard.main')

@section('title', 'Our Works')

@section('content')

    <div class="container">
        <div class="container-fluid">

            <a href="/ourworks" class="btn btn-primary mb-3">Kembali</a>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('ourworks.update', $ourwork->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title"
                                value="{{ $ourwork->title }}"> <!-- Ganti dari $ourworks menjadi $ourwork -->
                        </div>
                        @error('title')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                placeholder="Description">{{ $ourwork->description }}</textarea> <!-- Ganti dari $ourworks menjadi $ourwork -->
                        </div>
                        @error('description')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                        <img src="/image/ourworks/{{ $ourwork->image }}" alt="" class="img-fluid">
                        <!-- Ganti dari $ourworks menjadi $ourwork -->
                        <div class="form-group">
                            <label for="">Image</label>
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


@endsection
