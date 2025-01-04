@extends('layout.admin')
@section('title', 'Edit Team Member')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Edit Team Member</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('team.update', $teamMember->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <!-- Current Image Preview -->
                        @if($teamMember->image)
                            <div class="mb-3 text-center">
                                <img src="{{ asset('storage/' . $teamMember->image) }}" alt="Current Image" class="img-thumbnail" style="width: 150px; height: 150px;">
                            </div>
                        @endif

                        <!-- Upload New Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload New Image</label>
                            <input 
                                type="file" 
                                class="form-control @error('image') is-invalid @enderror" 
                                id="image" 
                                name="image" 
                                accept="image/*">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input 
                                type="text" 
                                class="form-control @error('name') is-invalid @enderror" 
                                id="name" 
                                name="name" 
                                placeholder="Enter team member's name" 
                                value="{{ old('name', $teamMember->name) }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Post -->
                        <div class="mb-3">
                            <label for="post" class="form-label">Post</label>
                            <input 
                                type="text" 
                                class="form-control @error('post') is-invalid @enderror" 
                                id="post" 
                                name="post" 
                                placeholder="Enter the team member's role or post" 
                                value="{{ old('post', $teamMember->post) }}">
                            @error('post')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Mobile (Optional) -->
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input 
                                type="text" 
                                class="form-control @error('mobile') is-invalid @enderror" 
                                id="mobile" 
                                name="mobile" 
                                placeholder="Enter mobile number (optional)" 
                                value="{{ old('mobile', $teamMember->mobile) }}">
                            @error('mobile')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email (Optional) -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                placeholder="Enter email address (optional)" 
                                value="{{ old('email', $teamMember->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
