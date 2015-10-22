<?php
include "ConnectionUtil.php";
$conn=beginConnection();
$name=$_POST['name'];

$body=$_POST['body'];
$subject=$_POST['subject'];
$type=$_POST['hiddentype'];

if($type=="update")
{
	$sql="UPDATE mailview SET  name='".$name."' , body='".$body."' , subject='".$subject."' where name='".$name."';";
	$result=mysqli_query($conn,$sql);
	session_start();
	$_SESSION["message"]="Successfully updated email format.";
	header("location:mailformat.php");
}
else if($type=="new")
{
	$sql="INSERT INTO mailview values('".$name."','".$subject."','".$body."');";
	$result=mysqli_query($conn,$sql);
	session_start();
	$_SESSION["message"]="Successfully added email format.";
	header("location:mailformat.php");

}






?>