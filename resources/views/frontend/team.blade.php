@extends('layout.main')
@section('Our Team')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Our Team</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-2">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-item bg-light" style="width: 140px; margin: 0 auto; overflow: hidden; border-radius: 8px;">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="" style="width: 140px; height: 140px; object-fit: cover;">
                        </div>
                        <div class="text-center p-2">
                            <h5 class="mb-0" style="font-size: 16px;">Instructor Name</h5>
                            <small style="font-size: 13px; color: gray;">Designation</small>
                        </div>
                    </div>
                </div>
            
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">RishiRam Pokhrel</h5>
                            <small>Principle</small>
                            <small>Principle</small>
                            <small>Principle</small>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    <!-- Team End -->
@endsection
