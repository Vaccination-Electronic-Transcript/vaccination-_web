<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Vaccination Form</title>
        <link rel="stylesheet" href="{{ asset('css/parent.css') }}">
    </head>
    <body>
        <div class="logo-container">
            <!-- Update the src attribute to the correct path for your logo -->
            <img src="{{ asset('images/logo111.png') }}" alt="Vaccination Logo" />

        </div>
        <div class="container">
            <div class="forms">
                <div class="formView">
                    <h1>Father Information</h1>
                    <div class="input-group">
                        <label for="">Name</label>
                        <input type="text" id="name" placeholder="" />
                    </div>
                    <div class="input-group">
                        <label for="">SSN</label>
                        <input type="text" id="name" placeholder="" />
                    </div>
                    <div class="input-group">
                        <label for="">Phone</label>
                        <input type="text" id="name" placeholder="" />
                    </div>
                    <div class="input-group">
                        <label for="">Address</label>
                        <input type="text" id="name" placeholder="" />
                    </div>
                    <div class="input-group">
                        <select>
                            <option value="null">Qualifications</option>
                            <option value="null">v1</option>
                            <option value="null">v2</option>
                            <option value="null">v3</option>
                        </select>
                    </div>
                </div>
                <div class="formView">
                    <h1>Mother Information</h1>
                    <div class="input-group">
                        <label for="">Name</label>
                        <input type="text" id="name" placeholder="" />
                    </div>
                    <div class="input-group">
                        <label for="">SSN</label>
                        <input type="text" id="name" placeholder="" />
                    </div>
                    <div class="input-group">
                        <label for="">Phone</label>
                        <input type="text" id="name" placeholder="" />
                    </div>
                    <div class="input-group">
                        <label for="">Address</label>
                        <input type="text" id="name" placeholder="" />
                    </div>
                    <div class="input-group">
                        <select>
                            <option value="null">Qualifications</option>
                            <option value="null">v1</option>
                            <option value="null">v2</option>
                            <option value="null">v3</option>
                        </select>
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
