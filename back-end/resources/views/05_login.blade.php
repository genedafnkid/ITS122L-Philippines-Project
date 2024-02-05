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

    <!-- Login Section -->
    <div class="container mt-5" style="padding-top: 10%">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Admin Login</h2>
                        @if(isset($successMessage))
                            <script>
                                alert('{{ $successMessage }}');
                            </script>
                        @elseif(isset($errorMessage))
                            <script>
                                alert('{{ $errorMessage }}');
                            </script>
                        @endif
                        <form action="{{ route('validateLogin') }}" method="post" id="loginForm">
                            @csrf <!-- Add this line to include CSRF token -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>

</html>
