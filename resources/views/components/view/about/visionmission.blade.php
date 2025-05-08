{{-- Visi & Misi Start --}}
@foreach ($visionmissions as $visionmission)
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
        <h4 class="text-primary">{{ $visionmission->title }}</h4>
        <h1 class="display-5 mb-4">{{ $visionmission->sub_title }}</h1>
        <p class="mb-0">
            {{ $visionmission->description }}
        </p>
    </div>

    {{-- Visi & Misi Content --}}
    <div class="container">
        <div class="row g-4 justify-content-center text-center mb-5">
            {{-- Visi --}}
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card border-0 shadow p-4 h-100">
                    <div class="card-body d-flex flex-column">
                        <h1 class="h4 text-primary">{{ $visionmission->vision_title }}</h1>
                        <div class="mt-4 mb-0 flex-grow-1 text-start">
                            @if (str_contains($visionmission->vision_description, '*'))
                                @php
                                    $items = array_filter(explode('*', $visionmission->vision_description));
                                @endphp
                                <ul>
                                    @foreach ($items as $item)
                                        @if (trim($item) != '')
                                            <li>{{ trim($item) }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            @else
                                <p>{{ $visionmission->vision_description }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{-- Misi --}}
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card border-0 shadow p-4 h-100">
                    <div class="card-body d-flex flex-column">
                        <h1 class="h4 text-primary">{{ $visionmission->mission_title }}</h1>
                        <div class="mt-4 mb-0 flex-grow-1 text-start">
                            @if (str_contains($visionmission->mission_description, '*'))
                                @php
                                    $items = array_filter(explode('*', $visionmission->mission_description));
                                @endphp
                                <ul>
                                    @foreach ($items as $item)
                                        @if (trim($item) != '')
                                            <li>{{ trim($item) }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            @else
                                <p>{{ $visionmission->mission_description }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- Visi & Misi End --}}
