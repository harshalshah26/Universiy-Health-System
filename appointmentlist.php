<?php
session_start();
error_reporting(0);
if($_SESSION["username"]==false)
{
	echo "You are not Logged in. Plese <a href=\" index.php\">Login</a> and try again.";
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search List</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script> 
<link  rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>

<body bgcolor="FFFF99">
<div class="container">
	<div class="header">
    <div style="margin-top:10px;"><center>Appointment List</center></div>
    <div style="float:right; font-size:20px;"><a href="searchstudent.php">create new student list based on criteria</a></div>
     <div style="float:left; font-size:20px;margin-left:20px;"><a href="admin.php">Home</a></div>
    </div>
    
    <div id="bottom">
    <div style="margin-top:20px;">
    
<?php
include "fetchlist.php";
	error_reporting(0);
	$hidden=$_GET["hidden"];
	$result=getResult($hidden);//$hidden=groups
	//$query=getQuery();
	//echo $query;
	if(mysqli_num_rows($result)  > 0)
	{
		 echo "<div style=\"\"><b>NOTE:-  1:January , 2:February , 3:March ,....., 11:November , 12:December</b></div>";
		 echo "<div style=\"margin-left:400px;margin-top:50px;   \">";
		 echo "<div style=\" margin-bottom:20px;font-size:20px;margin-left:140px;\"><b>All List</b></div>";
		 echo "<table border=1 style=\"font-size:20px; \"><tr><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Criteria</th></tr>";
		 //display all list generated based on criteria
		 while($row = mysqli_fetch_assoc($result)) {
         echo "<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"studentlist.php?hidden=simplequery&query=".$row["query"]."\">".$row["name"]."</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$row["criteria"]."</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"deletelist.php?name=".$row["name"]."\">delete</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>";
		}
		echo "</table></div>";	
	}
	else
	{
		echo "<div style=\"margin-top:50px;margin-left:400px;\"><P>No List Found...</p></div>";
	}

?>   
	

	
	
		</div>
        
    </div><!-- bottom end-->
    
     
</div><!-- conttainer end--->
<?php
$message=$_SESSION["message"];
if($message!=null)
{
echo "<script type=text/javascript>alert('$message');</script>";
unset($_SESSION['message']);
}
?>


</body>
</html>
<?php
}
?>
