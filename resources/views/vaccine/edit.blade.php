@extends('vaccine.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Edit vaccine
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('vaccine.update', $vaccine->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- First Name -->
                        <div class="form-group mb-3">
                            <label for="vaccineSSN">vaccine ID</label>
                            <input type="text" class="form-control" id="id" name="id" placeholder="id">
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="dose"></label>
                            <input type="text" class="form-control" id="dose" name="dose" placeholder="dose">
                        </div>
                        <div class="form-group mb-3">
                            <label for="age">Age</label>
                            <input type="date" class="form-control" id="age" name="age" placeholder="Age">
                        </div>

                        <script>
                            // Calculate the maximum date (2 years from the current year)
                            var maxDate = new Date();
                            maxDate.setFullYear(maxDate.getFullYear() + 2);
                            var maxDateString = maxDate.toISOString().split('T')[0];

                            // Set the max attribute of the age input to the calculated maximum date
                            document.getElementById('age').max = maxDateString;

                            // Get the current date (default setting of the user's computer)
                            var currentDate = new Date();
                            var currentDateString = currentDate.toISOString().split('T')[0];

                            // Set the min attribute of the age input to the calculated minimum date
                            document.getElementById('age').min = currentDateString;
                        </script>

                        <div class="form-group mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity"
                                min="0" max="200" step="1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="type">type</label>
                            </div>
                            <select class="custom-select" id="type" name="type">
                                <option selected>Choose...</option>
                                <option value="male">Syrup</option>
                                <option value="female">injection</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <button type="button" onclick="window.location.href = '{{ route('vaccine.index') }}';"
                                class="btn btn-secondary">Back</button>
                            <button type="submit" class="btn btn-success">Save vaccine</button>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
