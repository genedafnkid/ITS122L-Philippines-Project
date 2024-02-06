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
                                    <th scope="col">Post Date</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{ $event->title }}</td></td>
                                        <td>{{ $event->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $event->event_type }}</td>
                                        <td>
                                            <a href="{{ route('09_editevent', ['id' => $event->id]) }}"
                                                class="btn btn-warning">Edit</a>
                                                <a href="{{ route('deleteEvent', ['id' => $event->id]) }}" 
                                                class="btn btn-danger" 
                                                onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this event?')) { document.getElementById('delete-form-{{$event->id}}').submit(); }">
                                                Delete
                                                </a>
                                                <form id="delete-form-{{$event->id}}" action="{{ route('deleteEvent', ['id' => $event->id]) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            
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
</body>

</html>
