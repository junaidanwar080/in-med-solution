<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking</title>
   
    <style>
        /* body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        } */
        .booking-container {
            margin: 20px auto;
            padding: 20px;
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            /* max-width: 500px; */
        }
        .doctor-info {
            text-align: center;
            margin-bottom: 20px;
        }
        .doctor-info img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .doctor-info h5 {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 0;
        }
        .doctor-info p {
            margin: 5px 0;
        }
        .select-date-time {
            text-align: center;
        }
        .select-date-time h5 {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .date-selector, .time-selector {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .date-selector button, .time-selector button {
            flex: 1;
            margin: 1px;
            padding: 1px;
            border: 1px solid #007bff;
            background-color: #ffffff;
            color: #007bff;
            border-radius: 5px;
            cursor: pointer;
        }
        .date-selector button.active, .time-selector button.active {
            background-color: #007bff;
            color: #ffffff;
        }
        .appointment-button {
            text-align: center;
            margin-top: 20px;
        }
        .appointment-button button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .appointment-button button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="hero_area">
        <!-- header section starts -->
        <?php include_once "navbar.php" ?>
        <!-- end header section -->
      </div>
<div class="container">
    <div class="booking-container">
        <!-- Doctor Information -->
        <div class="doctor-info">
            <img src="images/doctor.jpg" alt="Doctor Image">
            <h5>Dr. Rahul Sharma</h5>
            <p>General Consultant | Consultations</p>
            <p>Consultation Fees: ₹400</p>
            <p>Patients: 20+</p>
            <p>Experience: 5+ Years</p>
            <p>Speciality: MD, MBBS, MDS</p>
            <p>Next Available: 10:00 AM Tomorrow</p>
        </div>
        
        <!-- Date and Time Selection -->
        <div class="select-date-time">
            <h5>Select Date</h5>
            <div class="date-selector">
                <button class="active">TUE 9</button>
                <button>WED 10</button>
                <button>THU 11</button>
                <button>FRI 12</button>
                <button>SAT 13</button>
                <button>MON 15</button>
            </div>
            <h5>Select Time</h5>
            <div class="time-selector">
                <button>09:00 AM</button>
                <button>10:00 AM</button>
                <button class="active">11:00 AM</button>
                <button>01:00 PM</button>
                <button>02:00 PM</button>
                <button>03:00 PM</button>
                <button>04:00 PM</button>
                <button>05:00 PM</button>
            </div>
        </div>
        
        <!-- Make Appointment Button -->
        <!-- Make Appointment Button -->
        <!-- <div class="appointment-button">
            <form action="booked-appointment.php" method="post">
                <button type="submit">MAKE AN APPOINTMENT</button>
            </form>
        </div> -->
        <div class="appointment-button">
            <form action="#" method="post">
                <button type="submit">MAKE AN APPOINTMENT</button>
            </form>
        </div>
      
    </div>
</div>
<?php include_once "footer.php" ?>

</body>
</html>
