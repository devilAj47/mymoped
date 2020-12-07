<?php
	include_once("connection.php");
$Rno=$_GET["Rno"];
$Pwd=$_GET["Pwd"];
$NewPwd=$_GET["NewPwd"];
$CnfNewPwd=$_GET["CnfNewPwd"];
$msg=mysqli_error($dbcon);
if(($NewPwd==$CnfNewPwd)&&($msg==""))
{
    $query="update signup set pwd='$NewPwd' where rno='$Rno' and pwd='$Pwd'";
    $msg=mysqli_query($dbcon,$query);//table will have 0 or 1 record
    echo $msg;
}
else{
    echo"<h3>Please enter same password</h3>";
}




?>