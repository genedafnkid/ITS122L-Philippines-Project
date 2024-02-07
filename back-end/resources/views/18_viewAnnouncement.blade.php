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
                        Announcement Details
                    </div>
                    <div class="card-body">
                        <img src="{{ asset($event->display_image) }}" alt="Announcement Photo" class="img-fluid">
                        <h1 class="card-title">{{ $event->title }}</h1>
                        <p class="card-text">{{ $event->description }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
    
</body>

</html>
