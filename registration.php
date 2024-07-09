<?php
include "connection.php";
include "send_email.php";

date_default_timezone_set('Asia/Karachi');

	if (isset($_POST["submit"])) {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$user_name = $_POST["user_name"];
			$user_email = $_POST["email"];

			function generateOTP($length = 6) {
				$characters = '0123456789';
				$charactersLength = strlen($characters);
				$otp = '';
				for ($i = 0; $i < $length; $i++) {
					$otp .= $characters[rand(0, $charactersLength - 1)];
				}
				return $otp;
			}
			
			$otp = generateOTP();
			$mail_send = send_mail($user_email, $user_name ,$otp);
			if ($mail_send == "sent"){
				$query = "INSERT INTO users(name, email,send_otp ) VALUES ('{$user_name}','{$user_email}','{$otp}')";
				$result = execute_query($query);
				$last_insert_id = $con->insert_id; // $connection is your database connection variable

				// Now fetch the new
					header('Location: send-otp.php');
					exit();
			} else {
				echo "Something went wrong. Please try again...!!!";
			}

		}	
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Register a User</title>
	</head>
	<body>
		<?php include 'navbar.php'; ?>
	
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header" style="background: #59bd8e;">Register</div>

						<div class="card-body">
							<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<div class="form-group row">
									<label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
									<div class="col-md-6">
										<input id="name" type="text" class="form-control " name="user_name"  required autofocus>
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
									<div class="col-md-6">
										<input id="email" type="email" class="form-control " name="email"  required autocomplete="email">
									</div>
								</div>
								<!-- <div class="form-group row">
									<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
									<div class="col-md-6">
										<input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
									</div>
								</div>
								<div class="form-group row">
									<label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
									<div class="col-md-6">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
									</div>
								</div> -->
								<div class="form-group row mb-0">
									<div class="col-md-6 offset-md-4">
										<button type="submit" name="submit" class="btn btn-primary">
											Register
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
include ("footer.php")
  ?>
	</body>
	</html>
