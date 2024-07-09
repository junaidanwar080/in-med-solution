<?php
session_start();
include 'connection.php';
date_default_timezone_set('Asia/Karachi');
if ($_SESSION["email"] != "" AND $_SESSION["password"] != "") {
	$select_users = "SELECT * FROM users";
	$result_select_users = execute_query($select_users);
	?>
	<!DOCTYPE html>
	<html>
	<head> 
		<title>Users</title>
	</head>
	<body >
		<?php include 'header.php'; ?>
		<header>
			<div style="">
				<h5>Users Record</h5>	
			</div>
		</header>
		<div class="container">
			<div class="text-right mt-2" >
				<a class="btn btn-primary" href="registration.php"
				>Add User</a>
			</div>
			<!-- table start -->
			<div class="card mt-2">
				<div class="card-header " style="background: #59bd8e;">
					<b class="text-left" style="margin-left: 20px;">Users List</b>
				</div>
				<div class="card-body">
					<table class="table table-hover" id="vendor_table">
						<thead>
							<tr>
								<th>Sr.</th>
								<th>Name</th>
								<th>Email</th>
								<th>Password</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=1; 
							while($row = $result_select_users->fetch_assoc()){ ?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['password']; ?></td>
									<td><a class="btn btn-primary btn-sm" href="update_users.php?id=<?php echo $row['id'];?>" >Delete</a><a style="margin-left: 5px;" class="btn btn-primary btn-sm" href="update_users.php?update_id=<?php echo $row['id'];?>" >Update</a></td>
								</tr>
								<?php $i++; }
								?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- table end  -->
			</div>
				<footer>
					<div style="padding-top: 80px; padding-bottom: 100px; margin-top: 100px; background-color: #b1cbbb">
						<div style="margin-left: 550px;">
							<b>Contect Us</b>
							<p>Watsapp: 1234567890</p>
							<p>gmail: abc@gmail.com</p>
						</div>
					</div>
				</footer>
			</body>
			</html>
			<?php
		} else {
			header('location:login.php');
		}
		?>