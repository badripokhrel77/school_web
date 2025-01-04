<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'बाल शिक्षा')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.2/dist/wow.min.js"></script>


    <!-- Template Stylesheet -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>बाल शिक्षा</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('home') }}"
                    class="nav-item nav-link {{ request()->is('home') ? 'active' : '' }}">Home</a>
                <a href="{{ url('about') }}"
                    class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{ url('courses') }}"
                    class="nav-item nav-link {{ request()->is('courses') ? 'active' : '' }}">Courses</a>
                    <a href="{{ url('message') }}"
                    class="nav-item nav-link {{ request()->is('message') ? 'active' : '' }}">Message</a>
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ request()->is('team') || request()->is('testimonial') ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ url('team') }}"
                            class="dropdown-item {{ request()->is('team') ? 'active' : '' }}">Our Team</a>
                        <a href="{{ url('testimonial') }}"
                            class="dropdown-item {{ request()->is('testimonial') ? 'active' : '' }}">Testimonial</a>
                    </div>
                </div>
                <a href="{{ url('#') }}"
                    class="nav-item nav-link {{ request()->is('#') ? 'active' : '' }}">Gallary</a>
                <a href="{{ url('notice') }}"
                    class="nav-item nav-link {{ request()->is('notice') ? 'active' : '' }}">Notice</a>
                <a href="{{ url('contact') }}"
                    class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>

    </nav>

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-2 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3" style="margin-left: 0;">Quick Link</h4>
                    <a class="btn btn-link" href="" style="padding-left: 0; text-align: left;">About Us</a>
                    <a class="btn btn-link" href="" style="padding-left: 0; text-align: left;">Contact Us</a>
                    <a class="btn btn-link" href="" style="padding-left: 0; text-align: left;">Courses</a>
                    <a class="btn btn-link" href="" style="padding-left: 0; text-align: left;">Notices</a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-2"></i>Jhimruk-05, Machchhi, Pyuthan </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+977 9866863175</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>jhimruk.balshikshyass@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.facebook.com/profile.php?id=100090991036442" target="blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">School Newsletter</h4>
                    <p>Stay updated with the latest events, achievements, and announcements from our school community.
                    </p>

                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container">
            <div class="copyright d-flex justify-content-center justify-content-md-between align-items-center">
                <p class="mb-0 text-center">
                    &copy; <a class="border-bottom" href="#">Balshikshya S S</a>, All Rights Reserved 2024.
                </p>
                <div class="text-end">
                    Designed By <a class="border-bottom" href="#">Atirab Techno Pvt. Ltd</a>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div
                style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid rgba(255, 255, 255, 0.1); padding: 15px 0; font-size: 14px; color: rgba(255, 255, 255, 0.7);">
                <p style="margin: 0 auto; text-align: center; flex-grow: 0;">
                    &copy; <a href="#">Balshikshya S S</a>, All Rights Reserved 2024.
                </p>
                <div style="text-align: right; flex-shrink: 0;">
                    Designed By <a href="#">Atirab Techno Pvt. Ltd</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{url('js/main.js')}}"></script>
</body>

</html>
