 <!-- Service Start -->
 <div class="container-fluid service py-5">
     <div class="container py-5">
         @foreach ($services as $service)
             <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                 <h4 class="mb-1 text-primary">{{ $service->title }}</h4>
                 <h1 class="display-5 mb-4">{{ $service->sub_title }}</h1>
                 <p class="mb-0">{{ $service->description }}
                 </p>
             </div>
         @endforeach

         <div class="row g-4 justify-content-center">
             @foreach ($servicelists as $list)
                 <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-stretch wow fadeInUp" data-wow-delay="0.1s">
                     <div class="service-item text-center rounded p-4 w-100">
                         <div class="service-icon d-inline-block bg-light rounded p-4 mb-4">
                             <img src="/image/servicelist/{{ $list->image }}" alt="Image"
                                 class="img-fluid rounded-circle" style="width: 90px; height: 90px; object-fit: cover;">
                         </div>

                         <div class="service-content">
                             <h4 class="mb-4">{{ $list->title }}</h4>
                             <p class="mb-4">{{ $list->description }}</p>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>

     </div>
 </div>
 <!-- Service End -->
