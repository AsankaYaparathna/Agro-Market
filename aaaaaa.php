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
				echo "<a href='functions/lgout.php?RN={$_SESSION['user']}' class='nav-link'>log out</a>";
			?>
         
        </div>
        
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
 <?php 
    if($_SESSION['user']=="Farmer")
    {
    ?>

    <div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg)">
    	<div class="overlay-itro"></div>
    	<div class="overlay-itro"></div>
    	<div class="intro-content display-table">
      	  <div class="table-cell">
        	<div class="container" style="margin-top: 9.7em;">
          	  <div class="row">
          		<div class="col-md-4">
                  <div class="service-box"> 
                    <div class="service-content">
                      <?php  
                          $queryt="DESC `product";
        				  $resultt=mysqli_query($conn,$queryt);
        				  $count=0;
        				  while($row=mysqli_fetch_array($resultt,MYSQLI_NUM))
        				  {
        				    $count++;
        				  }
        				  $uid=(int)$_SESSION['UF'];
            			  $query="SELECT * FROM `farmer` WHERE UID='$uid' limit 1";
            			  $result=mysqli_query($conn,$query);
            			  $row=mysqli_fetch_array($result,MYSQLI_NUM);
          
            			  echo "<table class='table'>";
            			  $i=1;
            			  echo "<th> products</th>";
            			  echo "<th> Price</th>";
            			  echo "<th> Action</th>";
            			  while($i<5)
            			  {
              			  if($row[$i]!="")
              			  {
                			  echo "<tr>";
                			  echo "<td>".$row[$i]."</td>";
                			  echo "<td><a href='seePce.php?pd={$row[$i]}'>see</a></td>";
                			  echo "<td><a href='rmPD.php?pdct={$row[1]}&yu=Farmer'>Remove</a></td>";
                			  echo "</tr>";
              			  }
              
              			  $i++;
            			  }
            			  echo "</table>";
            			  echo "<a href='addPD.php?pdct={$row[$_SESSION['uid']]}'><input type='submit' value='Add New Product' class='btn btn-outline-primary button-big button-rouded'></a>";
                      			  ?>
                  	   </div>
                    </div>
                  </div>
                </div></font>
              </div>
        	</div>
    	  </div>
		</div>
	

    <?php
	}
	else if($_SESSION['user']=="Seller")
	{
		?>
		<div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg);height: 1100px;">
    	<div class="overlay-itro"></div>
    	<div class="overlay-itro"></div>
    	<div class="intro-content display-table">
      	  <div class="table-cell">
        	<div class="container" style="margin-top: 10em;">
          	  <div class="row">
          		<!--1 st div-->

                <div class="col-md-6">
                  <div class="service-box">
                    <div class="service-content">
                      <div class="service-content"><h2 >Today My Buying Price</h2><font color="black">
                      <?php  
                          if(isset($_GET['uid']))
                          {
                            $_SESSION['uid']=(int)$_GET['uid'];
                          }

                          $query="desc`product`";
                          $result=mysqli_query($conn,$query);
                          $count=0;
                          while($row1=mysqli_fetch_array($result,MYSQLI_NUM))
                          {
                            $count++;
                          }
                          
                          $query1="SELECT * FROM `product`";
                          $result1=mysqli_query($conn,$query1);
            
                          echo "<table  class='table'>";
                          $i=1;
                          echo "<tr>";
                          echo "<th>Products</th>";
                          echo "<th>Price<br>(SL Rs)</th>";
                          echo "<th>Action</th>";
                          echo "</tr>";
                          while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
                          {
                            echo "<tr>";
                            if($row1[$_SESSION['uid']]!=0)
                            {
                              echo "<td>".$row1['PDname']."</td>";
                              echo "<td>".$row1[$_SESSION['uid']]."</td>";
                              echo "<td><a href='change.php?pdct={$row1['PDname']}'>change</a>|<a href='rmPD.php?pdct={$row1['PDname']}'>Remove</a></td>";
                           
                            }
                            echo "</tr>";
                            $i++;
                          }
                          ?>
                              
                          <?php
                          
                          echo "</table>";
                          echo "<td><a href='addPD.php?pdct={$row1[$_SESSION['uid']]}'><input type='subnit' value='Add New Product' class='btn btn-outline-primary    button-big button-rouded'></a></td>";
                      ?>
                    </font>
                  </div>
                    </div>
                  </div>
                </div>


                <!--2 nd div-->

                <div class="col-md-6">
                  <div class="service-box">
                    <div class="service-content">
                      <div class="service-content"><h2 >Today My Selling Price</h2><font color="black">
                      <?php  
                          if(isset($_GET['uid']))
                          {
                            $_SESSION['uid']=(int)$_GET['uid'];
                          }

                          $query="desc`product`";
                          $result=mysqli_query($conn,$query);
                          $count=0;
                          while($row1=mysqli_fetch_array($result,MYSQLI_NUM))
                          {
                            $count++;
                          }
                          
                          $query1="SELECT * FROM `product`";
                          $result1=mysqli_query($conn,$query1);
            
                          echo "<table  class='table'>";
                          $i=1;
                          echo "<tr>";
                          echo "<th>Products</th>";
                          echo "<th>Price<br>(SL Rs)</th>";
                          echo "<th>Action</th>";
                          echo "</tr>";
                          while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
                          {
                            echo "<tr>";
                            if($row1[$_SESSION['uid']]!=0)
                            {
                              echo "<td>".$row1['PDname']."</td>";
                              echo "<td>".$row1[$_SESSION['uid']]."</td>";
                              echo "<td><a href='change.php?pdct={$row1['PDname']}'>change</a>|<a href='rmPD.php?pdct={$row1['PDname']}'>Remove</a></td>";
                           
                            }
                            echo "</tr>";
                            $i++;
                          }
                          ?>
                              
                          <?php
                          
                          echo "</table>";
                          echo "<td><a href='addPD.php?pdct={$row1[$_SESSION['uid']]}'><input type='subnit' value='Add New Product' class='btn btn-outline-primary    button-big button-rouded'></a></td>";
                      ?>
                  </div>
                    
                    </div></font>
                  </div>
                </div>
                

              <!--3 rd div-->
              <div class="col-md-6">
                  <div class="service-box">
                    <div class="service-content">
                      <h2 >Today Avg Buying Price</h2><font color="black">
                      <?php  
                          if(isset($_GET['uid']))
                          {
                            $_SESSION['uid']=(int)$_GET['uid'];
                          }

                          $query="desc`product`";
                          $result=mysqli_query($conn,$query);
                          $count=0;
                          while($row1=mysqli_fetch_array($result,MYSQLI_NUM))
                          {
                            $count++;
                          }
                          
                          $query1="SELECT * FROM `product`";
                          $result1=mysqli_query($conn,$query1);
            
                          echo "<table  class='table'>";
                          $i=1;
                          echo "<tr>";
                          echo "<th>Products</th>";
                          echo "<th>Price<br>(SL Rs)</th>";
                          //echo "<th>Action</th>";
                          echo "</tr>";
                          while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
                          {
                            echo "<tr>";
                            if($row1[$_SESSION['uid']]!=0)
                            {
                              echo "<td>".$row1['PDname']."</td>";
                              $cnt=2;
                              $pce=0;
                              $pdN=$row1['PDname'];
                              $itrtion=0;

                              $query2="SELECT * FROM `product` WHERE `PDname`='$pdN'";
                              $result2=mysqli_query($conn,$query2);
                              $row2=mysqli_fetch_array($result2,MYSQLI_NUM);

                              while($cnt<$count)
                              {
                                if($row2[$cnt]!=0)
                                {
                                  $pce+=$row2[$cnt]; 
                                  $itrtion++;
                                }
                                $cnt++;
                                
                              }
                            
                              echo "<td>".$pce/$itrtion."</td>";
                            }
                            echo "</tr>";
                            $i++;
                          }
                          
                          echo "</table>";
                          
                      ?>
                    </font>
                    </div>
                  </div>
              </div>
             

               <!--4 th div-->

              <div class="col-md-6">
                  <div class="service-box">
                    <div class="service-content">
                      <h2 >Today Avg Selling Price</h2><font color="black">
                      <?php  
                          if(isset($_GET['uid']))
                          {
                            $_SESSION['uid']=(int)$_GET['uid'];
                          }

                          $query="desc`product`";
                          $result=mysqli_query($conn,$query);
                          $count=0;
                          while($row1=mysqli_fetch_array($result,MYSQLI_NUM))
                          {
                            $count++;
                          }
                          
                          $query1="SELECT * FROM `product`";
                          $result1=mysqli_query($conn,$query1);
            
                          echo "<table  class='table'>";
                          $i=1;
                          echo "<tr>";
                          echo "<th>Products</th>";
                          echo "<th>Price<br>(SL Rs)</th>";
                          //echo "<th>Action</th>";
                          echo "</tr>";
                          while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
                          {
                            echo "<tr>";
                            if($row1[$_SESSION['uid']]!=0)
                            {
                              echo "<td>".$row1['PDname']."</td>";
                              echo "<td>".$row1[$_SESSION['uid']]."</td>";
                              //echo "<td><a href='change.php?pdct={$row1['PDname']}'>change</a>|<a href='rmPD.php?pdct={$row1['PDname']}'>Remove</a></td>";
                           
                            }
                            echo "</tr>";
                            $i++;
                          }
                          
                          echo "</table>";
                          
                      ?>
                    </font>
                    </div>
                  </div>
              </div>
                </div>
              </div>
        	</div>
    	  </div>
		</div>
	<?php
	}
	?>

<!--footer-->
      <div style=" background-color: white; width: 100%;">
      <div style=" margin-left: 37%; background-color: white;">
      
              <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
              </div><font color="black">
                
              <p class="copyright">&copy; Copyright <strong>Group no 11</strong>. All Rights Reserved</p>
              <div class="credits ">
               Designed by <a href="#">PCJAVA Group</font></a><br>
              </div>

            </div>
        </div>
  
     <!--footer-->

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
