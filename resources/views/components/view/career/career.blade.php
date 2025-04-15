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

            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="/image/eventlist/tes" class="img-fluid w-100" alt="">
                    </div>
                    <div class="blog-content text-dark border p-4 ">
                        <h5 class="mb-4">tes</h5>
                        <p class="mb-4">tes
                        </p>

                        <a class="btn btn-light rounded-pill py-2 px-4" href="/event/TES">Read
                            More</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Blog End -->
