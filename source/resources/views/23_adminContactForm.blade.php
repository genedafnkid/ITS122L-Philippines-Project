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
                        <h2 class="card-title text-center">Contact Form Submission Details</h2>
                        

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject:</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the message's subject" required readonly
                                        value="{{ $form->subject }}">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required readonly
                                        value="{{ $form->name }}">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required readonly
                                        value="{{ $form->email }}">
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Contact Number:</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your contact number (+63)" required readonly
                                        value="{{ $form->phone_number }}">
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required readonly>{{ $form->message }}</textarea>

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
