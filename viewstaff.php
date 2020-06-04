<?php include ('func.php');?>
<html>

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>

        <title></title>
        <style>
            h2 {
                color: #3498DB;

            }

            body {
                background-image: url(pix/2.jpeg);
                background-repeat: no-repeat;
                background-size: cover;

            }

        </style>
    </head>

</head>

<body>
    <div class="container-fluid">
        <a href="adminpanel2.php" style="color:blue;font-size:40px;">Return</a>
        <div class="card-body">
            <H2>STAFF DETAILS</H2>
        </div>
        <table class="table table-hover" border="2px">
            <thead>
                <tr>
                    <th scope="col">STAFF'S ID </th>
                    <th scope="col">STAFFS NAME</th>
                    <th scope="col">RESIDENTIAL ADDRESS</th>
                    <th scope="col">OCCUPATION </th>
                    <th scope="col">SEX </th>
                    <th scope="col">PHONE NUMBER </th>
                    <th scope="col">EMAIL </th>


            </thead>
            <tbody>

                <?php get_patient_staff(); ?>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="card-body">
            <H2>REGISTERED DOCTORS' DETAILS</H2>
        </div>
        <table class="table table-hover" border="2px">
            <thead>
                <tr>
                    <th scope="col">DOCTOR'S ID </th>
                    <th scope="col">DOCTOR'S NAME</th>
                    <th scope="col">GENDER </th>
                    <th scope="col">CLINIC</th>
                    <th scope="col">HOSPITAL </th>


            </thead>
            <tbody>

                <?php get_patient_doctor(); ?>
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>
<hr>
