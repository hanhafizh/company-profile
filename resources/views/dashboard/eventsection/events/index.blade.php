<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Judul Direksi</h5>
                    @if ($events->isEmpty())
                        <a href="{{ route('event.create') }}" class="btn btn-primary btn-sm"
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
                                    <th style="width: 10%;">Judul</th>
                                    <th style="width: 10%;">Judul Kedua</th>
                                    <th>Deskripsi</th>
                                    <th style="width: 11%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->sub_title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($event->description, 300) }}
                                        </td>
                                        <td>
                                            <a href="{{ route('event.edit', $event->id) }}"
                                                class="btn btn-sm btn-warning mt-2">Edit</a>

                                            <form action="{{ route('event.destroy', $event->id) }}" method="POST"
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
