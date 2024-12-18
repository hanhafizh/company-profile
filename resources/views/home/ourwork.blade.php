@extends('templates.main')
@section('title', 'Ourwork')
@section('content')
    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Our Work</h4>
                <h1 class="display-5 mb-4">Join Us For New Work</h1>
                <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet
                    doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores
                    vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($ourworks as $ourwork)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="/image/ourworks/{{ $ourwork->image }}" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content text-dark border p-4 ">
                                <h5 class="mb-4">{{ $ourwork->title }}</h5>
                                <p class="mb-4">{{ \Illuminate\Support\Str::limit($ourwork->description, 100, '...') }}
                                </p>

                                <a class="btn btn-light rounded-pill py-2 px-4" href="/ourwork/{{ $ourwork->id }}">Read
                                    More</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
