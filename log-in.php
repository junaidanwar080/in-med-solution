<?php 
include 'connection.php';
if (isset($_POST)) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user_email = test_input($_POST["email"]);
		$password = test_input($_POST["password"]);
		if ($user_email == "" || $password == "") {
			echo "Please Fill BOthe fields";
		} else {
      $user_name = "";
			$select_user = "SELECT * FROM users WHERE email ='$user_email' AND password = '$password'";
      $result  = execute_query($select_user);
      $num = mysqli_num_rows($result);
      // echo $num;
      if ($num == 1) {
       session_start();
      $row = $result -> fetch_assoc();
			$user_name = $row["name"];
      
       $_SESSION["name"] = $user_name;

       $_SESSION["email"] = $user_email;
       $_SESSION["password"] = $password;
       echo $_SESSION["email"];
       // echo $_SESSION["password"];
      //  exit();
       header("Location:index.php");
     } else {
      echo "<div style = 'padding-top:10px; padding-bottom:10px; margin-top:30px; margin-left:550px; margin-right:450px; background:#eca1a6; text-align:center' >Invalid Email or password</div>";
    }
  }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">

  <div style="margin-left: 400px; margin-right: 400px; margin-top: 20px; margin-bottom:20px; border-style: solid; border-width: thin; border-color: #878f99; border-radius: 5px; "> 
            <div class="card-header text-center text-white" style="background: #59bd8e;  margin-bottom: 20px; "><h4>Login</h4></div>
              <form method="POST" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control " name="email"  required autocomplete="email" autofocus>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control   " name="password" required autocomplete="current-password">
                  </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 400px; margin-bottom: 10px;">
                      Login
                    </button>
                </div>
              </form>
            </div>
</div> 
</div>
</div>
</div>
</div> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center text-white" style="background-color: #59bd8e;">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
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
