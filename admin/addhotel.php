<?php
session_start();
$sesid=$_SESSION['admin'];
if($sesid==null)

?>
<html>
<head>
<link href="../css/styledb.css" rel="stylesheet"/>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
	<body>
	    <div id="outerdb">
		<div id="headerdb">
			 <p> Welcome To My Website........!</p>
			</div><!--header-->
          <div id="menudb">
	              <ul>
		           <li><a href="dashboard.php">All User<a/></li>
		           <li><a href="addhotel.php">Add Hotel<a/></li>
		           <li><a href="allcontact.php">All Contact<a/></li>
		           <li><a href="setting.php">Setting<a/>
				    <ul class="submenu">
				   <li><a href="changemail.php">Change Email</a></li>
				   <li><a href="changepassword.php">Change Password</a></li>
				   <li><a href="logout.php">Logout</a></li>
				   </li>
		          </ul>
	        </div><!--menudb-->
			<div id="min">
			<h1>Add Hotel</h1>
			 <form action="addhotelcode.php" method="post" enctype="multipart/form-data">
			 <table>
				<tr>
			    <td><input type="text" name="hname"/>Hotel Name</td>
				</tr>
				<tr>
			    <td><input type="text" name="hcity"/>Hotel City</td><br/>
				</tr>
				<tr>
			    <td><input type="text" name="hfacility"/>Hotel Facility</td><br/>
				</tr>
				<tr>
			    <td><input type="file" name="hpic"/>Hotel Pic</td><br/>
				</tr>
				<tr>
			    <td><input type="text" name="hmob"/>Hotel Mobile No.</h2></td>
				</tr>
				<tr>
				<td><button>SUBMIT</button></td>
			  </tr>
			 </table>
			 </form>
			 
			
			</div>
     </div><!--End of outerdb Div-->
     </body>
</html>