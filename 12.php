<?php 
include_once("connection.php");
$uid=$_GET["uid"];
$pwd=$_GET["upwd"];
$ueid=$_GET["ueid"];
$mobile=$_GET["umob"];
$category=$_GET["ucat"];
if($category=='worker')
{
    $uid=$_GET["uid"];
    $ueid=$_GET["ueid"];
$mobile=$_GET["umob"];

    $query1="insert into workers (uid, cnumber, email) values('$uid', '$mobile', '$cnumber')";
}
else{
        $uid=$_GET["uid"];
$ueid=$_GET["ueid"];
$mobile=$_GET["umob"];
        $query1="insert into citizens (uid, contact, email) values('$uid', '$mobile', '$ueid')";

}

$query="insert into signup (uid, ueid, pwd, mobile, category) values('$uid', '$ueid', '$pwd', '$mobile', '$category');";
    mysqli_query($dbConn, $query);

    $msg=mysqli_error($dbConn);
        if($msg=="")
        {
                mysqli_query($dbConn, $query1);

            echo "Congo";
        }
else
    echo $msg;
    
?>
