<?php
	include_once("connection.php");
$date=$_GET["bookDate"];
$time=$_GET["bookTime"];




    $query="update bookingslots set `$time`=1 where date='$date'";
    mysqli_query($dbcon,$query);//table will have 0 or 1 record
    $msg=mysqli_error($dbcon);
    echo $msg;






?>