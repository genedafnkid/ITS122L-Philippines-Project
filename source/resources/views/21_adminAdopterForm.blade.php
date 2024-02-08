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
            <legend class="text-center mb-4">Adoption Form Submission Details</legend>
            <hr>

            <!-- Centered Container for Pet and Your Information -->
            <div class="center-container">

                <!-- YOUR INFORMATION SECTION -->
                <div class="container mt-4">

                    <form action="{{ url('/adopters/create') }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control"
                                        placeholder="Enter Your First Name" required readonly
                                        value="{{ $adopter->first_name }}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Enter Your Email" required readonly
                                        value="{{ $adopter->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="street_address">Street Address:</label>
                                    <input type="text" id="street_address" name="street_address" class="form-control"
                                        placeholder="Enter Your Street Address" required readonly
                                        value="{{ $adopter->street_address }}">
                                </div>

                                <div class="form-group">
                                    <label for="state">State:</label>
                                    <input type="text" id="state" name="state" class="form-control"
                                        placeholder="Enter Your State" required readonly
                                        value="{{ $adopter->state }}">
                                </div>

                                <div class="form-group">
                                    <label for="postal_code">Birth Date:</label>
                                    <input type="text" id="birth_date" name="birth_date" class="form-control" required readonly value="{{ $adopter->birth_date }}">
                                </div>

                                <div class="form-group">
                                    <label for="occupation">Occupation:</label>
                                    <input type="text" id="occupation" name="occupation" class="form-control"
                                        placeholder="Enter Your Occupation" required readonly
                                        value="{{ $adopter->occupation }}">
                                </div>

                                <div class="form-group">
                                    <label for="housing_type">Housing Type:</label>
                                    <input type="text" id="housing_type" name="housing_type" class="form-control"
                                        placeholder="Enter Your Housing Type" required readonly
                                        value="{{ $adopter->housing_type }}">
                                </div>

                                <div class="form-group">
                                    <label for="children_count">Children Count:</label>
                                    <input type="number" id="children_count" name="children_count"
                                        class="form-control" placeholder="Enter Children Count" required readonly
                                        value="{{ $adopter->children_count }}">
                                </div>

                                <div class="form-group">
                                    <label for="current_pets">Current Pets:</label>
                                    <input type="text" id="current_pets" name="current_pets" class="form-control"
                                        placeholder="Enter Current Pets" required readonly
                                        value="{{ $adopter->current_pets }}">
                                </div>

                                <div class="form-group">
                                    <label for="reasons_to_adopt">Reasons to Adopt:</label>
                                    <input type="text" id="reasons_to_adopt" name="reasons_to_adopt"
                                        class="form-control" placeholder="Enter Reasons to Adopt" required readonly
                                        value="{{ $adopter->reasons_to_adopt }}">
                                </div>

                                

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control"
                                        placeholder="Enter Your Last Name" required readonly
                                        value="{{ $adopter->last_name }}">
                                </div>

                                <div class="form-group">
                                    <label for="phone_number">Contact Number:</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control"
                                        placeholder="Enter Your Contact Number" required readonly
                                        value="{{ $adopter->phone_number }}">
                                </div>

                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" id="city" name="city" class="form-control"
                                        placeholder="Enter Your City" required readonly
                                        value="{{ $adopter->city }}">
                                </div>

                                <div class="form-group">
                                    <label for="postal_code">Postal Code:</label>
                                    <input type="text" id="postal_code" name="postal_code" class="form-control"
                                        placeholder="Enter Your Postal Code" required readonly
                                        value="{{ $adopter->postal_code }}">
                                </div>

                                

                                <div class="form-group">
                                    <label for="age">Age:</label>
                                    <input type="number" id="age" name="age" class="form-control"
                                        placeholder="Enter Your Age" required readonly
                                        value="{{ $adopter->age }}">
                                </div>

                                <div class="form-group">
                                    <label for="livingArrangement">Living Arrangement:</label>
                                    <input type="text" id="livingArrangement" name="living_arrangement" class="form-control" required readonly
                                        value="{{ $adopter->living_arrangement }}">
                                </div>

                                <div class="form-group">
                                    <label for="family_members">Family Members:</label>
                                    <input type="text" id="family_members" name="family_members" class="form-control"
                                        placeholder="Enter Family Members" required readonly
                                        value="{{ $adopter->family_members }}">
                                </div>

                                

                                <div class="form-group">
                                    <label for="pet_experience">Pet Experience:</label>
                                    <input type="text" id="pet_experience" name="pet_experience" class="form-control"
                                        placeholder="Enter Pet Experience" required readonly
                                        value="{{ $adopter->pet_experience }}">
                                </div>

                                

                                <div class="form-group">
                                    <label for="previous_pets">Previous Pets:</label>
                                    <input type="text" id="previous_pets" name="previous_pets" class="form-control"
                                        placeholder="Enter Previous Pets" required readonly
                                        value="{{ $adopter->previous_pets }}">
                                </div>

                                

                                <div class="form-group">
                                    <label for="pet_preferences">Pet Preferences:</label>
                                    <input type="text" id="pet_preferences" name="pet_preferences"
                                        class="form-control" placeholder="Enter Pet Preferences" required readonly
                                        value="{{ $adopter->pet_preferences }}">
                                </div>

                            </div>
                        </div>

                        <!-- Remove the Submit Button -->
                        <!-- <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </div> -->

                    </form>
                </div>

            </div>

        </fieldset>
    </div>
    @include('00_FOOTER')
</body>

</html>
