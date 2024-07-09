<?php
session_start();

?>

  
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Inmedsolution</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement(
            { pageLanguage: 'en' },
            'google_translate_element'
          );
        }
      </script>

      <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
</script>




  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    .book-services {
      border: 2px solid rgb(242, 168, 168);
      padding: 15px;
      border-radius: 50px;
    }

    .book-pharmacy {
      border: 2px solid rgb(192, 240, 192);
      padding: 15px;
      border-radius: 50px;
    }
 
        .card {
            margin: 15px;
            display: flex;
            flex-direction: row;
            align-items: center;
            background-color: #e0ecf0;
        }
        .card img {
            width: 150px;
    height: 116px;
    object-fit: cover;
    border-radius: 10px;
    margin-right: 29px;
    margin-left: 10px;
    margin-top: -119px;
    border: 3px solid #13acdd; /* Added border property */
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
    </style>

</head>
<header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <!-- <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +919883102759
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : support@inmedsolution.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a> -->
            <div class="text-right">
            <div id="google_translate_element" class="w-2"></div>

            </div>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <!-- <a class="navbar-brand" href="index.php">
              <img src="images/logo.png" alt="">
            </a> -->


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="about.html"> About</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="treatment.php">Treatment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="doctor-list.php">Doctors</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Appointment Booking
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="index.php">Check Up Tourch Video Conferencing</a>
                      <a class="dropdown-item" href="index.php">Online doctors prescription</a>
                      <a class="dropdown-item" href="index.php">Patient Lab report</a>
                      <a class="dropdown-item" href="patient-list.php">Patient History</a>
                      <a class="dropdown-item" href="reslae.php">Resale</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="testimonial.php">Help Desk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="testimonial.php">testimonial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                </ul>
              </div>

              </head>

              <!-- Optional JavaScript -->
              <!-- jQuery first, then Popper.js, then Bootstrap JS -->
              <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>
              <?php
              if(!empty($_SESSION["name"])){ 
                ?>
              <div class="quote_btn-container">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php echo $_SESSION["name"]; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="logout.php" style="color: black;">Logout</a>


                    </div>
                  </li>

              </div>
                  <?php
                    } else{ 
                    

                  ?>
              <div class="quote_btn-container">
                <a href="log-in.php">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
                <a href="registration.php">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Sign Up
                  </span>
                </a>


              </div>

              <?php
              } ?>
            </div>
          </nav>
        </div>
      </div>
    </header>
