<?php
// the message
include "ConnectionUtil.php";
$conn=beginConnection();
$from="From:phpcsulbtest@gmail.com";
$sql="SELECT * from mailview where name='Wish Happy Birthday';";
$result=getMyResult($sql);
if(mysqli_num_rows($result)  > 0)
{
	echo "hi";
	 while($row = mysqli_fetch_assoc($result)) {
	 	$subject=$row['subject'];
		$msg=$row['body'];
		$msg = wordwrap($msg,70);
		
	 
	 }//while end
	 
}//if end*/

//$msg = wordwrap($msg,70);
$sql="SELECT * from appscheduler_bookings;";
$result=getMyResult($sql);
$currentdate=date_parse(date('Y-m-d'));//current date
echo $currentdate["day"]. $currentdate["month"] ;


if(mysqli_num_rows($result)  > 0)
{
	 while($row = mysqli_fetch_assoc($result)) {
	 	$birthdate=date_parse($row["student_dob"]);
		//echo $birthdate;
	 	if($currentdate["month"]==$birthdate["month"] && $currentdate["day"]==$birthdate["day"])
		{
			$to=$row["student_email"];		
			if(mail($to,$subject,$msg,$from))
			echo "Successfully send";
			else 
			echo "not successful";
		}
	 
	 }//while end
	 
}//if end*/

?> 