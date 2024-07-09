<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        .card {
            margin: 15px;
            background-color: #e0ecf0;
        }
        .card img {
          width: 201px;
    height: 199px;
    object-fit: cover;
    border-radius: 10px;
    border: 3px solid #ff0000;
    margin-right: 64px;
    margin-left: -218px;
    margin-top: 10px;
        }
        .card-body {
            flex: 1;
        }
        .card-buttons {
            display: flex;
            justify-content: space-between;
        }
        .card-buttons button {
            flex: 1;
            margin: 5px;
        }
        .payment-methods {
            display: flex;
            flex-direction: column;
        }
        .payment-methods label {
            margin: 5px 0;
            display: flex;
            align-items: center;
        }
        .payment-methods label i {
            margin-right: 10px;
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
        <div class="row">
            <!-- Confirmation Card -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="images/doctor.jpg" alt="Doctor Image">
                            <div>
                                <h5 class="card-title">Confirm Appointment</h5>
                                <p><strong>Doctor Name:</strong> <span id="doctor-name">Dr. John Doe</span></p>
                                <p><strong>Date:</strong> <span id="selected-date"></span></p>
                                <p><strong>Time:</strong> <span id="selected-time"></span></p>
                                <p><strong>Experience:</strong> <span id="doctor-experience">10 years</span></p>
                            </div>
                        </div>
                        <!-- <div class="card-buttons">
                            <a href="doctor.html" class="btn btn-primary">Confirm</a>
                            <a href="select_time.html" class="btn btn-secondary">Back</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Fee Details Card -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fee Details</h5>
                        <p><strong>Consultation Fee:</strong> <span id="consultation-fee">$100</span></p>
                        <p><strong>Tax & Charges:</strong> <span id="tax-charges">$10</span></p>
                        <p><strong>Total Fee:</strong> <span id="total-fee">$110</span></p>
                    </div>
                </div>
            </div>
            <!-- Payment Method Card -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Payment Method</h5>
                        <div class="payment-methods">
                            <label>
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <input type="radio" name="payment-method" value="pay-at-hospital" checked> Pay at Hospital
                            </label>
                            <label>
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                <input type="radio" name="payment-method" value="online-pay"> Online Pay
                            </label>
                        </div>
                        <div class="card-buttons">
                            <a href="doctor.php" class="btn btn-primary">Confirm</a>
                            <!-- <a href="select_time.php" class="btn btn-secondary">Back</a> -->
                            <a href="#" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <script>
    $(document).ready(function(){
        // Example to set selected date and time
        $('#selected-date').text('2024-06-01'); // Replace with actual selected date
        $('#selected-time').text('10:00 AM'); // Replace with actual selected time
    });
  </script>
</body>
</html>
