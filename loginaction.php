<?php
include "ConnectionUtil.php";
$conn=beginConnection();
$username=$_POST["username"];
$password=$_POST["password"];
$sql="SELECT * FROM usertable where username='".$username."' AND password='".$password."';";
$result=mysqli_query($conn,$sql);
if($result)
{
	session_start();
	if(mysqli_num_rows($result)  > 0)
	{
		session_start();
		$_SESSION["username"]=$username;
		header("location:admin.php");
	}
	else
	{
		$_SESSION["message"]="Wrong username or password !!!";
		header("location:index.php");
	}

}



?>