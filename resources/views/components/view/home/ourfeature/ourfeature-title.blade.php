@foreach ($ourfeatures as $ourfeature)
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
        <h4 class="text-primary">{{ $ourfeature->title }}</h4>
        <h1 class="display-5 mb-4">{{ $ourfeature->sub_title }}</h1>
        <p class="mb-0">{{ $ourfeature->description }}
        </p>
    </div>
@endforeach
