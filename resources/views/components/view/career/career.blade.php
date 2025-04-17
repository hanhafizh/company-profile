<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        @foreach ($careers as $career)
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">{{ $career->title }}</h4>
                <h1 class="display-5 mb-4">{{ $career->sub_title }}</h1>
                <p class="mb-0">{{ $career->description }}</p>
            </div>
        @endforeach

        <div class="row g-4 justify-content-center">
            @if ($careerslist->count() == 0)
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info">
                        Tidak ada lowongan kerja tersedia di PT Karya Prima Usahatama saat ini.
                    </div>
                </div>
            @elseif ($careerslist->count() > 4)
                <!-- Tambahkan ID khusus untuk carousel -->
                <div class="owl-carousel owl-theme" id="careersCarousel">
                    @foreach ($careerslist as $list)
                        <div class="item">
                            <div class="blog-item">
                                <a href="{{ route('careersDetail', ['id' => $list->id]) }}"
                                    class="w-100 text-decoration-none text-dark">
                                    <div class="service-item text-dark border p-4 bg-white">
                                        <!-- Logo Image -->
                                        <div class="logo mb-3">
                                            <img src="{{ asset('img/karyaprima-logo.png') }}" alt="Logo"
                                                class="img-fluid" style="max-width: 70px;">
                                        </div>
                                        <h5 class="mb-2">{{ $list->title_career }}</h5>
                                        <h5 class="mb-4 text-muted" style="font-size: 0.9rem;">
                                            {{ $list->company_name }}</h5>
                                        <div class="mb-4 alert alert-warning d-inline-block py-1 px-2" role="alert"
                                            style="font-size: 0.875rem;">
                                            Posted: {{ \Carbon\Carbon::parse($list->created_at)->diffForHumans() }}
                                        </div>
                                        <h5 class="mb-2 text-muted bi bi-geo-alt" style="font-size: 0.9rem;">
                                            {{ $list->location }}
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row g-4 justify-content-center">
                    @forelse ($careerslist as $list)
                        <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            {{-- start card lowongan --}}
                            <div class="blog-item">
                                <a href="{{ route('careersDetail', ['id' => $list->id]) }}"
                                    class="w-100 text-decoration-none text-dark">
                                    <div class="service-item text-dark border p-4 bg-white">
                                        <!-- Logo Image -->
                                        <div class="logo mb-3">
                                            <img src="{{ asset('img/karyaprima-logo.png') }}" alt="Logo"
                                                class="img-fluid" style="max-width: 70px;">
                                        </div>
                                        <h5 class="mb-2">{{ $list->title_career }}</h5>
                                        <h5 class="mb-4 text-muted" style="font-size: 0.9rem;">
                                            {{ $list->company_name }}</h5>
                                        <div class="mb-4 alert alert-warning d-inline-block py-1 px-2" role="alert"
                                            style="font-size: 0.875rem;">
                                            Posted: {{ \Carbon\Carbon::parse($list->created_at)->diffForHumans() }}
                                        </div>
                                        <h5 class="mb-2 text-muted bi bi-geo-alt" style="font-size: 0.9rem;">
                                            {{ $list->location }}
                                        </h5>
                                    </div>
                                </a>
                            </div>
                            {{-- end card lowongan --}}
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Sertakan CSS dan JS langsung di file blade -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        // Inisialisasi Owl Carousel hanya jika elemen ada dan data > 4
        if ($('#careersCarousel').length > 0 && {{ $careerslist->count() }} > 4) {
            $('#careersCarousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                navText: [
                    '<i class="bi bi-chevron-left"></i>',
                    '<i class="bi bi-chevron-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    }
                }
            });

            // Debugging
            console.log('OwlCarousel initialized with', {{ $careerslist->count() }}, 'items');
        }
    });
</script>
<!-- Blog End -->
