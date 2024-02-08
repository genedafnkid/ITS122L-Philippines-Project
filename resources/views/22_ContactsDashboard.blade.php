<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopters Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rG9HMKI3fSYKnLXEBLz5uoCrU6bqVlTKq8q+A6fL5+6UizkKRp4No6A4d3E/4vRE" crossorigin="anonymous">
</head>

<body>
    @include('00_NAVBAR')
    <div class="container mt-4" style="padding-top:5%">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Contact Forms Dashboard
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Submission Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($forms as $form)
                                <tr>
                                    <td>{{ $form->subject }}</td>
                                    <td>{{ $form->name }}</td>
                                    <td>{{ $form->email }}</td>
                                    <td>{{ $form->created_at }}</td>
                                    <td>
                                        <a href="{{ route('23_adminContactForm', ['id' => $form->id]) }}" class="btn btn-warning">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-WGsfTjj5l4i5WuW2BgFOpGC03rU5sXYDI7PSW0Mi5Ou7U2Zt4gr8fc5MR1JK8FtF" crossorigin="anonymous">
    </script>
</body>

</html>
