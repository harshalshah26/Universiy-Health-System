<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css" />
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
    <div style="float:left;margin-left:500px;padding-top:3px;"><img src="img/1.png" /></div>
    <div style="padding-top:15px;">University Health System</div>
    </div><!---header end-->
    <div id="bottom">
	<div class="left" style="font-family:'Times New Roman', Times, serif;">
   
    
      
        		<div style="font-size:20px;margin-top:10px;height:30px;"><center>Administration</center></div>
                  <form action="loginaction.php" method="post">
                  <div style="margin-top:20px;margin-left:10px;">
                 <fieldset>
                 <legend>Login</legend>
                 <div id="error" style="height:40px;width:100%;color:red;" align="center" >
                 <?php
				 session_start();
				 error_reporting(0);
		
				 echo $_SESSION["message"];
				 unset($_SESSION['message']);
				 ?></div>
                 <div style="height:40px;width:100%;">
                 
                 	<div style="width:50%;height:100%;float:left;">
                    	<pre class="label_style">     User Name      :</pre>
                    </div>
                    <div style="width:50%;height:40px;;float:left;">
                    	<input class="textfield" type="text" name="username" placeholder="User Name" style="width:90%; margin-top:10%;" required/>
                    </div> 
                 
                 </div>
                 
                 
                 
                 <div style="height:40px;width:100%;">
                 
                 	<div style="width:50%;height:100%;float:left;">
                    	<pre class="label_style">     Password       :</pre>
                    </div>
                    <div style="width:50%;height:40px;float:left;">
                    <input class="textfield" type="password" name="password" style="width:90%; margin-top:10%;" placeholder="Password" required />
                    </div>
                 
                 </div>
                 
                 <div style="height:40px;width:100%;">
                 
                 	<div style="width:50%;height:100%;float:left;">
                    <input  type="submit" value="Submit" style=" margin-top:10%;margin-left:25%;" />	
                    </div>
                    <div style="width:50%;height:40px;float:left;">
                    <div style="margin-top:10%;margin-left:5%"><a class="lnk" href="">Forgot Password?</a></div>	
                    </div>
                 
                 </div>
                 
                 </fieldset>
                 </div>
                 </form>     

    
    </div>
	<div class="right" style="font-family:'Times New Roman', Times, serif;">
    	
		<div style="width:50%;height:inherit;background-color:#FFFF99;float:left;">
          
        	<div style="font-size:20px;margin-top:10px;height:30px;"><center>Make appointment</center></div>
             <div style="margin-top:20px;margin-left:40px;">
        	<form action="registerappointment.php" method="post">
            <fieldset>
            <legend>Appointment Details</legend>
            <div id="error" style="height:40px;color:#FF0000;"></div>
            <table>
            <tr>
            <td><div>Student ID:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="id" required/></div><div style="height:20px;color:#FF0000;"><?php session_start(); echo $_SESSION["id"]; ?></div></td>
            </tr>
            
            <tr>
            <td><div>Student Name:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="name" required/></div></div><div style="height:20px;color:#FF0000;"><?php session_start(); echo $_SESSION["name"]; ?></div></td>
            </tr>
            
            <tr>
            <td><div>Birthdate:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="birthdate" id="datepicker" required/></div><div style="height:20px;color:#FF0000;"></div></td>
            </tr>
            
            
            
            <tr>
            <td><div>Student Email:</div><div style="height:20px;"></div></td>
            <td><div><input type="email" name="email" required/></div><div style="height:20px;color:#FF0000;"><?php session_start(); echo $_SESSION["email"]; ?></div></td>
            </tr>
            
            <tr>
            <td><div>Student Phone:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="phone" /></div><div style="height:20px;color:#FF0000;"><?php session_start(); echo $_SESSION["phone"]; ?></div></td>
            </tr>
            
           
            <tr>
            <td><div>Address 1:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="add1" required/></div><div style="height:20px;color:#FF0000;"></div></td>
            </tr>
            
            <tr>
            <td><div>Address 2:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="add2" /></div></div><div style="height:20px;color:#FF0000;"></div></td>
            </tr>
            
             <tr>
            <td><div>Student City:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="city" required/></div><div style="height:20px;color:#FF0000;"></div></td>
            </tr>
            
            <tr>
            <td><div>Student State:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="state" required/></div><div style="height:20px;color:#FF0000;"></div></td>
            </tr>
            
            <tr>
            <td><div>Student ZIP:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="zip" /></div></div><div style="height:20px;color:#FF0000;"></div></td>
            </tr>
            
             <tr>
            <td><div>Student Notes:</div><div style="height:20px;"></div></td>
            <td><div><textarea cols="30" rows="5" name="reason">Add Student notes here....</textarea></div><div style="height:20px;color:#FF0000;"></div></td>
            </tr>
            
            <tr>
            <td><div>Appointment Date:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="date" id="datepicker1" required/></div><div style="height:20px;color:#FF0000;"></div></td>
            </tr>
            
            <tr>
            <td><div>Appointment Time:</div><div style="height:20px;"></div></td>
            <td><div><input type="text" name="time" requuired/ placeholder="HH:MM"></div><div style="height:20px;color:#FF0000;"><?php session_start(); echo $_SESSION["time"]; ?></div></td>
            </tr>
            
            </table>
            <div style="margin-top:20px;"><center><input type="submit" value="Submit"><input type="reset" value="Reset"/></center></div>      
        	</fieldset>
            </form>
        	</div>
           </div>
           
        <div style="width:50%;height:inherit;background-color:#FFFF99;float:left;">
        	<div style="font-size:20px;margin-top:10px;height:30px;"><center>Important News</center></div>
             <div style="margin-top:20px;margin-left:40px;">
            <fieldset>
            <legend>News</legend>
            	<marquee direction="up" scrolldelay="300">
            		<ul>
                    <?php
					include "ConnectionUtil.php";
					$conn=beginConnection();
					$result=getMyResult("SELECT * from news order by date desc;");
					if(mysqli_num_rows($result)  > 0)
					{
						while($row=mysqli_fetch_assoc($result))
						{
							echo "<li>".$row["name"]."</li>";
						}
						
					}
					else
					{
						echo "<div>No news to display.</div>";
					}
					?>
                    
            		</ul>
            	</marquee>
            
            </fieldset>
        	</div>
            
            
        <div id="feedback" style="margin-top:20px;margin-left:40px;">
        <fieldset>
        <legend>Feedback</legend>
        <table>
        <tr><td>Student Id:</td><td><input type="text" /></td></tr>
        <tr><td>Give Feedback here:</td><td><textarea rows="6" cols="30"></textarea></td></tr>
        </table>
        <div style="margin-left:150px;margin-top:20px;"><input type="submit" value="Submit" /><input type="reset" value="Reset" /></div>
        </fieldset>
        
        
        
        </div><!-- feedback end-->

        
        
        </div>
        
        
       

	</div><!--right end -->
    </div><!--bottom end -->



	</div><!--container end -->

<?php
$message=$_SESSION['success'];
if($message!=null)
{
echo "<script type=text/javascript>alert('$message');</script>";
unset($_SESSION['success']);
}
//session_destroy();
?>
</body>
</html>

