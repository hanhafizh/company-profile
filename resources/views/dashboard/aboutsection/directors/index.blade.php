<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Judul Direksi</h5>
                    @if ($directors->isEmpty())
                        <a href="{{ route('directors.create') }}" class="btn btn-primary btn-sm"
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
                                @foreach ($directors as $director)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $director->title }}</td>
                                        <td>{{ $director->sub_title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($director->description, 300) }}
                                        </td>
                                        <td>
                                            <a href="{{ route('directors.edit', $director->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>

                                            <form action="{{ route('directors.destroy', $director->id) }}"
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
