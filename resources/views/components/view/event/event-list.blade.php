<div class="container-fluid blog py-5">
    <div class="container py-5">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/event">Event</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $eventlists->title }}</li>
            </ol>
        </nav>

        <!-- Content -->
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-6 mb-4 text-center">{{ $eventlists->title }}</h2>
                <img src="/image/eventlist/{{ $eventlists->image }}" class="img-fluid mb-4 mx-auto d-block"
                    style="width: 60%;" alt="{{ $eventlists->title }}">

                <div class="mb-4">
                    @php
                        function embedYouTubeLinks($text)
                        {
                            $pattern =
                                '/(https?:\/\/(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)|https?:\/\/(?:www\.)?youtu\.be\/([a-zA-Z0-9_-]+))/';

                            $replacedText = preg_replace_callback(
                                $pattern,
                                function ($matches) {
                                    $videoId = isset($matches[2]) ? $matches[2] : $matches[3];
                                    return '<div class="youtube-embed-container text-center my-2">
                                            <div class="youtube-embed">
                                                <iframe src="https://www.youtube.com/embed/' .
                                        $videoId .
                                        '"
                                                frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>';
                                },
                                $text,
                            );

                            return $replacedText ?: $text;
                        }

                        echo embedYouTubeLinks($eventlists->description);
                    @endphp
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .youtube-embed-container {
        /* Lebar maksimum */
        max-width: 750px;
        /* Posisi tengah */
        margin: 1rem auto;
    }

    .youtube-embed {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .youtube-embed iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }
</style>
