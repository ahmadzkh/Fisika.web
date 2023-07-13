<!doctype html>
<html lang="en">

<head>
    <title>Fisika Kimia Dasar 2A | Medan Magnet | {{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/flexmasonry/dist/flexmasonry.css">
    <script src="https://unpkg.com/flexmasonry/dist/flexmasonry.js"></script>

    <script src="https://kit.fontawesome.com/67db78fea9.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="{{ asset('assets/img/icon.png') }}" type="image/x-icon">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/aos/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bottomNavbar.css') }}">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/kelompok.css') }}">
    <style>
        .hide-on-loader {
            display: hidden;
        }
    </style>
</head>

<body>
    @include('loader')
    <div class="hide-on-loader">
        @include('partials.navbar')
        <div id="loader-container">

        </div>

        <!--Main Content-->
        <div id="main-page">
            @yield('container')
        </div>
    </div>

    <!-- Script -->
    @yield('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.8/lottie.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/lottie.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="assets/aos/dist/aos.js"></script>
    <script src="assets/animejs/lib/anime.min.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/appParticles.js') }}"></script>
    <script src="{{ asset('assets/js/bottomNavbar.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script>
        // Wait for the window to finish loading
        window.addEventListener('load', function() {
            // Get the loader container element
            var loaderContainer = document.getElementById('loader-container');

            // Get the elements to hide and show
            var elementsToHide = document.querySelectorAll('.hide-on-loader');

            // Hide the elements
            for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'none';
            }

            // Add a delay of 2 seconds (2000 milliseconds)
            setTimeout(function() {
                // Remove the loader container element from the DOM
                loaderContainer.parentNode.removeChild(loaderContainer);

                // Show the hidden elements
                for (var i = 0; i < elementsToHide.length; i++) {
                    elementsToHide[i].style.display = 'block';
                    document.body.style.backgroundColor = 'none';

                }
            }, 2000); // Adjust the delay time as needed
        });
    </script>
</body>

</html>
