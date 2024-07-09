<!DOCTYPE html>
<html lang="en">
<head>
 
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .features-container {
            margin: 50px auto;
            padding: 20px;
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 900px;
        }
        .features-header {
            font-size: 2rem;
            font-weight: bold;
            color: #333333;
            margin-bottom: 20px;
        }
        .features-list {
            font-size: 1rem;
            color: #555555;
            line-height: 1.8;
            list-style: none;
            padding-left: 0;
        }
        .features-list li {
            margin-bottom: 10px;
        }
        .features-image {
            max-width: 100%;
            border-radius: 15px;
        }
        .website-link {
            font-size: 1rem;
            color: #0066cc;
            text-align: center;
            margin-top: 20px;
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
    <div class="features-container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="features-header">FEATURES</h2>
                <ul class="features-list">
                    <li>• EMERGENCY TIME NEAREST HOSPITAL AWARENESS</li>
                    <li>• EMERGENCY TIME NEAREST AMBULANCE AWARENESS</li>
                    <li>• EMERGENCY TIME MOBILE POWER BUTTON AWARENESS</li>
                    <li>• APPOINTMENT BOOKING</li>
                    <li>• CHECK UP THROUGH VIDEO CONFERENCING</li>
                    <li>• ONLINE DOCTOR'S PRESCRIPTION</li>
                    <li>• PATIENTS LAB REPORT</li>
                    <li>• PATIENTS HISTORY</li>
                    <li>• MEDICINE & SURGICAL PRODUCTS PURCHASE</li>
                    <li>• HELP DESK</li>
                    <li>• Translator</li>
                    <li>• Medicine and surgical equipment resell</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="images/features.jpg" alt="Features" class="features-image">
            </div>
        </div>
        <div class="website-link">
            <a href="https://www.growbrandtech.com">www.growbrandtech.com</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
