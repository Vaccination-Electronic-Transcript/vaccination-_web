@extends('parents.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Edit Parent
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('parents.update', $parents->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- SSN -->
                        <div class="form-group">
                            <label for="ssn">SSN</label>
                            <input type="text" class="form-control" id="ssn" name="ssn" value="{{ $parent->ssn }}">
                        </div>

                        <!-- First Name -->
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $parent->first_name }}">
                        </div>

                        <!-- Last Name -->
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $parent->last_name }}">
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $parent->phone }}">
                        </div>

                        <!-- Gender -->
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="male" {{ $parent->gender === 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $parent->gender === 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <!-- Job Type -->
                        <div class="form-group">
                            <label for="job_id">Job Type</label>
                            <select class="form-control" id="job_id" name="job_id">
                                @foreach($jobTypes as $jobType)
                                    <option value="{{ $jobType->id }}" {{ $parent->job_id == $jobType->id ? 'selected' : '' }}>{{ $jobType->qualification }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
