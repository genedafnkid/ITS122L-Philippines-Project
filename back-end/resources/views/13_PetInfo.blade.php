<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Info</title>
</head>

<body>
    @include('00_NAVBAR')
    <div class="container mt-4" style="padding-top:5%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <img src="{{ asset($petPhotoPath ?? 'placeholder.jpg') }}" class="card-img-top" alt="{{ $petName ?? 'Pet' }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $petName ?? 'Pet' }}</h5>
                        <p class="card-text">{{ $petDescription ?? 'No description available.' }}</p>
                        <p class="card-text">Status: {{ $petStatus ?? 'Unknown' }}</p>
                        <p class="card-text">Age: {{ $petAge ?? 'Unknown' }} years</p>
                        <a href="#" class="btn btn-success">Adopt Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
</body>

</html>
