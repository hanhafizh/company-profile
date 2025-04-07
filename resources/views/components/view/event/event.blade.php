<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        @foreach ($events as $event)
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">{{ $event->title }}</h4>
                <h1 class="display-5 mb-4">{{ $event->sub_title }}</h1>
                <p class="mb-0">{{ $event->description }}
                </p>
            </div>
        @endforeach
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-1.png" class="img-fluid w-100" alt="">
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                            <div class="d-flex">
                                <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-dark border p-4 ">
                        <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                        <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-2.png" class="img-fluid w-100" alt="">
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                            <div class="d-flex">
                                <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-dark border p-4 ">
                        <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                        <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-3.png" class="img-fluid w-100" alt="">
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                            <div class="d-flex">
                                <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-dark border p-4 ">
                        <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                        <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-4.png" class="img-fluid w-100" alt="">
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                            <div class="d-flex">
                                <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-dark border p-4 ">
                        <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                        <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
