<?php

$conn=null;
// Create connection
function beginConnection()
{
$servername = "localhost";
$username = "root";
$password = "";
$database = "createdb";
global $conn;
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	exit;
}

return $conn;

}

function getMyResult($sql)
{
global $conn;

	$result=mysqli_query($conn,$sql);
	return $result;
}

?> 