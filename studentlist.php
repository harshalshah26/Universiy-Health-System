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
<title>Student List</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script> 
<link  rel="stylesheet" type="text/css" href="CSS/style.css" />
<!--table sorter plugins-->
<link rel="stylesheet" href="jquery/tablesorter/css/theme.default.css">
<!-- load jQuery and tablesorter scripts -->
<script type="text/javascript" src="jquery/tablesorter/docs/js/jquery-latest.min.js"></script>
<script type="text/javascript" src="jquery/tablesorter/js/jquery.tablesorter.js"></script>

<!-- tablesorter widgets (optional) -->
<script type="text/javascript" src="jquery/tablesorter/js/sssjquery.tablesorter.widgets.js"></script>


</head>
<script>
$(function(){
  $("#myTable").tablesorter();
});
$(function(){
  $("#myTable").tablesorter({ sortList: [[0,0], [1,0]] });
});

</script>



<body bgcolor="FFFF99">
<div class="container">
	<div class="header">
    <div style="margin-top:10px;"><center>Student List</center></div>
    <div style="float:right; font-size:20px;"><a href="searchstudent.php">create new student list based on criteria</a></div>
     <div style="float:left; font-size:20px;margin-left:20px;"><a href="admin.php">Home</a></div>
    </div>
    
    <div id="bottom">
    
    <div style="margin-top:20px;">
    <form action="savetosystem.php" method="post"> 
<?php
include "fetchlist.php";
	error_reporting(0);
	$hidden=$_GET["hidden"];
	//echo $hidden;
	if($hidden=="simplequery") // comes from appointmentlist.php      
	{
	//echo $_GET['query'];
	$result=getMyResult($_GET["query"]);	
	}
	else //query for search data based on criteria
	{
	//echo "in else";
	$result=getResult($hidden);
	$criteria=getCriteria();		
	}
	$query=getQuery();
	//echo $criteria;
	//echo $query;
	if(mysqli_num_rows($result)  > 0)
	{
		 echo "<div style=\"font-size:20px;font-weight:bold;margin-bottom:20px;\"><u>".$criteria."</u></div>";
		 echo "<table id=\"myTable\" class=\"tablesorter\" border=\"1\"><thead><tr><th>Student ID</th><th>Name</th><th>Birthdate</th><th>Email</th><th>Phone</th><th>Appointment Date</th><th>Appointment Time</th><th>Address</th><th>Reason</th><th>Appointment ID</th></tr></thead><tbody>";
		 while($row = mysqli_fetch_assoc($result)) {
         echo "<tr><td>".$row["student_id"]."</td><td>".$row["student_name"]."</td><td> ".$row["student_dob"]."</td><td>".$row["student_email"]."</td><td>".$row["student_phone"]."</td><td>".$row["appointment_d"]."</td><td>".$row["appointment_t"]."<td>".$row["student_add1"].",".$row["student_add2"].",".$row["student_city"].",".$row["student_state"].",".$row["student_zip"]."</td><td>".$row["student_notes"]."</td><td>".$row["appointment_id"]."</td></tr>";
		}
		echo "</tbody></table>";
		echo "<div style=\"margin-left:200px;margin-top:20px;float:left; \"><input type=\"text\" name=\"name\" placeholder=\" Enter List Name\" required></div> ";
		echo "<div style=\"margin-left:40px;margin-top:20px;float:left; \"><input type=\"submit\" value=\"Save\"></div> ";

	}
	else
	{
		echo "<div style=\"margin-top:50px;margin-left:400px;\"><P>No Appointment scheduled...</p></div>";
	}

?>   
	<input type="hidden" name ="query" value=" <?php echo $query; ?>" >
    <input type="hidden" name ="criteria" value=" <?php echo $criteria; ?>" >

	
	</form>
		</div>
        
    </div><!-- bottom end-->
    
     
</div><!-- conttainer end--->


</body>
</html>
<?php
}
?>
