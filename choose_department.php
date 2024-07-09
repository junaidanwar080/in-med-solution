<!DOCTYPE html>
<html>

<head>
    <style>
        .book-services {
            border: 2px solid red;
            padding: 15px;
            border-radius: 50px;
        }

        .book-pharmacy {
            border: 2px solid green;
            padding: 15px;
            border-radius: 50px;
        }

        .hover-effect {
            border: 2px solid rgb(182, 230, 182);
            padding: 15px;
            border-radius: 20px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .hover-effect:hover {
            background-color: rgb(182, 230, 182);
            border-color: rgb(182, 230, 182);
        }
    </style>

</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <?php include_once "navbar.php" ?>
        <!-- end header section -->
        <!-- slider section -->

        <!-- end slider section -->
    </div>


    <section class="serach_section " style="text-align: center; margin-top: 2%; ">
        <div class="">
            <input type="text" style="height: 50px; width: 400px; border-radius: 10px;" placeholder="Search Department">
        </div>
    </section>


    <!-- about section -->

    <section class="about_section layout_padding" style="text-align: center; ">

        <div class="container  ">
            <div class="row">
                <div class="col-md-5 mb-4 mr-4 hover-effect">
                    <a href="">
                        <div class="detail-box " style="text-align: left;">
                            <div class="heading_container">
                                <h5>
                                    Pharmacy
                                </h5>
                            </div>

                            view all departments
                        </div>
                    </a>
                </div>
                <div class="col-md-5 mb-4 mr-4 hover-effect">
                    <a href="">
                        <div class="detail-box " style="text-align: left;">
                            <div class="heading_container">
                                <h5>
                                    Cardialogy
                                </h5>
                            </div>

                            Cardialogest
                        </div>
                    </a>
                </div>
                <div class="col-md-5 mb-4 mr-4 hover-effect">
                    <a href="">
                        <div class="detail-box " style="text-align: left;">
                            <div class="heading_container">
                                <h5>
                                    Facial Plastic Sargery
                                </h5>
                            </div>

                            Cosmatic Sargen
                        </div>
                    </a>
                </div>
                <div class="col-md-5 mb-4 mr-4 hover-effect">
                    <a href="">
                        <div class="detail-box " style="text-align: left;">
                            <div class="heading_container">
                                <h5>
                                    Gynacology
                                </h5>
                            </div>

                            Gynacologist
                        </div>
                    </a>
                </div>
                <div class="col-md-5 mb-4 mr-4 hover-effect">
                    <a href="">
                        <div class="detail-box " style="text-align: left;">
                            <div class="heading_container">
                                <h5>
                                    Hepatology
                                </h5>
                            </div>

                            Hepatosergen
                        </div>
                    </a>
                </div>
                <div class="col-md-5 mb-4 mr-4 hover-effect">
                    <a href="">
                        <div class="detail-box " style="text-align: left;">
                            <div class="heading_container">
                                <h5>
                                    Neurosugery
                                </h5>
                            </div>

                            Neurosugen
                        </div>
                    </a>
                </div>
                <div class="col-md-5 mb-4 mr-4 hover-effect">
                    <a href="">
                        <div class="detail-box " style="text-align: left;">
                            <div class="heading_container">
                                <h5>
                                    Oral Health
                                </h5>
                            </div>

                            Dentest
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- end about section -->



    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="info_top">
                <div class="info_logo">
                    <a href="">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="info_form">
                    <form action="">
                        <input type="email" placeholder="Your email">
                        <button>
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="info_bottom layout_padding2">
                <div class="row info_main_row">
                    <div class="col-md-6 col-lg-3">
                        <h5>
                            Address
                        </h5>
                        <div class="info_contact">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_links">
                            <h5>
                                Useful link
                            </h5>
                            <div class="info_links_menu">
                                <a class="active" href="index.php">
                                    Home
                                </a>
                                <a href="about.php">
                                    About
                                </a>
                                <a href="treatment.php">
                                    Treatment
                                </a>
                                <a href="doctor.php">
                                    Doctors
                                </a>
                                <a href="testimonial.php">
                                    Testimonial
                                </a>
                                <a href="contact.php">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_post">
                            <h5>
                                LATEST POSTS
                            </h5>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/post1.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/post2.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_post">
                            <h5>
                                News
                            </h5>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/post3.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/post4.png" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info_section -->


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

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>


</body>

</html>