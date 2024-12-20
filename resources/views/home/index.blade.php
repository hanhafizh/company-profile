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
                        <h1 class="display-4 text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s">{{ $landing->title }}</h1>
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
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i
                                class="fas fa-envelope fa-5x text-secondary"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Email Marketing <i class="fa fa-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i
                                class="fas fa-mail-bulk fa-5x text-secondary"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Email Builder <i class="fa fa-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center rounded p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i
                                class="fas fa-sitemap fa-5x text-secondary"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Customer Builder <i class="fa fa-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="text-center rounded p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i
                                class="fas fa-tasks fa-5x text-secondary"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Campaign Manager <i class="fa fa-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
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
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button rounded-top" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseTOne">
                                    Why did you choose Our Email Services?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit, sapiente
                                        quis illo quia nulla atque maxime fuga minima ipsa quae cum consequatur, sit,
                                        delectus exercitationem odit officiis maiores! Neque, quidem corrupti modi
                                        architecto eos saepe incidunt dignissimos rerum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio hic fuga
                                        odio excepturi ducimus sequi at. Doloribus, non aspernatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Are there any hidden charges?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit, sapiente
                                        quis illo quia nulla atque maxime fuga minima ipsa quae cum consequatur, sit,
                                        delectus exercitationem odit officiis maiores! Neque, quidem corrupti modi
                                        architecto eos saepe incidunt dignissimos rerum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio hic fuga
                                        odio excepturi ducimus sequi at. Doloribus, non aspernatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    What are the key challenges of email marketing?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit, sapiente
                                        quis illo quia nulla atque maxime fuga minima ipsa quae cum consequatur, sit,
                                        delectus exercitationem odit officiis maiores! Neque, quidem corrupti modi
                                        architecto eos saepe incidunt dignissimos rerum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio hic fuga
                                        odio excepturi ducimus sequi at. Doloribus, non aspernatur.</p>
                                </div>
                            </div>
                        </div>
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
