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
            <legend class="text-center mb-4">Volunteer Information</legend>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Your Name </label>
                    <input type="text" id="name" class="form-control" placeholder="Enter Your Name" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="contactNumber">Contact Number </label>
                    <input type="text" id="contactNumber" class="form-control" placeholder="Enter Your Contact Number" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="email">Email </label>
                    <input type="text" id="email" class="form-control" placeholder="Enter Your Email" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="age">Age </label>
                    <input type="text" id="age" class="form-control" placeholder="Enter Your Age" required>
                </div>

                <div class="col-12 mb-3">
                    <label for="experienceSkills">Experience & Skills </label>
                    <textarea type="text" id="experienceSkills" class="form-control" placeholder="Description" required></textarea>
                </div>

               <center> <div class="col-2 mb-3">
                        <label for="scheduleDate">Schedule Date </label>
                        <input type="date" id="scheduleDate" class="form-control" required>
                    </div></center>

               <div class="text-center">
                <br> </br>  <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </div>
        </fieldset>
    </div>
@include('00_FOOTER')

</body>





</body>
</html>