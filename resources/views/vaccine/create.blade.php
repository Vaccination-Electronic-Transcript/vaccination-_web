@extends('vaccine.layout')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Form</title>
    <link rel="stylesheet" href="{{ asset('css/vaccineInformation.css') }}">
</head>

<body>
    <div class="container">
        <div class="vaccination-form">
            <h1>vaccine information</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form id="vaccineForm" method="post" action="{{ route('vaccine.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="id">vaccine ID</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="id">
                </div>
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Name">
                </div>

                <div class="form-group mb-3">
                    <label for="dose">dose</label>
                    <input type="text" class="form-control" id="dose" name="dose" placeholder="dose">
                </div>
                <div class="form-group mb-3">
                    <label for="age">Age (in months)</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Age (in months)" min="0" max="24">
                </div>


                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity"
                        min="0" max="200" step="1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="type">type</label>
                    </div>
                    <select name="type" id="type" class="form-control" required>
                        <option value="Syrup">Syrup</option>
                        <option value="Injection">Injection</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <button type="button" onclick="window.location.href = '{{ route('vaccine.index') }}';"
                        class="btn btn-secondary">Back</button>
                    <button type="submit" class="btn btn-success">Save vaccine</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
@endsection
