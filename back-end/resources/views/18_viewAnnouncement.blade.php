<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement Details </title>
</head>

<body>
    @include('00_NAVBAR')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">
                        Volunteering Details
                    </div>
                    <div class="card-body">
                        <img src="path/to/photo.jpg" alt="Announcement Photo" class="img-fluid mb-3">
                        <h5 class="card-title">Important Announcement</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne
                            merninisti licere mihi ista probare, quae sunt a te dicta?</p>
                        <a href="{{('volunteer')}}" class="btn btn-primary btn-lg mx-auto">Volunteer Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
    
</body>

</html>
