<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SPK Perum</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo url('/'); ?>/assets/img/home.png" rel="icon">
    <link href="<?php echo url('/'); ?>/assets/img/home.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo url('/'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo url('/'); ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Selecao - v2.3.1
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- NAVBAR -->
    @include('customer.layouts.headerlogin')
    <!-- END NAVBAR -->
    <!-- MAIN -->
    @yield('content')
    <!-- END MAIN -->
    <!-- FOOTER -->
    @include('customer.layouts.footerlogin')
    <!-- END FOOTER -->


    <!-- Vendor JS Files -->
    <script src="<?php echo url('/'); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo url('/'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo url('/'); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php echo url('/'); ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo url('/'); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo url('/'); ?>/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?php echo url('/'); ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo url('/'); ?>/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo url('/'); ?>/assets/js/main.js"></script>

</body>

</html>