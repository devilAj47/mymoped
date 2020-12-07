<?php

include_once("connection.php");

$rno=$_GET["rno"];
$pwd=$_GET["pwd"];


$query="select * from users where uid='$uid'and pwd='$pwd' and status='1'";
$table=mysqli_query($dbcon,$query);//0-1
if(mysqli_num_rows($table)==0)
{
    echo "<b> you have entered invalid username or password</b>";
    return;
}

else if(mysqli_num_rows($table)==1)
{
    $row=mysqli_fetch_array($table);
    echo $row["category"];
     $_SESSION["activeuser"]=$uid;//stored uid in session
}
?>