<!-- index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save ALL</title>
</head>

<body>
    @include('00_NAVBAR')

<!-- Home Section -->
<div class="container mt-5" id="Adoption">
    <h1 style="text-align: center">Add pet for Adoption.</h1>

    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <!-- Add Pet Form -->
            <form action="{{ route('addPetForAdoption') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="pet_id" class="form-label">Pet ID</label>
                    <input type="text" class="form-control" id="pet_id" name="pet_id" required>
                </div>
                <div class="mb-3">
                    <label for="pet_name" class="form-label">Pet Name</label>
                    <input type="text" class="form-control" id="pet_name" name="pet_name" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" name="age" required>
                </div>
                <div class="mb-3">
                    <label for="breed" class="form-label">Breed</label>
                    <input type="text" class="form-control" id="breed" name="breed" required>
                </div>
            
                <div class="mb-3 ">
                <label for="Sex" class="form-label">Sex</label>
                <input type="text" class="form-control" id="Sex" name="Sex" required>
                
                </div>
                <div class="mb-3 ">
                <label for="Neutered" class="form-label">Neutered</label>
                <input type="text" class="form-control" id="Neutered" name="Neutered" required>
                </div>
                <button type="submit" class="btn btn-primary">Add </button>
            </form>
        </div>
    </div>
</div>



    <!-- Add the new code here -->
    @include('contact')

    @include('00_FOOTER')
</body>

</html>
