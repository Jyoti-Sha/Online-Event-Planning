<?php
include("../db.php");
session_start();
$sesid=$_SESSION['admin'];

$a=$_POST['opass'];
echo $a;
echo "<br/>";

$b=$_POST['npass'];
echo $b;
echo "<br/>";

$c=$_POST['cpass'];
echo $c;
echo "<br/>";

$sel="select * from adminlogin where adminemail='$sesid'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);

if(!$row)
{
	echo "email and password not matched";
}
else
{
	if($row['2']==$a)
	{
		if($b==$c)
		{
			$up="update adminlogin set adminpassword='$b' where adminemail='$sesid'";
			if(mysqli_query($conn,$up))
			{
				header("location:index.php");
			}
			else
			{
				echo "password not matched";
			}
		}
		else
		{
			echo "emailid is wrong";
		}
	}
}

?>


