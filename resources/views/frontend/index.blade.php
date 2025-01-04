@extends('layout.heromain')
@section('बाल शिक्षा')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">सर्वोत्तम सरकारी शिक्षा
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">शिक्षा : विकास र प्रगतिको मार्ग</h1>
                                <p class="fs-5 text-white mb-4 pb-2">हरेक विद्यार्थीका लागि समान शैक्षिक अवसर प्रदान गर्दै।
                                    शैक्षिक उत्कृष्टता, सांस्कृतिक मूल्य र सामुदायिक सेवामा केन्द्रित समग्र विकासलाई
                                    प्रोत्साहन गर्दै। नेपालको भावी पुस्ताको उज्ज्वल भविष्य निर्माणमा प्रतिबद्ध।</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">प्रत्येक विद्यार्थीका लागि
                                    गुणस्तरीय शिक्षा
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">शिक्षा उज्ज्वल भविष्यको कुञ्जी हो
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">शिक्षा उज्ज्वल भविष्यको आधार हो। हाम्रो विद्यालयले
                                    जिज्ञासा उत्पन्न गर्ने, सिर्जनशीलतालाई प्रोत्साहन गर्ने, र जीवनमा सफलताका लागि
                                    विद्यार्थीलाई तयार गर्ने गुणस्तरीय सिकाइ अवसरहरू प्रदान गर्दछ। प्रत्येक बालबालिकाको लागि
                                    एक बलियो शैक्षिक मार्ग निर्माण गर्न हामीसँग सामेल हुनुहोस्।</p>

                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Our skilled instructors are dedicated to providing high-quality education, offering
                                personalized learning experiences that empower students to reach their full potential.</p>

                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to BALSHIKSHYA</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                        et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                        et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat
                        amet</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International
                                Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International
                                Certificate</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- message Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Message From Us</h6>
                <h1 class="mb-5">Messages</h1>
            </div>

            <!-- Messages Section -->
            <div class="row g-4 align-items-start">
                @foreach ($messages as $message)
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-light p-4 rounded shadow" style="height: 350px;">
                            <h4 class="text-primary mb-3">{{ $message->title }}</h4>
                            <p class="message-content">
                                {{ Str::limit($message->content, 400, '...') }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $message->image) }}" alt="{{ $message->author }}'s Image"
                                        class="img-fluid rounded-circle shadow"
                                        style="width: 65px; height: 65px; object-fit: cover;">
                                    <p class="text-primary fw-bold mb-0 ms-3">- {{ $message->author }}</p>
                                </div>
                                <a href="{{ url('message', $message->id) }}"
                                    class="btn btn-primary rounded-pill px-4 py-2 shadow-sm hover-effect">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Message End -->

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        {{-- <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt=""
                            style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-3.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Teams</h6>
                <h1 class="mb-5">Our Teachers</h1>
            </div>
            <div class="row g-4">
                <div class="col-12 text-center d-flex justify-content-center align-items-center flex-wrap"
                    style="min-height: 200px;">
                    @forelse ($teamMembers as $member)
                        <div class="team-item bg-light mb-4 mx-3" style="width: 220px; height: 350px;">
                            <!-- Image Container -->
                            <div class="overflow-hidden" style="width: 100%; height: 200px;">
                                <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}"
                                    style="width: 220px; height: 220px; object-fit: cover;">
                            </div>
                            <!-- Content -->
                            <div class="text-center p-3">
                                <h5 class="mb-0">{{ $member->name }}</h5>
                                <small>{{ $member->post }}</small>
                                @if ($member->mobile)
                                    <div class="mt-2">
                                        <small>
                                            <i class="fas fa-phone-alt text-primary me-2"></i>
                                            {{ $member->mobile }}
                                        </small>
                                    </div>
                                @endif
                                @if ($member->email)
                                    <div>
                                        <small>
                                            <i class="fas fa-envelope text-primary me-2"></i>
                                            {{ $member->email }}
                                        </small>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-muted">No team members added yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
