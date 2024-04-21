<!-- resources/views/parents/index.blade.php -->

@extends('parents.layout') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Parents</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SSN</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parents as $parent)
                            <tr>
                                <td>{{ $parent->id }}</td>
                                <td>{{ $parent->SSN }}</td>
                                <td>{{ $parent->firstname }}</td>
                                <td>{{ $parent->lastname }}</td>
                                <td>{{ $parent->phone }}</td>
                                <td>
                                    <a href="{{ route('parents.edit', $parent->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('parents.destroy', $parent->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('parents.create') }}" class="btn btn-success">Create Parent</a>
            </div>
        </div>
    </div>
@endsection
