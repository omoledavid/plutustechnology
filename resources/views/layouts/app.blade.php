<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/boxicons.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Rextfy Html Template</title>
    <link rel="icon" href="assets/image/logo/rextfy-icon-white.png" />
</head>

<body>
    <!-- scroll top -->
    <div class="circle-container">
        <svg class="circle-progress svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- sidebar menu start -->
    @include('partials.sidebar')
    <!-- sidebar menu end -->
    <!-- header section start -->
    @include('partials.header')
    <!--  header section end -->

    {{ $slot }}

    <!-- Banner section start -->
    @include('partials.footer')
    <!--  Main jQuery  -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Swiper slider JS -->
    <!-- Counterup JS -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <!-- swiper -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <!-- Wow  JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- GSAP  JS -->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
