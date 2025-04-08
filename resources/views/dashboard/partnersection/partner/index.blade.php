<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Judul Partner</h5>
                    @if ($partners->isEmpty())
                        <a href="{{ route('partner.create') }}" class="btn btn-primary btn-sm"
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
                                @foreach ($partners as $partner)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $partner->title }}</td>
                                        <td>{{ $partner->sub_title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($partner->description, 300) }}
                                        </td>
                                        <td>
                                            <a href="{{ route('partner.edit', $partner->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>

                                            <form action="{{ route('partner.destroy', $partner->id) }}" method="POST"
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
