<?php
	include_once("connection.php");
$Rno=$_GET["Rno"];
$Pwd=$_GET["Pwd"];
$NewPwd=$_GET["NewPwd"];
$CnfNewPwd=$_GET["CnfNewPwd"];
$msg=mysqli_error($dbcon);
if(($NewPwd==$CnfNewPwd)&&($msg==""))
{
    $query="select * from signup where rno='$Rno' and pwd='$Pwd'";
    $table=mysqli_query($dbcon,$query);//0-1
    if(mysqli_num_rows($table)==0)
    {
        
        $msg='Invalid Password';
        echo $msg;
    }
    else{
        $query="update signup set pwd='$NewPwd' where rno='$Rno' and pwd='$Pwd'";
        mysqli_query($dbcon,$query);
    $msg=mysqli_error($dbcon);
    echo $msg;
    }
}
else{
    $msg='Please Enter Same Password';
    echo $msg;
}




?>