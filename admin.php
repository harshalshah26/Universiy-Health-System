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
<title>Welcome Admin</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>

<body><body bgcolor="FFFF99">
<div class="container">
	<div class="header">
    <div><center>University Health System</center></div>
    <div style="float:left;font-size:20px;color:#000000;margin-left:10px;margin-top:10px;">Welcome, <?php echo $_SESSION["username"];?></div>
    <div style="font-size:20px;margin-top:10px;float:right;">
    <a href="studentlist.php?hidden=all">Student List</a>
    <a href="appointmentlist.php?hidden=groups" style="margin-left:10px;">Groups</a>
    <a href="" style="margin-left:10px;">Campaign</a>
    <a href="mailformat.php" style="margin-left:10px;">Settings</a>
    <a href="logout.php" style="margin-left:10px;">Logout</a>
    </div> 
    
    
    </div><!--- header --->

	<div id="bottom">
    <form method="post" action="uploads/importdata.php" enctype="multipart/form-data">
    <fieldset>
    <legend>Import</legend>
    <div style="margin-left:200px;font-size:18px;font-weight:bold;margin-top:25px;margin-bottom:25px;">
    	<div style="float:left;margin-right:40px;">Import scheduled appointment from CSV file:</div>
    	<input type="file" name="file" />
        <input type="submit" value="Import" style="margin-left:100px;" />
        <div style="margin-left:400px;margin-top:10px;">NOTE : Open only CSV file.</div>
    </div>
    </fieldset>
    </form>
    
    
    <form method="post" action="addnews.php" enctype="multipart/form-data">
    <fieldset>
    <legend>Important News</legend>
    <div style="margin-left:200px;font-size:18px;font-weight:bold;margin-top:25px;margin-bottom:25px;">
    	<div style="float:left;margin-right:40px;">Add important news here:<br />(which will be displayed to users)</div>
    	<textarea name="news" cols="50"></textarea>
        <input type="submit" value="Add" style="margin-left:100px;" />
    </div>
    </fieldset>
    </form>
    
    
    </div><!--- bottom --->    
    
    
    
    
</div><!--- container --->
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

