<?php

include("../db.php");

$a=$_POST['hname'];
//echo $a;
echo "<br/>";

$b=$_POST['hcity'];
//echo $b;
echo "<br/>";

$c=$_POST['hfacility'];
//echo $c;
echo "<br/>";

$hpic=$_FILES["hpic"]["name"];
//echo $hpic;
echo "<br/>";

$e=$_POST['hmob'];
//echo $e;
echo "<br/>";



$ins="insert into hotel(hname,hcity,hfacility,hpic,hmobile) values('$a','$b','$c','$hpic','$e')";
if(mysqli_query($conn,$ins))
{
	echo "data inserted";
}

else
{
	echo "data not inserted";
}




?>