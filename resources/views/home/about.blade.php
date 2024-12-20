@extends('templates.main')
@section('title', 'About')
@section('content')
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
                        {{-- <a href="/about" class="btn btn-primary rounded-pill py-3 px-5">About More</a> --}}
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



@endsection
