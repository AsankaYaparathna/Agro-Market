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
		if($_SESSION['user']=="")
		{
			?>
				<script type="text/javascript">
					alert('login first')
					window.location.href='login.php';
				</script>
			<?php
		}
		$pdt="";
      	if(isset($_GET['pdct']))
      	{
      	  $pdt=$_GET['pdct'];
      	}
	?>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Agro Market</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <div class="navbar-nav">
         
            <?php  
              echo "<a href='hp.php' class='nav-link'>Products</a>";
            ?>
          
          <label class="nav-link">
          	<?php  
          		echo $_SESSION['UName'];
          	?>
          </label>
			
			<?php
				echo "<a href='funtion/lgout.php?RN={$_SESSION['user']}' class='nav-link'>log out</a>";
			?>
         
        </div>
        
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  
    <div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg)">
    <div class="overlay-itro"></div>
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container" style="margin-top: 10.5em;">
          
            <div id="contact" class="box-shadow-full" style="margin-top: 0em;">
              <div class="row" >
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">Change Price</h5>
                  </div>
                </div>
                <div class="col-md-6"> 
                  <div class="more-info">
                   <form action="addPD.php" method="POST">
                   	<table>
                   		<tr>
                   			<div class="form-group col-md-12">
                   				<input type="text" name="PD1" value="<?php echo $pdt; ?>" class="form-control" id="PD1" placeholder="Enter new Poroduct" data-rule="minlen:4" data-msg="" />
                            <div class="validation"></div>
                          </div>
                   		</tr>
                   		<tr>
                   			<div class="form-group col-md-12">
                            	<input type="text" name="PD1P" class="form-control" id="PD1P" placeholder="Enter Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            	<div class="validation"></div>
                        	</div>
                   		</tr>
                   		<tr>
                   			<td>
                   				<div class="col-md-3">
                          			<input type="submit" name="updt" value="Add" class="btn btn-outline-primary    button-big button-rouded">
                        		</div>
                   			</td>
                   			<td>
                   				<div class="col-md-5">
                          			<a href="hp.php"><input type="button" name="B2" value="Cancel" class="btn btn-outline-danger  button-big button-rouded"></a>
                        		</div>
                   			</td>
                   		</tr>

                   	</table>

                   </form>     
                  </div>

                </div>

              </div>

            </div>

          </div>

        <div style="margin-top: 15%;">
             <?php include 'footer.php'; ?>
        </div>
        
      </div>
    </div>
  </div>
  </div>


  <!--php-->
  <?php
      if(isset($_GET['act']))
      {
        if($_GET['act']=="buy")
        {
         $_SESSION['byPs']="buy";
        }
        if($_GET['act']=="sell")
        {
          $_SESSION['byPs']="sell";
        }
      }

		if(isset($_POST['updt']))
            {
                $udd=$_SESSION['UID'];
                $pd1=$_POST['PD1'];
                $pd1p=(double)$_POST['PD1P'];

              if($_SESSION['byPs']=="buy")
              {
                  if(!empty($pd1p))
                  {
                    $pp="pb".daate("l");

                    $querypd1="UPDATE `$pp` SET `$udd`='$pd1p' WHERE `PDname`='$pd1'";
                    $resultpd1=mysqli_query($conn,$querypd1);
                    if($resultpd1)
                    {
                      ?>
                      <script type="text/javascript">
                        alert('price updated');
                        window.location.href='hp.php';
                      </script>
                    
                     <?php
                    }
                  }
              }
              else if($_SESSION['byPs']=="sell")
              {
                if(!empty($pd1p))
                  {
                    $querypd1="UPDATE `pdsell` SET `$udd`='$pd1p' WHERE `PDname`='$pd1'";
                    $resultpd1=mysqli_query($conn,$querypd1);
                    if($resultpd1)
                    {
                      ?>
                      <script type="text/javascript">
                        alert('price updated');
                        window.location.href='hp.php';
                      </script>
                    
                     <?php
                    }
                  }
              }
              
            }				
	
	?>
  <!--end of php-->



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

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
