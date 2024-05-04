@extends('followUp.layout')

@section('content')
<div class="card" style="margin:20px;">
    <div class="card-header">Follow-up Details</div>
</div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Follow-up</title>
</head>
<body>
    <h1>Follow-up Details</h1>
    <div>

<div>
    <p>ID: {{ $followUp->id }}</p>
    <p>Child SSN: {{ $followUp->childSSN }}</p>
    <p>Child Name: {{ $childName }}</p> <!-- Display the child's name instead of SSN -->
    <p>Height: {{ $followUp->height }}</p>
    <p>Weight: {{ $followUp->weight }}</p>
    <p>Date of Birth: {{ $followUp->DOB }}</p>
    <p>Vaccine ID: {{ $followUp->vaccineID }}</p>
    <!-- Add more fields as needed -->
</div>

        <!-- Add more fields as needed -->
    </div>
</body>
@endsection

