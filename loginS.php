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
      <a class="navbar-brand js-scroll" href="#page-top">Agro Market</a>
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
  
    <div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg);height: 680px;">
    <div class="overlay-itro"></div>
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container" style="margin-top: 10.5em;">
          
            <div id="contact" class="box-shadow-full" style="margin-top: 0em;">
              <div class="row" >
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                    	<?php
                    	//$rr="";
                    	if(isset($_GET["se"]))
                    		{
                    			$_SESSION['rr']=$_GET["se"];
                    		}

                    		if($_SESSION['rr']=="s")
                    		{
                    			echo "Seller Login";
                    		}
                    		else if($_SESSION['rr']=="f")
                    		{
                    			echo "Farmer Login";
                    		}
                    		else if($_SESSION['rr']=="r")
                    		{
                    			echo "Retailer Login";
                    		}
                        else
                        {
                          echo "<script>";
                         // echo "window.location.href='login.php'";
                          echo "</script>";
                        }
                    	?>
                      
                    </h5>
                  </div>
                </div>
                <div class="col-md-6"> 
                  <div class="more-info">
                   <form action="logins.php" method="POST">
                   	<table>
                   		<tr>
                   			<div class="form-group col-md-12">
                   				<input type="text" name="UID" class="form-control" id="name" placeholder="Enter user id" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                   		</tr>
                   		<tr>
                   			<div class="form-group col-md-12">
                            	<input type="password" name="PW" class="form-control"i id="name" placeholder="Enter user password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            	<div class="validation"></div>
                        	</div>
                   		</tr>
                   		<tr>
                   			<td>
                   				<div class="col-md-3">
                          			<input type="submit" name="B1" value="Login" class="btn btn-outline-primary    button-big button-rouded">
                        		</div>
                   			</td>
                   			<td>
                   				<div class="col-md-5">
                          			<input type="submit" name="B2" value="Cancel" class="btn btn-outline-danger  button-big button-rouded">
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
          <!--footer-->
       
     <!--footer-->
        </div>
      </div>
    </div>
    
    
        </div>


      </div>

 <?php include 'footer.php'; ?>
   





  <!--php-->
<?php 
		if(isset($_POST['B1']))
		{
			$LGun=$_POST['UID'];
			$LGpw=sha1($_POST['PW']);
     // echo "string";

			if(!empty($LGun)&&!empty($LGpw))
      {
        if($_SESSION['rr']=='f')
        {
          $query="SELECT * FROM `user` WHERE EM='$LGun' AND PW='$LGpw' AND `YU`='Farmer' limit 1";
          $result=mysqli_query($conn,$query);   
          $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        }
        if($_SESSION['rr']=='s')
        {
          $query="SELECT * FROM `user` WHERE EM='$LGun' AND PW='$LGpw' AND `YU`='Seller' limit 1";
          $result=mysqli_query($conn,$query);   
          $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        }
        if($_SESSION['rr']=='r')
        {
          $query="SELECT * FROM `user` WHERE EM='$LGun' AND PW='$LGpw' AND `YU`='Retailer' limit 1";
          $result=mysqli_query($conn,$query);   
          $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        }
        

        if($LGun==$row['EM']&&$LGpw==$row['PW'])
        {
          $_SESSION['UName']=$LGun;
          
          

          if($row['YU']=="Farmer")
          {
            $_SESSION['user']=$row['YU']; 
            $_SESSION['UF']=$row['UID'];          
          }
          else if($row['YU']=="Seller")
          {
            $_SESSION['user']=$row['YU'];
            $_SESSION['UID']=$row['UID'];
            
          }
          else
          {
            $_SESSION['user']=$row['YU'];
            $_SESSION['UID']=$row['UID'];
          }
          
          echo "<script>";
          echo "window.location.href='hp.php?uid={$row['UID']}'";
          echo "</script>";
        }
        else
        {
          echo "<script>";
          echo "window.location.href='login.php'";
          echo "</script>";

        }


      }
      else
      {
        echo "<script>";
        echo "alert('some value not fill');";
        echo "window.location.href='logins.php?se=s'";
        echo "</script>";
      }
			
		}
	 ?>
  <!--end of php-->


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
