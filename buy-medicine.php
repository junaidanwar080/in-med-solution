<?php
include "connection.php";

date_default_timezone_set('Asia/Karachi');
$msg = "";

	if (isset($_POST["submit"])) {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $medicine = $_POST["medicine"];
			$customer_name = $_POST["customer_name"];
			$quantity = $_POST["quantity"];
			// $total_price = $_POST["total_price"];
			$description = $_POST["description"];

            $query = "INSERT INTO purchase_medicine(medicine, customer_name, quantity, description ) VALUES ('{$medicine}','{$customer_name}','{$quantity}','{$description}')";
            $result = execute_query($query);
            if ($result){
                $msg = "Purchased successfully...!!";
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
        <div style="text-align:center" class="bg-success"><?php echo $msg ?></div>
        <h2>Medicine Purchase Detail</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="title">Select Medicine</label>
                <input list="med-list" type="text" class="form-control" name="medicine" placeholder="Select Medicine" required>
                <datalist id="med-list">
                    <option value="Paracetamol">Paracetamol</option>
                    <option value="Ibuprofen">Ibuprofen</option>
                    <option value="Aspirin">Aspirin</option>
                    <option value="Naproxen">Naproxen</option>
                    <option value="Amoxicillin">Amoxicillin</option>
                    <option value="Ciprofloxacin">Ciprofloxacin</option>
                </datalist>

            </div>
            <div class="form-group">
                <label for="image">Customer Name</label>
                <input type="text" class="form-control" name="customer_name">
            </div>

            <div class="form-group">
                <label for="image">Quantity</label>
                <input type="text" class="form-control" name="quantity">
            </div>
            
            <!-- <div class="form-group">
                <label for="image">Total Price</label>
                <input type="text" class="form-control" name="total_price">
            </div> -->

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
