<!-- index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
</head>

<body>
    @include('00_NAVBAR')

    <!-- Home Section -->
    <div class="container mt-5" id="home">
        <div class="row">
            <h1 style="text-align: center">Save ALL: Rescuing Lives, One Tail at a Time.</h1>
            <h2 style="text-align: center">Bank Transfer Information</h2>

            <div class="col-md-7" style="padding-top: 3%">
                <!-- Text on the right -->
                <div class="bank-info">
                    <h2>BDO</h2>
                    <p>
                        <strong>Account Name:</strong> Save All<br>
                        <strong>Account Number:</strong> 006540103300
                    </p>
                </div>

                <div class="bank-info">
                    <h2>Gcash</h2>
                    <p>
                        <strong>Account Name:</strong> Desiree C<br>
                        <strong>Account Number:</strong> 09178991013
                    </p>
                </div>

                <div class="bank-info">
                    <h2>Bank of the Philippine Islands</h2>
                    <p>
                        <strong>Account Name:</strong> Roberta Nicole C. Benedito<br>
                        <strong>Account Number:</strong> 4449004634
                    </p>
                </div>

                <div class="bank-info">
                    <h2>PayPal</h2>
                    <p>
                        <strong>Account Email:</strong> daycarlos28@yahoo.com
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Placeholder image on the right -->
                <img src="assets/images/qr.jpg" alt="Image 2" class="img-fluid float-left mr-3"
                            style="max-width: 400px; float: right; margin:20px;">
            </div>
        </div>
    </div>

    @include('00_FOOTER')
</body>

</html>
