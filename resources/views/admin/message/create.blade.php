@extends('layout.admin')

@section('title', 'Create Message')

@section('content')

<div class="card mt-5">
    <div class="card-header text-center">
        <h4>Create New Message</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('admin/message') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter message from..." required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="title">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}" placeholder="Enter Author name" required>
                @error('author')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter the message content" required>{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3 text-center">
                <button type="submit" class="btn btn-success">Save Message</button>
                <a href="{{ url('admin/message') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

@endsection
