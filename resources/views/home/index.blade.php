@extends('templates.main')
@section('title', 'Home')
@section('content')
    <!-- Hero Header Start -->
    <div class="container">
        <div class="hero-header container-fluid overflow-hidden px-5">
            <div class="rotate-img">
                <img src="img/sty-1.png" class="img-fluid w-100" alt="">
                <div class="rotate-sty-2"></div>
            </div>
            @foreach ($landings as $landing)
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <h1 class="display-6 text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s">{{ $landing->title }}</h1>
                        <p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">{{ $landing->description }}</p>
                        {{-- <a href="#" class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp"
                            data-wow-delay="0.7s">Get
                            Started</a> --}}
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <img src="/image/landing/{{ $landing->image }}" class="img-fluid w-100 h-100"
                            alt="{{ $landing->title }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Hero Header End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5" style="margin-top: 6rem;">
        <div class="container py-5">
            @foreach ($abouts as $about)
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="RotateMoveLeft">
                            <img src="/image/about/{{ $about->image }}" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="mb-1 text-primary">About Us</h4>
                        <h1 class="display-5 mb-4">{{ $about->title }}</h1>
                        <p class="mb-4">{{ $about->description }}
                        </p>
                        <a href="/about" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- About End -->

    <!-- Carousel Start -->
    <!-- Hero Header Start -->
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
            @foreach ($carousels as $carousel)
                <h4 class="text-primary">{{ $carousel->title }}</h4>
                <h1 class="display-5 mb-4">{{ $carousel->sub_title }}</h1>
                <p class="mb-0">{{ $carousel->description }}
                </p>
            @endforeach
        </div>
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="border-radius: 20px; overflow: hidden;">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1695800293626-c71dffa08164?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="d-block w-100" style="border-radius: 20px;" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1615226882893-17520863eb04?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="d-block w-100" style="border-radius: 20px;" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <p>"Curabitur non nulla sit amet nisl tempus convallis."</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
    <!-- Hero Header End -->
    <!-- Carousel End -->

    <!-- Feature Start -->
    <div class="container-fluid feature overflow-hidden py-5">
        <div class="container py-5">
            @foreach ($ourfeatures as $ourfeature)
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary">Our Feature</h4>
                    <h1 class="display-5 mb-4">{{ $ourfeature->title }}</h1>
                    <p class="mb-0">{{ $ourfeature->description }}
                    </p>
                </div>
            @endforeach
            <div class="row g-4 justify-content-center text-center mb-5">
                @foreach ($featurelists as $featurelist)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="text-center p-4">
                            <div class="d-inline-block rounded bg-light p-4 mb-4">
                                <img src="/image/featurelist/{{ $featurelist->image }}" class="img-fluid w-50 h-50"
                                    alt="{{ $featurelist->title }}">
                            </div>

                            <div class="feature-content">
                                <h1 class="h4">{{ $featurelist->title }} </h1>
                                <p class="mt-4 mb-0">{{ $featurelist->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <div class="my-3">
                        <a href="#" class="btn btn-primary d-inline rounded-pill px-5 py-3">More Features</a>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
    <!-- Feature End -->

    <!-- FAQ Start -->
    <div class="container-fluid FAQ bg-light overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="accordion" id="accordionExample">
                        @foreach ($faqs as $index => $faq)
                            <div class="accordion-item border-0 mb-4">
                                <h2 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }} rounded-top"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $index }}">
                                        {{ $faq->ask }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}"
                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body my-2">
                                        <h5>{{ $faq->title }}</h5>
                                        <p>{{ $faq->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="FAQ-img RotateMoveRight rounded">
                        <img src="img/about-1.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- FAQ End -->


@endsection
