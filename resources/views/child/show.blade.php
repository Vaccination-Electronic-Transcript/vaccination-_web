@extends('child.layout')
@section('content')
<div class="card" style="margin:20px;">
    <div class="card-header">Childs page</div>
</div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Child</title>
</head>
<body>
    <h1>Child Details</h1>
    <div>
        <p>ID: {{ $child->id }}</p>
        <p>ChildSSN: {{ $child->childSSN }}</p>
        <p>First Name: {{ $child->first_name }}</p>
        <p>Last Name: {{ $child->last_name }}</p>
        <p>Date of Birth: {{ $child->DOB }}</p>
        <p>Gender: {{ $child->gender }}</p>
        <p>Weight: {{ $child->weight }}</p>
        <p>Height: {{ $child->height }}</p>
    </div>
</body>
@endsection
