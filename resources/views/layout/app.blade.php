<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Farok Ahmed || Home</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('fontend') }}/images/favicon.png" type="image/x-icon">
    {{ asset('fontend') }}
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/flaticon.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/fontawesome-5.14.0.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/magnific-popup.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/nice-select.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/animate.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/slick.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/style.css">

</head>
<body class="home-one">
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- main header -->
       @include('componands.header')


        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4>Get Appointment</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn">Submit now</button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar -->

        @yield('contend')

        <!-- footer area start -->
        @include('componands.footer')
        <!-- footer area end -->

    </div>
    <!--End pagewrapper-->


    <!-- Jquery -->
    <script src="{{ asset('fontend') }}/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('fontend') }}/js/bootstrap.min.js"></script>
    <!-- Appear Js -->
    <script src="{{ asset('fontend') }}/js/appear.min.js"></script>
    <!-- Slick -->
    <script src="{{ asset('fontend') }}/js/slick.min.js"></script>
    <!-- Nice Select -->
    <script src="{{ asset('fontend') }}/js/jquery.nice-select.min.js"></script>
    <!-- Image Loader -->
    <script src="{{ asset('fontend') }}/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="{{ asset('fontend') }}/js/isotope.pkgd.min.js"></script>
    <!--  WOW Animation -->
    <script src="{{ asset('fontend') }}/js/wow.min.js"></script>
    <!-- Custom script -->
    <script src="{{ asset('fontend') }}/js/script.js"></script>

    <!-- For Contact Form -->
    <script src="{{ asset('fontend') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('fontend') }}/js/form-validator.min.js"></script>
    <script src="{{ asset('fontend') }}/js/contact-form-script.js"></script>

</body>
</html>
