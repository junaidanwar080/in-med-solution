<?php

include "connection.php";


if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $otp = $_POST["otp"];
        $v_otp = $_POST["v-otp"];
        if ($otp == $v_otp) {
            header('Location: set-password.php');
        } else {
                    
            $query = "SELECT * FROM users ORDER BY id DESC LIMIT 1";

            // Execute the query
            $result = execute_query($query);
            // Check if the query returned a result set
            if ($result && $result->num_rows > 0) {
                // Fetch the result as an associative array
                $user = $result->fetch_assoc();
                $deleteSql = "DELETE FROM users WHERE id = '{$user["id"]}'";
                
                $result = execute_query($deleteSql);
              
            }
                        echo "OTP incorrect. please try Again...!!!";
                    }
                }	
} else {

// Query to get the last record from the users table
$query = "SELECT * FROM users ORDER BY id DESC LIMIT 1";

// Execute the query
$result = execute_query($query);
// Check if the query returned a result set
if ($result && $result->num_rows > 0) {
    // Fetch the result as an associative array
    $user = $result->fetch_assoc();
    // print_r($user["send_otp"]);
} else {
    // Handle the case where no rows are returned
    echo "No user found.";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'navbar.php'; ?>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Enter OTP</h2>
							<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="otp" placeholder="Enter OTP" required>
                                    <input type="text" class="form-control" name="v-otp" placeholder="Enter OTP" value = "<?php echo $user["send_otp"];  ?>" required hidden>

                                </div>
                                <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php
include ("footer.php")
  ?>
</body>
</html>
