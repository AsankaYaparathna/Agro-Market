<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Agro Market</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/#.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">
	<?php
		include 'config/config.php';
		session_start();

	?>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Agro Market </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="index.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="login.php">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="signup.php">Sginup</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  
<div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg);height: 700px;">
  <div class="overlay-itro"></div>
  <div class="overlay-itro"></div>
   <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container" style="margin-top:11.5em; ">

          <div class="row">
            
         <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <a href="logins.php?se=f"><span class="ico-circle"><i >F</i></span></a>
            </div>
            <div class="service-content">
              <h2 class="s-title">Farmer login</h2>
              
            </div>
          </div>
        </div>

        
         <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <a href="logins.php?se=s"><span class="ico-circle"><i >S</i></span></a>
            </div>
            <div class="service-content">
              <h2 class="s-title">Seller login</h2>
             
            </div>
          </div>
        </div>

        
         <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <a href="logins.php?se=r"><span class="ico-circle"><i>R</i></span></a>
            </div>
            <div class="service-content">
              <h2 class="s-title">Retailer Login</h2>
              
            </div>
          </div>
        </div>
        
      </div >
    </div>
      <!--footer-->
      
     <!--footer-->
        </div>
      </div>
    </div>

<?php include 'footer.php'; ?>
  



  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
