@extends('templates_dashboard.main')

@section('title', 'Faq')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Faq</h1>
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
                            <h5 class="card-title mb-0">Daftar Faq</h5>
                            <a href="/admin/faq/create" class="btn btn-primary btn-sm" style="margin-left: auto;">Tambah
                                Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Ask</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Actions</th>
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
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
