<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add events</title>
</head>

<body>
    @include('00_NAVBAR')

    <div class="container mt-4" style="padding-top: 5%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Event</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="photo" class="form-label">Event Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo"
                                    accept="image/*" required>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Event Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="event_type" class="form-label">Event Type</label>
                                <select class="form-control" id="event_type" name="event_type" required>
                                    <option value="Announcement">Announcement</option>
                                    <option value="Volunteering">Volunteering</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="description" class="form-label">Event Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <a href="{{ route('eventsdashboard') }}" class="btn btn-danger btn-lg my-3" style="min-width: 250px;">Cancel</a>
                                    <button class="btn btn-primary btn-lg my-3" style="min-width: 250px;" onclick="showSuccessAlert()">Create Event</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
    <script>
        function showSuccessAlert() {
            alert('Event added successful!');
        }
    </script>
</body>

</html>
