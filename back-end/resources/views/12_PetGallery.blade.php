<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Gallery</title>
</head>

<body>
    @include('00_NAVBAR')
    <div class="container mt-4" style="padding-top:5%">
        
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Pet Gallery
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @for ($i = 1; $i <= 15; $i++)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('/assets/images/adopt' . $i . '.jpg') }}" class="card-img-top" alt="Cat {{$i}}">
                                        <div class="card-body">
                                            <h5 class="card-title">Pet ID: 000{{$i}}</h5>
                                            <a href="{{ url('adopt')}}" class="btn btn-primary btl-lg">ADOPT</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
</body>

</html>
