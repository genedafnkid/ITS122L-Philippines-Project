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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Right Side: Login Button -->
            <div class="navbar-brand text-end">
                <a href="{{ route('home') }}" style="background-color: transparent">
                    <img src="/assets/images/logo.jpg" style="max-width: 60px; height: auto;" alt="Placeholder Image"
                        class="img-fluid">
                </a>
            </div>

            <!-- Middle: Navbar Buttons -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    <a class="nav-link" href="{{ route('donate') }}">Donate</a>

                    <!-- Events Dropdown -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="eventsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Events
                        </a>
                        <div class="dropdown-menu" aria-labelledby="eventsDropdown">
                            <a class="dropdown-item">Announcements</a>
                            <a class="dropdown-item">Volunteering</a>
                            <a class="dropdown-item">Past Events</a>
                        </div>
                    </div>
                    <!-- End Events Dropdown -->

                    <!-- Volunteer Dropdown -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="volunteerDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Volunteer
                        </a>
                        <div class="dropdown-menu" aria-labelledby="volunteerDropdown">
                            <a class="dropdown-item">Adopt</a>
                            <a class="dropdown-item">Volunteer Form</a>
                        </div>
                    </div>
                    <!-- End Volunteer Dropdown -->

                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>

            <!-- Left Side: Placeholder Image -->
            <div class="navbar-brand">
                <button class="btn btn-primary" id="login">LOG IN</button>
            </div>
        </div>
    </nav>

    <!-- Include Bootstrap 5 JS and Popper.js via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
