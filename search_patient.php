<html>

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

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <title></title>
    <style>
        h2 {
            color: #3498DB;

        }

        body {
            background-color: white;
            background-repeat: no-repeat;
            background-size: cover;

        }

    </style>
</head>

<body>


    <?php
include ("func.php");
if(isset($_POST['patient_search_submit'])){
    $HP_ID= $_POST['search'];
    $query = "select * from registration where HP_ID='$HP_ID'";
    
    $result= mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
    
    echo "<hr>
    <div class='container-fluid'>
    
    <div class='card-body'> <a href='index.php'  class='btn btn-primary'> Go Back</a></div>
       <div class='card-body'><H2>PATIENT INFORMATION</H2></div>
        <table class='table table-hover' border='2px'>
            <thead>
                <tr>
                    <th scope='col'>HOSPITAL NUMBER </th>
                    <th scope='col'>SURNAME</th>
                    <th scope='col'>OTHER NAMES </th>
                    <th scope='col'>RESIDENTIAL ADDRESS </th>
                    <th scope='col'>OCCUPATION </th>
                    <th scope='col'>OFFICE ADDRESS </th>
                    <th scope='col'>DATE OF BIRTH </th>
                    <th scope='col'>SEX </th>
                    <th scope='col'>MARITAL STATUS </th>
                    <th scope='col'>STATE OF ORIGIN </th>
                    <th scope='col'>PLACE OF ORIGIN </th>
                    <th scope='col'>TRIBE </th>
                    <th scope='col'>PHONE NUMBER </th>
                    <th scope='col'>E-MAIL </th>
                    <th scope='col'>RELIGION </th>
                    <th scope='col'>DENOMINATION </th>
                </tr>
            </thead>
            <tbody>
    ";
    while($row=mysqli_fetch_array($result)){
        $HP_ID=$row['HP_ID'];
    $Psurname=$row['Psurname'];
    $Pother=$row['Pother'];
    $Paddress=$row['Paddress'];
    $Poccupation=$row['Poccupation'];
    $Poffice=$row['Poffice'];
    $Pdob=$row['Pdob'];
    $Psex=$row['Psex'];
    $Pmarital=$row['Pmarital'];
    $Pstateof=$row['Pstateof'];
    $LGAof=$row['LGAof'];
    $Ptribe=$row['Ptribe'];
    $Pcell=$row['Pcell'];
    $Pemail=$row['Pemail'];
    $Religion=$row['Religion'];
    $Denomination =$row['Denomination'];
     echo "
     <tr>
     <td>$HP_ID</td>
     <td> $Psurname</td>
     <td>$Pother</td>
     <td>$Paddress</td>
     <td>$Poccupation</td>
     <td>$Poffice</td>
     <td>$Pdob</td>
     <td>$Psex</td>
     <td>$Pmarital</td>
     <td>$Pstateof</td>
     <td>$LGAof</td>
     <td>$Ptribe</td>
     <td>$Pcell</td>
     <td>$Pemail</td>
     <td>$Religion</td>
     <td>$Denomination</td>
     
     ";   
    }
    echo "</tbody></table></div></div></div>";
    
     echo "<hr>
    <div class='container-fluid'>
       <div class='card-body'><H2>DIAGNOSIS</H2></div>
        <table class='table table-hover' border='2px'>
            <thead>
                <tr>
                    <th scope='col'>HOSPITAL NUMBER </th>
                    <th scope='col'>DIAGNOSIS</th>
                    <th scope='col'>CODE</th>
                    <th scope='col'>DATE </th>
                   
            </thead>
            <tbody>
    ";
   
    $query = "select * from diagnosis where HP_ID='$HP_ID'";
    
    $result= mysqli_query($con,$query);
     while($roww=mysqli_fetch_array($result)){
        $HP_ID=$roww['HP_ID'];
    $Diagnosis=$roww['Diagnosis'];
    $Code=$roww['Code'];
    $date=$roww['date'];
         
         echo "
     <tr>
     <td>$HP_ID</td>
     <td> $Diagnosis</td>
     <td>$Code</td>
     <td>$date</td>";
         echo "</tbody></table></div></div>";
}
    
    
        echo "<hr>
    <div class='container-fluid'>
       <div class='card-body'><H2>PATIENT'S HOSPITAL HISTORY</H2></div>
        <table class='table table-hover' border='2px'>
            <thead>
                <tr>
                    <th scope='col'>HOSPITAL NUMBER </th>
                    <th scope='col'>DATE ADMITTED</th>
                    <th scope='col'>REFERRED BY</th>
                    <th scope='col'>CONSULTANT </th>
                    <th scope='col'>WARD OR CLINIC </th>
                    <th scope='col'>DATE DISCHARGED </th>
                    <th scope='col'>DISPOSAL </th>
                    <th scope='col'>AUTOPSY </th>
                   
            </thead>
            <tbody>
    ";
   
    $query = "select * from hospital_history where HP_ID='$HP_ID'";
    
    $result= mysqli_query($con,$query);
     while($rowA=mysqli_fetch_array($result)){
        $HP_ID=$rowA['HP_ID'];
    $Admit_date=$rowA['Admit_date'];
    $Refer=$rowA['Refer'];
    $Consltant=$rowA['Consltant'];
         $Ward=$rowA['Ward'];
         $Discharge=$rowA['Discharge'];
         $Disposal=$rowA['Disposal'];
         $Autopsy=$rowA['Autopsy'];
         
         echo "
     <tr>
     <td>$HP_ID</td>
     <td> $Admit_date</td>
     <td>$Refer</td>
     <td>$Consltant</td>
     <td>$Ward</td>
     <td>$Discharge</td>
     <td>$Disposal</td>
     <td>$Autopsy</td>
     ";
         echo "</tbody></table></div></div>";
}
    
    
    
            echo "<hr>
    <div class='container-fluid'>
       <div class='card-body'><H2>TEST RESULTS DETAILS</H2></div>
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
    ";
   
    $query = "select * from test_result where HP_ID='$HP_ID'";
    
    $result= mysqli_query($con,$query);
     while($rowt=mysqli_fetch_array($result)){
        $HP_ID=$rowt['HP_ID'];
    $blood_group=$rowt['blood_group'];
    $lab_ref=$rowt['lab_ref'];
    $pos=$rowt['pos'];
    $date=$rowt['date'];
    $genotype=$rowt['genotype'];
    $sensitivity=$rowt['sensitivity'];
    $Remark=$rowt['Remark'];
         
         echo "
     <tr>
     <td>$HP_ID</td>
     <td> $blood_group</td>
     <td>$lab_ref</td>
     <td>$pos</td>
     <td>$date</td>
     <td>$genotype</td>
     <td>$sensitivity</td>
     <td>$Remark</td>
     ";
         echo "</tbody></table></div></div>";
}
}
    else{
        echo "<script>alert('--------  Please insert an ID or Register. You current do not have any record')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
    }
}


?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
