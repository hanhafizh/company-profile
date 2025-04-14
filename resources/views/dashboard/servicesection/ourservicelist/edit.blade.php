@extends('templates_dashboard.main')

@section('title', 'Edit Service List')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Service List</h4>
                        </div>

                        <div class="card-body">
                            <a href="{{ url()->previous() }}" class="btn btn-primary mb-2"
                                style="margin-right: auto; ">Kembali</a>
                            <form action="{{ route('servicelist.update', $servicelist->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Data utama -->
                                <div class="mb-3">
                                    <label>Judul</label>
                                    <input type="text" name="title" value="{{ $servicelist->title }}"
                                        class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label>Deskripsi</label>
                                    <textarea name="description" class="form-control" required>{{ $servicelist->description }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label>Gambar</label><br>
                                    @if ($servicelist->image)
                                        <img src="{{ asset('image/servicelist/' . $servicelist->image) }}" width="120"
                                            class="mb-2">
                                    @endif
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <hr>

                                <h5>Detail Service</h5>
                                <div id="detail-container">
                                    @foreach ($servicelist->details as $index => $detail)
                                        <div class="detail-item mb-3 border p-3 position-relative">
                                            <input type="hidden" name="details[{{ $index }}][id]"
                                                value="{{ $detail->id }}">
                                            <label>Title Detail</label>
                                            <input type="text" name="details[{{ $index }}][title]"
                                                value="{{ $detail->title }}" class="form-control mb-2" required>

                                            <label>Subtitle</label>
                                            <input type="text" name="details[{{ $index }}][subtitle]"
                                                value="{{ $detail->subtitle }}" class="form-control mb-2">

                                            <label>Gambar</label><br>
                                            @if ($detail->image)
                                                <img src="{{ asset('image/servicelist/details/' . $detail->image) }}"
                                                    width="100" class="mb-2">
                                            @endif
                                            <input type="file" name="details[{{ $index }}][image]"
                                                class="form-control">

                                            <button type="button" class="btn btn-danger btn-sm mt-2 remove-detail"
                                                style="position: absolute; top: 10px; right: 10px;">
                                                - Hapus
                                            </button>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>

                                <button type="button" id="add-detail" class="btn btn-success mb-3">+ Tambah Detail</button>
                                <button type="submit" class="btn btn-primary mb-3">Simpan Perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        let detailIndex = {{ $servicelist->details->count() }};

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

                <button type="button" class="btn btn-danger btn-sm mt-2 remove-detail" style="position: absolute; top: 10px; right: 10px;">
                    - Hapus
                </button>
            </div>
        `;
            container.insertAdjacentHTML('beforeend', html);
            detailIndex++;
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-detail')) {
                e.target.closest('.detail-item').remove();
            }
        });
    </script>
@endsection
