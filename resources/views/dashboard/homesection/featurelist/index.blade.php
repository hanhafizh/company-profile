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
                                    <th style="width: 2%;">No</th>
                                    <th style="width: 11%;">Judul</th>
                                    <th style="width: 65%;">Deskripsi</th>
                                    <th>Gambar</th>
                                    <th style="width: 11%;">Aksi</th>
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
                                        <td><img src="/image/featurelist/{{ $featurelist->image }}" alt="Image"
                                                class="img-fluid" width="90"></td>
                                        <td>
                                            <a href="{{ route('featurelist.edit', $featurelist->id) }}"
                                                class="btn btn-sm btn-warning mt-2">Edit</a>

                                            <form action="{{ route('featurelist.destroy', $featurelist->id) }}"
                                                method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger mt-2">Hapus</button>
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
