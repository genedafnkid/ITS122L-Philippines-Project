<!-- contact.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('path-to-your-styles-folder/styles.css') }}">
    <!-- Include any other CSS or dependencies you may need -->
</head>

<body>
    @include('00_NAVBAR')

    <div class="container mt-5">
    @if(isset($message))
        <div id="successMessage" class="alert alert-success text-center" role="alert">
            {{ $message }}
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('successMessage').style.display = 'none';
            }, 5000);
        </script>
    @endif
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Contact Us</h2>
                        <p class="text-center">Feel free to reach out to us via Facebook:</p>
                        <div class="text-center mb-3">
                            <a href="https://www.facebook.com/saveanimalsofloveandlightPH/" target="_blank">
                                <i class="fab fa-facebook fa-3x"></i> <!-- Adjust the font-size as needed -->
                            </a>
                        </div>
                        <p class="text-center">You can also send us an email at daycarlos28@gmail.com</p>
                        
                        <form action="{{ url('/contact-forms/create') }}" method="post">
                            @csrf <!-- Add this line to include CSRF token -->

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject:</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the message's subject" required>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Contact Number:</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your contact number (+63)" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message content" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
