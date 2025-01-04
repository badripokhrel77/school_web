@extends('layout.main')
@section('title', 'Notice Board')

@section('content')
    <div class="container my-5">
        <h2 class="text-center mb-4">Notice Board</h2>

        <!-- Notice Cards Row -->
        <div class="row">
            @foreach ($notices as $notice)
                <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-start shadow-sm p-3 rounded bg-light">
                        <!-- Image Section -->
                        <div class="me-3">
                            @if ($notice->image)
                                <img src="{{ asset('storage/' . $notice->image) }}" alt="Notice Image"
                                    class="img-fluid rounded" style="width: 80px; height: 80px; object-fit: cover;">
                            @else
                                <!-- Display the default image -->
                                <img src="{{ asset('img/Noimage.jpg') }}" alt="Default Image"
                                    class="img-fluid rounded" style="width: 80px; height: 80px; object-fit: cover;">
                            @endif
                        </div>
                        
                        

                        <!-- Text Section -->
                        <div>
                            <h5 class="text-primary fw-bold">
                                {{ \Illuminate\Support\Str::limit($notice->title, 40) }}
                            </h5>
                            <p class="mb-2 text-muted">
                                {{ \Illuminate\Support\Str::limit($notice->description, 100) }}
                            </p>
                            <div class="text-muted small d-flex align-items-center">
                                <span>Published on:</span>
                                <span class="me-2 ms-2">
                                    {{ \Carbon\Carbon::parse($notice->published_date)->format('Y-m-d') }}
                                </span>
                                <span>
                                    {{ \Carbon\Carbon::parse($notice->published_date)->format('h:i A') }}
                                </span>
                            </div>
                            
                            <a href="{{ url('notice', $notice->id) }}"
                                class="text-decoration-none text-primary fw-bold">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
