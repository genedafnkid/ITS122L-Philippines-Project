
<!-- volunteerForm.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Form</title>
    <link rel="stylesheet" href="{{ asset('path-to-your-styles-folder/styles.css') }}">
   
</head>

<body>
    @include('00_NAVBAR')

    <div class="container mt-5">
        @if(session('message'))
            <div id="successMessage" class="alert alert-success text-center" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <br>
                        <h2 class="card-title text-center">VOLUNTEER FORM</h2>
                        <br>

                        <form action="{{ route('submit_volunteer_form') }}" method="post">
                            @csrf <!-- Add this line to include CSRF token -->

                            <div class="mb-3">
                                <label for="name" class="form-label">YOUR NAME</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Felix DaCat" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">EMAIL</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="fdacat@gmail.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">CONTACT NUM</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="09123456787" required>
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="age" name="age" placeholder="21" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">EXPERIENCE & SKILLS</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Description" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="schedule" class="form-label">SCHEDULE</label>
                                <input type="date" class="form-control" id="schedule" name="schedule" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')

    <!-- Include Font Awesome for Facebook icon -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>


