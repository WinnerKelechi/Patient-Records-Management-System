<!DOCTYPE html>
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

    <title>Register</title>
</head>

<body>
    <?php include 'header.php';?>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-8">

                <div class="card">

                    <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                        PATIENT'S INFORMATION
                    </div>
                    <div class="card-body">
                        <form class="form-group" action="func.php" method="post">
                            <label>HOSPITAL NUMBER :</label>
                            <input type="number" name="HP_ID" class="form-control"><br>
                            <label>PATIENT'S SURNAME :</label>
                            <input type="text" name="Psurname" class="form-control"><br>
                            <label>OTHER NAMES :</label>
                            <input type="text" name="Pother" class="form-control"><br>
                            <label>RESIDENTIAL ADDRESS :</label>
                            <input type="text" name="Paddress" class="form-control"><br>
                            <label>OCCUPATION :</label>
                            <input type="text" name="Poccupation" class="form-control"><br>
                            <label>OFFICE ADDRESS :</label>
                            <input type="text" name="Poffice" class="form-control"><br>
                            <label>DATE OF BIRTH :</label>
                            <input type="date" name="Pdob" class="form-control"><br>
                            <label>SEX :</label>
                            <input type="text" name="Psex" class="form-control"><br>
                            <label>MARITAL STATUS :</label>
                            <input type="text" name="Pmarital" class="form-control"><br>
                            <label>STATE OF ORIGIN :</label>
                            <input type="text" name="Pstateof" class="form-control"><br>
                            <label>PLACE OF ORIGIN :</label>
                            <input type="text" name="LGAof" class="form-control"><br>
                            <label>TRIBE :</label>
                            <input type="text" name="Ptribe" class="form-control"><br>
                            <label>PHONE NUMBER :</label>
                            <input type="number" name="Pcell" class="form-control"><br>
                            <label>E-MAIL :</label>
                            <input type="email" name="Pemail" class="form-control"><br>
                            <label>RELIGION :</label>
                            <input type="text" name="Religion" class="form-control"><br>
                            <label>DENOMINATION :</label>
                            <input type="text" name="Denomination" class="form-control"><br>
                            <input type="submit" name="pat_submit" value="Register" class="btn btn-primary">

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.11/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
                title: 'WELCOME',
                text: 'Please Kindly Provide these details',
                imageUrl: 'pix/2.jpeg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
            })
        });

        const {
            value: email
        } = await Swal.fire({
            title: 'Input email address',
            input: 'email',
            inputPlaceholder: 'Enter your email address'
        })

        if (email) {
            Swal.fire(`Entered email: ${email}`)
        }

    </script>
</body>

</html>
