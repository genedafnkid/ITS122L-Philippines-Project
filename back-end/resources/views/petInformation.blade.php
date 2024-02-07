<!-- petInformation.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Information</title>
    <link rel="stylesheet" href="{{ asset('path-to-your-styles-folder/styles.css') }}">
    <!-- Include any other CSS or dependencies you may need -->
</head>

<body>
    @include('00_NAVBAR')

    <div class="container mt-5">
                @if(session('message'))
                    <div id="successMessage" class="alert alert-success text-center" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">

                        <form action="{{ route('pet.information.form.create') }}" method="post">
                            @csrf <!-- CSRF Token -->
                            <br>
                            <h2 class="card-title text-center">PET INFORMATION</h2>
                            <br>                   
                            <div class="mb-3  mx-auto" >
                                <label for="petId" class="form-label">PET ID</label>                               
                                <input type="text" class="form-control" id="petId" name="petId" placeholder="4323423" required >
                            </div>

                            <div class="mb-3" >
                                <label for="petName" class="form-label">PET NAME</label>
                                <input type="text" class="form-control" id="petName" name="petName" placeholder="Felix DaCat" required>
                            </div>

                            <div class="mb-3" >
                                <label for="age" class="form-label">AGE</label>
                                <input type="number" class="form-control" id="age" name="age" placeholder="8" required>
                            </div>

                            <div class="mb-3" >
                                <label for="breed" class="form-label">BREED</label>
                                <input type="text" class="form-control" id="breed" name="breed" placeholder="Shih Tzu" required>
                            </div>

                            <div class="mb-3" >
                                <label for="sex" class="form-label">SEX</label>
                                <input type="text" class="form-control" id="sex" name="sex" placeholder="Male" required>
                            </div>

                            <div class="mb-3" >
                                <label for="neutered" class="form-label">NEUTERED</label>
                                <select class="form-select" id="neutered" name="neutered" required placeholder="Yes" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="d-grid" >
                                <button type="submit" class="btn btn-primary">ADOPT</button>
                            </div>
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('00_FOOTER')

    <!-- Include Font Awesome for Facebook icon -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
