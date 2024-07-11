<?php
include "connection.php";

date_default_timezone_set('Asia/Karachi');
$msg = "";

	if (isset($_POST["submit"])) {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST["title"];
			$type = $_POST["type"];
			$description = $_POST["description"];

            $query = "INSERT INTO resale(title, type, description ) VALUES ('{$title}','{$type}','{$description}')";
            $result = execute_query($query);
            if ($result){
                $msg = "Saved successfully...!!";
            } 
		}	
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
    <div class="hero_area">
        <!-- header section starts -->
        <?php include_once "navbar.php" ?>
        <!-- end header section -->
    </div>



    <div class="container  mt-5 mb-5">
        <h2>Upload Resell Detail</h2>
        <div style="text-align:center" class="bg-success"><?php echo $msg ?></div>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title" required>
            </div>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type">
                <option value="1">Surgical</option>
                <option value="2">Medicine</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter description"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </form>

    </div>

    <?php include("footer.php") ?>
</body>
</html>
