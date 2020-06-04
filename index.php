<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Pricing -->
    <link rel="stylesheet" href="css/pricing.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">

        <?php include 'header.php';?>
        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(pix/1.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <h1>PATIENT REGISTRATION</h1>
                                        <h2>Register as a Patient to enjoy our services</h2>
                                        <p><a class="btn btn-primary btn-lg" href="register.php">Register</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(pix/2.jpeg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <h1>DOCTORS ONLY</h1>
                                        <h2>You have to be a registered Doctor to have access</h2>
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="doc.php">Doctor Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(pix/3.jpeg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <h1>DESK OFFICER ONLY</h1>
                                        <h2>Only the administrator can have access</h2>
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="staff.php">Admin Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="fh5co-course-categories">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>We Care...</h2>
                        <p>You are welcome to visit anytime, you health is our business.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-6 text-center animate-box">

                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <div class="services">
                            <span class="icon">

                                <img src="pix/pat.PNG">
                            </span>
                            <div class="desc">
                                <h3><a href="register.php">PATIENT</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <div class="services">
                            <span class="icon">

                                <img src="pix/doc.PNG">
                            </span>
                            <div class="desc">
                                <h3><a href="register.php">DOCTOR</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <div class="services">
                            <span class="icon">

                                <img src="pix/admin.PNG">
                            </span>
                            <div class="desc">
                                <h3><a href="staff.php">ADMINISTRATOR</a></h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(pix/2.jpeg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 text-center animate-box">

                            </div>

                            <div class="col-md-3 col-sm-6 text-center animate-box">
                                <span class="icon"><i class="icon-study"></i></span>
                                <span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Doctors</span>
                            </div>
                            <div class="col-md-3 col-sm-6 text-center animate-box">

                            </div>
                            <div class="col-md-3 col-sm-6 text-center animate-box">
                                <span class="icon"><i class="icon-head"></i></span>
                                <span class="fh5co-counter js-counter" data-from="0" data-to="790" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Patients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php';?>

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Count Down -->
    <script src="js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
    <script>
        var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate()
        });

        //jQuery example
        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });

    </script>
</body>

</html>
