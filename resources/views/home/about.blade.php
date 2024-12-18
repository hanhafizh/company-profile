@extends('templates.main')
@section('title', 'About')
@section('content')
    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 mt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="RotateMoveLeft">
                        <img src="img/about-1.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="mb-1 text-primary">About Us</h4>
                    <h1 class="display-5 mb-4">Get Started Easily With a Personalized Product Tour</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, suscipit itaque
                        quaerat dicta porro illum, autem, molestias ut animi ab aspernatur dolorum officia nam dolore.
                        Voluptatibus aliquam earum labore atque.
                    </p>
                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid feature overflow-hidden py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Our Feature</h4>
                <h1 class="display-5 mb-4">Important Features For Email Marketing</h1>
                <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet
                    doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores
                    vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                </p>
            </div>
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



@endsection
