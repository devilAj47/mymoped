<?php
	include_once("connection.php");
session_start();
$cust_id=$_SESSION["loggedUser"];
$date=$_GET["date"];

//$query="select * from onlineusers where uid='$uid'";
$query="select * from bookingslots1 where date='$date'";
$table=mysqli_query($dbConn,$query);

$ary=array();//JSON-1

while($row=mysqli_fetch_array($table))
{
	
	$ary[]=$row;
}
echo json_encode($ary);
?>
