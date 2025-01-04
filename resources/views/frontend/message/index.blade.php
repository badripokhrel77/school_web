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
                                    <img src="{{asset('storage/' . $message->image) }}"
                                        alt="{{ $message->author }}'s Image" class="img-fluid rounded-circle shadow"
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

@endsection
