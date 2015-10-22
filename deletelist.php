<?php
include "ConnectionUtil.php";
$conn=beginConnection();
//$query=$_POST["query"];
$name=$_GET["name"];
//$criteria=$_POST["criteria"];
//echo $query;
//echo $name;
//echo $criteria;
$sql="DELETE from querytable where name='".$name."' ;";
echo $sql;
$result=mysqli_query($conn,$sql);
if($result)
{
session_start();
$_SESSION["message"]="Successsfully deleted list.";
//echo "success";
header("location:appointmentlist.php?hidden=groups");
}else
echo "fail";
?>
