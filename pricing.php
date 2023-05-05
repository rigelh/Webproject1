<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>DRYME - Free Laundry Service Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid bg-primary py-3"></div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9">
      <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
        <a href="" class="navbar-brand">
          <h1 class="m-0 text-secondary">
            <span class="text-primary">DRY</span>ME
          </h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
          <div class="navbar-nav ml-auto py-0">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="service.php" class="nav-item nav-link">Services</a>
            <a href="pricing.php" class="nav-item nav-link active">Pricing</a>
            <?php if (isset($_SESSION["user_id"])) { ?>
              <a href="logout.php" class="nav-item nav-link">Log out</a>
            <?php } else  ?> <a href="signup.php" class="nav-item nav-link">Sign up</a><?php
                                                                                        ?>

          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Page Header Start -->
  <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
    <div class="container py-5">
      <div class="row align-items-center py-4">
        <div class="col-md-6 text-center text-md-left">
          <h1 class="mb-4 mb-md-0 text-white">Pricing Plan</h1>
        </div>
        <div class="col-md-6 text-center text-md-right">
          <div class="d-inline-flex align-items-center">
            <a class="btn text-white" href="index.php">Home</a>
            <i class="fas fa-angle-right text-white"></i>
            <a class="btn text-white disabled" href="pricing.php">Pricing</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header Start -->

  <!-- Pricing Plan Start -->
  <div class="container-fluid pt-5 pb-3">
    <div class="container">
      <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">
        Our Pricing Plan
      </h6>
      <h1 class="display-4 text-center mb-5">The Best Price</h1>
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="bg-light text-center mb-2 pt-4">
            <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff">
              <h3 class="text-white">Basic</h3>
              <h1 class="display-4 text-white mb-0">
                <small class="align-top" style="font-size: 22px; line-height: 45px">$</small>49<small class="align-bottom" style="font-size: 16px; line-height: 40px">/ Mo</small>
              </h1>
            </div>
            <div class="d-flex flex-column align-items-center py-3">
              <p>Basic Subscription</p>
              <p>For only 49$ per month</p>
              <p>Free Shipping</p>
            </div>
            <a href="" class="btn btn-secondary py-2 px-4" onmouseover="mOver(this)" onmouseout="mOut(this)">Apply Now</a>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="bg-light text-center mb-2 pt-4">
            <div class="d-inline-flex flex-column align-items-center justify-content-center bg-primary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff">
              <h3 class="text-white">Standard</h3>
              <h1 class="display-4 text-white mb-0">
                <small class="align-top" style="font-size: 22px; line-height: 45px">$</small>99<small class="align-bottom" style="font-size: 16px; line-height: 40px">/ Mo</small>
              </h1>
            </div>
            <div class="d-flex flex-column align-items-center py-3">
              <p>Standard Subscription</p>
              <p>For only 99$ per month</p>
              <p>Free Shipping</p>
            </div>
            <a href="" class="btn btn-secondary py-2 px-4 " onmouseover="mOver(this)" onmouseout="mOut(this)">Apply Now</a>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="bg-light text-center mb-2 pt-4">
            <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff">
              <h3 class="text-white">Premium</h3>
              <h1 class="display-4 text-white mb-0">
                <small class="align-top" style="font-size: 22px; line-height: 45px">$</small>149<small class="align-bottom" style="font-size: 16px; line-height: 40px">/ Mo</small>
              </h1>
            </div>
            <div class="d-flex flex-column align-items-center py-3">
              <p>Premium Subscription</p>
              <p>For only 149$ per month</p>
              <p>Free Shipping</p>
            </div>
            <a href="" class="btn btn-secondary py-2 px-4" onmouseover="mOver(this)" onmouseout="mOut(this)">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pricing Plan End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="container">
      <div class="row pt-5">
        <div class="col-12 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5">
          <a href="">
            <h1 class="text-secondary mb-3">
              <span class="text-white">DRY</span>ME
            </h1>
          </a>
          <p>
            You can find us on all social platforms. Be sure to use DRYME as
            it will be your best experience.
          </p>
          <div class="d-flex justify-content-start mt-4">
            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5">
          <h4 class="text-white mb-4">Get In Touch</h4>
          <p>
            You can find us on all social platforms. Be sure to use DRYME as
            it will be your best experience.
          </p>
          <p>
            <i class="fa fa-map-marker-alt mr-2"></i>rruga xxx, Tirana ,
            Albania
          </p>
          <p><i class="fa fa-phone-alt mr-2"></i>+355 xxxxxxxxx</p>
          <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
        </div>

        <div class="col-12 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5">
          <div class="d-flex flex-column justify-content-end">
            <h4 class="text-white mb-4">Quick Links</h4>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing</a>
            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
    <p class="m-0 text-center text-white">
      <a class="text-white font-weight-medium" href="#">DRYME</a>© DRYME. All Rights Reserved.
    </p>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <script>
    function mOver(obj) {
      obj.style.background = "#ffffff";
      obj.style.color = "#46C6CE";
    }

    function mOut(obj) {
      obj.style.background = "#46C6CE";
      obj.style.color = "#ffffff";
    }
  </script>
</body>

</html>