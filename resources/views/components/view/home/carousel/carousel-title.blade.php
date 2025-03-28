<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
    @foreach ($carousels as $carousel)
        <h4 class="text-primary">{{ $carousel->title }}</h4>
        <h1 class="display-5 mb-4">{{ $carousel->sub_title }}</h1>
        <p class="mb-0">{{ $carousel->description }}
        </p>
    @endforeach
</div>
