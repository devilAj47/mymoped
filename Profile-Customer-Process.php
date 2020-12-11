<?php
include_once("connection.php");
$btn=$_POST["btn"];
if($btn=="Save")
	doSave($dbcon);

function doSave($dbcon)
{

$rno=$_POST["txtRno"];
$mobile=$_POST["txtMob"];
$email=$_POST["txtmail"];
$hostel=$_POST["txtHostel"];



$dpic_org=$_FILES["DrivLic"]["name"];
$dpic_tmp=$_FILES["DrivLic"]["tmp_name"];
    
$cpic_org=$_FILES["CollegeID"]["name"];
$cpic_tmp=$_FILES["CollegeID"]["tmp_name"];
    
    
$query="update signup set email='$email',mobile='$mobile',hostel='$hostel',dpic='$dpic_org',cpic='$cpic_org' where rno='$rno'";
mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
{
    
	move_uploaded_file($dpic_tmp,"uploads/".$dpic_org);
	move_uploaded_file($cpic_tmp,"uploads/".$cpic_org);
	echo "<h2>saved...</h2>";
}
    
else
	echo $msg;
}


?>