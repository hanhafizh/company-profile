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
