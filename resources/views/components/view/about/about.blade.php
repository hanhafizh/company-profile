<div class="container-fluid overflow-hidden py-5" style="margin-top: 6rem;">
    <div class="container py-5">
        @foreach ($abouts as $about)
            @if (Request::is('about'))
                <!-- Layout khusus untuk halaman about -->
                <div class="row g-5 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <h4 class="mb-1 text-primary">{{ $about->title }}</h4>
                    </div>
                </div>
                <div class="row g-5 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-12 text-center">
                        <h1 class="display-5 mb-4">{{ $about->sub_title }}</h1>
                    </div>
                </div>
                <div class="row g-5 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <img src="/image/about/{{ $about->image }}" class=""
                            style="max-width: 800px; width: 100%; height: auto; border-radius: 20px;" alt="">
                    </div>
                </div>
                <div class="row g-5 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-12 text-justify"> <!-- Rata kanan-kiri -->
                        {!! $about->description !!}
                    </div>
                </div>
            @else
                <!-- Layout untuk halaman lainnya (tetap seperti sebelumnya) -->
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="RotateMoveLeft">
                            <img src="/image/about/{{ $about->image }}" class="img-fluid w-100"
                                style="max-width: 500px; height: auto; object-fit: cover; border-radius: 20px;"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="mb-1 text-primary">{{ $about->title }}</h4>
                        <h1 class="display-5 mb-4">{{ $about->sub_title }}</h1>

                        <div class="text-justify"> <!-- Rata kanan-kiri -->
                            {{ Str::limit(strip_tags($about->description), 200, '...') }}
                        </div>
                        <a href="/about" class="btn btn-primary rounded-pill py-2 px-4 mt-3">About More</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
