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
<title>Search Student</title>
<link  rel="stylesheet" type="text/css" href="CSS/style.css" />
<link rel="stylesheet" href="CSS/datepicker/style.css" />
<script src="CSS/jquery/jquery-1.9.1.js"></script>
<script src="CSS/jquery/jquery-ui-1.10.3.custom.js"></script>
<script>
$(function() {
$( "#datepicker").datepicker({
	 changeMonth: true,
	 changeYear: true,
	 yearRange: "1950:2025",
	 dateFormat:"yy-mm-dd"

});
$( "#datepicker1").datepicker({
	 changeMonth: true,
	 changeYear: true,
	 yearRange: "1950:2025",
	  dateFormat:"yy-mm-dd"

});
});
</script>

</head>

<body bgcolor="FFFF99">
<div class="container">
	<div class="header">
    <div style="margin-top:10px;"><center>Search Student</center></div>
     <div style="float:left; font-size:20px;margin-left:20px;"><a href="admin.php">Home</a></div>
    </div>
	
    <div id="bottom" style="margin-top:100px;margin-left:400px;width:500px;" >
    <form method="post" action="studentlist.php?hidden=search">
    <fieldset>
    <legend>Search Criteria</legend>
    <table>
            <tr>
            <td><div>Appointment Date(Between):</div></td>
            <td><div><input id="datepicker" type="text" name="date1" /></div></td>
            <td><div><input id="datepicker1" type="text" name="date2" /></div></td>
            </tr>
            
            <tr>
            <td></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR</td>
            </tr>
            
            <tr></tr>
            
            <tr>
            <td><div>Birthday Month:</div></td>
            <td><div><input type="text" name="month" /></div></td>
            <td><div>Enter month number(e.g for january 1, February 2...)</div></td>
            </tr>
            
             <tr>
            <td></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR</td>
            </tr>
            
            <tr></tr>
             <tr>
            <td><div>Appointment Month:</div></td>
            <td><div><input type="text" name="app_month" /></div></td>
            <td><div>Enter month number(e.g for january 1, February 2...)</div></td>
            </tr>
            
              <tr></tr>  <tr></tr>  <tr></tr>
            <tr>
            <td></td>
            <td><div><input type="submit" value="Submit" /></div></td>
            </tr>
     </table>
    
    
    </fieldset>
    </form>
    </div><!--bottom --->    
    
    
</div><!-- conttainer end--->


</body>
</html>
<?php
}
?>