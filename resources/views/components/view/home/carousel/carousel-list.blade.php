<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="border-radius: 20px; overflow: hidden;">
        @foreach ($carousellists as $key => $carousellist)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="/image/carousellist/{{ $carousellist->image }}" class="d-block w-100 carousel-img"
                    style="height: 600px; object-fit: cover; border-radius: 20px;" alt="Slide {{ $key + 1 }}">
                <div class="carousel-caption d-none d-md-block">
                    <p>"{{ $carousellist->description }}"</p>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>
