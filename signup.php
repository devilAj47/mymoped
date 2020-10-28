<?php 
include_once("connection.php");
$rno=$_GET["uid"];
$pwd=$_GET["upwd"];
$ueid=$_GET["ueid"];
$mobile=$_GET["umob"];
$name=$_GET["uname"];


$query="insert into signup (name, pwd, email, rno, mobile) values('$name', '$pwd', '$ueid', '$rno', '$mobile');";
    mysqli_query($dbcon, $query);

    $msg=mysqli_error($dbcon);
        if($msg=="")
        {
            mysqli_query($dbcon, $query);
            
        }
else
    echo $msg;
    
?>
