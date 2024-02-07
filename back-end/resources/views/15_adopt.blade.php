<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
</head>

<body>
    @include('00_NAVBAR')

    <div class="container mt-5 mb-5" id="volunteer">
        <fieldset>
            <legend class="text-center mb-4">Adoption Form</legend>
            <hr>

            <!-- Centered Container for Pet and Your Information -->
            <div class="center-container">

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

                <!-- YOUR INFORMATION SECTION -->
                <div class="container mt-4">
                    <h2 class="text-center">YOUR INFORMATION</h2>

                    <form action="{{ url('/adopters/create') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="yourName">First Name:</label>
                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter Your First Name" required>
                            </div>

                            

                            <div class="form-group">
                                <label for="yourEmail">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                            </div>

                            

                            <div class="form-group">
                                <label for="streetAddress">Street Address:</label>
                                <input type="text" id="streetAddress" name="street_address" class="form-control" placeholder="Enter Your Street Address" required>
                            </div>

                            <div class="form-group">
                                <label for="state">State:</label>
                                <input type="text" id="state" name="state" class="form-control" placeholder="Enter Your State" required>
                            </div>

                            <div class="form-group">
                                <label for="birthDate">Birth Date:</label>
                                <input type="date" id="birthDate" name="birth_date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="occupation">Occupation:</label>
                                <input type="text" id="occupation" name="occupation" class="form-control" placeholder="Enter Your Occupation" required>
                            </div>

                            <div class="form-group">
                                <label for="housingType">Housing Type:</label>
                                <input type="text" id="housingType" name="housing_type" class="form-control" placeholder="Enter Your Housing Type" required>
                            </div>

                            <div class="form-group">
                                <label for="childrenCount">Children Count:</label>
                                <input type="number" id="childrenCount" name="children_count" class="form-control" placeholder="Enter Children Count" required>
                            </div>

                            <div class="form-group">
                                <label for="currentPets">Current Pets:</label>
                                <input type="text" id="currentPets" name="current_pets" class="form-control" placeholder="Enter Current Pets" required>
                            </div>

                            <div class="form-group">
                                <label for="reasonsToAdopt">Reasons to Adopt:</label>
                                <input type="text" id="reasonsToAdopt" name="reasons_to_adopt" class="form-control" placeholder="Enter Reasons to Adopt" required>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="yourName">Last Name:</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Your Last Name" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone_number">Contact Number:</label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Enter Your Contact Number" required>
                            </div>

                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text" id="city" name="city" class="form-control" placeholder="Enter Your City" required>
                            </div>
                            

                            <div class="form-group">
                                <label for="postalCode">Postal Code:</label>
                                <input type="text" id="postalCode" name="postal_code" class="form-control" placeholder="Enter Your Postal Code" required>
                            </div>

                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="number" id="age" name="age" class="form-control" placeholder="Enter Your Age" required>
                            </div>

                            <div class="form-group">
                                <label for="livingArrangement">Living Arrangement:</label>
                                <input type="text" id="livingArrangement" name="living_arrangement" class="form-control" placeholder="Enter Your Living Arrangement" required>
                            </div>

                            

                            <div class="form-group">
                                <label for="familyMembers">Family Members:</label>
                                <input type="text" id="familyMembers" name="family_members" class="form-control" placeholder="Enter Family Members" required>
                            </div>

                            

                            <div class="form-group">
                                <label for="petExperience">Pet Experience:</label>
                                <input type="text" id="petExperience" name="pet_experience" class="form-control" placeholder="Enter Pet Experience" required>
                            </div>

                            

                            <div class="form-group">
                                <label for="previousPets">Previous Pets:</label>
                                <input type="text" id="previousPets" name="previous_pets" class="form-control" placeholder="Enter Previous Pets" required>
                            </div>

                            

                            <div class="form-group">
                                <label for="petPreferences">Pet Preferences:</label>
                                <input type="text" id="petPreferences" name="pet_preferences" class="form-control" placeholder="Enter Pet Preferences" required>
                            </div>

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                    </div>

                    </form>
                </div>

            </div>

            

        </fieldset>
    </div>
    @include('00_FOOTER')
</body>

</html>
