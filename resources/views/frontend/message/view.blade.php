@extends('layout.main')
@section('title', 'Message')
@section('content')

    <div class="container-xxl py-5">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Message From Us</h6>
                <h1 class="mb-5">Messages</h1>
            </div>

            <!-- Messages Section -->
            <div class="row g-4 align-items-center">
                <h4 class="text-primary mb-3 text-center">{{ $message->title }}</h4>
                <div class="col-lg-12 d-flex wow fadeInUp" data-wow-delay="0.3s">
                    <!-- Left Side: Content -->
                    
                    <div class="col-6 bg-light p-4 rounded-start" style="width:70%;">
                        
                        <p class="message-content mb-4" style="line-height: 1.6; font-size:20px;">
                            {{ $message->content }}
                        </p>
                        <p class="text-primary fw-bold mb-0 text-end">- {{ $message->author }}</p>
                    </div>

                    <!-- Right Side: Image -->
                    <div class="col-6 p-0" style="width:30%;height: 350px;">
                        <img src="{{ asset('storage/' . $message->image) }}"
                             alt="{{ $message->author }}'s Image"
                             class="img-fluid rounded-end"
                             style="width: 350px; height: 350px; object-fit: cover;">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
