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

       

        <!-- Pet Gallery Section -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Pets Available for Adoption
                    </div>
                    <br>
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-10 text-center">
                                <p>Thank you for considering adoption! Your decision to provide a loving home to a pet in need is truly commendable. If you're interested in making a difference in the life of a furry friend, please take a moment to explore our available pets below. Your next beloved companion may be waiting for you.</p>
                                <a href="{{ url('adopt')}}" class="btn btn-primary btn-lg">ADOPT NOW</a>
                            </div>
                        </div>
                    <div class="card-body">
                        <div class="row">
                            @for ($i = 1; $i <= 15; $i++)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('/assets/images/adopt' . $i . '.jpg') }}" class="card-img-top" alt="Cat {{$i}}">
                                        <div class="card-body">
                                            <!-- Removed the Adopt Button from here -->
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
