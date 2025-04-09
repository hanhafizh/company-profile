@extends('templates_dashboard.main')

@section('title', 'Our Works')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Our Works</h1>
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
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Daftar Our Works</h5>
                            <a href="/admin/ourworks/create" class="btn btn-primary btn-sm"
                                style="margin-left: auto;">Tambah
                                Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 2%;">No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th style="width: 11%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($ourworks as $ourwork)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $ourwork->title }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($ourwork->description, 300) }}</td>
                                                <td><img src="/image/ourworks/{{ $ourwork->image }}" alt="Image"
                                                        class="img-fluid" width="90"></td>
                                                <td>
                                                    <a href="{{ route('ourworks.edit', $ourwork->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>

                                                    <form action="{{ route('ourworks.destroy', $ourwork->id) }}"
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
    </div>

    </div>
@endsection
