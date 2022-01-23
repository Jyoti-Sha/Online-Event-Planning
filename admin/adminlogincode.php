<?php
include("../db.php");

$a=$_POST['email'];
//echo $a;
echo "<br/>";

$b=$_POST['pass'];
//echo $b;
echo "<br/>";

$sel="select * from adminlogin where adminemail='$a' or adminpassword='$b'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);

if(!$row)
{
	echo "emailid and password both are wrong";
}
else
{
	if($row[1]==$a)
	{
		if($row[2]==$b)
		{
			session_start();
			$_SESSION['admin']=$a;
			header("location:dashboard.php");
		}
		else
		{
			echo "password is wrong";
		}
	}

	  else
	  {
		  echo "emailid is wrong";
	  }
}


?>