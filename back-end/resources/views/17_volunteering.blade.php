<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteering</title>
</head>

<body>
    @include('00_NAVBAR')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Volunteering
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('/assets/images/adopt1.jpg') }}" alt="Announcement Photo" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>Important Announcement</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista probare, quae sunt a te dicta?</p>
                                <a href="{{('viewVolunteering')}}" class="btn btn-primary btn-lg">See Details</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('/assets/images/adopt1.jpg') }}"  alt="Announcement Photo" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>Upcoming Event</h5>
                                <p>Et hunc quidem intellegete in philosophum prima lanx forte devolvamur. Ad corpus diceres pertinere-, sed ea, quae dixi, ad corpusne refers?</p>
                                <a href="{{('viewVolunteering')}}" class="btn btn-primary btn-lg">See Details</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
</body>

</html>
