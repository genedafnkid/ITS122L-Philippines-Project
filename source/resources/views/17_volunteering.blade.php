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
                    @foreach($events as $event)
                        @if($event->event_type === 'Volunteering')
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset($event->display_image) }}" alt="Announcement Photo" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>{{ $event->title }}</h5>
                                <p>{{ Illuminate\Support\Str::limit($event->description, 200, $end='...') }}</p>
                                <a href="{{route('viewVolunteering', $event->id)}}" class="btn btn-primary btn-lg">See Details</a>
                            </div>
                        </div>
                        <hr>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
</body>

</html>
