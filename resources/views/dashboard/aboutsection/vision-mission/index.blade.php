<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Visi dan Misi</h5>
                    @if ($visionmissions->isEmpty())
                        <a href="{{ route('visionmission.create') }}" class="btn btn-primary btn-sm"
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
                                    <th>Judul Visi</th>
                                    <th>Deskripsi Visi</th>
                                    <th>Judul Misi</th>
                                    <th>Deskripsi Misi</th>
                                    <th style="width: 11%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($visionmissions as $visionmission)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $visionmission->title }}</td>
                                        <td>{{ $visionmission->sub_title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($visionmission->description, 300) }}</td>
                                        <td>{{ $visionmission->vision_title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($visionmission->vision_description, 300) }}
                                        </td>
                                        <td>{{ $visionmission->mission_title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($visionmission->mission_description, 300) }}
                                        </td>
                                        <td>
                                            <a href="{{ route('visionmission.edit', $visionmission->id) }}"
                                                class="btn btn-sm btn-warning mt-2">Edit</a>

                                            <form action="{{ route('visionmission.destroy', $visionmission->id) }}"
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
