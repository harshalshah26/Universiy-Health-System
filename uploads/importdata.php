<?php
include "../ConnectionUtil.php";
$conn=beginConnection();
$target_dir = "uploads/";
$target_file = basename($_FILES["file"]["name"]);

//$target_path = $target_path . basename( $_FILES['file']['name']); 

if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file))
 {
   $file = fopen($target_file,"r");

while(! feof($file))
  {
  	$array=fgetcsv($file,1000,",");
	$id=$array[0];
	$name=$array[1];
	$dob=$array[10];
	$email=$array[2];
	$phone=$array[3];
	$add1=$array[7];
	$add2=$array[8];
	$city=$array[4];
	$state=$array[5];
	$zip=$array[6];
	$reason=$array[9];
	$date=$array[13];
	$time=$array[14];
	$sql="insert into  appscheduler_bookings values ('". $id ."','".$name ."','".$email ."','". $phone."','".$city ."','". $state."','".$zip ."','"			.$add1 ."','".$add2 ."','".$reason ."','".$dob ."','-', ".$id .",'".$date ."','".$time."');";
	$res= mysqli_query( $conn,$sql);
	$sql="DELETE from appscheduler_bookings where student_name=''; ";	
	$res= mysqli_query( $conn,$sql);
  }//while
  fclose($file);
  session_start();
  $_SESSION["message"]="Successfully imported Appointments from given CSV files.";
	header("location:../admin.php");


}//if 

else{
    echo "There was an error uploading the file, please try again!";
}
?>