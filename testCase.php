<!--

<?php 
include_once("connection.php");

for($i=0;$i<10;$i++)
{   
$d=strtotime("+$i day");
$s=date('y-m-d',$d);
echo $s;
$query="insert into bookingslots (date) values('$s');";
    mysqli_query($dbcon, $query);

    $msg=mysqli_error($dbcon);
        if($msg=="")
        {
            
            
        }
else
    echo $msg;
}

    
?>
-->
