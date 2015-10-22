
<?php
session_start();
include "ConnectionUtil.php";
//$dbhost = 'localhost';
//$dbuser = 'root';
//$dbpass = '';
$conn=beginConnection();
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}


$id=$_POST['id'];
$name=$_POST['name'];
$dob=$_POST['birthdate'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$reason=$_POST['reason'];
$date=$_POST['date'];
$time=$_POST['time'];

function validate()
{ 
	$flag=true;
	global $id ,$name, $dob, $email, $phone, $add1, $add2, $city,  $state, $zip, $reason, $date, $time;
	if(!preg_match("/^[[0-9]{10}$/", $phone))
	{
		$_SESSION["phone"]="*Phone should be of 10 digit.";
			$flag=false;
	}
	//if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$",$email))
	//{
	//	$_SESSION["email"]="*Invalid Email";
	//		$flag=false;
	//}
	//if(!preg_match("([01]?[0-9]|2[0-3]):[0-5][0-9]",$time))
	//{
	//	$_SESSION["time"]="*Time should be in HH:MM";
	//		$flag=false;
	//}
	if(!preg_match("/^[0-9]{5}$/",$id))
	{
		$_SESSION["id"]="*student Id must be of valid 5 digit.";
			$flag=false;
	}
	echo $flag;
	return $flag;
}

if(validate())
{
$sql="insert into  appscheduler_bookings values ('". $id ."','".$name ."','".$email ."','". $phone."','".$city ."','". $state."','".$zip ."','".$add1 ."','".$add2 ."','".$reason ."','".$dob ."','-','".$id."','".$date ."','".$time."');";
echo $sql;
$res= mysqli_query($conn,$sql);
echo "hii";
//echo $res;
if($res)
{
	$sql="SELECT * from appscheduler_bookings where student_id=". $id.";";
	echo $sql;
	$res=mysqli_query($conn,$sql);
	if($res)
	{
		 while($row = mysqli_fetch_assoc($res))
		 {
		 	session_start();
		$_SESSION['success']="Your appointment is successfully done on ".$row["appointment_d"] ." at ".$row["appointment_t"].". Store appointment id:" .$id." for future reference.";
		header("location:index.php");
		}
	}
}	
}
else
{
	//header("location:index.php");
	echo "fail";
}
?>

	

