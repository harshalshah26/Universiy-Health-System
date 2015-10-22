<?php
include "ConnectionUtil.php";
$conn=beginConnection();
$name=$_GET['hidden'];
echo $name;
$sql="DELETE from mailview where name='".$name."';";
	$result=mysqli_query($conn,$sql);
	session_start();
	$_SESSION["message"]="Successfully deleted email format.";
	header("location:mailformat.php");

?>