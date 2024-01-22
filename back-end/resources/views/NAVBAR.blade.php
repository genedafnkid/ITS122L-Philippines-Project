<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save ALL</title>

    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right Side: Login Button -->
        <div class="navbar-brand text-end">
            <a href="{{ route('home') }}" style="background-color: transparent">
                <img src="/assets/images/logo.jpg" style="max-width: 60px; height: auto;" alt="Placeholder Image" class="img-fluid" >
            </a>
        </div>

        <!-- Middle: Navbar Buttons -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav mx-auto">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                <a class="nav-link" href="{{ route('donate') }}">Donate</a>
                <a class="nav-link" href="{{ route('events') }}">Events</a>
                <a class="nav-link" href="{{ route('volunteer') }}">Volunteer</a>
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>

        <!-- Left Side: Placeholder Image -->
        <div class="navbar-brand">
            <button class="btn btn-primary" id="login">LOG IN</button>
        </div>
    </div>
</nav>


</body>
</html>
