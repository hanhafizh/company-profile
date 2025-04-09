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
                                    <th style="width: 2%;">No</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th style="width: 11%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($carousellists as $carousellist)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($carousellist->description, 300) }}
                                        </td>
                                        <td><img src="/image/carousellist/{{ $carousellist->image }}" alt="Image"
                                                class="img-fluid" width="90"></td>
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
