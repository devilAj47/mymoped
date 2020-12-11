<?php 
include_once("connection.php");


$interval=strtotime("+1 month");
$startDate=date('y-m-d');
$endDate=date('y-m-d',$interval)

$query="insert into  (rno, startdate, enddate ) values('', '$startDate', '$endDate');";
    mysqli_query($dbcon, $query);

    $msg=mysqli_error($dbcon);
        if($msg=="")
        {
            echo $msg;
            
        }
else
    echo $msg;
    
?>
