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
             <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="service-item text-center rounded p-4">
                     <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                             class="fas fa-mail-bulk fa-5x text-secondary"></i></div>
                     <div class="service-content">
                         <h4 class="mb-4">Email Newsletters</h4>
                         <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                             adipisicing elit
                         </p>
                         <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                 <div class="service-item text-center rounded p-4">
                     <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                             class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                     <div class="service-content">
                         <h4 class="mb-4">Acquistion Emails </h4>
                         <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                             adipisicing elit
                         </p>
                         <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                 <div class="service-item text-center rounded p-4">
                     <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                             class="fa fa-subway fa-5x text-secondary"></i></div>
                     <div class="service-content">
                         <h4 class="mb-4">Retention Emails</h4>
                         <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                             adipisicing elit
                         </p>
                         <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                 <div class="service-item text-center rounded p-4">
                     <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                             class="fas fa-sitemap fa-5x text-secondary"></i></div>
                     <div class="service-content">
                         <h4 class="mb-4">Promotional Emails</h4>
                         <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                             adipisicing elit
                         </p>
                         <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="service-item text-center rounded p-4">
                     <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                             class="fas fa-mail-bulk fa-5x text-secondary"></i></div>
                     <div class="service-content">
                         <h4 class="mb-4">Email Newsletters</h4>
                         <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                             adipisicing elit
                         </p>
                         <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                 <div class="service-item text-center rounded p-4">
                     <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                             class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                     <div class="service-content">
                         <h4 class="mb-4">Acquistion Emails </h4>
                         <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                             adipisicing elit
                         </p>
                         <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                 <div class="service-item text-center rounded p-4">
                     <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                             class="fa fa-subway fa-5x text-secondary"></i></div>
                     <div class="service-content">
                         <h4 class="mb-4">Retention Emails</h4>
                         <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                             adipisicing elit
                         </p>
                         <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                 <div class="service-item text-center rounded p-4">
                     <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                             class="fas fa-sitemap fa-5x text-secondary"></i></div>
                     <div class="service-content">
                         <h4 class="mb-4">Promotional Emails</h4>
                         <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                             adipisicing elit
                         </p>
                         <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Service End -->
