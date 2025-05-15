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
            @foreach ($eventlists as $lists)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item d-flex flex-column justify-content-between"
                        style="height: 100%; min-height: 500px; display: flex; flex-direction: column;">

                        <div class="blog-img" style="width: 100%; height: 200px; overflow: hidden;">
                            <img src="/image/eventlist/{{ $lists->image }}" class="img-fluid w-100 h-100"
                                style="object-fit: cover;" alt="">
                        </div>

                        <div class="blog-content text-dark border p-4"
                            style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <h5 class="mb-4">{{ $lists->title }}</h5>
                                <p class="mb-4">{{ \Illuminate\Support\Str::limit($lists->description, 100, '...') }}
                                </p>
                            </div>
                            <a class="btn btn-light rounded-pill py-2 px-4 mt-auto" href="/event/{{ $lists->id }}">
                                Read More
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->
