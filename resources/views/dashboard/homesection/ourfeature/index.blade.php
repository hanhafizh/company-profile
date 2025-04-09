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
                                    <th style="width: 2%;">No</th>
                                    <th style="width: 11%;">Judul</th>
                                    <th style="width: 11%;">Judul Kedua</th>
                                    <th>Deskripsi</th>
                                    <th style="width: 11%;">Aksi</th>
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
                                                class="btn btn-sm btn-warning mt-2">Edit</a>

                                            <form action="{{ route('ourfeature.destroy', $ourfeature->id) }}"
                                                method="POST" style="display: inline-block;">
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
