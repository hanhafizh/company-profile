{{-- start tittle --}}
@foreach ($directors as $director)
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
        <h4 class="text-primary">{{ $director->title }}</h4>
        <h1 class="display-5 mb-4">{{ $director->sub_title }}</h1>
        <p class="mb-0">
            {{ $director->description }}
        </p>
    </div>
@endforeach
{{-- end tittle --}}



<div class="container">
    <div class="row g-4 justify-content-center text-center mb-5">
        @foreach ($directorslist as $list)
            {{-- Direktur Start --}}
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex flex-column align-items-center">
                    <!-- Image as a square with larger size -->
                    <img src="/image/directorslist/{{ $list->image }}" alt="User Photo" class="mb-3"
                        style="width: 300px; height: 400px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">

                    <h1 class="h4 text-primary">{{ $list->name }}</h1>
                    <p class="mb-0 flex-grow-1">{{ $list->position }}</p>
                </div>
            </div>
            {{-- Direktur End --}}
        @endforeach
    </div>
</div>
