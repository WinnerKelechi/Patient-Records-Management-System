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
    <footer id="fh5co-footer" role="contentinfo" style="background-image: url(pix/head.jpeg); height:450px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 fh5co-widget">
                    <h3>About University of Calabar Teaching Hospital</h3>
                    <p style="margin-top: 0px; text-align:justify;">The University of Calabar Teaching Hospital was established in...</p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">

                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">

                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>LOG IN/ REGISTER</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="staff.php">ADMINISTRATOR</a></li>
                        <li><a href="doc.php">DOCTOR</a></li>
                        <li><a href="register.php">PATIENT</a></li>




                    </ul>
                </div>



                <ul class="fh5co-footer-links">
                    <div class="col-md-12">

                        <form class="form-group" action="search_patient.php" method="post">
                            <div class="row">
                                <div class="col-md-10" style="border-radius:400px; background-color:white;">
                                    <input type="text" name="search" class="form-control" placeholder="Enter Hospital Number"></div>
                                <div class="col-md-2"> <input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"></div>
                            </div>
                        </form>

                    </div>
                </ul>



            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy;
                            <?php echo date('Y');?> All Rights Reserved.</small>

                    </p>
                </div>
            </div>

        </div>
    </footer>
</body>

</html>
