<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DLMS| User login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
  </div>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Lesotho Traffic licensing
          <span>
            <img src="assets/img/logo.png">
          </span>
        </a>
      </h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Home</a></li>
        </ul>
      </nav>

    </div>
  </header>
<body>

<section id="hero1" class="d-flex align-items-center" style="height: 700px;">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                            <h4>Sign in to account</h4> 
                            <hr class="my-3" />
                            <form action="login.php" method="post" id="login-form">
                                <div class="input-group input-group-lg form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-0"><i class="bx bxs-user"></i></span>
                                    </div>
                                    <input type="text " name="email" class="form-control rounded-0" placeholder="Enter Email" required />
                                </div>

                                <div class="input-group input-group-lg form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-0"><i class="bx bxs-lock"></i></span>
                                    </div>
                                    <input type="password" name="pwd" class="form-control rounded-0 col-lg-12" placeholder="Enter Password" required/>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="submit" value="Sign In" class="btn btn-primary btn-lg btn-block myBtn"/>
                                </div>

                                <div class="form-group clearfix">
                                    <div class="custom-control custom-checkbox float-left">
                                        <input type="checkbox" name="rem">
                                        <label>Remember Email</label>
                                    </div>
                                </div>
                                <hr class="my-3" />
                                <p>Don't have an account? <a href="user-register.php">Sign up here!</a></p>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
    <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 translate="no">Lesotho Traffic licensing</h3>
            <p>
              Department of Traffic Moshoeshoe Road, <br>
              MFRP+6CW, Moshoeshoe Road, Maseru <br><br>
              <strong>Phone:</strong>+266 22563290<br>
              <strong>Email:</strong> <a href="mailto:malebelle12@gmail.com">malebelle@gmail.com</a><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="user-login.php">New License</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="user-login.php">Renew License</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="user-login.php">Online Study Materials and
                  Payments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="user-login.php">Exam Scheduling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="user-login.php">Driving Schools</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="user-login.php">License Issuing</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Contact us through any network</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="pull-right">
        &copy; Copyright <strong><span>The GeekAlliance</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
