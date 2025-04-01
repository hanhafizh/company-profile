<div class="container-fluid overflow-hidden py-5" style="margin-top: 6rem;">
    <div class="container py-5">
        @foreach ($abouts as $about)
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="RotateMoveLeft">
                        <img src="/image/about/{{ $about->image }}" class="img-fluid"
                            style="width: 500px; height: 500px; object-fit: cover; border-radius: 20px;" alt="">
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="mb-1 text-primary">{{ $about->title }}</h4>
                    <h1 class="display-5 mb-4">{{ $about->sub_title }}</h1>
                    <p class="mb-4">{{ $about->description }}
                    </p>
                    @if (!Request::is('about'))
                        <a href="/about" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
                    @endif

                </div>
            </div>
        @endforeach
    </div>
</div>
