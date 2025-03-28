<div class="container-fluid FAQ bg-light overflow-hidden py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="accordion" id="accordionExample">
                    @foreach ($faqs as $index => $faq)
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }} rounded-top"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $index }}"
                                    aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $index }}">
                                    {{ $faq->ask }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}"
                                class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>{{ $faq->title }}</h5>
                                    <p>{{ $faq->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="FAQ-img RotateMoveRight rounded">
                    <img src="img/about-1.png" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>

    </div>
</div>
