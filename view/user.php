
<html>
<head>
    <title>
        Pizza Hut Resturent & Bar
    </title>
	
	<link href="../css/index.css" type="text/css" rel="Stylesheet">
<link href="../css/index1.css" type="text/css" rel="Stylesheet">

</head>
<div class="main">
	<div class="header">
		<div class="logo">
		<img src="../image/logo12.png" alt="logo">
		</div>
		
		<div class="title">
			<p class="lucy">Pizza Hut Restaurant & Bar </p>
			
		</div>
		
	</div>
		
	<div class="nav">
		<div>
			<ul id="navmenu">
				<li><a href="../admindashboard.php"> <b>Home</b></a></li>
				<li><a href="menu.php"><b>Menu</b></a></li>
				<li><a href="user.php"><b>Users</b></a></li>
				
				<li><a href="vieworder.php"><b>View Order</b></a></li>
					
			</ul>
		</div>
		
	</div>
		

</div>
<body>
<div class="user">
	<table class="table" border="1px">
		<thead>
		<tr>		<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>Phone No</th>
			<th>Email</th>
			<th> Action</th>
		</tr>

		</thead>
		<?php
		/**
		 * Created by PhpStorm.
		 * User: Nitesh
		 * Date: 6/1/2017
		 * Time: 10:00 PM
		 */
		include_once ('../DBConnection/DBConnection.php');
		?>


		<?php
		$query= "SELECT *FROM user where id=Id";
		$query= mysqli_query($query);

		while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC)){
			$id=$row['Id'];
			$fname=$row['Fname'];
			$lname=$row['Lname'];
			$address=$row['Address'];
			$phone=$row['Phone_no'];
			$email=$row['Email'];

		}
		?>
		<tbody>
		<tr>
			<td> <?php echo $id;?></td>
			<td><?php echo $fname;?></td>
			<td><?php echo $lname;?></td>
			<td><?php echo $address;?></td>
			<td><?php echo $phone;?></td>
			<td><?php echo $email;?></td>


				<td> <a href="delete.php?Id=<?php echo $row['Id'];?>">Delete</a>
		<a href="update.php?Id=<?php echo $row['Id'];?>"> Select </a> </td>
		</tr>

		</tbody>
	</table>
</div>
</body>
</html>