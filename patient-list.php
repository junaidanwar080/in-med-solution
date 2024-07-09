<!DOCTYPE html>
<html lang="en">
<head>
 
    <style>
       
        .header {
            padding: 20px;
            background-color: #f0f8ff;
            display: flex;
            align-items: center;
        }
        .header img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-right: 20px;
        }
        .header div {
            display: flex;
            flex-direction: column;
        }
        .tabs {
            display: flex;
            justify-content: center;
            background-color: #f0f8ff;
            padding: 10px;
        }
        .tab {
            margin: 0 10px;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
        }
        .tab.active {
            background-color: #00bfff;
            color: #ffffff;
        }
        .appointments {
            padding: 20px;
        }
        .appointment {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #f0f8ff;
            padding-bottom: 20px;
        }
        .appointment img {
            border-radius: 10px;
            width: 60px;
            height: 60px;
            margin-right: 20px;
        }
        .appointment-details {
            flex: 1;
        }
        .appointment-details h3 {
            margin: 0;
            font-size: 16px;
        }
        .appointment-details p {
            margin: 5px 0;
            color: gray;
        }
        .appointment-actions {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .button {
            background-color: #00bfff;
            color: #ffffff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 5px;
        }
        .button.red {
            background-color: #ff4500;
        }
        .token {
            background-color: #00bfff;
            color: #ffffff;
            padding: 5px;
            border-radius: 5px;
            font-size: 12px;
            text-align: center;
            width: 40px;
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
        <div class="header">
            <img src="images/Doctor.jpg" alt="User">
            <div>
                <span>Ashish Mehra</span>
                <span>Age 32</span>
            </div>
        </div>
        <div class="tabs">
            <div class="tab active">Upcoming</div>
            <div class="tab">Past</div>
        </div>
        <div class="appointments">
            <div class="appointment">
                <img src="images/doctor3.jpeg" alt="Dr. Rahul Sharma">
                <div class="appointment-details">
                    <h3>Dr. Rahul Sharma</h3>
                    <p>Blood Tests & Others<br>Laboratory Expert</p>
                    <span>10:00 AM | 17/05/2023</span>
                </div>
                <div class="appointment-actions">
                    <div class="token">12</div>
                    <button class="button red">Fees ₹740</button>
                    <button class="button">Set Reminder</button>
                </div>
            </div>
            <div class="appointment">
                <img src="images/download.jpeg" alt="Dr. Ashutosh Misra">
                <div class="appointment-details">
                    <h3>Dr. Ashutosh Misra</h3>
                    <p>General Consultation</p>
                    <span>10:30 AM</span>
                </div>
                <div class="appointment-actions">
                    <div class="token">5</div>
                    <button class="button red">Pay ₹200</button>
                    <button class="button">Join Call</button>
                </div>
            </div>
            <div class="appointment">
                <img src="images/doctor3.jpeg" alt="Dr. Hritik Sinha">
                <div class="appointment-details">
                    <h3>Dr. Hritik Sinha</h3>
                    <p>Consulting Doctor<br>MD & MBBS</p>
                    <span>11:45 AM | 15/05/2023</span>
                </div>
                <div class="appointment-actions">
                    <div class="token">23</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
