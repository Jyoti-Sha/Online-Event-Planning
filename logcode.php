<?php

include("db.php");
$a=$_POST['email'];
 $a;
echo "<br/>";


$b=$_POST['pass'];
 $b;
echo "<br/>";

date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")."".date("h:i:sa");

$sel="select * from login where logemail='$a' and logpass ='$b'";
$query=mysqli_query($conn,$sel);
if($row=mysqli_fetch_array($query,MYSQLI_BOTH)){
	
	if($row['1']==$a){
		
		if($row['2']==$b){
			
			$up="update login set logdatetime='$datetime', logstatus='true' where logemail='$a'";
			if($query1=mysqli_query($conn,$up)){
				session_start();
				$_SESSION['use']=$a;
				
				header('location:user/profile.php');
			}else{
				echo "error";
			}
			
			
		}else{
			echo"Password in not match";
		}
		
	}else{
		echo "Email Id not match";
	}
	
	
	
}else{
	echo "Email and password does not match";
}




?>