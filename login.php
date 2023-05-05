<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //something was posted
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (!empty($username) && !empty($password) && !is_numeric($username)) {
    //read from database
    $query = "select * from users where username = '$username' limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        //if it is check the user data, if not go to redirect login
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] === $password) {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: index.php");
          die;
        }
      }
    }

    echo "Wrong username or password!";
  } else {
    echo "Please enter some valid information!";
  }
}

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

  <link rel="stylesheet" href="alerts.css" />
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
            <a href="pricing.php" class="nav-item nav-link">Pricing</a>
            <a href="login.php" class="nav-item nav-link active">Log in</a>
            <a href="signup.php" class="nav-item nav-link">Sign up</a>

          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <!--Form Log in-->
  <form class="container" novalidate="" method="POST" id="myForm">
    <form class="container mt-5" novalidate="" method="POST" id="myForm">
      <div class="form-group">
        <label class="form-control-label" for="inputSuccess1">Username</label>
        <input type="text" class="form-control" name="username" id="inputSuccess1" required>
        <div class="valid-feedback"><small>Everything is okay !</small></div>
        <div class="invalid-feedback"><small>Please enter a username !</small></div>
      </div>
      <div class="form-group">
        <label class="form-control-label" for="inputSuccess4">Password</label>
        <input type="password" class="form-control" name="password" required id="inputSuccess4">
        <div class="valid-feedback"><small>Everything is okay !</small></div>
        <div class="invalid-feedback"><small>Please enter a password !</small></div>
      </div>

      <div>
        <button type="submit" class="btn btn-secondary mr-1" id="btnSubmit" onmouseover="mOver(this)" onmouseout="mOut(this)">Log in</button>

      </div>
    </form>

    <!--Form sign in-->

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
        <a class="text-white font-weight-medium" href="#">DRYME</a> © DRYME. All Rights Reserved.
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