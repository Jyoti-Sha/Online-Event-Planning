<?php
include("../db.php");


session_start();
$sesid=$_SESSION['admin'];

if(!$sesid)
{
	echo "session not set";
}
else
{
	session_destroy();
	header("location:index.php");
}

?>