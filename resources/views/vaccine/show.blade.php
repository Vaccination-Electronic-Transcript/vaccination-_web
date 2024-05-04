@extends('vaccine.layout')
@section('content')
<div class="card" style="margin:20px;">
    <div class="card-header">vaccines page</div>
</div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show vaccine</title>
</head>
<body>
    <h1>vaccine Details</h1>
    <div>
        {{--<p>ID: {{ $vaccine->id }}</p>--}}
        <p>vaccineID: {{ $vaccine->id }}</p>
        <p>First Name: {{ $vaccine->name }}</p>
        <p>Last Name: {{ $vaccine->dose }}</p>
        <p>age require: {{ $vaccine->age }}</p>
        <p>type: {{ $vaccine->type }}</p>
        <p>quantity: {{ $vaccine->quantity }}</p>
    </div>
</body>
@endsection
