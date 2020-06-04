<!DOCTYPE html>
<?php include("func.php"); ?>
<html lang="">

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

    <title>Patient Details</title>
    <style>
        h2{
            color: #3498DB;
        }
    </style>
</head>

<body>
    <div class="jumbotron" style="background:url('pix/2.jpeg') no-repeat; background-size:cover; height:380px;">
        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
            <div class="row">
                <div class="col-md-1">
                    <a href="adminpanel.php" class="btn btn-light">Go Back</a>
                </div>
                <div class="col-md-3">
                    <h3>PATIENT DETAILS</h3>
                </div>
                <div class="col-md-8">

                    <form class="form-group" action="search_patient.php" method="post">
                        <div class="row">
                            <div class="col-md-10">
                                <input type="text" name="search" class="form-control" placeholder="Enter Hospital Number"></div>
                            <div class="col-md-2"> <input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"></div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="card-body">
            <H2>PATIENT'S INFORMATION</H2>
        </div>
        <table class="table table-hover" border="2px">
            <thead>
                <tr>
                    <th scope="col">HOSPITAL NUMBER </th>
                    <th scope="col">SURNAME</th>
                    <th scope="col">OTHER NAMES </th>
                    <th scope="col">RESIDENTIAL ADDRESS </th>
                    <th scope="col">OCCUPATION </th>
                    <th scope="col">OFFICE ADDRESS </th>
                    <th scope="col">DATE OF BIRTH </th>
                    <th scope="col">SEX </th>
                    <th scope="col">MARITAL STATUS </th>
                    <th scope="col">STATE OF ORIGIN </th>
                    <th scope="col">PLACE OF ORIGIN </th>
                    <th scope="col">TRIBE </th>
                    <th scope="col">PHONE NUMBER </th>
                    <th scope="col">E-MAIL </th>
                    <th scope="col">RELIGION </th>
                    <th scope="col">DENOMINATION </th>

                </tr>
            </thead>

            <tbody>
                <?php get_patient_details(); ?>

            </tbody>
        </table>

    </div>




    <div class='container-fluid'>
        <div class='card-body'>
            <H2>HOSPITAL HISTORY</H2>
        </div>
        <table class='table table-hover' border='2px'>
            <thead>
                <tr>
                    <th scope='col'>HOSPITAL NUMBER </th>
                    <th scope='col'>DATE ADMITTED</th>
                    <th scope='col'>REFERRED BY</th>
                    <th scope='col'>CONSLTANT</th>
                    <th scope='col'>WARD OR CLINIC</th>
                    <th scope='col'>DATE DISCHARGED</th>
                    <th scope='col'>DISPOSAL</th>
                    <th scope='col'>AUTOPSY </th>

            </thead>
            <tbody>
                <?php get_patient_history(); ?>
            </tbody>
        </table>
    </div>


    <div class='container-fluid'>
        <div class='card-body'>
            <H2>TEST RESULT</H2>
        </div>
        <table class='table table-hover' border='2px'>
            <thead>
                <tr>
                    <th scope='col'>HOSPITAL NUMBER </th>
                    <th scope='col'>BLOOD GROUP</th>
                    <th scope='col'>LAB REF. NO.</th>
                    <th scope='col'>RHESUS POS NEG.</th>
                    <th scope='col'>DATE</th>
                    <th scope='col'>GENOTYPE</th>
                    <th scope='col'>SENSITIVITY</th>
                    <th scope='col'>REMARK</th>

            </thead>
            <tbody>
                <?php get_patient_test(); ?>
            </tbody>
        </table>
    </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
