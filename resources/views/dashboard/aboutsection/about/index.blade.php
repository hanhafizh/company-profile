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
                                    <th style="width: 2%;">No</th>
                                    <th>Judul</th>
                                    <th>Judul Kedua</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th style="width: 11%;">Aksi</th>
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
                                        <td><img src="/image/about/{{ $about->image }}" alt="Image" class="img-fluid"
                                                width="90"></td>
                                        <td>
                                            <a href="{{ route('about.edit', $about->id) }}"
                                                class="btn btn-sm btn-warning mt-2">Edit</a>

                                            <form action="{{ route('about.destroy', $about->id) }}" method="POST"
                                                style="display: inline-block;">
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
