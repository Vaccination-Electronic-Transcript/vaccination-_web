@extends('child.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Edit Child
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('child.update', $child->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- First Name -->
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $child->first_name }}">
                        </div>

                        <!-- Last Name -->
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $child->last_name }}">
                        </div>

                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label for="DOB">Date of Birth</label>
                            <input type="date" class="form-control" id="DOB" name="DOB" value="{{ $child->DOB }}">
                        </div>

                        <!-- Gender -->
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="male" {{ $child->gender === 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $child->gender === 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <!-- Weight -->
                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input type="number" class="form-control" id="weight" name="weight" value="{{ $child->weight }}">
                        </div>

                        <!-- Height -->
                        <div class="form-group">
                            <label for="height">Height</label>
                            <input type="number" class="form-control" id="height" name="height" value="{{ $child->height }}">
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address">{{ $child->address }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
