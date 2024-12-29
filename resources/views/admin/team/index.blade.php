@extends('layout.admin')
@section('title', 'Our Team')
@section('content')

<div class="card mt-5">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="w-100 text-center">
            <h4>OUR TEAM</h4>
        </div>
        <a href="{{ url('admin/team/create') }}" class="btn btn-primary" id="addButton">Add</a>
    </div>
    <div class="card-body">
        @if($teamMembers->isEmpty())
            <p class="text-center text-muted">No team members found. Click "Add" to create a new team member.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Post</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teamMembers as $index => $member)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $member->name }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $member->image) }}" alt="Team Member Image" class="img-thumbnail" style="max-width: 80px;">
                            </td>
                            <td>{{ $member->post }}</td>
                            <td>
                                <a href="{{ url('admin/team/' . $member->id . '/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ url('admin/team/' . $member->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this member?');">Delete</button>
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
