{{-- @extends('layout.main')
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
                <h6 class="section-title bg-white text-center text-primary px-3">Our Teams</h6>
                <h1 class="mb-5">Our Teachers</h1>
            </div>

            <div class="row g-4">
                <div class="col-12 text-center d-flex justify-content-center align-items-center flex-wrap"
                    style="min-height: 200px;">
                    @forelse ($teamMembers as $member)
                        <div class="team-item bg-light mb-4 mx-3" style="width: 220px; height: 350px;">
                            <!-- Image Container -->
                            <div class="overflow-hidden" style="width: 100%; height: 200px;">
                                <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}"
                                    style="width: 220px; height: 220px; object-fit: cover;">
                            </div>
                            <!-- Content -->
                            <div class="text-center p-3">
                                <h5 class="mb-0">{{ $member->name }}</h5>
                                <small>{{ $member->post }}</small>
                                @if ($member->mobile)
                                    <div class="mt-2">
                                        <small>
                                            <i class="fas fa-phone-alt text-primary me-2"></i>
                                            {{ $member->mobile }}
                                        </small>
                                    </div>
                                @endif
                                @if ($member->email)
                                    <div>
                                        <small>
                                            <i class="fas fa-envelope text-primary me-2"></i>
                                            {{ $member->email }}
                                        </small>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-muted">No team members added yet.</p>
                    @endforelse
                </div>
            </div>


        </div>
    </div>

    <!-- Team End -->
@endsection --}}


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
            <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
            <h1 class="mb-5">Our Teachers</h1>
        </div>

        <div class="row g-4">
            <div class="col-12 text-center d-flex justify-content-center align-items-center flex-wrap">
                @forelse ($teamMembers as $member)
                    <div class="team-item bg-light mb-4 mx-3" style="width: 220px; height: 400px; border-radius: 15px;">
                        <!-- Image Container -->
                        <div class="overflow-hidden mx-auto mt-3 rounded-circle" 
                             style="width: 200px; height: 200px; border: 5px solid #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <img src="{{ asset('storage/' . $member->image) }}" 
                                 alt="{{ $member->name }}" 
                                 class="rounded-circle"
                                 style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <!-- Content -->
                        <div class="text-center p-3">
                            <h5 class="mb-1 text-primary">{{ $member->name }}</h5>
                            <small class="text-muted">{{ $member->post }}</small>
                            @if ($member->mobile)
                                <div class="mt-2">
                                    <small>
                                        <i class="fas fa-phone-alt text-primary me-2"></i>
                                        {{ $member->mobile }}
                                    </small>
                                </div>
                            @endif
                            @if ($member->email)
                                <div>
                                    <small>
                                        <i class="fas fa-envelope text-primary me-2"></i>
                                        {{ $member->email }}
                                    </small>
                                </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <p class="text-center text-muted">No team members added yet.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection
