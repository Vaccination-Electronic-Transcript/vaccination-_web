<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Form</title>
    <link rel="stylesheet" href="{{ asset('css/Child-information.css') }}">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/injection-15.png') }}" alt="Vaccination Logo">
            <div class="child-info">
                <h1>child information</h1>
            </div>
        </div>
        <h2>Child information</h2>
        <form id="childForm" action="{{ route('Child.store') }}" method="POST">
            @csrf
            <div class="form">
                <div class="form-group">
                    <label for="childSSN">Child SSN</label>
                    <input type="text" class="form-control" id="childSSN" name="childSSN" placeholder="Child SSN" required>
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <label for="DOB">Date of Birth</label>
                    <input type="date" class="form-control" id="DOB" name="DOB" placeholder="Date of Birth" min="2023-12-12" max="2024-12-31" required>
                </div>
                <div class="height-weight">
                    <div class="form-group">
                        <label for="height">Height</label>
                        <input type="number" class="form-control" id="height" name="height" placeholder="Height" step="0.05" required>
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight" step="0.01" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <div class="gender">
                        <label for="male">Male</label>
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="female">Female</label>
                        <input type="radio" id="female" name="gender" value="female" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                </div>
            </div>
            <div class="buttons">
                <button type="button" id="backButton" class="back-button">Back</button>
                <button type="submit" class="next-button">Next</button>
            </div>
        </form>
    </div>


</body>

</html>
