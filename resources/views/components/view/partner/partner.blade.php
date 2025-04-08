   <!-- Partner Start -->
   <div class="container mt-5">
       <section class="py-3 py-md-5 py-xl-8">
           @foreach ($partners as $partner)
               <div class="container">
                   <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                       <h4 class="text-primary">{{ $partner->title }}</h4>
                       <h1 class="display-5 mb-4">{{ $partner->sub_title }}</h1>
                       <p class="mb-0">{{ $partner->description }}
                       </p>
                   </div>
               </div>
           @endforeach
           <div class="container overflow-hidden">
               <div class="row gy-4">
                   <div class="col-6 col-md-4 col-xl-3 text-center">
                       <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                           <img src="/image/featurelist/feature1.png" class="img-fluid w-50 h-50" alt="feature1">
                       </div>
                   </div>
                   <div class="col-6 col-md-4 col-xl-3 text-center">
                       <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                           <img src="/image/featurelist/feature2.png" class="img-fluid w-50 h-50" alt="feature2">
                       </div>
                   </div>
                   <div class="col-6 col-md-4 col-xl-3 text-center">
                       <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                           <img src="/image/featurelist/feature3.png" class="img-fluid w-50 h-50" alt="feature3">
                       </div>
                   </div>
                   <div class="col-6 col-md-4 col-xl-3 text-center">
                       <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                           <img src="/image/featurelist/feature4.png" class="img-fluid w-50 h-50" alt="feature4">
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>
   <!-- Partner End -->
