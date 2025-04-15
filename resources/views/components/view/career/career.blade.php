<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        @foreach ($careers as $career)
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">{{ $career->title }}</h4>
                <h1 class="display-5 mb-4">{{ $career->sub_title }}</h1>
                <p class="mb-0">{{ $career->description }}
                </p>
            </div>
        @endforeach

        <div class="row g-4 justify-content-center">
            @foreach ($careerslist as $list)
                <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- start card lowongan --}}
                    <div class="blog-item">
                        <a href="{{ route('careersDetail', ['id' => $list->id]) }}"
                            class="w-100 text-decoration-none text-dark">
                            <div class="service-item text-dark border p-4 bg-white">
                                <!-- Logo Image -->
                                <div class="logo mb-3">
                                    <img src="{{ asset('img/karyaprima-logo.png') }}" alt="Logo" class="img-fluid"
                                        style="max-width: 70px;">
                                </div>
                                <h5 class="mb-2">{{ $list->title_career }}</h5>
                                <h5 class="mb-4 text-muted" style="font-size: 0.9rem;">{{ $list->company_name }}</h5>
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


    </div>
</div>
<!-- Blog End -->
