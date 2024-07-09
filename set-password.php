<?php
include "connection.php";
date_default_timezone_set('Asia/Karachi');

	if (isset($_POST["submit"])) {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$password = $_POST["password"];
			$password_confirmation = $_POST["password_confirmation"];
			if ($password == $password_confirmation) {
                $query = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
                // Execute the query
                $result = execute_query($query);
                // Check if the query returned a result set
                if ($result && $result->num_rows > 0) {
                    // Fetch the result as an associative array
                    $user = $result->fetch_assoc();
                    $query = "UPDATE users SET password = '{$password}' WHERE id = '{$user["id"]}'";
                    $result = execute_query($query);
                    // Now fetch the new
                        header('Location: log-in.php');
                    exit();
                } else {
                    echo "Somthing went wrong. Please Try Again...!!!";
                }
    
			} else {
				echo "Please Enter Same Password";
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
									<label for="password" class="col-md-4 col-form-label text-md-right">Set Password</label>
									<div class="col-md-6">
										<input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
									</div>
								</div>
								<div class="form-group row">
									<label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
									<div class="col-md-6">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
									</div>
								</div>
								<div class="form-group row mb-0">
									<div class="col-md-6 offset-md-4">
										<button type="submit" name="submit" class="btn btn-primary">
											Submit
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
