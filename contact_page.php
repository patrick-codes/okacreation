<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OKA CREATIONS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
       
        <a href="index.html" class="scrollto"><img src="assets/img/logo.png" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#index">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#speakers">Categories</a></li>
          <li><a class="nav-link scrollto" href="#schedule">CEO</a></li>
          <li><a class="nav-link scrollto" href="#venue">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Slides</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a class="buy-tickets scrollto" href="tel:+233245236680">Call Us Now</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Welcome to<br><span>OKA</span> CREATIONS</h1>
      <p class="mb-4 pb-0">OKA Creations Think Outfits, Think OKA (+233) 0245-236-680</p>
     <!-- <a href="#" class="glightbox play-btn mb-4"></a>-->
      <a href="#about" class="about-btn scrollto">Explore OKA</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
          <h2>About OKA Creations</h2>
            <p>At OKA creations, we believe everybody should feel great to show themselves. Therefore, our aim is to support people in expressing their personality freely through fashion. 
              We empower our customers to use our outfits as expression by inspiring them with a diverse range of styles.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where To Find Us</h3>
            <p>Accra-Sakaman, 11 Blue Lagoon ST GA-559-5097 </p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Saturday<br>7:00am - 8:00pm</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

<?php
    //echo "<pre>";
    //print_r($_POST);
    //echo '</pre>';

    if (isset($_POST['email']) && ($_POST['email'] != "")) 
    {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $arms = $_POST['arms'];
      $waist = $_POST['waist'];
      $shoulder = $_POST['shoulder'];
      $wrist = $_POST['wrist'];
      $message = $_POST['message'];

      $to = "kofiktechgh@gmail.com";
      $body = "";

      $body .= "From: ".$name. "\r\n";
      $body .= "Email: ".$mail. "\r\n";
      $body .= "Subject: ".$subject. "\r\n";
      $body .= "Arms: ".$arms. "\r\n";
      $body .= "Waist: ".$waist. "\r\n";
      $body .= "Shoulder: ".$shoulder. "\r\n";
      $body .= "Wrist: ".$wrist. "\r\n";
      $body .= "Other Message: ".$message. "\r\n";

      mail($to, $subject, $body);

    }

   
?>


 <!-- ======= Contact Section ======= -->
 <section id="contact" class="section-bg">

    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Send Measurements</h2>
        <p>Send your measurements to OKA and get your outfit in no time</p>
      </div>

    

      <div class="form">
        <form action="contact_page.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="arms" id="arms" placeholder="Arms" required>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="waist" id="waist" placeholder="Waist" required>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="shoulder" id="shoulder" placeholder="Shoulder" required>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="wrist" id="wrist" placeholder="Wrist" required>
          </div>
          
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Any other message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
           <!-- <div class="error-message"></div>-->
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Measurements</button></div>
        </form>
      </div>

    </div>
  </section><!-- End Contact Section -->








      <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="col-lg-3 col-md-6 footer-info">
            <img src="assets/img/logo.png" alt="TheEvenet">
            <p>At OKA creations, we believe everybody should feel great to show themselves. Therefore, our aim is to support people in expressing their personality freely through fashion. 
              We empower our customers to use our outfits as expression by inspiring them with a diverse range of styles.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#venue">Gallery</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

        

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Accra-Sakaman, 11 Blue Lagoon ST <br>
              GA-559-5097<br>
              Ghana <br>
              <strong>Phone:</strong> (+233) 0245-236-680<br>
              <strong>Email:</strong> info@okacreationsgh.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>OKA Creations</strong>. All Rights Reserved 2022
      </div>
      <div class="credits">
      

        Designed by <a href="#">Kofik Technology Ghana</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>