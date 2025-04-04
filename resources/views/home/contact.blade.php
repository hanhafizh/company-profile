@extends('templates.main')
@section('title', 'Contact')
@section('content')
    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary mb-4">Our Contact</h4>
                <h1 class="display-5 mb-4">Kontak Kami</h1>
                <p class="mb-0">
                    Jika Anda memiliki pertanyaan, kebutuhan kerja sama, atau ingin mengetahui lebih lanjut tentang layanan
                    kami, silakan hubungi kami. PT Karya Prima Usahatama siap membantu Anda dengan solusi terbaik dan
                    pelayanan profesional.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    {{-- <h2 class="display-5 mb-2">Formulir Kontak Kami</h2> --}}
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Leave a message here" style="height: 160px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                            style="width: 90px; height: 90px; border-radius: 50px;"><i
                                class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                        <div class="ms-4">
                            <h4>Alamat</h4>
                            <p class="mb-0">Jl. Kyai Haji Zainul Arifin No.8 Blok A2/8, Jakarta Barat, 11140.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                            style="width: 90px; height: 90px; border-radius: 50px;"><i
                                class="fa fa-phone-alt fa-2x text-primary"></i></div>
                        <div class="ms-4">
                            <h4>Mobile</h4>
                            <p class="mb-0">(021) 6343558</p>
                            {{-- <p class="mb-0">+012 345 67890</p> --}}
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                            style="width: 90px; height: 90px; border-radius: 50px;"><i
                                class="fa fa-envelope-open fa-2x text-primary"></i></div>
                        <div class="ms-4">
                            <h4>Email</h4>
                            <p class="mb-0"></p>
                            <p class="mb-0">kpu@kaprima.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-4">
                            {{-- <div class="bg-light d-flex align-items-center justify-content-center"
                                style="width: 90px; height: 90px; border-radius: 50px;"><i
                                    class="fas fa-share fa-2x text-primary"></i></div> --}}
                        </div>
                        {{-- <div class="d-flex">
                            <a class="btn btn-lg-square btn-primary rounded-circle me-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded h-100">
                        <iframe class="rounded w-100" style="height: 500px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6966331791461!2d106.81652975836882!3d-6.1593379573674785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f744c0b49ed9%3A0x3d821caa7cb5f401!2sPT.%20Karya%20Prima%20Usahatama!5e0!3m2!1sid!2sid!4v1743748756876!5m2!1sid!2sid"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
