@extends('templates_dashboard.main')

@section('title', 'Home Section')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home Section</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <!-- Landing content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Landing</h5>
                            @if ($landings->isEmpty())
                                <a href="{{ route('landing.create') }}" class="btn btn-primary btn-sm"
                                    style="margin-left: auto;">Tambah
                                    Data</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($landings as $landing)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $landing->title }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($landing->description, 300) }}</td>
                                                <td><img src="/image/landing/{{ $landing->image }}" alt="Image"
                                                        class="img-fluid" width="90"></td>
                                                <td>
                                                    <a href="{{ route('landing.edit', $landing->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>

                                                    <form action="{{ route('landing.destroy', $landing->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Landing content end -->
        <!-- About content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">About</h5>
                            @if ($abouts->isEmpty())
                                <a href="{{ route('about.create') }}" class="btn btn-primary btn-sm"
                                    style="margin-left: auto;">Tambah
                                    Data</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Judul Kedua</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($abouts as $about)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $about->title }}</td>
                                                <td>{{ $about->sub_title }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($about->description, 300) }}</td>
                                                <td><img src="/image/about/{{ $about->image }}" alt="Image"
                                                        class="img-fluid" width="90"></td>
                                                <td>
                                                    <a href="{{ route('about.edit', $about->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>

                                                    <form action="{{ route('about.destroy', $about->id) }}" method="POST"
                                                        style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About content end -->
        <!-- Carousel content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Judul Carousel</h5>
                            @if ($carousels->isEmpty())
                                <a href="{{ route('carousel.create') }}" class="btn btn-primary btn-sm"
                                    style="margin-left: auto;">Tambah
                                    Data</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Judul Kedua</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($carousels as $carousel)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $carousel->title }}</td>
                                                <td>{{ $carousel->sub_title }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($carousel->description, 300) }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('carousel.edit', $carousel->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>

                                                    <form action="{{ route('carousel.destroy', $carousel->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel content end -->
        <!-- Carousel List content end -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Daftar Carousel List</h5>
                            <a href="{{ route('carousellist.create') }}" class="btn btn-primary btn-sm"
                                style="margin-left: auto;">Tambah
                                Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($carousellists as $carousellist)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($carousellist->description, 300) }}
                                                </td>
                                                <td><img src="/image/carousellist/{{ $carousellist->image }}"
                                                        alt="Image" class="img-fluid" width="90"></td>
                                                <td>
                                                    <a href="{{ route('carousellist.edit', $carousellist->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>

                                                    <form action="{{ route('carousellist.destroy', $carousellist->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel List content end -->
        <!-- Feature content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Judul Our Feature</h5>
                            @if ($ourfeatures->isEmpty())
                                <a href="{{ route('ourfeature.create') }}" class="btn btn-primary btn-sm"
                                    style="margin-left: auto;">Tambah Data</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Judul Kedua</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($ourfeatures as $ourfeature)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $ourfeature->title }}</td>
                                                <td>{{ $ourfeature->sub_title }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($ourfeature->description, 300) }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('ourfeature.edit', $ourfeature->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>

                                                    <form action="{{ route('ourfeature.destroy', $ourfeature->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Feature content end -->
        <!-- Feature List content end -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Daftar Feature List</h5>
                            <a href="{{ route('featurelist.create') }}" class="btn btn-primary btn-sm"
                                style="margin-left: auto;">Tambah
                                Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($featurelists as $featurelist)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $featurelist->title }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($featurelist->description, 300) }}
                                                </td>
                                                <td><img src="/image/featurelist/{{ $featurelist->image }}"
                                                        alt="Image" class="img-fluid" width="90"></td>
                                                <td>
                                                    <a href="{{ route('featurelist.edit', $featurelist->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>

                                                    <form action="{{ route('featurelist.destroy', $featurelist->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature List content end -->
        <!-- Faq content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Daftar Faq</h5>
                            <a href="{{ route('faq.create') }}" class="btn btn-primary btn-sm"
                                style="margin-left: auto;">Tambah
                                Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($faqs as $faq)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $faq->ask }}</td>
                                                <td>{{ $faq->title }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($faq->description, 300) }}</td>
                                                <td>
                                                    <a href="{{ route('faq.edit', $faq->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>

                                                    <form action="{{ route('faq.destroy', $faq->id) }}" method="POST"
                                                        style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq content end -->
    </div>

    </div>
@endsection
