<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>

<body>
    @include('00_NAVBAR')

    <div class="container mt-4" style="padding-top: 3%">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Profile</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('updateProfile', ['id' => $admin->id]) }}">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                    value="{{ $admin->first_name }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $admin->last_name }}"required>
                                </div>

                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <input type="text" class="form-control" id="role" name="role" value="{{ $admin->role }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="user_name" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $admin->user_name }}"required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}"required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        pattern="(?=.*[A-Z]).{6,}"
                                        title="Password must be at least 6 characters with at least one capital letter"
                                        value="{{ $admin->password }}" required>
                                </div>


                                <div class="mb-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="showSuccessAlert()">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
    <script>
        function showSuccessAlert() {
            alert('Profile update successful!');
        }
    </script>
</body>

</html>
