<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Admin Dashboard')</title>

    <!-- Bootstrap CSS -->
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">



    <!-- Custom CSS -->
    <link href="{{url('css/admin.css')}}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 style="color: #06BBCC; font-weight:bold;"><i class="fa fa-book me-3"></i> बाल शिक्षा</h3>
                <hr>
            </div>


            <ul class="list-unstyled components">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{url('admin')}}"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li class="{{ Request::is('carousel') ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-images"></i> Carousel</a>
                </li>
                <li class="{{ Request::is('service') ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-concierge-bell"></i> Service</a>
                </li>
                <li class="{{ Request::is('about') ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-info-circle"></i> About</a>
                </li>
                <li class="{{ Request::is('categories') ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-list"></i> Categories</a>
                </li>
                <li class="{{ Request::is('courses') ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-graduation-cap"></i> Courses</a>
                </li>
                <li class="{{ Request::is('team') ? 'active' : '' }}">
                    <a href="{{ url('admin/team') }}"><i class="fa fa-users"></i> Team</a>
                </li>
                <li class="{{ Request::is('testimonial') ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-comment-alt"></i> Testimonial</a>
                </li>
                <li class="{{ Request::is('logout') ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
            




        </nav>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <i id="sidebarCollapse" class="fas fa-bars"></i>

                </div>
            </nav>

            @yield('content')

        </div>
    </div>



    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/admin.js"></script>
</body>

</html>
