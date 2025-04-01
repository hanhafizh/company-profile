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

        {{-- Direktur Start --}}
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-flex flex-column align-items-center">
                <!-- Image as a square with larger size -->
                <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="User Photo" class="mb-3"
                    style="width: 250px; height: 350px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">

                <h1 class="h4 text-primary">Sugito</h1>
                <p class="mb-0 flex-grow-1">Direktur Utama</p>
            </div>
        </div>
        {{-- Direktur End --}}

    </div>
</div>
