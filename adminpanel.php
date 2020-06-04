<?php include('func.php'); ?>
<?php

if(isset($_SESSION['name'])){
$name=$_SESSION['name'];

}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/staff.php");
exit();
}
?>
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
    <title>Admin</title>
</head>

<body>
    <div class="jumbotron" style="background:url('pix/2.jpeg') no-repeat; background-size:cover; height:380px;">
        <div class="col-md-1">

            <?php if(isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php 
               echo $_SESSION['success'];
               unset($_SESSION['success']);
               
               ?>
                </h3>
            </div>

            <?php endif ?>

            <?php if(isset($_SESSION['name'])): ?>
            <p style="color:pink;">Welcome <strong>
                    <?php echo $_SESSION['name']; ?></strong></p>
            <p><a href="adminpanel.php?logout='1'" style="color: red;">Logout</a></p>
            <?php endif ?>



        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff; border-color:#3498DB; ">Desk Aministrator</a>
                    <a href="patient_details.php" class="list-group-item">Patient Details</a>
                    <a href="#addTest" class="list-group-item">Add Patient Test Result</a>
                    <a href="patient_details.php" class="list-group-item">View Patient Medical History</a>

                    <a href="#upPatient" class="list-group-item">Update Patient's Hospital History</a>

                    <a href="#addPatient" class="list-group-item">Add New Patient</a>

                </div>
                <hr />
                <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff; border-color:#3498DB; ">DOCTOR'S USE ONLY</a>
                    <a href="#upPatient" class="list-group-item">Update Patient's Medical History</a>
                    <a href="patient_details.php" class="list-group-item">View Patient Medical History</a>

                </div>
                <hr />
                <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff; border-color:#3498DB; ">Clinic's info</a>
                    <a href="viewstaff.php" class="list-group-item">View Staff List</a>
                    <a href="#addStaff" class="list-group-item">Add New Staff</a>
                    <a href="#addDoctor" class="list-group-item">Add DOCTOR</a>

                </div>
            </div>
            <div class="col-md-8">
                <div class="row">

                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                                <a name="addStaff"></a> ADD NEW STAFF
                            </div>
                            <div class="card-body">
                                <form class="form-group" action="func.php" method="post">
                                    <label>STAFF'S ID :</label>
                                    <input type="number" name="EmpID" class="form-control"><br>
                                    <label>STAFF'S NAME :</label>
                                    <input type="text" name="Sname" class="form-control"><br>
                                    <label>RESIDENTIAL ADDRESS :</label>
                                    <input type="text" name="Saddress" class="form-control"><br>
                                    <label>OCCUPATION :</label>
                                    <select name="Soccupation" class="form-control">
                                        <option selected>...Select...</option>
                                        <option>Doctor</option>
                                        <option>Nurse</option>
                                        <option>Aministrator</option>
                                    </select>
                                    <br>
                                    <label>SEX :</label>
                                    <select name="Ssex" class="form-control">
                                        <option selected>...Select...</option>
                                        <option>MALE</option>
                                        <option>FEMALE</option>
                                    </select><br>
                                    <label>PHONE NUMBER :</label>
                                    <input type="number" name="Scell" class="form-control"><br>
                                    <label>E-MAIL :</label>
                                    <input type="email" name="Semail" class="form-control"><br>
                                    <input type="submit" name="staff_submit" value="Register" class="btn btn-primary">

                                </form>
                            </div>
                        </div>

                        <div class="card">

                            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                                <a name="addDoctor"></a> ADD DOCTOR
                            </div>
                            <div class="card-body">
                                <form class="form-group" action="func.php" method="post">
                                    <label>DOCTOR'S NAME :</label>
                                    <input type="text" name="Dname" class="form-control"><br>
                                    <label>CLINIC :</label>
                                    <input type="text" name="Dclinic" class="form-control"><br>
                                    <label>DOCTOR'S ID :</label>
                                    <input type="text" name="EmpID" class="form-control"><br>
                                    <label>GENDER :</label>
                                    <select name="sex" class="form-control">
                                        <option selected>...Select...</option>
                                        <option>MALE</option>
                                        <option>FEMALE</option>
                                    </select>
                                    <br>
                                    <label>HOSPITAL :</label>
                                    <input type="text" name="hospital" class="form-control"><br>
                                    <input type="submit" name="add_doc" value="Add Doctor" class="btn btn-primary">

                                </form>
                            </div>
                        </div>

                        <div class="card">

                            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                                <a name="addPatient"></a>ADD NEW PATIENT
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
                                    <select name="Psex" class="form-control">
                                        <option selected>...Select...</option>
                                        <option>MALE</option>
                                        <option>FEMALE</option>
                                    </select><br>
                                    <label>MARITAL STATUS :</label>
                                    <select name="Psex" class="form-control">
                                        <option selected>...Select Status...</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Divorced</option>
                                    </select>
                                    <input type="text" name="Pmarital" class="form-control"><br>
                                    <label>STATE OF ORIGIN :</label>
                                    <select name="Pstateof" class="form-control">
                                        <option selected>...Select...</option>
                                        <option>Abia</option>
                                        <option>Adamawa</option>
                                        <option>Anambra</option>
                                        <option>Akwa Ibom</option>
                                        <option>Bauchi</option>
                                        <option>Bayelsa</option>
                                        <option>Benue</option>
                                        <option>Borno</option>
                                        <option>Cross River</option>
                                        <option>Delta</option>
                                        <option>Ebonyi</option>
                                        <option>Enugu</option>
                                        <option>Edo</option>
                                        <option>Ekiti</option>
                                        <option>FCT - Abuja</option>
                                        <option>Gombe</option>
                                        <option>Imo</option>
                                        <option>Jigawa</option>
                                        <option>Kaduna</option>
                                        <option>Kano</option>
                                        <option>Katsina</option>
                                        <option>Kebbi</option>
                                        <option>Kogi</option>
                                        <option>Kwara</option>
                                        <option>Lagos</option>
                                        <option>Nasarawa</option>
                                        <option>Niger</option>
                                        <option>Ogun</option>
                                        <option>Ondo</option>
                                        <option>Osun</option>
                                        <option>Oyo</option>
                                        <option>Plateau</option>
                                        <option>Rivers</option>
                                        <option>Sokoto</option>
                                        <option>Taraba</option>
                                        <option>Yobe</option>
                                        <option>Zamfara</option>
                                    </select>
                                    <br>
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

                        <div class="card">

                            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                                <a name="upPatient"></a> UPDATE PATIENT'S MEDICAL HISTORY
                            </div>
                            <div class="card-body">
                                <form class="form-group" action="func.php" method="post">
                                    <label>Patient's ID :</label>
                                    <input type="number" name="HP_ID" class="form-control"><br>
                                    <label>Diagnosis :</label>
                                    <input type="text" name="Diagnosis" class="form-control"><br>
                                    <label>Code :</label>
                                    <input type="number" name="Code" class="form-control"><br>
                                    <label>Date :</label>
                                    <input type="date" name="date" class="form-control"><br>
                                    <input type="submit" name="dig_submit" value="Update" class="btn btn-primary">

                                </form>
                            </div>
                        </div>



                        <div class="card">

                            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                                <a name="upPatient"></a> UPDATE PATIENT'S HOSPITAL HISTORY
                            </div>
                            <div class="card-body">
                                <form class="form-group" action="func.php" method="post">
                                    <label>Patient's ID :</label>
                                    <input type="number" name="HP_ID" class="form-control"><br>
                                    <label>DATE ADMITTED/ATTENDED :</label>
                                    <input type="date" name="Admit_date" class="form-control"><br>
                                    <label>REFERRED BY :</label>
                                    <input type="text" name="Refer" class="form-control"><br>
                                    <label>CONSULTANT :</label>
                                    <input type="text" name="Consltant" class="form-control"><br>
                                    <label>WARD OR CLINIC :</label>
                                    <input type="text" name="Ward" class="form-control"><br>
                                    <label>DATE DISCHARGED :</label>
                                    <input type="date" name="Discharge" class="form-control"><br>
                                    <label>DISPOSAL :</label>
                                    <input type="text" name="Disposal" class="form-control"><br>
                                    <label>AUTOPSY :</label>
                                    <input type="text" name="Autopsy" class="form-control"><br>
                                    <input type="submit" name="HH_submit" value="Update" class="btn btn-primary">

                                </form>
                            </div>
                        </div>




                        <div class="card">

                            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                                <a name="addTest"></a> ADD PATIENT'S TEST RESULT
                            </div>
                            <div class="card-body">
                                <form class="form-group" action="func.php" method="post">
                                    <label>Patient's ID :</label>
                                    <input type="number" name="HP_ID" class="form-control"><br>
                                    <label>BLOOD GROUP :</label>
                                    <input type="text" name="blood_group" class="form-control"><br>
                                    <label>LAB. REF. NO.:</label>
                                    <input type="text" name="lab_ref" class="form-control"><br>
                                    <label>RHESUS POS NEG :</label>
                                    <input type="text" name="pos" class="form-control"><br>
                                    <label>DATE :</label>
                                    <input type="date" name="date" class="form-control"><br>
                                    <label>GENOTYPE :</label>
                                    <input type="text" name="genotype" class="form-control"><br>
                                    <label>SENSITIVITY :</label>
                                    <input type="text" name="sensitivity" class="form-control"><br>
                                    <label>REMARK :</label>
                                    <input type="text" name="Remark" class="form-control"><br>
                                    <input type="submit" name="test_submit" value="Update" class="btn btn-primary">

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
                        text: 'Have a great experience...',
                        imageUrl: 'pix/2.jpeg',
                        imageWidth: 400,
                        imageHeight: 200,
                        imageAlt: 'Custom image',
                    })
                });

            </script>
</body>

</html>
<?php/*
include('func.php');
if(!isset($_SESSION['EmpID'])){
    echo "session expired";
}
*/
?>
