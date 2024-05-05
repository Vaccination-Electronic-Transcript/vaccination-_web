<!DOCTYPE html>
<html>
<head>
    <title>parent</title>
    <link rel="icon" type="image/png" href="{{ asset('images/injection-15.png') }}">
{{--     <link rel="icon" type="image/png" href="{{ asset('images/injection-15.png') }}">
 --}}
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/father-information.css') }}"> <!-- Link to follow-up.css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> <!-- Link to Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
