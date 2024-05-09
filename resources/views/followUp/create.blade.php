@extends('followUp.layout')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Follow-up Entry</title>
    <link rel="stylesheet" href="{{ asset('css/followUpInformation.css') }}">
</head>

<body>
    <div class="container">
        <div class="logo">
        <img src="{{ asset('images/injection-15.png') }}" alt="Vaccination Logo">
        <h1>vaccination</h1>
        </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form id="followUpForm" method="post" action="{{ route('followUp.store') }}">
                @csrf
                <div>
                            <label for="childinfo">Child information</label>
                </div>

                <!-- Select Child SSN -->
                <label for="childSSN">Child SSN</label>
                <select name="childSSN" id="childSSN" class="form-control" required>
                    <option value="">Select SSN</option> <!-- Default option -->
                    @foreach ($children as $child)
                    <option value="{{ $child->childSSN }}">{{ $child->childSSN }}</option>
                    @endforeach
                </select>

                <!-- Select Child Name -->
                <label for="childName">Child name</label>
                <select name="childName" id="childName" class="form-control" required>
                    <option value="">Select Child Name</option>
                    @foreach ($children as $child)
                        <option value="{{ $child->first_name }}">{{ $child->first_name }}</option>
                    @endforeach
                </select>

                <!-- Height, Weight, DOB inputs -->
                <div class="form-group mb-3">
                    <label for="height">Height</label>
                    <input type="number" class="form-control" id="height" name="height" placeholder="Height">
                </div>
                <div class="form-group mb-3">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight">
                </div>
                <div class="form-group mb-3">
                    <label for="DOB">Date of Birth</label>
                    <input type="date" class="form-control" id="DOB" name="DOB" placeholder="Date of Birth">
                </div>

                <!-- Select Vaccine -->
                <label for="vaccineID">Vaccine ID</label>
                <select name="vaccineID" id="vaccineID" class="form-control" required>
                    <option value="">Select Vaccine</option> <!-- Default option -->
                    @foreach ($vaccines as $vaccine)
                        <option value="{{ $vaccine->id }}">{{ $vaccine->name }}</option>
                    @endforeach
                </select>

                <div class="form-group mb-3">
                    <button type="button" onclick="window.location.href = '{{ route('dashboard') }}';" class="btn btn-secondary">Back</button>
                    <button type="submit" class="btn btn-success">Save Follow-up</button>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection













































































