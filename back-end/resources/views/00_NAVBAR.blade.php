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
                            <a class="dropdown-item" href="{{route('16_announcements')}}" >Announcements</a>
                            <a class="dropdown-item" href="{{route('17_volunteering')}}">Volunteering</a>
                        </div>
                    </div>
                    <!-- End Events Dropdown -->

                    <!-- Volunteer Dropdown -->
                    @unless(session('isAdminLoggedIn'))
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="volunteerDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Volunteer
                        </a>
                        <div class="dropdown-menu" aria-labelledby="volunteerDropdown">
                            <a class="dropdown-item" href="{{ route('petgallery') }}">Adopt</a>
                            <a class="dropdown-item" href="{{ route('volunteer') }}">Volunteer Form</a>
                        </div>
                    </div>
                    @endunless
                    <!-- End Volunteer Dropdown -->

                    <!-- Admin Management Dropdown -->
                    @if(session('isAdminLoggedIn'))
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="managementDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ADMIN
                        </a>
                        <div class="dropdown-menu" aria-labelledby="volunteerDropdown">
                        <a class="dropdown-item" href="{{ route('editprofile') }}">Manage Profile</a>
                            <a class="dropdown-item" href="{{ route('eventsdashboard') }}">Manage Events</a>
                            <a class="dropdown-item">View Adopt Applications</a>
                            <a class="dropdown-item">View Volunteer Applications</a>
                            <a class="dropdown-item">View Contact Submissions</a>
                        </div>
                    </div>
                    @endif
                    <!-- End Admin Management Dropdown -->

                    @unless(session('isAdminLoggedIn'))
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    @endunless
                </div>
            </div>

            <!-- Left Side: Placeholder Image -->
            
            <div class="navbar-brand">
                @unless(session('isAdminLoggedIn'))<a class="btn btn-primary" id="login" href="{{ route('login')}}">LOG IN</a>@endunless
                @if(session('isAdminLoggedIn'))<a class="btn btn-primary" id="logout" href="{{ route('logout')}}">LOG OUT</a> @endif
            </div>
            
           
            
        </div>
    </nav>

    <!-- Include Bootstrap 5 JS and Popper.js via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
