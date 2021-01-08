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
<!-----------------------nev bar-------------------------->

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

   
<!-----------------------body content-------------------------->
  
    <div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg); width: 100%; height: 960px; ">
    		<div class="overlay-itro"></div><div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container" style="margin-top: 10.5em;" >
          
            <div id="contact" class="box-shadow-full">
              <div class="row" >
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                    	Create New Account
                    </h5>
                  </div>
                </div>
                <div class="col-md-6"> 
                  <div class="more-info">
                   <form action="signup.php" method="POST">
                   	<table>
                   		<tr>
                   			<div class="form-group col-md-12">
                   				<input type="text" name="FN" class="form-control" id="name" placeholder="First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                   		</tr>
                   		<tr>
                   			<div class="form-group col-md-12">
                   				<input type="text" name="LN" class="form-control" id="name" placeholder="Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                   		</tr>
                   		<tr>
                   			<div class="form-group col-md-12">
                            	<input type="text" name="AD" class="form-control" id="name" placeholder="Address" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            	<div class="validation"></div>
                        	</div>
                   		</tr>

                   		<tr>
                   			<div class="form-group col-md-12">
                            	<select name="DT" class="form-control">
  										<option value="Central Province">Central Province</option>
  										<option value="Eastern Province">Eastern Province</option>
  										<option value="Northern Province ">Northern Province</option>
  										<option value="Southern Province">Southern Province</option>
  										<option value="Western Province">Western Province</option>
  										<option value="North Western Province">North Western Province</option>
  										<option value="North Central Province ">North Central Province</option>
  										<option value="Uva Province">Uva Province</option>
                      <option value="Uva Province">Sabaragamuwa Province</option>
									</select>
                        	</div>
                   		</tr>
                   		<tr>
                   			<div class="form-group col-md-12">
                   				<input type="email" name="EM" class="form-control" id="name" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                   		</tr>
                   		<tr>
                   			<div class="form-group col-md-12">
                   				<select name="YU" class="form-control">
									           <option value="Farmer">farmer</option>
									           <option value="Seller">Seller</option>
                             <option value="Retailer">Retailer</option>
								          </select>
                        </div>
                   		</tr>
                   		<tr>
                   			<div class="form-group col-md-12">
                            	<input type="password" name="CPW" class="form-control" id="name" placeholder="Enter Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            	<div class="validation"></div>
                        	</div>
                   		</tr>
                   		<tr>
                   			<div class="form-group col-md-12">
                            	<input type="password" name="CMPW" class="form-control" id="name" placeholder="Confirm password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            	<div class="validation"></div>
                        	</div>
                   		</tr>
                   		
                   		<tr>
                   			<td>
                   				<div class="col-md-3">
                          			<input type="submit" name="NXT" value="Create" class="btn btn-outline-primary    button-big button-rouded">
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
<!----------------------------------footer------------------------------>

 		<div id="contact" class="box-shadow-full">
                <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                </div>
                <font color="black">
                   <p class="copyright">&copy; Copyright <strong>Group no 11</strong>. All Rights Reserved</p>
                      <div class="credits">Designed by <a href="#">PCJAVA Group</font></a></div>
         </div>
<!---------------------------------footer--------------------------------->
        </div>
      </div>
    </div>

 <!--php-->
<?php 
if(isset($_POST['NXT']))
		{
			$fn=$_POST['FN'];
			$ln=$_POST['LN'];
			$ad=$_POST['AD'];
			$dt=$_POST['DT'];
			$em=$_POST['EM'];
			$yu=$_POST['YU'];
			$pw1=sha1($_POST['CPW']);
			$pw2=sha1($_POST['CMPW']);
			
			if(!empty($fn)&&!empty($ln)&&!empty($ad)&&!empty($dt)&&!empty($em)&&!empty($yu)&&!empty($pw1)&&!empty($pw2))
			{
				if($pw1==$pw2)
				{
					$query1="INSERT INTO `user`(`FN`, `LN`,`AD`, `DT`, `EM`, `YU`,`PW`) VALUES ('$fn','$ln','$ad','$dt','$em','$yu','$pw1')";
					$result1=mysqli_query($conn,$query1);

					if($result1)
					{
					
						
						$query2="SELECT * FROM `user` WHERE EM='$em' AND PW='$pw1' limit 1";
						$result2=mysqli_query($conn,$query2);
						$row=mysqli_fetch_array($result2,MYSQLI_ASSOC);

						$_SESSION['UD']=(int)$row['UID'];
						$_SESSION['UY']=$row['YU'];

						if(strtolower($yu)==strtolower("Seller"))
						{
							$uuuId=(int)$row['UID'];
							
							  $queryb0="ALTER TABLE `pbsunday` ADD `$uuuId` DOUBLE NOT NULL";
                $querys0="ALTER TABLE `pssunday` ADD `$uuuId` DECIMAL NOT NULL ";
                $resultb0=mysqli_query($conn,$queryb0);
                $results0=mysqli_query($conn,$querys0);

                $queryb1="ALTER TABLE `pbmonday` ADD `$uuuId` DOUBLE NOT NULL";
                $querys1="ALTER TABLE `psmonday` ADD `$uuuId` DECIMAL NOT NULL ";
                $resultb1=mysqli_query($conn,$queryb1);
                $results1=mysqli_query($conn,$querys1);

                $queryb2="ALTER TABLE `pbtuesday` ADD `$uuuId` DOUBLE NOT NULL";
                $querys2="ALTER TABLE `pstuesday` ADD `$uuuId` DECIMAL NOT NULL ";
                $resultb2=mysqli_query($conn,$queryb2);
                $results2=mysqli_query($conn,$querys2);
                
                $queryb3="ALTER TABLE `pbwednesday` ADD `$uuuId` DOUBLE NOT NULL";
                $querys3="ALTER TABLE `pswednesday` ADD `$uuuId` DECIMAL NOT NULL ";
                $resultb3=mysqli_query($conn,$queryb3);
                $results3=mysqli_query($conn,$querys3);

                $queryb4="ALTER TABLE `pbthursday` ADD `$uuuId` DOUBLE NOT NULL";
                $querys4="ALTER TABLE `psthursday` ADD `$uuuId` DECIMAL NOT NULL ";
                $resultb4=mysqli_query($conn,$queryb4);
                $results4=mysqli_query($conn,$querys4);
                
                $queryb5="ALTER TABLE `pbfriday` ADD `$uuuId` DOUBLE NOT NULL";
                $querys5="ALTER TABLE `psfriday` ADD `$uuuId` DECIMAL NOT NULL ";
                $resultb5=mysqli_query($conn,$queryb5);
                $results5=mysqli_query($conn,$querys5);
                
                $queryb6="ALTER TABLE `pbsaturday` ADD `$uuuId` DOUBLE NOT NULL";
                $querys6="ALTER TABLE `pssaturday` ADD `$uuuId` DECIMAL NOT NULL ";
                $resultb6=mysqli_query($conn,$queryb6);
                $results6=mysqli_query($conn,$querys6);
                

							if($resultb0 && $resultb1 &&$resultb2 && $resultb3 &&$resultb4 && $resultb5 &&$resultb6)
							{
                if($results0 && $results1 &&$results2 && $results3 &&$results4 && $results5 &&$results6)
                {
                  echo "<script>";
                  echo "window.location.href='create2.php?user={$row['YU']}&uid={$row['UID']}';";
                  echo "alert('account is created');";
                  echo "</script>";
                }
							}
              else
              {
                  echo "<script>";
                  echo "alert('account is not created');";
                  echo "</script>";
              }
						}
						else if($yu=="Farmer")
						{
							echo "<script>";
							echo "window.location.href='create2.php?user={$row['YU']}&uid={$row['UID']}';";
							echo "alert('account is created');";
							echo "</script>";
						}
            else if($yu=="Retailer")
            {
              echo "<script>";
              echo "window.location.href='login.php';";
              echo "alert('account is created');";
              echo "</script>";
            }
							
					}
					else
					{
						?>
						<script type="text/javascript">
							alert('Your Account is not created');
						</script>
						
						<?php
					}
					
				}
				
			}
			else
			{
				?>
				<script type="text/javascript">
					alert('some value not fill');
				</script>
						
				<?php
				
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
