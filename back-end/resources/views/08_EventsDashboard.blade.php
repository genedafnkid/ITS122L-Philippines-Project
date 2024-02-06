<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Dashboard</title>
</head>

<body>
    @include('00_NAVBAR')

    <div class="container mt-4" style="padding-top:5%">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Events Dashboard
                        <a href="{{ route('newevent') }}" class="btn btn-primary">Create Event</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>DNJWNJSANDSAJDNJKSA</td>
                                        <td>WNDJSANJSADNSA</td>
                                        <td>WNDAJANASJDNSJA</td>
                                        <td>
                                            <a href="{{ route('editevent') }}"
                                                class="btn btn-warning">Edit</a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
</body>

</html>
