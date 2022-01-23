<?php
session_start();
$sesid=$_SESSION['use'];
include('../db.php');
date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")."".date("h:i:sa");
if($sesid){
	$up="update login set logoutdatetime='$datetime', logstatus='false' where logemail='$sesid'";
	if($query=mysqli_query($conn,$up)){
		
		session_destroy();
		header('location:../login.php');
		
	}else{
		echo "logout failed";
	}
	
	
	
}else{
	echo"session error";
}



?>