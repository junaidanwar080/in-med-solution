<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
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

        .alert {
            color: green;
            text-align: center;
            margin-bottom: 20px;
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
        <div class="card-header" style="background: #59bd8e;">Book Appointment</div>

        <?php
        include "connection.php";

        date_default_timezone_set('Asia/Karachi');

        $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            $name = $_POST["name"];
            $doctor_name = $_POST["doctor_name"];
            $number = $_POST["number"];
            $age = $_POST["age"];
            $phone = $_POST["phone"];
            $blood_group = $_POST["blood_group"];

            $query = "INSERT INTO appointment(name, doctor_name, number, age, phone, blood_group) VALUES ('$name', '$doctor_name', '$number', '$age', '$phone', '$blood_group')";
            $result = execute_query($query);

            if ($result) {
                $message = "Appointment booked successfully.";
            } else {
                $message = "Error booking appointment.";
            }
        }
        ?>

        <?php if (!empty($message)) : ?>
            <div class="alert" id="alertMessage">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="name">Patient Name</label>
            <input type="text" id="age" name="name" placeholder="Enter Patient Name">

            <label for="doctor_name">Select Doctor</label>
            <select id="doctor_name" name="doctor_name">
                <option value="Dr. Ajaya Nand Jha">Dr. Ajaya Nand Jha. MBBS, MS, FRCS – Neurosurgery</option>
                <option value="Dr. Suresh Joshi">Dr. Suresh Joshi. MBBS, MS, Mch.</option>
                <option value="Dr. Abhijit Dey">Dr. Abhijit Dey. MBBS and MS</option>
                <option value="Dr. Aroop Mukherjee">Dr. Aroop Mukherjee. MBBS, MS – Orthopedics.</option>
            </select>

            <label for="number">Token Number</label>
            <input type="text" id="number" name="number" placeholder="Enter token number">

            <label for="age">Patient Age</label>
            <input type="text" id="age" name="age" placeholder="Enter age">

            <label for="phone">Phone No</label>
            <input type="text" id="phone" name="phone" placeholder="Enter phone number">

            <label for="blood_group">Blood Group</label>
            <select id="blood_group" name="blood_group">
                <option value="A">A</option>
                <option value="A-">A negative</option>
                <option value="A+">A positive</option>
                <option value="B-">B negative</option>
                <option value="B+">B positive</option>
                <option value="AB-">AB negative</option>
                <option value="AB+">AB positive</option>
            </select>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

    <script>
        // Automatically hide the alert message after 5 seconds
        document.addEventListener('DOMContentLoaded', function () {
            var alertMessage = document.getElementById('alertMessage');
            if (alertMessage) {
                setTimeout(function () {
                    alertMessage.style.display = 'none';
                }, 5000);
            }
        });
    </script>
</body>

</html>
