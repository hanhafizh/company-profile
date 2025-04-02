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

        <div class="row g-4 justify-content-center text-center mb-2">
            {{-- sertifikat start --}}
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center p-4">
                    <div class="text-center mb-4">
                        <img src="https://pjm.mercubuana.ac.id/wp-content/uploads/2022/11/ISO-2022-2025-768x1087.jpg"
                            class="img-fluid"
                            style="height: 250px; width: 180px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"
                            alt="Sertifikat ISO">
                    </div>
                    <div class="feature-content">
                        <h1 class="h4">Sertifikat Iso 1</h1>
                        <p class="mt-4 mb-0">Sertifikat Iso Adalah
                        </p>
                    </div>
                </div>
            </div>
            {{-- sertifikat end --}}

        </div>
    </div>
</div>
</div>
