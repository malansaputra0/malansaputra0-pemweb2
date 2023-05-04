<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- ============== Meta tag ================== -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
        <meta name="description" content="Portfolio M. Alan Saputra">
        <meta name="author" content="M. Alan Saputra">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- =============== Title =================== -->
        <title>{{ $title }}</title>
    </head>
    <body>
        @include('layouts/web.header')

        @yield('index')

        @include('layouts/web.footer')
      
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/typed.js/typed.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
      
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        
    </body>
</html>