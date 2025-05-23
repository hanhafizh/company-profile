<div class="row g-4 justify-content-center text-center mb-5">
    @foreach ($featurelists as $featurelist)
        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center p-4">
                <div class="d-inline-block rounded bg-light p-4 mb-4"
                    style="width: 150px; height: 150px; overflow: hidden; position: relative;">
                    <img src="/image/featurelist/{{ $featurelist->image }}" alt="{{ $featurelist->title }}"
                        style="width: 100%; height: 100%; object-fit: cover;">
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
