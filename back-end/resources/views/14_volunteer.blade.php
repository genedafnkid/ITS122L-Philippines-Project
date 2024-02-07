<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel= "stylesheet">
    <title>Volunteer Information</title>
</head>

<body>
@include('00_NAVBAR')

<div class="container mt-5 mb-5" id="volunteer">
    <fieldset>
    @if(isset($message))
        <div id="successMessage" class="alert alert-success text-center" role="alert">
            {{ $message }}
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('successMessage').style.display = 'none';
            }, 5000);
        </script>
    @endif
        <legend class="text-center mb-4">Volunteer Information</legend>
        
        <form action="{{ url('/volunteers/create') }}" method="post">
            @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter Your First Name" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Your Last Name" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Enter Your Phone Number" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter Your Address" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="city">City</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Enter Your City" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="state">State</label>
                <input type="text" id="state" name="state" class="form-control" placeholder="Enter Your State" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="postal_code">Postal Code</label>
                <input type="text" id="postal_code" name="postal_code" class="form-control" placeholder="Enter Your Postal Code" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="birth_date">Birth Date</label>
                <input type="date" id="birth_date" name="birth_date" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="availability">Availability</label>
                <input type="text" id="availability" name="availability" class="form-control" placeholder="Enter Your Availability" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="skills">Skills</label>
                <input type="text" id="skills" name="skills" class="form-control" placeholder="Enter Your Skills" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="interests">Interests</label>
                <input type="text" id="interests" name="interests" class="form-control" placeholder="Enter Your Interests" required>
            </div>

            <div class="col-12 mb-3">
                <label for="previous_experience">Previous Experience</label>
                <textarea id="previous_experience" name="previous_experience" class="form-control" placeholder="Enter previous volunteer experiences (if applicable)" required></textarea>
            </div>

            <div class="col-12 mb-3">
                <label for="additional_info">Additional Info</label>
                <textarea id="additional_info" name="additional_info" class="form-control" placeholder="Enter Additional Information (if applicable)" required></textarea>
            </div>

            <div class="text-center">
                <br> </br>
                <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </div>
        </div>
        </form>
    </fieldset>
</div>

@include('00_FOOTER')

</body>
</html>
