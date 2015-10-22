<?php
include "ConnectionUtil.php";
$conn=beginConnection();
$sql=null;
$criteria=null;
function getResult($hidden)
{
global $conn,$sql,$criteria;

//$hidden=$_GET['hidden'];
if($hidden==="all")
{

	$sql="SELECT * from appscheduler_bookings;";
	$result=mysqli_query($conn,$sql);
	$criteria="All Scheduled Appointment";
	
}
else if($hidden==="search") //case for searchstudent.php
{
	$date1=$_POST['date1'];
	$date2=$_POST['date2'];
	$month=$_POST['month'];
	$app_month=$_POST['app_month'];
	if($date1!=null && $date2!=null)
	{
	$sql="SELECT * from appscheduler_bookings where appointment_d between \"".$date1."\" and  \"".$date2."\";";
	$criteria="Appointment Between ".$date1." and ".$date2;
	}
	else if($month!=null && $month!='')
	{
	$sql="SELECT * from appscheduler_bookings where MONTH(student_dob)=".$month.";";
	$criteria="Appointment whose Birth Month is ".$month;
	}
	else if($app_month!=null)
	{
	$sql="SELECT * from appscheduler_bookings where MONTH(appointment_d)=".$app_month.";";
	$criteria="Appointment in Month ".$app_month;	
	}
	$result=mysqli_query($conn,$sql);
}
else if($hidden==="groups")//case for appointmentlist.php
{

	$sql="SELECT * from querytable;";
	$result=mysqli_query($conn,$sql);
	
}

$conn->close();
return $result;
}
function getQuery()
{
	global $sql;
	return $sql;
}

function getCriteria()
{
	global $criteria;
	return $criteria;
}

/*function getMyResult($sql1)
{
global $conn,$sql;

	$sql=$sql1;
	$result=mysqli_query($conn,$sql);
	return $result;
}*/

?>

  
  


