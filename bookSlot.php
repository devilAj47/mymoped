<?php
	include_once("connection.php");
$date=$_GET["bookDate"];
$time=$_GET["bookTime"];


// Checking Table For Scooty 1


$query="select * from bookingslots1 where date='$date'";
$table1=mysqli_query($dbcon,$query);//table will have 0 or 1 record
$aryValue1=mysqli_fetch_array($table1);
$count1=$aryValue1[$time];

if($count1=='0'){
    $query="update bookingslots1 set `$time`=1 where date='$date'";
    mysqli_query($dbcon,$query);//table will have 0 or 1 record
    $msg=mysqli_error($dbcon);
    echo $msg;
}

else {
    
    
// Checking Table For Scooty 2
    
    
    $query="select * from bookingslots2 where date='$date'";
$table2=mysqli_query($dbcon,$query);//table will have 0 or 1 record
$aryValue2=mysqli_fetch_array($table2);
$count2=$aryValue2[$time];
    if($count2=='0')
    {
        $query="update bookingslots2 set `$time`=1 where date='$date'";
    mysqli_query($dbcon,$query);//table will have 0 or 1 record
    $msg=mysqli_error($dbcon);
    echo $msg;

    }
    else{
        
        
        // Checking Table For Scooty 3
        
        
        $query="select * from bookingslots3 where date='$date'";
$table3=mysqli_query($dbcon,$query);//table will have 0 or 1 record
$aryValue3=mysqli_fetch_array($table3);
$count3=$aryValue3[$time];
    if($count3=='0')
    {
        $query="update bookingslots3 set `$time`=1 where date='$date'";
    mysqli_query($dbcon,$query);//table will have 0 or 1 record
    $msg=mysqli_error($dbcon);
    echo $msg;

    }
        else{
        $msg='No Slots Available';
        echo $msg;
        }
    }
}

    





?>