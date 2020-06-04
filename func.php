<?php
session_start();
$Dname="";
$errors=array();
$con=mysqli_connect("localhost", "root", "", "patient");
if(isset($_POST['login_submit'])){
    $name=$_POST['name'];
    $clinic = $_POST['clinic'];
    $EmpID = $_POST['EmpID'];
    $EmpCell=$_POST['EmpCell'];
if(empty($name)){
        array_push($errors,"name is required");
    }
    if(empty($clinic)){
        array_push($errors,"Clinic is required");
    }
    if(empty($EmpID)){
        array_push($errors,"EmpID is required");
    }
     if(count($errors) == 0){
    $query= "select * from admin where name='$name' and clinic='$clinic' and EmpID='$EmpID' and EmpCell='EmpCell'";
    $result=mysqli_query($con,$query);

         $_SESSION['name'] = $name;
            $_SESSION['success'] = "You are now logged in";
        header("Location:adminpanel.php");
        
     }
     
    
}

//logout
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['Dname']);
    header('location: index.php');
}

if(isset($_POST['login_submit2'])){
    $Dclinic = mysqli_real_escape_string($con, $_POST['Dclinic']);
    $Dname=mysqli_real_escape_string($con, $_POST['Dname']);
    
    $EmpID = mysqli_real_escape_string($con, $_POST['EmpID']);
    
    if(empty($Dname)){
        array_push($errors,"Doctore's name is required");
    }
    if(empty($Dclinic)){
        array_push($errors,"Clinic is required");
    }
    if(empty($EmpID)){
        array_push($errors,"Employee's ID is required");
    }
     if(count($errors) == 0){
    $query= "select * from doctor where Dclinic='$Dclinic' and Dname='$Dname' and EmpID='$EmpID'";
    $result=mysqli_query($con,$query);

    if(mysqli_num_rows($result)==1){
        $_SESSION['Dname'] = $Dname;
            $_SESSION['success'] = "You are now logged in";
        header("Location:adminpanel2.php");
    }
      
    
   
     }
     
    }

if(isset($_POST['pat_submit'])){
     $HP_ID=$_POST['HP_ID'];
    $Psurname=$_POST['Psurname'];
    $Pother=$_POST['Pother'];
    $Paddress=$_POST['Paddress'];
    $Poccupation=$_POST['Poccupation'];
    $Poffice=$_POST['Poffice'];
    $Pdob=$_POST['Pdob'];
    $Psex=$_POST['Psex'];
    $Pmarital=$_POST['Pmarital'];
    $Pstateof=$_POST['Pstateof'];
    $LGAof=$_POST['LGAof'];
    $Ptribe=$_POST['Ptribe'];
    $Pcell=$_POST['Pcell'];
    $Pemail=$_POST['Pemail'];
    $Religion=$_POST['Religion'];
    $Denomination =$_POST['Denomination'];
    
    $query="insert into registration(HP_ID,Psurname,Pother,Paddress,Poccupation,Poffice,Pdob,Psex,Pmarital,Pstateof,LGAof,Ptribe,Pcell,Pemail,Religion,Denomination)values('$HP_ID','$Psurname','$Pother','$Paddress','$Poccupation','$Poffice','$Pdob','$Psex','$Pmarital','$Pstateof','$LGAof','$Ptribe','$Pcell','$Pemail','$Religion','$Denomination')";
    
     $result=mysqli_query($con,$query);
    
    if($result){
  
        echo "<script>alert('Registered Successfully')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
    }
    else{
     echo "<script>alert('Error')</script>";
        echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
     
    
}
 
if(isset($_POST['add_doc'])){
     $EmpID=$_POST['EmpID'];
    $hospital=$_POST['hospital'];
    $Dname=$_POST['Dname'];
    $sex=$_POST['sex'];
    $Dclinic=$_POST['Dclinic'];

    
    $query="insert into doctor(EmpID,hospital,Dname,sex,Dclinic)values('$EmpID','$hospital','$Dname','$sex','$Dclinic')";
    
     $result=mysqli_query($con,$query);
    
    if($result){
  
        echo "<script>alert('Registered Successfully $Dname')</script>";
        echo "<script>window.open('adminpanel2.php', '_self')</script>";
    }
    else{
     echo "<script>alert('Error')</script>";
        echo "<script>window.open('adminpanel2.php', '_self')</script>";
    }
     
    
}


function get_patient_details()
{
    global $con;
    $query="select * from registration";
    $result=mysqli_query($con,$query);
    
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
                        <td> $Pother</td>
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
                        <td><a href='delete.php?HP_ID="
                        .$row["HP_ID"]."'>Delete</a></td>
                    </tr>
        ";
    }
        
        
}

if(isset($_POST['staff_submit'])){
     $EmpID=$_POST['EmpID'];
    $Sname=$_POST['Sname'];
    $Saddress=$_POST['Saddress'];
    $Soccupation=$_POST['Soccupation'];
    $Ssex=$_POST['Ssex'];
    $Scell=$_POST['Scell'];
    $Semail=$_POST['Semail'];

    
    $query="insert into staff(EmpID,Sname,Saddress,Soccupation,Ssex,Scell,Semail)values('$EmpID','$Sname','$Saddress','$Soccupation','$Ssex','$Scell','$Semail')";
    
     $result=mysqli_query($con,$query);
    
    if($result){
  
        echo "<script>alert('Registered Successfully - $Sname')</script>";
        echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
    else{
     echo "<script>alert('Error')</script>";
        echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
     
    
}


if(isset($_POST['dig_submit'])){
     $HP_ID=$_POST['HP_ID'];
    $Diagnosis=$_POST['Diagnosis'];
    $Code=$_POST['Code'];
    $date=$_POST['date'];

    
    $query="insert into diagnosis(HP_ID,Diagnosis,Code,date)values('$HP_ID','$Diagnosis','$Code','$date')";
    
     $result=mysqli_query($con,$query);
    
    if($result){
  
        echo "<script>alert('update Successfully')</script>";
        header("Location:patient_details.php");
    }
    else{
     echo "<script>alert('Error')</script>";
       echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
     
    
}



if(isset($_POST['HH_submit'])){
    $HP_ID=$_POST['HP_ID'];
    $Admit_date=$_POST['Admit_date'];
    $Refer=$_POST['Refer'];
    $Consltant=$_POST['Consltant'];
    $Ward=$_POST['Ward'];
    $Discharge=$_POST['Discharge'];
    $Disposal=$_POST['Disposal'];
    $Autopsy=$_POST['Autopsy'];
    
    $query="insert into hospital_history(HP_ID,Admit_date,Refer,Consltant,Ward,Discharge,Disposal,Autopsy)values('$HP_ID','$Admit_date','$Refer','$Consltant','$Ward','$Discharge','$Disposal','$Autopsy')";
    
     $result=mysqli_query($con,$query);
    
    if($result){
  
        echo "<script>alert('update Successfully')</script>";
        echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
    else{
     echo "<script>alert('Error')</script>";
       echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
     
    
}

function get_patient_history(){
    global $con;
    $query="select * from hospital_history";
    $result=mysqli_query($con,$query);
    
    while($rowh=mysqli_fetch_array($result)){
        $HP_ID=$rowh['HP_ID'];
    $Admit_date=$rowh['Admit_date'];
    $Refer=$rowh['Refer'];
    $Consltant=$rowh['Consltant'];
    $Ward=$rowh['Ward'];
    $Discharge=$rowh['Discharge'];
    $Disposal=$rowh['Disposal'];
    $Autopsy=$rowh['Autopsy'];
        
        echo "
                    <tr>
                        
                        <td>$HP_ID</td>
                        <td>$Admit_date</td>
                        <td>$Refer</td>
                        <td>$Consltant</td>
                        <td>$Ward</td>
                        <td>$Discharge</td>
                        <td>$Disposal</td>
                        <td>$Autopsy</td>
                       
                    </tr>
        ";
    }
        
        
}

//test result database

if(isset($_POST['test_submit'])){
     $HP_ID=$_POST['HP_ID'];
    $blood_group=$_POST['blood_group'];
    $lab_ref=$_POST['lab_ref'];
    $pos=$_POST['pos'];
    $date=$_POST['date'];
    $genotype=$_POST['genotype'];
    $sensitivity=$_POST['sensitivity'];
    $Remark=$_POST['Remark'];
   
  

    
    $query="insert into test_result(HP_ID,blood_group,lab_ref,pos,date,genotype,sensitivity,Remark)values('$HP_ID','$blood_group','$lab_ref','$pos','$date','$genotype','$sensitivity','$Remark')";
    
     $result=mysqli_query($con,$query);
    
    if($result){
  
        echo "<script>alert(' Successful')</script>";
        header("Location:patient_details.php");
    }
    else{
     echo "<script>alert('Error')</script>";
       echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
     
    
}

function get_patient_test(){
    global $con;
    $query="select * from test_result";
    $result=mysqli_query($con,$query);
    
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
                       
     </tr>
        ";
    }
        
        
}


function get_patient_staff(){
    global $con;
    $query="select * from staff";
    $result=mysqli_query($con,$query);
    
    while($rowA=mysqli_fetch_array($result)){

    $EmpID=$rowA['EmpID'];
    $Sname=$rowA['Sname'];
    $Saddress=$rowA['Saddress'];
    $Soccupation=$rowA['Soccupation'];
    $Ssex=$rowA['Ssex'];
    $Scell=$rowA['Scell'];
    $Semail=$rowA['Semail'];
         
         echo "
     <tr>
     <td>$EmpID</td>
     <td> $Sname</td>
     <td>$Saddress</td>
     <td> $Soccupation</td>
     <td>$Ssex</td>
     <td>$Scell</td>
     <td>$Semail</td>
     
     ";
        
    }
        
        
}

function get_patient_doctor(){
    global $con;
    $query="select * from doctor";
    $result=mysqli_query($con,$query);
    
    while($rowA=mysqli_fetch_array($result)){

    $EmpID=$rowA['EmpID'];
    $Dname=$rowA['Dname'];
    $sex=$rowA['sex'];
    $Dclinic=$rowA['Dclinic'];
    $hospital=$rowA['hospital'];
         
         echo "
     <tr>
     <td>$EmpID</td><td> $Dname</td>
<td>$sex</td>
<td>$Dclinic</td>
<td>$hospital</td>

";

}


}



?>