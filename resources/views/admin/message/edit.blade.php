@extends('layout.admin')

@section('title', 'Edit Message')

@section('content')

<div class="card mt-5">
    <div class="card-header text-center">
        <h4>Edit Message</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('admin/message/' . $message->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $message->title) }}" placeholder="Enter message title" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter the message content" required>{{ old('content', $message->content) }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if ($message->image)
                    <img src="{{ asset('storage/' . $message->image) }}" alt="Message Image" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;">
                @endif
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3 text-center">
                <button type="submit" class="btn btn-success">Update Message</button>
                <a href="{{ url('admin/message') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

@endsection
