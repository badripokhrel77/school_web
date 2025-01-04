@extends('layout.admin')

@section('title', 'Messages')

@section('content')

<div class="card mt-5">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="w-100 text-center">
            <h4>MESSAGE BOARD</h4>
        </div>
        <a href="{{ url('admin/message/create') }}" class="btn btn-primary" id="addButton"><i class="fas fa-plus"></i></a>
    </div>
    <div class="card-body">
        @if($messages->isEmpty())
            <p class="text-center text-muted">No messages found. Click "Add Message" to create a new message.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Content</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $index => $message)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $message->title }}</td>
                            <td>{{ $message->author }}</td>
                            <td>
                                <img src="{{ $message->image ? asset('storage/' . $message->image) : 'https://via.placeholder.com/80' }}" alt="Message Image" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;">
                            </td>
                            <td>{{ \Illuminate\Support\Str::limit($message->content, 30, '...') }}</td>
                            <td>
                                <a href="{{ url('admin/message/' . $message->id ) }}" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a>
                                <a href="{{ url('admin/message/' . $message->id . '/edit') }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <form action="{{ url('admin/message/' . $message->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this message?');"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

@endsection
