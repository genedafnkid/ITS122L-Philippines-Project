<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
</head>

<body>
    @include('00_NAVBAR')

    <div class="container mt-4" style="padding-top: 5%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            Edit Event
                            <a href="{{ route('eventsdashboard') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('updateEvent', ['id'=> $event->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                                
                                <label for="photo" class="form-label">Event Photo</label><br>
                                <div class="text-center">
                                    <img src="{{ asset($event->display_image) }}" alt="Event Photo" style="max-width: 60%; margin-top: 5px;">
                                </div>
                                <input type="text" class="form-control" id="photo_path" value="{{ 'public\\' . $event->display_image }}" readonly>
                                <input type="file" class="form-control" id="photo" name="photo"
                                    accept="image/*" value="{{ 'public/' . $event->display_image }}">
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Event Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="event_type" class="form-label">Event Type</label>
                                <select class="form-control" id="event_type" name="event_type" required>
                                    <option value="Announcement" {{ $event->event_type == 'Announcement' ? 'selected' : '' }}>Announcement</option>
                                    <option value="Volunteering" {{ $event->event_type == 'Volunteering' ? 'selected' : '' }}>Volunteering</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Event Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4"  required>{{ $event->description }}"</textarea>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button class="btn btn-primary btn-lg my-3"
                                        style="min-width: 250px;" onclick="showSuccessAlert()">Update</button>
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
            alert('Event update successful!');
        }

        
    </script>
</body>

</html>
