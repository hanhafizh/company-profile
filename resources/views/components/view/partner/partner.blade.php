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
                   <div class="row justify-content-center">
                       @foreach ($partnerlists as $lists)
                           <div class="col-6 col-md-4 col-xl-3 text-center mt-4">
                               <div class="px-1 py-1">
                                   <img src="/image/partnerlist/{{ $lists->image }}" class="img-fluid"
                                       style="width: 60%; height: 60%;" alt="{{ $lists->title }}">
                               </div>
                           </div>
                       @endforeach
                   </div>

               </div>
           </div>
       </section>
   </div>
   <!-- Partner End -->
