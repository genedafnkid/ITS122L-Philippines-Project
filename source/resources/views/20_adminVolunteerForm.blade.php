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
            <legend class="text-center mb-4">Volunteer Form Submission Details</legend>
            <div class="row">
                <!-- Previous fields included here -->
                <!-- Start with the remaining fields -->
                <div class="col-md-6 mb-3">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" class="form-control" placeholder="Enter Your Address" value="{{ $volunteer->address }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" class="form-control" placeholder="Enter Your City" value="{{ $volunteer->city }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" class="form-control" placeholder="Enter Your State" value="{{ $volunteer->state }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="postal_code">Postal Code</label>
                    <input type="text" id="postal_code" name="postal_code" class="form-control" placeholder="Enter Your Postal Code" value="{{ $volunteer->postal_code }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="birth_date">Birth Date</label>
                    <input type="text" id="birth_date" name="birth_date" class="form-control" value="{{ $volunteer->birth_date }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="availability">Availability</label>
                    <input type="text" id="availability" name="availability" class="form-control" placeholder="Enter Your Availability" value="{{ $volunteer->availability }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="skills">Skills</label>
                    <input type="text" id="skills" name="skills" class="form-control" placeholder="Enter Your Skills" value="{{ $volunteer->skills }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="interests">Interests</label>
                    <input type="text" id="interests" name="interests" class="form-control" placeholder="Enter Your Interests" value="{{ $volunteer->interests }}" readonly>
                </div>

                <div class="col-12 mb-3">
                    <label for="previous_experience">Previous Experience</label>
                    <textarea id="previous_experience" name="previous_experience" class="form-control" placeholder="Enter previous volunteer experiences (if applicable)" readonly>{{ $volunteer->previous_experience }}</textarea>
                </div>

                <div class="col-12 mb-3">
                    <label for="additional_info">Additional Info</label>
                    <textarea id="additional_info" name="additional_info" class="form-control" placeholder="Enter Additional Information (if applicable)" readonly>{{ $volunteer->additional_info }}</textarea>
                </div>
            </div>
        </fieldset>
    </div>

    @include('00_FOOTER')

</body>

</html>
