<!doctype html>
<html lang="en">

<head>
    <title>Fisika Kimia 2A | Medan Magnet | {{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <script src="https://kit.fontawesome.com/67db78fea9.js" crossorigin="anonymous"></script>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    @include('partials.navbar')
    <div id="loader-container">

    </div>
    <!--Main Content-->
    <div id="main-page">
        @yield('container')
    </div>
    <!-- Script -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
