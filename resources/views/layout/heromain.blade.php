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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
    <nav class="navbar navbar-expand-lg bg-primary navbar-light shadow p-0" style="height: 120px;">
        <a href="{{ url('/') }}" class="navbar-brand d-flex flex-column align-items-start px-4 px-lg-5">
            <h2 class="m-0 text-white"><i class="fa fa-book me-3"></i>श्री बाल शिक्षा मा वि</h2>
            <small class="text-white" style="margin-top: 15px; margin-left: 50px;">
                <i class="fa fa-map-marker-alt me-2"></i>Jhimruk-05, Machchhi, Pyuthan
            </small>
        </a>
        {{-- <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto d-flex align-items-center" style="padding-left: 0;">
                <li class="nav-item mb-0 me-3">
                    <a href="tel:+977-1234567890" class="nav-link text-white">
                        <i class="fa fa-phone me-2"></i>086-500001
                    </a>
                </li>
                <li class="nav-item mb-0">
                    <a href="mailto:jhimruk.balshikshyass@gmail.com" class="nav-link text-white"
                        style="text-transform: lowercase;">
                        <i class="fa fa-envelope me-2"></i>jhimruk.balshikshyass@gmail.com
                    </a>
                </li>
            </ul>
        </div>

    </nav>


    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" style="height: 50px;">
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-4 p-4 p-lg-0">
                <a href="{{ url('home') }}"
                    class="nav-item nav-link {{ request()->is('home') ? 'active' : '' }}">Home</a>
                <a href="{{ url('about') }}"
                    class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{ url('courses') }}"
                    class="nav-item nav-link {{ request()->is('courses') ? 'active' : '' }}">Courses</a>
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
                <a href="{{ url('#') }}"
                    class="nav-item nav-link {{ request()->is('#') ? 'active' : '' }}">Notice</a>
                <a href="{{ url('contact') }}"
                    class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-light-green navbar-light shadow p-0" style="height: 30px;">
        {{-- <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-0 w-100 p-0">
                <!-- Centered "Notice" with better vertical alignment -->
                <h6 class="bg-primary text-white p-3 text-center" style="margin-bottom: 0; line-height: 1.5;">
                    Notice
                </h6>
                <marquee>
                    <a href="#" style="color:green; line-height: 3.5;">This is a scrolling notice! Click here for more
                        information.</a>
                </marquee>
            </div>
        </div>
    </nav>


    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 justify-content-center text-center">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="{{ url('about') }}">About Us</a>
                    <a class="btn btn-link" href="{{ url('contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-3 d-flex align-items-start">
                        <i class="fa fa-map-marker-alt me-2"></i>
                        <span class="text-truncate">Jhimruk-05, Machchhi, Pyuthan</span>
                    </p>

                    <p class="mb-3 d-flex align-items-start">
                        <i class="fa fa-phone-alt me-3"></i>
                        <span>086-500001</span>
                    </p>
                    <p class="mb-4 d-flex align-items-start">
                        <i class="fa fa-envelope me-3"></i>
                        <span>jhimruk.balshikshyass@gmail.com</span>
                    </p>
                    <div class="d-flex justify-content-center pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright text-center">
                <div class="row">
                    <div class="col-md-12">
                        &copy; <a class="border-bottom" href="#">Balshikshya S S</a>, All Right Reserved 2024!.
                    </div>
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
    <script src="js/main.js"></script>
</body>

</html>
