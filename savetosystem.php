<?php
include "ConnectionUtil.php";
$conn=beginConnection();
$query=$_POST["query"];
$name=$_POST["name"];
$criteria=$_POST["criteria"];
//echo $query;
//echo $name;
//echo $criteria;
$sql="INSERT INTO querytable values('".$query."','".$name."','".$criteria."');";
//echo $sql;
$result=mysqli_query($conn,$sql);
if($result)
{
session_start();
$_SESSION["message"]="Successsfully inserted list.";
header("location:appointmentlist.php?hidden=groups");
}else
echo "fail";
?>