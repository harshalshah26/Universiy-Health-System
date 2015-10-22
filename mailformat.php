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
<title>Mail Format</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script> 
<link  rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>

<body bgcolor="FFFF99">
<div class="container">
	<div class="header">
    <div style="margin-top:10px;"><center>E-Mail Format </center></div>
     <div style="float:left; font-size:20px;margin-left:20px;"><a href="admin.php">Home</a></div>
    </div>
    
    <div id="bottom">
    <div style="float:right;margin-right:20px;"><a href="editformat.php?hiddentype=new">Add new e-mail format</a></div>
    <div style="margin-top:20px;">
    
<?php
include "ConnectionUtil.php";
beginConnection();
	$result=getMyResult("Select * from mailview;");
	
	if(mysqli_num_rows($result)  > 0)
	{
		 //echo "";
		 //display all list generated based on criteria
		 while($row = mysqli_fetch_assoc($result)) {
		 echo "<div style=\" clear:both;\"><b>".$row['name']."</b></div><div style=\"float:right;margin-top:10px;\"><a  style=\"margin-right:40px;\" href=\"editformat.php?hidden=".$row['name']."& hiddentype=update\">edit</a><a href=\"deleteformat.php?hidden=".$row['name']."\" style= \"margin-right:10px;\">";
		 if($row['name']!="Wish Happy Birthday"  && $row['name']!="Appointment Reminder")
		 {
		 	echo "delete";
		 }
		 echo "</a></div>";
         echo "<div style=\" height:30px;width:inherit;border:solid;margin-top:10px;\"><b>Subject :</b> ".$row['subject']."</div>";
		 echo "<div style=\" height:100px;width:inherit;border:solid;margin-bottom:30px;\"><div>Dear {Student},</div>";
		 echo "<div style=\"margin-left:100px;\">".$row['body']."</div>";
		
		
		
		echo"</div>";
		}
		
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