<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Form</title>
    <link rel="stylesheet" href="{{ asset('css/ChildInformation.css') }}">
</head>

<body>
    <div class="container">
        <div class="vaccination-form">
            <h1>Child information</h1>
            <form id="childForm" method="post" action="{{ route('Child.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="childSSN">Child SSN</label>
                    <input type="text" class="form-control" id="childSSN" name="childSSN" placeholder="Child SSN">
                </div>
                <div class="form-group mb-3">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        placeholder="First Name">
                </div>
                <div class="form-group mb-3">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                </div>
                <div class="form-group mb-3">
                    <label for="DOB">Date of Birth</label>
                    <input type="date" class="form-control" id="DOB" name="DOB" placeholder="Date of Birth"
                        min="2023-12-12" max="2024-12-31">
                </div>
                <div class="form-group mb-3">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight"
                        step="0.01">
                </div>
                <div class="form-group mb-3">
                    <label for="height">Height</label>
                    <input type="number" class="form-control" id="height" name="height" placeholder="Height"
                        step="0.05">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="gender">Gender</label>
                    </div>
                    <select class="custom-select" id="gender" name="gender">
                        <option selected>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
                <div class="form-group mb-3">
                    <button type="button" onclick="window.location.href = '{{ route('child.index') }}';"
                        class="btn btn-secondary">Back</button>
                    <button type="submit" class="btn btn-success">Save Child</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
