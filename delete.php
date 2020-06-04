<?php

include ("func.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$HP_ID = $_GET['HP_ID'];

// sql to delete a record
$query = "DELETE FROM registration WHERE HP_ID = '$HP_ID'"; 
$result=mysqli_query($con,$query);
if ($result) {
    //mysqli_close($con);
    header('Location:patient_details.php'); 
    exit;
} else {
    echo "Error deleting record";
}
