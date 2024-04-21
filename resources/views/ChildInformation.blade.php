<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Form</title>
    <link rel="stylesheet" href="{{ asset('public/css/ChildInformation.css') }}">
</head>
<body>
    <div class="logo-container">
        <img src="{{ asset('public/images/pics/logo111.png') }}" alt="Vaccination Logo" />
    </div>
    <div class="container">
        <div class="vaccination-form">
            <h1>Child information</h1>
            <!-- Form fields go here -->
            <div class="inps">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Enter name" />
                </div>
                <div class="input-group">
                    <label for="height">Height</label>
                    <input type="number" id="height" placeholder="Enter height" />
                </div>
                <div class="input-group">
                    <label for="ssn">SSN</label>
                    <input type="text" id="ssn" placeholder="Enter SSN" />
                </div>
                <div class="input-group">
                    <label for="weight">Weight</label>
                    <input type="number" id="weight" placeholder="Enter weight" />
                </div>
                <div class="input-group">
                    <label for="place-of-birth">Place of Birth</label>
                    <input type="text" id="place-of-birth" placeholder="Enter place of birth" />
                </div>
                <div class="input-group">
                    <select id="blood-type">
                        <option value="">Blood Type</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class="input-group check">
                    <div>
                        <label for="male">Male</label>
                        <input type="radio" id="male" name="gender" />
                    </div>
                    <div>
                        <label for="female">Female</label>
                        <input type="radio" id="female" name="gender" />
                    </div>
                </div>
                <div class="input-group">
                    <label>Date of Birth</label>
                    <div class="dates">
                        <select id="birth-day">
                            <option value="null" selected>Day</option>
                            <!-- Add day options -->
                        </select>
                        <select id="birth-month">
                            <option value="null" selected>Month</option>
                            <!-- Add month options -->
                        </select>
                        <select id="birth-year">
                            <option value="null" selected>Year</option>
                            <!-- Add year options -->
                        </select>
                    </div>
                </div>
                <div class="input-group check">
                    <div>
                        <label for="normal">Normal</label>
                        <input type="radio" id="normal" name="birth-type" />
                    </div>
                    <div>
                        <label for="caesarean">Caesarean</label>
                        <input type="radio" id="caesarean" name="birth-type" />
                    </div>
                </div>
                <div class="input-group check">
                    <div>
                        <label for="normal-status">Normal</label>
                        <input type="radio" id="normal-status" name="child-status" />
                    </div>
                    <div>
                        <label for="not-normal-status">Not</label>
                        <input type="radio" id="not-normal-status" name="child-status" />
                    </div>
                </div>
            </div>
        </div>
        <div class="form-navigation">
            <button type="button">Back</button>
            <button type="submit">Next</button>
        </div>
    </div>
</body>
</html>
