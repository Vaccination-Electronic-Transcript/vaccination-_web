<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Form</title>
    <link rel="stylesheet" href="{{ asset('css/father-information.css') }}">
</head>
<body>
    <div class="container">
        <div class="logo-parent-info">
            <div class="logo">
                <img src="{{ asset('images/injection-15.png') }}" alt="Vaccination Logo">
                <div class="parent-info">
                    <h1>Parent information</h1>
                </div>
            </div>
        </div>
        <div class="vaccination-form">
            <form id="parentForm" method="post" action="{{ route('parents.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="ssn">SSN</label>
                    <input type="text" class="form-control" id="ssn" name="ssn" placeholder="SSN">
                </div>

                <div class="form-group mb-3">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                </div>
                <div class="form-group mb-3">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                </div>
                <div class="form-group mb-3">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option selected>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="job_id">Job Type</label>
                    <select class="form-control" id="job_id" name="job_id">
                        <option selected>Choose...</option>
                        @foreach($jobTypes as $jobType)
                            <option value="{{ $jobType->id }}">{{ $jobType->qualification }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <button type="button" onclick="validateAndRedirect();" class="btn btn-success">Next</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validateAndRedirect() {
            // Perform client-side validation
            var ssn = document.getElementById('ssn').value;
            var first_name = document.getElementById('first_name').value;
            var last_name = document.getElementById('last_name').value;
            var phone = document.getElementById('phone').value;

            if (!ssn || !first_name || !last_name || !phone) {
                alert('Please fill in all required fields.');
                return;
            }

            // If all fields are filled, redirect to the followUp.create route
            window.location.href = '{{ route('followUp.create') }}';
        }
    </script>
</body>
</html>
