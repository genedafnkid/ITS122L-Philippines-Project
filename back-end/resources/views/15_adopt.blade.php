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

                <!-- PET INFORMATION SECTION -->
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center">PET INFORMATION</h2>

                            <div class="form-group row">
                                <label for="petId" class="col-sm-4 col-form-label text-right">Pet ID:</label>
                                <div class="col-sm-8">
                                    <input type="text" id="petId" class="form-control" placeholder="Enter Pet ID" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="petName" class="col-sm-4 col-form-label text-right">Pet Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" id="petName" class="form-control" placeholder="Enter Pet's Name" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- YOUR INFORMATION SECTION -->
                <div class="container mt-4">
                    <h2 class="text-center">YOUR INFORMATION</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="yourName">Your Name:</label>
                                <input type="text" id="yourName" class="form-control" placeholder="Enter Your Name" required>
                            </div>

                            <div class="form-group">
                                <label for="yourEmail">Email:</label>
                                <input type="email" id="yourEmail" class="form-control" placeholder="Enter Your Email" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="yourContact">Contact Number:</label>
                                <input type="text" id="yourContact" class="form-control" placeholder="Enter Your Contact Number" required>
                            </div>

                            <div class="form-group">
                                <label for="calendar" class="schedule-label">SCHEDULE:</label>
                                <input type="date" id="calendar" class="form-control">

                                <div class="submit-btn-container mt-3">
                                <button type="submit" class="btn btn-success btn-lg submit-btn" style="margin-top: 50px; margin-left: -50px;">Submit</button>

                </div>
                                

                                 
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </fieldset>
    </div>
    @include('00_FOOTER')
</body>

</html>