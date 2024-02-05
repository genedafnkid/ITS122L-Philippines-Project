<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save ALL</title>
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
                            <form method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="contact_num" class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" id="contact_num" name="contact_num"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="age" name="age" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        pattern="(?=.*[A-Z]).{6,}"
                                        title="Password must be at least 6 characters with at least one capital letter"
                                        required>
                                </div>


                                <div class="mb-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')
</body>

</html>
