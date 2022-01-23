<?php

?>
<html>
<head>

<link href="../css/styledb.css" rel="stylesheet"/>
<link href="css/bootstrap.min.css" rel="stylesheet"/>

</head>
	<body>
	<?php
	include("../db.php");
	
	
	$sel="select * from registration";
	$res=mysqli_query($conn,$sel);
	
	?>
	  <div id="outerdb">
	  <div id="headerdb">
		 <p> Welcome To My Website........!</p>
			</div><!--header-->
            <div id="menudb">
	              <ul>
		           <li><a href="dashboard.php">All User</a></li>
		           <li><a href="addhotel.php">Add Hotel</a></li>
		           <li><a href="allcontact.php">All Contact</a></li>
		           <li><a href="">Setting</a>
				   <ul class="submenu">
				   <li><a href="changemail.php">Change Email</a></li>
				   <li><a href="changepassword.php">Change Password</a></li>
				   <li><a href="logout.php">Logout</a></li>
				   </li>
		          </ul>
	        </div><!--menudb-->
			<div id="min">
			<h1>All User</h1>
			<table border="1">	
					<tr>
						<th>Sr.No.</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Password</th>
						<th>City</th>
						<th>Date</th>
						<th>Time</th>
					</tr>
					<?php
					$sr=1;
				 while(	$row=mysqli_fetch_array($res,MYSQLI_BOTH)){
					?>
					<tr>
						<td><?php echo  $sr; ?></td>
						<td><?php echo $row['1']; ?></td>
						<td><?php echo $row['2']; ?></td>
						<td><?php echo $row['3']; ?></td>
						<td><?php echo $row['4']; ?></td>
						<td><?php echo $row['5']; ?></td>
						<td><?php echo $row['6']; ?></td>
						<td><?php echo $row['7']; ?></td>
						
					</tr>
					<?php $sr++; } ?>
					
				</table>
		    </div>
     </div><!--End of outerdb Div-->
     </body>
</html>
			
