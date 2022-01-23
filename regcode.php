<?php
include("db.php");

$a=$_POST['name'];
//echo $a;
echo "<br/>";

$b=$_POST['mob'];
//echo $b;
echo "<br/>";

$c=$_POST['email'];
//echo $c;
echo "<br/>";

$d=$_POST['pass'];
//echo $d;
echo "<br/>";

$e=$_POST['city'];
//echo $e;
echo "<br/>";

$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("h:i:sa");

$ins="insert into registration(regname,regmobile,regemail,regpass,regcity,regdate,regtime) values('$a','$b','$c','$d','$e','$date','$time')";
if(mysqli_query($conn,$ins))
{
    $ins1="insert into login(logemail,logpass) values('$c','$d')";
	if(mysqli_query($conn,$ins1))
	{
		header("location:login.php");
	}
	else
	{
		echo "login data not inserted";
	}
}
else
{
	echo "registration data not inserted";
}




?>