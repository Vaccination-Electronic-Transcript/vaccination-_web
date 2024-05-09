@extends('followUp.layout')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Follow-up List</title>
    <link rel="stylesheet" href="{{ asset('css/followUpInformation.css') }}">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/injection-15.png') }}" alt="Vaccination Logo">
            <h1>follow Up</h1>
        </div>
        <div class="follow-up-list">
            <h1>Follow-up List</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <a href="{{ route('followUp.create') }}" class="btn btn-success btn-sm" title="Add new follow-up">Add new follow-up</a>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Child SSN</th>
                            <th>Child Name</th>
                            <th>Height</th>
                            <th>Weight</th>
                            <th>Date of Birth</th>
                            <th>Vaccine</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($followUps as $followUp)
                        <tr>
                            <td>{{ $followUp->id }}</td>
                            <td>{{ $followUp->childSSN }}</td>
                            <td>{{ $followUp->childName }}</td>
                            <td>{{ $followUp->height }}</td>
                            <td>{{ $followUp->weight }}</td>
                            <td>{{ $followUp->DOB }}</td>
                            <td>{{ $followUp->vaccineID }}</td>
                            <td>
                                <a href="{{ route('followUp.show', ['followUp' => $followUp->id]) }}" title="View follow-up" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                <a href="{{ route('followUp.edit', $followUp->id) }}" title="View follow-up" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> Edit</a>

                                    <form action="{{ route('followUp.destroy', $followUp->id) }}"method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Child" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                    </form>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
