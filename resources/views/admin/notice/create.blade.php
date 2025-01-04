@extends('layout.admin')
@section('title', 'Add Notice')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Add Notice</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('notice.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input 
                                type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                id="title" 
                                name="title" 
                                placeholder="Enter notice title" 
                                value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea 
                                class="form-control @error('description') is-invalid @enderror" 
                                id="description" 
                                name="description" 
                                rows="4" 
                                placeholder="Enter notice description">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Upload Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image (Optional)</label>
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

                        <!-- Published Date -->
                        <div class="mb-3">
                            <label for="published_date" class="form-label">Published Date</label>
                            <input 
                                type="date" 
                                class="form-control @error('published_date') is-invalid @enderror" 
                                id="published_date" 
                                name="published_date" 
                                value="{{ old('published_date') }}">
                            @error('published_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Notice</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
