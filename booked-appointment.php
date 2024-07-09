<!DOCTYPE html>
<html lang="en">
<head>
  
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            border-radius: 15px;
            padding: 20px;
        }
        .doctor-info img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
            margin-top:5px;
        }
        .doctor-info {
            display: flex;
            align-items: center;
        }
        .appointment-details {
            background-color: #e0f7fa;
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
        }
        .token-box {
            background-color: #03a9f4;
            color: white;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
        }
        .fee-details {
            margin-top: 20px;
        }
        .fee-details .card {
            background-color: #f8f9fa;
            border: none;
        }
        .fee-details p {
            margin: 0;
        }
        .payment-method {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .payment-method .btn {
            width: 48%;
            border-radius: 20px;
        }
        .terms-conditions {
            margin-top: 30px;
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
    <div class="card">
        <div class="doctor-info">
            <img src="images/doctor.jpg" alt="Doctor Image">
            <div>
                <h5 class="card-title">Dr. Rahul Sharma</h5>
                <p class="card-text">MD, MBBS, MDS</p>
                <p class="card-text">Experience: 5+ Years</p>
            </div>
        </div>
        <div class="appointment-details">
            <h6>Appointment Details</h6>
            <p><i class="far fa-clock"></i> <span>11:45 AM</span></p>
            <p><i class="far fa-calendar-alt"></i> <span>15/05/2023</span></p>
            <div class="token-box">
                <p>Token No: <strong>5</strong></p>
            </div>
            <div class="hospital-info">
                <p><i class="fas fa-hospital"></i> Elister Hospital</p>
                <p>Building No-08A, Redeo Tower, Kunnathur, Sasthamkotta, Kollam, Kerala, 690521</p>
            </div>
        </div>
        <div class="fee-details">
            <div class="card">
                <div class="card-body">
                    <p><strong>Consultation Fee:</strong> ₹400</p>
                    <p><strong>Tax & Charges:</strong> ₹0</p>
                    <p><strong>Total Amount:</strong> ₹400</p>
                </div>
            </div>
        </div>
        <div class="payment-method">
            <button class="btn btn-danger"><i class="fas fa-times"></i> Cancel Booking</button>
            <button class="btn btn-primary"><i class="fas fa-sync"></i> Reschedule Booking</button>
        </div>
        <div class="payment-method">
            <button class="btn btn-success"><i class="fas fa-wallet"></i> Pay Online</button>
            <button class="btn btn-secondary"><i class="fas fa-hospital-alt"></i> Pay at Hospital</button>
        </div>
    </div>
    <div class="terms-conditions">
        <h6>Terms and Conditions</h6>
        <p>We understand that unforeseen circumstances can arise, leading to a need to cancel or reschedule appointments. However, we kindly request that patients make every effort to keep their scheduled appointments, as it can affect the doctor's schedule and the availability of appointment times for other patients.</p>
        <p>If a patient needs to cancel or reschedule an appointment, we require that they notify us at least 24 hours in advance. This allows us to offer the appointment slot to another patient in need.</p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
