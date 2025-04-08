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

                <p class="mb-4">{{ $eventlists->description }}</p>
            </div>
        </div>
    </div>
</div>
