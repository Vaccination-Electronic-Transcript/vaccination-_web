@extends('followUp.layout')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Follow-up Entry</title>
    <link rel="stylesheet" href="{{ asset('css/followUpInformation.css') }}">
</head>

<body>
    <div class="container">
        <div class="follow-up-form">
            <h1>Edit Follow-up Entry</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form id="followUpForm" method="post" action="{{ route('followUp.update', $followUp->id) }}">
                @csrf
                @method('PUT') <!-- Use the PUT method for updates -->

                <!-- Select Child SSN -->
                <label for="childSSN">Child SSN</label>
                <select name="childSSN" id="childSSN" class="form-control" required>
                    <option value="{{ $followUp->childSSN }}" selected>{{ $followUp->childSSN }}</option>
                    <!-- Keep the selected value of the current follow-up entry -->
                </select>

                <!-- Select Child Name -->
                <label for="childName">Child name</label>
                <select name="childName" id="childName" class="form-control" required>
                    <option value="{{ $followUp->childName }}" selected>{{ $followUp->childName }}</option>
                    <!-- Keep the selected value of the current follow-up entry -->
                </select>

                <!-- Height, Weight, DOB inputs -->
                <div class="form-group mb-3">
                    <label for="height">Height</label>
                    <input type="number" class="form-control" id="height" name="height" value="{{ $followUp->height }}" placeholder="Height">
                </div>
                <div class="form-group mb-3">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" id="weight" name="weight" value="{{ $followUp->weight }}" placeholder="Weight">
                </div>
                <div class="form-group mb-3">
                    <label for="DOB">Date of Birth</label>
                    <input type="date" class="form-control" id="DOB" name="DOB" value="{{ $followUp->DOB }}" placeholder="Date of Birth">
                </div>

                <!-- Select Vaccine -->
                <label for="vaccineID">Vaccine ID</label>
                <select name="vaccineID" id="vaccineID" class="form-control" required>
                    <option value="{{ $followUp->vaccineID }}" selected>{{ $followUp->vaccineID }}</option>
                    <!-- Keep the selected value of the current follow-up entry -->
                </select>

                <div class="form-group mb-3">
                    <button type="button" onclick="window.location.href = '{{ route('followUp.index') }}';" class="btn btn-secondary">Back</button>
                    <button type="submit" class="btn btn-success">Save Follow-up</button>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection
