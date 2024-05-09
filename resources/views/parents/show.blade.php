@extends('parents.layout')

@section('content')
<div class="card" style="margin:20px;">
    <div class="card-header">Parents Page</div>
</div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Parent</title>
</head>
<body>
    <h1>Parent Details</h1>
    <div>
        <p>SSN: {{ $parent->ssn }}</p>
        <p>First Name: {{ $parent->first_name }}</p>
        <p>Last Name: {{ $parent->last_name }}</p>
        <p>Phone: {{ $parent->phone }}</p>
        <p>Gender: {{ $parent->gender }}</p>
        <p>Job ID: {{ $parent->job_id }}</p>
    </div>
</body>
@endsection
