<?php
include_once("connection.php");
$btn=$_POST["btn"];
if($btn=="Save")
	doSave($dbcon);
else
	doUpdate($dbcon);

function doSave($dbcon)
{

$rno=$_POST["txtRno"];
    $contact=$_POST["txtMob"];
$hostel=$_POST["txtHostel"];



$dpic_org=$_FILES["DrivLic"]["name"];
$dpic_tmp=$_FILES["DrivLic"]["tmp_name"];
    
$apic_org=$_FILES["AadharCard"]["name"];
$apic_tmp=$_FILES["AadharCard"]["tmp_name"];
    
    
$query="insert into customers(rno,contact,hostel,dpic,apic)values('$rno','$contact','$hostel','$dpic_org','$apic_org')";
mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
{
    
	move_uploaded_file($dpic_tmp,"uploads/".$dpic_org);
	move_uploaded_file($apic_tmp,"uploads/".$apic_org);
	echo "<h2>saved...</h2>";
}
    
else
	echo $msg;
}

?>