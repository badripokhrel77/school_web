@extends('layout.admin')
@section('title', 'Dashboard')
@section('content')

    <!-- Page Content -->
    <div class="container mt-4">
        <h2>Welcome to the School Dashboard</h2>
        <p>Here you can manage students, teachers, classes, and schedules.</p>

        <!-- Dashboard Stats -->
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total Students</div>
                    <div class="card-body">
                        <h5 class="card-title">350</h5>
                        <p class="card-text">Number of enrolled students in the school.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Total Teachers</div>
                    <div class="card-body">
                        <h5 class="card-title">50</h5>
                        <p class="card-text">Number of teachers working at the school.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Total Classes</div>
                    <div class="card-body">
                        <h5 class="card-title">30</h5>
                        <p class="card-text">Total number of classes offered this year.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="mt-4">
            <h4>Recent Activities</h4>
            <ul class="list-group">
                <li class="list-group-item">New student enrolled in Grade 10</li>
                <li class="list-group-item">New class schedule published</li>
                <li class="list-group-item">Grade reports updated for Semester 1</li>
            </ul>
        </div>
    </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle sidebar on mobile
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
@endsection
