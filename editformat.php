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
<title>Edit Format</title>
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
   
    <div style="margin-top:20px;">
    <form method="post" action="saveformat.php">
    <input type="hidden" name="hiddentype" value="<?php echo $_GET['hiddentype'];?>"/>
    <input type="hidden" name="hiddenname" value="<?php echo $_GET["hidden"];?>" />
    <fieldset>
    <legend>Email Format</legend>
	<div>Name:</div><div><input type="text" name="name" value="<?php echo $_GET["hidden"];?>"/></div>
    <div>Subject:</div><div><input type="text" name="subject"/></div>
    <div>Message:</div><textarea name="body">Add Message here...</textarea>
    <div style="margin-top:10px;"><input type="submit" value="Submit" /></div>

	
	</form>
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