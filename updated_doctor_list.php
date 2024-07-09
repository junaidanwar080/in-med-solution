<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->  
</head>
<body>
    <div class="hero_area">
        <!-- header section strats -->
        <?php include_once "navbar.php"; ?>
        <!-- end header section -->
      </div>
    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="card">
                    <img src="images/Doctor.jpg" class="card-img-left" alt="Doctor 1">
                    <div class="card-body">
                        <h5 class="card-title">Dr. John Doe</h5>
                        <p class="card-text"><strong>Speciality:</strong> Cardiologist</p>
                        <p class="card-text"><strong>Experience:</strong> 20 years</p>
                        <p class="card-text"><strong>Contact:</strong> 123-456-7890</p>
                        <div class="card-buttons">
                            <button class="btn btn-primary">View Profile</button>
                            <button class="btn btn-secondary">Book Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-6  ">
                <div class="card">
                    <img src="images/download.jpeg" class="card-img-left" alt="Doctor 2">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Jane Smith</h5>
                        <p class="card-text"><strong>Speciality:</strong> Dermatologist</p>
                        <p class="card-text"><strong>Experience:</strong> 15 years</p>
                        <p class="card-text"><strong>Contact:</strong> 987-654-3210</p>
                        <div class="card-buttons">
                            <button class="btn btn-primary">View Profile</button>
                            <button class="btn btn-secondary"><a href="appoinment.php">Book Appointment</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-6">
                <div class="card">
                    <img src="images/doctor3.jpeg" class="card-img-left" alt="Doctor 3">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Alice Johnson</h5>
                        <p class="card-text"><strong>Speciality:</strong> Pediatrician</p>
                        <p class="card-text"><strong>Experience:</strong> 10 years</p>
                        <p class="card-text"><strong>Contact:</strong> 456-789-1230</p>
                        <div class="card-buttons">
                            <button class="btn btn-primary">View Profile</button>
                            <button class="btn btn-secondary"><a href="appoinment.php">Book Appointment</a></button>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Card 4 -->
            <div class="col-md-6">
                <div class="card">
                    <img src="images/download.jpeg" class="card-img-left" alt="Doctor 2">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Jane Smith</h5>
                        <p class="card-text"><strong>Speciality:</strong> Dermatologist</p>
                        <p class="card-text"><strong>Experience:</strong> 15 years</p>
                        <p class="card-text"><strong>Contact:</strong> 987-654-3210</p>
                        <div class="card-buttons">
                            <button class="btn btn-primary">View Profile</button>
                            <button class="btn btn-secondary"><a href="appoinment.php">Book Appointment</a></button>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- Add more cards as needed -->
        </div>
    </div>
      <?php
include ("footer.php")
  ?>
  </body>
</html>
