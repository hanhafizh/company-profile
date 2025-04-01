<div class="container">
    @foreach ($photogroups as $photogroup)
        {{-- Tittle Start --}}
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
            <h4 class="text-primary">{{ $photogroup->title }}</h4>
            <h1 class="display-5 mb-4">{{ $photogroup->sub_title }}</h1>
            <p class="mb-0">{{ $photogroup->description }}
            </p>
        </div>
        {{-- Tittle Start --}}

        {{-- List Start --}}
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="border-radius: 20px; overflow: hidden;">
                <div class="carousel-item}">
                    <img src="/image/photogroup/{{ $photogroup->image }}" class="d-block w-100 carousel-img"
                        alt="Slide">
                </div>
            </div>
        </div>
        {{-- List End --}}
    @endforeach
</div>
