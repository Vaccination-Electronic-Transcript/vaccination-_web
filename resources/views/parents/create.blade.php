<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Form</title>
    <link rel="stylesheet" href="{{ asset('css/father-information.css') }}">
</head>
<body>
    <div class="container">
        <div class="logo-parent-info">
            <div class="logo">
                <img src="{{ asset('images/injection-15.png') }}" alt="Vaccination Logo">
                <div class="parent-info">
                    <h1>Parent information</h1>
                </div>
            </div>
        </div>
        <div class="vaccination-form">
            <form id="parentForm" method="post" action="{{ route('parents.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="ssn">SSN</label>
                    <input type="text" class="form-control" id="ssn" name="ssn" placeholder="SSN" required>
                </div>

                <div class="form-group mb-3">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                </div>
                <div class="form-group-select mb-3">
                    <label for="gender">Gender</label>
                    <div class="select-wrapper">
                        <select id="gender" name="gender">
                            <option selected disabled>Choose...</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <span class="select-arrow"></span>
                    </div>
                </div>

                <div class="form-group-select mb-3">
                    <label for="job_id">Job Type</label>
                    <div class="select-wrapper">

                    <select id="job_id" name="job_id" required>
                        <option value="" selected disabled>Select Job Type</option>
                        @foreach($jobTypes as $jobType)
                            <option value="{{ $jobType->job_id }}">{{ $jobType->qualification }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="buttons">
                    <button type="submit" class="next-button">Submit</button>
                </div>
            </form>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
</body>
</html>
