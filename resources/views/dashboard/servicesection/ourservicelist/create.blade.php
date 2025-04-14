@extends('templates_dashboard.main')

@section('title', 'Tambah Service List')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Sertifikat List</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Service List</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('servicelist.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- ServiceList utama -->
                                <div class="mb-3">
                                    <label>Judul</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label>Deskripsi</label>
                                    <textarea name="description" class="form-control" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label>Gambar</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <hr>

                                {{-- service list details --}}
                                <h5>Service List Detail</h5>
                                <!-- Container Detail -->
                                <div id="detail-container">
                                    <div class="detail-item mb-3 border p-3 position-relative">
                                        <label>Title Detail</label>
                                        <input type="text" name="details[0][title]" class="form-control mb-2" required>

                                        <label>Subtitle</label>
                                        <input type="text" name="details[0][subtitle]" class="form-control mb-2">

                                        <label>Gambar</label>
                                        <input type="file" name="details[0][image]" class="form-control">

                                        <button type="button" class="btn btn-danger btn-sm mt-2 remove-detail"
                                            style="position: absolute; top: 10px; right: 10px;">
                                            Hapus
                                        </button>

                                    </div>
                                </div>

                                <!-- Tombol tambah -->
                                <button type="button" id="add-detail" class="btn btn-success mb-3">+ Tambah Detail</button>
                                <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script>
        let detailIndex = 1;

        // Fungsi tambah detail
        document.getElementById('add-detail').addEventListener('click', function() {
            const container = document.getElementById('detail-container');
            const html = `
    <div class="detail-item mb-3 border p-3 position-relative">
        <label>Title Detail</label>
        <input type="text" name="details[${detailIndex}][title]" class="form-control mb-2" required>

        <label>Subtitle</label>
        <input type="text" name="details[${detailIndex}][subtitle]" class="form-control mb-2">

        <label>Gambar</label>
        <input type="file" name="details[${detailIndex}][image]" class="form-control">
        <button type="button" class="btn btn-danger btn-sm mt-2 remove-detail"
            style="position: absolute; top: 10px; right: 10px;">
            Hapus
        </button>

    </div>
            `;
            container.insertAdjacentHTML('beforeend', html);
            detailIndex++;
        });

        // Fungsi hapus detail
        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-detail')) {
                e.target.closest('.detail-item').remove();
            }
        });
    </script>

@endsection
