<?php
// the message
include "ConnectionUtil.php";
$conn=beginConnection();
$from="From:phpcsulbtest@gmail.com";
$sql="SELECT * from mailview where name='Appointment Reminder';";
$result=getMyResult($sql);
if(mysqli_num_rows($result)  > 0)
{
	 while($row = mysqli_fetch_assoc($result)) {
	 	$subject=$row['subject'];
		$msg=$row['body'];
		
	 
	 }//while end
	 
}//if end*/

$msg = wordwrap($msg,70);
$sql="SELECT * from appscheduler_bookings;";
$result=getMyResult($sql);
$daybefore=3;
$currentdate=date("Y-m-d"); //current date
echo $currentdate;
$sendingdate=date("Y-m-d",strtotime($currentdate."+".$daybefore." days")); //daybefore date
echo $sendingdate;
if(mysqli_num_rows($result)  > 0)
{
	 while($row = mysqli_fetch_assoc($result)) {
	 	if($row["appointment_d"]==$sendingdate)
		{
			$to=$row["student_email"];		
			if(mail($to,$subject,$msg,$from))
			echo "Successfully send";
			else 
			echo "not successful";
		}
	 
	 }//while end
	 
}//if end

?> 