<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Sertifikat List</h5>

                    <a href="{{ route('partnerlist.create') }}" class="btn btn-primary btn-sm"
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
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($partnerlists as $list)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $list->title }}</td>
                                        <td><img src="/image/partnerlist/{{ $list->image }}" alt="Image"
                                                class="img-fluid" width="90"></td>
                                        <td>
                                            <a href="{{ route('partnerlist.edit', $list->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>

                                            <form action="{{ route('partnerlist.destroy', $list->id) }}" method="POST"
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
