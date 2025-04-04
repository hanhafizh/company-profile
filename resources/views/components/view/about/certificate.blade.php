<div class="container-fluid feature overflow-hidden py-5">
    <div class="container py-5">
        {{-- tittle start --}}
        @foreach ($certificates as $certificate)
            <div class="text-center mx-auto mb-2 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">{{ $certificate->title }}</h4>
                <h1 class="display-5 mb-4">{{ $certificate->sub_title }}</h1>
                <p class="mb-0">{{ \Illuminate\Support\Str::limit($certificate->description, 300) }}</p>
                </p>
            </div>
        @endforeach
        {{-- tittle end --}}
        {{-- dinamis --}}
        <div class="row g-4 justify-content-center text-center mb-2">
            @foreach ($certificatelist as $key => $certificate)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center p-4">
                        <div class="text-center mb-4">
                            <!-- Gunakan $key untuk membuat ID modal unik -->
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#certificateModal{{ $key }}">
                                <img src="/image/certificatelist/{{ $certificate->image }}" class="img-fluid"
                                    style="height: 250px; width: 180px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"
                                    alt="{{ $certificate['title'] }}">
                            </a>
                        </div>
                        <div class="feature-content">
                            <h1 class="h4">{{ $certificate['title'] }}</h1>
                            <p class="mt-4 mb-0">{{ $certificate['description'] }}</p>
                            <!-- Tombol View -->
                            <button class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal"
                                data-bs-target="#certificateModal{{ $key }}">
                                View Certificate
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Modal untuk zoom sertifikat -->
        @foreach ($certificatelist as $key => $certificate)
            <div class="modal fade" id="certificateModal{{ $key }}" tabindex="-1"
                aria-labelledby="certificateModalLabel{{ $key }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="certificateModalLabel{{ $key }}">
                                {{ $certificate['title'] }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="/image/certificatelist/{{ $certificate->image }}" class="img-fluid"
                                alt="{{ $certificate['title'] }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Modal untuk zoom sertifikat end -->
        {{-- dinamis end --}}
    </div>
</div>
</div>
