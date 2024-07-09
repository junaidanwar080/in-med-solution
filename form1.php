<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
       
        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            /* width: 300px; */
            margin-left: 162px;
            margin-right: 165px;
            margin-top: 35px;
        }
        .form-container input,
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #00bfff;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #009acd;
        }
    </style>
</head>
<body>
    <div class="hero_area">
        <!-- header section starts -->
        <?php include_once "navbar.php" ?>
        <!-- end header section -->
      </div>

<div class="form-container">
    <form>
        <label for="address">Address</label>
        <textarea id="address" name="address" rows="2" placeholder="Text enter here"></textarea>

        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="india">India</option>
        </select>

        <label for="state">Select a state</label>
        <select id="state" name="state">
            <option value="">Search your state</option>
        </select>

        <label for="district">Select a District</label>
        <select id="district" name="district">
            <option value="">Search your district</option>
        </select>

        <label for="city">City</label>
        <input type="text" id="city" name="city" placeholder="City name enter here">

        <label for="pincode">Pincode</label>
        <input type="text" id="pincode" name="pincode" maxlength="6" placeholder="Enter your pincode">

        <label for="comments">Comments</label>
        <textarea id="comments" name="comments" rows="2" placeholder="Add your comments"></textarea>

        <button type="submit">Proceed</button>
    </form>
</div>

</body>
</html>
