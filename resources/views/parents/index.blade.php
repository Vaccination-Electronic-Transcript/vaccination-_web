@extends('parents.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Parents</div>

                    <div class="card-body">
                        <a href="{{ route('parents.create') }}" class="btn btn-success btn-sm" title="Add new parent">Add new parent</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SSN</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>Job ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parents as $parent)
                                        <tr>
                                            <td>{{ $parent->ssn }}</td>
                                            <td>{{ $parent->first_name }}</td>
                                            <td>{{ $parent->last_name }}</td>
                                            <td>{{ $parent->phone }}</td>
                                            <td>{{ $parent->gender }}</td>
                                            <td>{{ $parent->job_id }}</td>
                                            <td>
                                                <a href="{{ route('parents.show', ['ssn' => $parent->ssn]) }}" class="btn btn-primary btn-sm">View</a>
                                                {{--<a href="{{ route('parents.edit', $parent->id) }}" class="btn btn-success btn-sm">Edit</a>
                                                <form action="{{ route('parents.destroy', $parent->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this parent?')">Delete</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
