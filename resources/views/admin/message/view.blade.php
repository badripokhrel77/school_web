@extends('layout.admin')
@section('title', 'View Message')
@section('content')

<div class="container-xxl py-5" style="max-width: 1140px; margin: 0 auto;">
    <div class="container px-3">
        <!-- Section Title -->
        <h1 class="mb-5 text-center fw-bold" style="font-size: 2.5rem;">Messages</h1>

        <!-- Messages Section -->
        <div class="row g-4 align-items-center">
            <div class="col-lg-12 d-flex">
                <!-- Left Side: Content -->
                <div class="col-6 bg-light p-3 rounded-start d-flex flex-column justify-content-between">
                    <h4 class="text-primary mb-3">{{ $message->title }}</h4>
                    <p class="mb-4" style="line-height: 1.6; font-size: 1rem; color: #020a13;">
                        {{ $message->content }}
                    </p>
                    <p class="text-primary fw-bold text-end mb-0">- {{ $message->author }}</p>
                </div>

                <!-- Right Side: Image -->
                <div class="col-6 p-0 rounded-end overflow-hidden" style=" ">
                    <img src="{{ asset('storage/'. $message->image) }}" 
                         alt="{{ $message->author }}'s Image" 
                         class="img-fluid w-100 h-100" 
                         style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
