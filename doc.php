<!DOCTYPE html>
<?php include "func.php"?>
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
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <title>Doctor</title>
</head>

<body style="background:url('pix/1.jpg') no-repeat; background-size:cover;">
    <?php include "header.php";?>
    <hr>
    <div class="container" style="width:600px">
        <h2 style="color:red; letter-spacing: 12px">DOCTOR LOGIN</h2>
        <div class="card">
            <div class="card-body">
                <form class="form-group" action="doc.php" method="post">

                    <label>Clinic :</label><br>
                    <input type="text" name="Dclinic" class="form-control" placeholder="Enter Clinic"><br>
                    <label>Name Of Doctor :</label><br>
                    <input type="text" name="Dname" class="form-control" placeholder="Enter full name"><br>
                    <label>Employee ID :</label><br>
                    <input type="password" name="EmpID" class="form-control" placeholder="Enter Doctor's ID"><br>
                    <input type="submit" name="login_submit2" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <hr>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
