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
    <div class="container mt-5 mb-5" id="about">
        <!-- Mission and Vision Section -->
        <div id="mission-vision">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-box">
                            <h2>Mission</h2>
                            <p>Our mission is to...</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-box">
                            <h2>Vision</h2>
                            <p>Our vision is to...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mb-4">About Us</h1>
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non risus felis. Etiam
                        elementum,
                        metus
                        in congue interdum, diam arcu feugiat lacus, vitae eleifend purus libero vel est. Sed non ex
                        vitae
                        lacus vestibulum scelerisque. Fusce ac scelerisque lacus. Sed nec ullamcorper tortor. Maecenas
                        tristique ac lacus vel tincidunt. Vestibulum sit amet purus id libero suscipit tempor. Sed
                        hendrerit
                        velit at libero consequat tincidunt. Nam fermentum ante nec aliquet congue.
                    </p>
                    <p class="text-justify">
                        Proin rhoncus suscipit sapien auctor aliquam. Proin auctor vestibulum quam, a efficitur enim
                        laoreet
                        ut. Vivamus vestibulum fringilla tincidunt. Sed eget mi at justo fringilla finibus vel eget
                        libero.
                        Nulla aliquet efficitur justo, vel suscipit massa fermentum in. Sed tristique semper ex, a
                        interdum
                        orci laoreet eu.
                    </p>
                </div>
            </div>
        </div>
    </div>


    @include('00_FOOTER')
</body>

</html>
