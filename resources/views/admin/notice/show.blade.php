@extends('layout.admin')
@section('title', 'Notice Details')
@section('content')

{{-- @section('content') --}}
    <div class="container my-5">
        <h2 class="text-center mb-4">Notice Board</h2>
        <hr>
        <h3 class="text-primary fw-bold text-center mb-4">
            {{ $notice->title }}
        </h3>

        <!-- Notice Card Row -->
        <div class="row">
            <div class="col-12">
                <div class="d-flex shadow-sm p-3 rounded align-items-stretch">
                    
                    <div class="w-75 pe-3">
                        <!-- Notice Description -->
                        <p class="mb-2 text-muted" style="font-size: 16px; line-height: 1.5; margin-bottom: 1rem;">
                            {{ $notice->description }}
                        </p>

                        <!-- Published Date and Time -->
                        <div class="text-muted small mb-3">
                            <span>Published on:</span>
                            <span class="me-2 ms-2">
                                {{ \Carbon\Carbon::parse($notice->published_date)->format('Y-m-d') }}
                            </span>
                            <span>
                                {{ \Carbon\Carbon::parse($notice->published_date)->format('h:i A') }}
                            </span>
                        </div>

                        <!-- Back Link -->
                        <a href="{{ url('admin/notice') }}" class="text-decoration-none text-primary fw-bold">
                            Back
                        </a>
                    </div>

                    <!-- Image Section (25% Width) -->
                    <div class="w-25 d-flex align-items-center">
                        @if ($notice->image)
                            <!-- Display Notice Image -->
                            <img src="{{ asset('storage/' . $notice->image) }}" alt="Notice Image"
                                class="img-fluid rounded" style="width: 100%; height: auto; object-fit: cover;">
                        @else
                            <!-- Display Default Image -->
                            <img src="{{ asset('img/Noimage.jpg') }}" alt="Default Image"
                                class="img-fluid rounded" style="width: 100%; height: auto; object-fit: cover;">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

