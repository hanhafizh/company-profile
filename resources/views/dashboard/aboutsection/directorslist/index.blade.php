<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Direktor List</h5>

                    <a href="{{ route('directorslist.create') }}" class="btn btn-primary btn-sm"
                        style="margin-left: auto;">Tambah
                        Data</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 2%;">No</th>
                                    <th>Nama</th>
                                    <th>Posisi</th>
                                    <th>Gambar</th>
                                    <th style="width: 11%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($directorslist as $directors)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $directors->name }}</td>
                                        <td>{{ $directors->position }}</td>
                                        <td><img src="/image/directorslist/{{ $directors->image }}" alt="Image"
                                                class="img-fluid" width="90"></td>
                                        <td>
                                            <a href="{{ route('directorslist.edit', $directors->id) }}"
                                                class="btn btn-sm btn-warning mt-2">Edit</a>

                                            <form action="{{ route('directorslist.destroy', $directors->id) }}"
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
