<?php
include("../db.php");
session_start();
$sesid=$_SESSION['admin'];

$a=$_POST['oemail'];
echo $a;
echo "<br/>";

$b=$_POST['nemail'];
echo $b;
echo "<br/>";

$c=$_POST['cemail'];
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
	if($row['1']==$a)
	{
		if($b==$c)
		{
			$up="update adminlogin set adminemail='$b' where adminemail='$sesid'";
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


