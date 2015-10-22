<?php
include "ConnectionUtil.php";
$conn=beginConnection();
$news=$_POST["news"];
$date=date("Y-m-d h:i:sa");
//echo $date;
$sql="INSERT INTO news values('".$news."','".$date."');";
//echo $sql;
$result=mysqli_query($conn,$sql);
if($result>0)
{
	session_start();
	$_SESSION["message"]="News Successfully added.";
	header("location:admin.php");
}




?>
