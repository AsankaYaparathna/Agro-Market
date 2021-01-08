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

   
<!-----------------------body content farmer-------------------------->

<?php 
	if($_SESSION['UY']=="Farmer")
	{
		?>
			 <div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg); width: 100%; height: 837.5px; ">
    		<div class="overlay-itro"></div><div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container" style="margin-top: 10.5em;" >
          
            <div id="contact" class="box-shadow-full">
              <div class="row" >
                <div class="col-md-6">
                  <div class="title-box-2">
					<h5 class="title-left">Enter your Products</h5>
                  </div>
                </div>
                <div class="col-md-6"> 
                  <div class="more-info">
                  	<?php 

						if($_SESSION['UY']=="Farmer")
						{
							?>
							<form action="create2.php" method="POST">
                   				<table>
                   					<tr>
                   						<div class="form-group col-md-12">
                   							<input type="text" name="PD1" class="form-control" id="name" placeholder="Product 1" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            			<div class="validation"></div>
                          			</div>
                   					</tr>
                   					<tr>
                   						<div class="form-group col-md-12">
                   							<input type="text" name="PD2" class="form-control" id="name" placeholder="Product 2" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            			<div class="validation"></div>
                          			</div>
                   					</tr>
                   					<tr>
                   						<div class="form-group col-md-12">
                   							<input type="text" name="PD3" class="form-control" id="name" placeholder="Product 3" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            			<div class="validation"></div>
                          			</div>
                   					</tr>
                   					<tr>
                   						<div class="form-group col-md-12">
                   							<input type="text" name="PD4" class="form-control" id="name" placeholder="Product 4" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            			<div class="validation"></div>
                          			</div>
                   					</tr>
                   					<tr>
                   					<td>
                   						<div class="col-md-3">
                          					<input type="submit" name="createACF" value="Create" class="btn btn-outline-primary    button-big button-rouded">
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
							<?php
						}
						
					?>
                        
                  </div>

                </div>

              </div>

              

            </div>


          </div>

		<?php
	}

	if($_SESSION['UY']=="Seller")
	{
		?>
		<!-----------------------body content seller-------------------------->
		 <div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg); width: 100%; height: 960px; ">
    		<div class="overlay-itro"></div><div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container" style="margin-top: 10.5em;" >
          
            <div id="contact" class="box-shadow-full">
              <div class="row" >
                <div class="col-md-6">
                  <div class="title-box-2">
					<h5 class="title-left">Enter your Products</h5>
          
                  </div>
                </div>
                <div class="col-md-6"> 
                  <div class="more-info">
                  	
								<form action="create2.php" method="POST">
                   				<table>
                   					<tr>
                   						<td>
                   							<font color="black"><label class="form-control">Shop Number</label></font>
                   						</td>
                   						<td><input type="text" name="SN" class="form-control" placeholder="Shop Number">
                   							
                   						</td>
                              <td><input type="text" name="SNM" class="form-control" placeholder="Shop Name">
                              </td>

                   					</tr>


                   					<tr>
                   						<td>
                   							<input type="text" name="PD1" class="form-control" id="name" placeholder="Product" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                   						<td>
                   							<input type="text" name="PD1P" class="form-control" id="name" placeholder="Buying Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                              <td>
                                <input type="text" name="PD1PS" class="form-control" id="name" placeholder="Selling price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              </td>
                   					</tr>


                   					<tr>
                   						<td>
                   							<input type="text" name="PD2" class="form-control" id="name" placeholder="Product" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                   						<td>
                   							<input type="text" name="PD2P" class="form-control" id="name" placeholder="Buying Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                              <td>
                                <input type="text" name="PD2PS" class="form-control" id="name" placeholder="Selling price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              </td>
                   					</tr>


                   					<tr>
                   						<td>
                   							<input type="text" name="PD3" class="form-control" id="name" placeholder="Product" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                   						<td>
                   							<input type="text" name="PD3P" class="form-control" id="name" placeholder="Buying price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                              <td>
                                <input type="text" name="PD3PS" class="form-control" id="name" placeholder="Selling price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              </td>
                   					</tr>


                   					<tr>
                   						<td>
                   							<input type="text" name="PD4" class="form-control" id="name" placeholder="Product" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                   						<td>
                   							<input type="text" name="PD4P" class="form-control" id="name" placeholder="Buying Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                              <td>
                                <input type="text" name="PD4PS" class="form-control" id="name" placeholder="Selling price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              </td>
                   					</tr>


                   					<tr>
                   						<td>
                   							<input type="text" name="PD5" class="form-control" id="name" placeholder="Product" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                   						<td>
                   							<input type="text" name="PD5P" class="form-control" id="name" placeholder="Buying Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                              <td>
                                <input type="text" name="PD5PS" class="form-control" id="name" placeholder="Selling price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              </td>
                   					</tr>

                   					<tr>
                   						<td>
                   							<input type="text" name="PD6" class="form-control" id="name" placeholder="Product" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                   						<td>
                   							<input type="text" name="PD6P" class="form-control" id="name" placeholder="Buying Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                              <td>
                                <input type="text" name="PD6PS" class="form-control" id="name" placeholder="Selling price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              </td>
                   					</tr>


                   					<tr>
                   						<td>
                   							<input type="text" name="PD7" class="form-control" id="name" placeholder="Product" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                   						<td>
                   							<input type="text" name="PD7P" class="form-control" id="name" placeholder="Buying Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                              <td>
                                <input type="text" name="PD7PS" class="form-control" id="name" placeholder="Selling price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              </td>
                   					</tr>


                   					<tr>
                   						<td>
                   							<input type="text" name="PD8" class="form-control" id="name" placeholder="Product" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                   						<td>
                   							<input type="text" name="PD8P" class="form-control" id="name" placeholder="Buying Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                              <td>
                                <input type="text" name="PD8PS" class="form-control" id="name" placeholder="Selling price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              </td>
                   					</tr>


                   					<tr>
                   						<td>
                   							<input type="text" name="PD9" class="form-control" id="name" placeholder="Product" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                   						<td>
                   							<input type="text" name="PD9P" class="form-control" id="name" placeholder="Buying Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                              <td>
                                <input type="text" name="PD9PS" class="form-control" id="name" placeholder="Selling price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              </td>
                   					</tr>


                   					<tr>
                   						<td>
                   							<input type="text" name="PD10" class="form-control" id="name" placeholder="Product" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                   						<td>
                   							<input type="text" name="PD10P" class="form-control" id="name" placeholder="Buying Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   						</td>
                              <td>
                                <input type="text" name="PD10PS" class="form-control" id="name" placeholder="Selling price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              </td>
                   					</tr>
                   					
                   					
                   					
                   					<tr>
                   					<td>
                   						<div class="col-md-3">
                          					<input type="submit" name="createAC" value="Save" class="btn btn-outline-primary    button-big button-rouded">
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
		<?php
	}



?>

  
   
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

			if(isset($_POST['createACF']))
					{
						$pd1=$_POST['PD1'];
						$pd2=$_POST['PD2'];
						$pd3=$_POST['PD3'];
						$pd4=$_POST['PD4'];
						$udd=$_SESSION['UD'];

						$query="INSERT INTO `farmer`(`UID`, `PD1`, `PD2`, `PD3`, `PD4`) VALUES ('$udd','$pd1','$pd2','$pd3','$pd4')";
						$result=mysqli_query($conn,$query);


						if($result)
						{
							echo "<script>";
							echo "alert('value inserted');";
							echo "window.location.href='login.php'";
							echo "</script>";
						}
						else
						{
							?>

							<script>
								alert('value is not inserted');
							</script>

							<?php
						}
					}


				if(isset($_POST['createAC']))
						{

							$uid=$_SESSION['UD'];
							$pd1=$_POST['PD1'];
							$pd2=$_POST['PD2'];
							$pd3=$_POST['PD3'];
							$pd4=$_POST['PD4'];
							$pd5=$_POST['PD5'];
							$pd6=$_POST['PD6'];
							$pd7=$_POST['PD7'];
							$pd8=$_POST['PD8'];
							$pd9=$_POST['PD9'];
							$pd10=$_POST['PD10'];
							$SHNO=(int)$_POST['SN'];
              $snm=$_POST['SNM'];

							$pd1p=(double)$_POST['PD1P'];
							$pd2p=(double)$_POST['PD2P'];
							$pd3p=(double)$_POST['PD3P'];
							$pd4p=(double)$_POST['PD4P'];
							$pd5p=(double)$_POST['PD5P'];
							$pd6p=(double)$_POST['PD6P'];
							$pd7p=(double)$_POST['PD7P'];
							$pd8p=(double)$_POST['PD8P'];
							$pd9p=(double)$_POST['PD9P'];
							$pd10p=(double)$_POST['PD10P'];

              $pd1ps=(double)$_POST['PD1PS'];
              $pd2ps=(double)$_POST['PD2PS'];
              $pd3ps=(double)$_POST['PD3PS'];
              $pd4ps=(double)$_POST['PD4PS'];
              $pd5ps=(double)$_POST['PD5PS'];
              $pd6ps=(double)$_POST['PD6PS'];
              $pd7ps=(double)$_POST['PD7PS'];
              $pd8ps=(double)$_POST['PD8PS'];
              $pd9ps=(double)$_POST['PD9PS'];
              $pd10ps=(double)$_POST['PD10PS'];

							$query="UPDATE `user` SET `SN`='$SHNO' WHERE `UID`='$uid'";
							$result=mysqli_query($conn,$query);

              $query="UPDATE `user` SET `SNM`='$snm' WHERE `UID`='$uid'";
              $result=mysqli_query($conn,$query);

              $i=0;
              $datt=(string)date("l");
              //*******************************************pd1***************************
              if(!empty($pd1))
              {
                  //echo "<script>";
                  //echo "alert('".$datt."');";
                  //echo "</script>";

                if($datt=="Sunday")
                {

                  $querypd1="UPDATE `pssunday` SET `$uid`='$pd1ps' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsunday` SET `$uid`='$pd1p' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                   $i++;
                  }
                }

                if($datt=="Monday")
                {

                  $querypd1="UPDATE `psmonday` SET `$uid`='$pd1ps' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbmonday` SET `$uid`='$pd1p' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Tuesday")
                {

                  $querypd1="UPDATE `pstuesday` SET `$uid`='$pd1ps' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbtuesday` SET `$uid`='$pd1p' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Wednesday")
                {
                  $querypd1="UPDATE `pswednesday` SET `$uid`='$pd1ps' WHERE `PDname`='$pd1'";
                $resultpd1=mysqli_query($conn,$querypd1);
                $querypd1="UPDATE `pbwednesday` SET `$uid`='$pd1p' WHERE `PDname`='$pd1'";
                $resultpd1=mysqli_query($conn,$querypd1);
                if($resultpd1)
                {
                  $i++;
                }
                }
                if($datt=="Thursday")
                {
                  $querypd1="UPDATE `psthursday` SET `$uid`='$pd1ps' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbthursday` SET `$uid`='$pd1p' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }

                if($datt=="Friday")
                {
                  $querypd1="UPDATE `psfriday` SET `$uid`='$pd1ps' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbfriday` SET `$uid`='$pd1p' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Saturday")
                {
                  $querypd1="UPDATE `pssaturday` SET `$uid`='$pd1ps' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsaturday` SET `$uid`='$pd1p' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);

                  if($resultpd1)
                  {
                    $i++;
                  }
                }

              }
              //****************************************pd2*******************************
              if(!empty($pd2))
              {
                  //echo "<script>";
                  //echo "alert('".$datt."');";
                  //echo "</script>";

                if($datt=="Sunday")
                {

                  $querypd1="UPDATE `pssunday` SET `$uid`='$pd2ps' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsunday` SET `$uid`='$pd2p' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                   $i++;
                  }
                }

                if($datt=="Monday")
                {

                  $querypd1="UPDATE `psmonday` SET `$uid`='$pd2ps' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbmonday` SET `$uid`='$pd2p' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Tuesday")
                {

                  $querypd1="UPDATE `pstuesday` SET `$uid`='$pd2ps' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbtuesday` SET `$uid`='$pd2p' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Wednesday")
                {
                  $querypd1="UPDATE `pswednesday` SET `$uid`='$pd2ps' WHERE `PDname`='$pd2'";
                $resultpd1=mysqli_query($conn,$querypd1);
                $querypd1="UPDATE `pbwednesday` SET `$uid`='$pd2p' WHERE `PDname`='$pd2'";
                $resultpd1=mysqli_query($conn,$querypd1);
                if($resultpd1)
                {
                  $i++;
                }
                }
                if($datt=="Thursday")
                {
                  $querypd1="UPDATE `psthursday` SET `$uid`='$pd2ps' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbthursday` SET `$uid`='$pd2p' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }

                if($datt=="Friday")
                {
                  $querypd1="UPDATE `psfriday` SET `$uid`='$pd2ps' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbfriday` SET `$uid`='$pd2p' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Saturday")
                {
                  $querypd1="UPDATE `pssaturday` SET `$uid`='$pd2ps' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsaturday` SET `$uid`='$pd2p' WHERE `PDname`='$pd2'";
                  $resultpd1=mysqli_query($conn,$querypd1);

                  if($resultpd1)
                  {
                    $i++;
                  }
                }

              }
              //*******************************************pd3******************************
              if(!empty($pd3))
              {
                  //echo "<script>";
                  //echo "alert('".$datt."');";
                  //echo "</script>";

                if($datt=="Sunday")
                {

                  $querypd1="UPDATE `pssunday` SET `$uid`='$pd3ps' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsunday` SET `$uid`='$pd3p' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                   $i++;
                  }
                }

                if($datt=="Monday")
                {

                  $querypd1="UPDATE `psmonday` SET `$uid`='$pd3ps' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbmonday` SET `$uid`='$pd3p' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Tuesday")
                {

                  $querypd1="UPDATE `pstuesday` SET `$uid`='$pd3ps' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbtuesday` SET `$uid`='$pd3p' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Wednesday")
                {
                  $querypd1="UPDATE `pswednesday` SET `$uid`='$pd3ps' WHERE `PDname`='$pd3'";
                $resultpd1=mysqli_query($conn,$querypd1);
                $querypd1="UPDATE `pbwednesday` SET `$uid`='$pd3p' WHERE `PDname`='$pd3'";
                $resultpd1=mysqli_query($conn,$querypd1);
                if($resultpd1)
                {
                  $i++;
                }
                }
                if($datt=="Thursday")
                {
                  $querypd1="UPDATE `psthursday` SET `$uid`='$pd3ps' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbthursday` SET `$uid`='$pd3p' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }

                if($datt=="Friday")
                {
                  $querypd1="UPDATE `psfriday` SET `$uid`='$pd3ps' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbfriday` SET `$uid`='$pd3p' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Saturday")
                {
                  $querypd1="UPDATE `pssaturday` SET `$uid`='$pd3ps' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsaturday` SET `$uid`='$pd3p' WHERE `PDname`='$pd3'";
                  $resultpd1=mysqli_query($conn,$querypd1);

                  if($resultpd1)
                  {
                    $i++;
                  }
                }

              }
              //**************************************************pd4**********************************
              if(!empty($pd4))
              {
                  //echo "<script>";
                  //echo "alert('".$datt."');";
                  //echo "</script>";

                if($datt=="Sunday")
                {

                  $querypd1="UPDATE `pssunday` SET `$uid`='$pd4ps' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsunday` SET `$uid`='$pd4p' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                   $i++;
                  }
                }

                if($datt=="Monday")
                {

                  $querypd1="UPDATE `psmonday` SET `$uid`='$pd4ps' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbmonday` SET `$uid`='$pd4p' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Tuesday")
                {

                  $querypd1="UPDATE `pstuesday` SET `$uid`='$pd4ps' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbtuesday` SET `$uid`='$pd4p' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Wednesday")
                {
                  $querypd1="UPDATE `pswednesday` SET `$uid`='$pd4ps' WHERE `PDname`='$pd4'";
                $resultpd1=mysqli_query($conn,$querypd1);
                $querypd1="UPDATE `pbwednesday` SET `$uid`='$pd4p' WHERE `PDname`='$pd4'";
                $resultpd1=mysqli_query($conn,$querypd1);
                if($resultpd1)
                {
                  $i++;
                }
                }
                if($datt=="Thursday")
                {
                  $querypd1="UPDATE `psthursday` SET `$uid`='$pd4ps' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbthursday` SET `$uid`='$pd4p' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }

                if($datt=="Friday")
                {
                  $querypd1="UPDATE `psfriday` SET `$uid`='$pd4ps' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbfriday` SET `$uid`='$pd4p' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Saturday")
                {
                  $querypd1="UPDATE `pssaturday` SET `$uid`='$pd4ps' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsaturday` SET `$uid`='$pd4p' WHERE `PDname`='$pd4'";
                  $resultpd1=mysqli_query($conn,$querypd1);

                  if($resultpd1)
                  {
                    $i++;
                  }
                }

              }
              //***************************************************pd5*********************************
              if(!empty($pd5))
              {
                  //echo "<script>";
                  //echo "alert('".$datt."');";
                  //echo "</script>";

                if($datt=="Sunday")
                {

                  $querypd1="UPDATE `pssunday` SET `$uid`='$pd5ps' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsunday` SET `$uid`='$pd5p' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                   $i++;
                  }
                }

                if($datt=="Monday")
                {

                  $querypd1="UPDATE `psmonday` SET `$uid`='$pd5ps' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbmonday` SET `$uid`='$pd5p' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Tuesday")
                {

                  $querypd1="UPDATE `pstuesday` SET `$uid`='$pd5ps' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbtuesday` SET `$uid`='$pd5p' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Wednesday")
                {
                  $querypd1="UPDATE `pswednesday` SET `$uid`='$pd5ps' WHERE `PDname`='$pd5'";
                $resultpd1=mysqli_query($conn,$querypd1);
                $querypd1="UPDATE `pbwednesday` SET `$uid`='$pd5p' WHERE `PDname`='$pd5'";
                $resultpd1=mysqli_query($conn,$querypd1);
                if($resultpd1)
                {
                  $i++;
                }
                }
                if($datt=="Thursday")
                {
                  $querypd1="UPDATE `psthursday` SET `$uid`='$pd5ps' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbthursday` SET `$uid`='$pd5p' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }

                if($datt=="Friday")
                {
                  $querypd1="UPDATE `psfriday` SET `$uid`='$pd5ps' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbfriday` SET `$uid`='$pd5p' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Saturday")
                {
                  $querypd1="UPDATE `pssaturday` SET `$uid`='$pd5ps' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsaturday` SET `$uid`='$pd5p' WHERE `PDname`='$pd5'";
                  $resultpd1=mysqli_query($conn,$querypd1);

                  if($resultpd1)
                  {
                    $i++;
                  }
                }

              }
              //*****************************************pd6*********************************************
              if(!empty($pd6))
              {
                  //echo "<script>";
                  //echo "alert('".$datt."');";
                  //echo "</script>";

                if($datt=="Sunday")
                {

                  $querypd1="UPDATE `pssunday` SET `$uid`='$pd6ps' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsunday` SET `$uid`='$pd6p' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                   $i++;
                  }
                }

                if($datt=="Monday")
                {

                  $querypd1="UPDATE `psmonday` SET `$uid`='$pd6ps' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbmonday` SET `$uid`='$pd6p' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Tuesday")
                {

                  $querypd1="UPDATE `pstuesday` SET `$uid`='$pd6ps' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbtuesday` SET `$uid`='$pd6p' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Wednesday")
                {
                  $querypd1="UPDATE `pswednesday` SET `$uid`='$pd6ps' WHERE `PDname`='$pd6'";
                $resultpd1=mysqli_query($conn,$querypd1);
                $querypd1="UPDATE `pbwednesday` SET `$uid`='$pd6p' WHERE `PDname`='$pd6'";
                $resultpd1=mysqli_query($conn,$querypd1);
                if($resultpd1)
                {
                  $i++;
                }
                }
                if($datt=="Thursday")
                {
                  $querypd1="UPDATE `psthursday` SET `$uid`='$pd6ps' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbthursday` SET `$uid`='$pd6p' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }

                if($datt=="Friday")
                {
                  $querypd1="UPDATE `psfriday` SET `$uid`='$pd6ps' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbfriday` SET `$uid`='$pd6p' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Saturday")
                {
                  $querypd1="UPDATE `pssaturday` SET `$uid`='$pd6ps' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsaturday` SET `$uid`='$pd6p' WHERE `PDname`='$pd6'";
                  $resultpd1=mysqli_query($conn,$querypd1);

                  if($resultpd1)
                  {
                    $i++;
                  }
                }

              }
              //**************************************************pd7**********************************
              if(!empty($pd7))
              {
                  //echo "<script>";
                  //echo "alert('".$datt."');";
                  //echo "</script>";

                if($datt=="Sunday")
                {

                  $querypd1="UPDATE `pssunday` SET `$uid`='$pd7ps' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsunday` SET `$uid`='$pd7p' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                   $i++;
                  }
                }

                if($datt=="Monday")
                {

                  $querypd1="UPDATE `psmonday` SET `$uid`='$pd7ps' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbmonday` SET `$uid`='$pd7p' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Tuesday")
                {

                  $querypd1="UPDATE `pstuesday` SET `$uid`='$pd7ps' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbtuesday` SET `$uid`='$pd7p' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Wednesday")
                {
                  $querypd1="UPDATE `pswednesday` SET `$uid`='$pd7ps' WHERE `PDname`='$pd7'";
                $resultpd1=mysqli_query($conn,$querypd1);
                $querypd1="UPDATE `pbwednesday` SET `$uid`='$pd7p' WHERE `PDname`='$pd7'";
                $resultpd1=mysqli_query($conn,$querypd1);
                if($resultpd1)
                {
                  $i++;
                }
                }
                if($datt=="Thursday")
                {
                  $querypd1="UPDATE `psthursday` SET `$uid`='$pd7ps' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbthursday` SET `$uid`='$pd7p' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }

                if($datt=="Friday")
                {
                  $querypd1="UPDATE `psfriday` SET `$uid`='$pd7ps' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbfriday` SET `$uid`='$pd7p' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Saturday")
                {
                  $querypd1="UPDATE `pssaturday` SET `$uid`='$pd7ps' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsaturday` SET `$uid`='$pd7p' WHERE `PDname`='$pd7'";
                  $resultpd1=mysqli_query($conn,$querypd1);

                  if($resultpd1)
                  {
                    $i++;
                  }
                }

              }
              //***********************************************pd8*******************************************
              if(!empty($pd8))
              {
                  //echo "<script>";
                  //echo "alert('".$datt."');";
                  //echo "</script>";

                if($datt=="Sunday")
                {

                  $querypd1="UPDATE `pssunday` SET `$uid`='$pd8ps' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsunday` SET `$uid`='$pd8p' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                   $i++;
                  }
                }

                if($datt=="Monday")
                {

                  $querypd1="UPDATE `psmonday` SET `$uid`='$pd8ps' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbmonday` SET `$uid`='$pd8p' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Tuesday")
                {

                  $querypd1="UPDATE `pstuesday` SET `$uid`='$pd8ps' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbtuesday` SET `$uid`='$pd8p' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Wednesday")
                {
                  $querypd1="UPDATE `pswednesday` SET `$uid`='$pd8ps' WHERE `PDname`='$pd8'";
                $resultpd1=mysqli_query($conn,$querypd1);
                $querypd1="UPDATE `pbwednesday` SET `$uid`='$pd8p' WHERE `PDname`='$pd8'";
                $resultpd1=mysqli_query($conn,$querypd1);
                if($resultpd1)
                {
                  $i++;
                }
                }
                if($datt=="Thursday")
                {
                  $querypd1="UPDATE `psthursday` SET `$uid`='$pd8ps' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbthursday` SET `$uid`='$pd8p' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }

                if($datt=="Friday")
                {
                  $querypd1="UPDATE `psfriday` SET `$uid`='$pd8ps' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbfriday` SET `$uid`='$pd8p' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Saturday")
                {
                  $querypd1="UPDATE `pssaturday` SET `$uid`='$pd8ps' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsaturday` SET `$uid`='$pd8p' WHERE `PDname`='$pd8'";
                  $resultpd1=mysqli_query($conn,$querypd1);

                  if($resultpd1)
                  {
                    $i++;
                  }
                }

              }
              //**************************************************p9********************************
              if(!empty($pd9))
              {
                  //echo "<script>";
                  //echo "alert('".$datt."');";
                  //echo "</script>";

                if($datt=="Sunday")
                {

                  $querypd1="UPDATE `pssunday` SET `$uid`='$pd9ps' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsunday` SET `$uid`='$pd9p' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                   $i++;
                  }
                }

                if($datt=="Monday")
                {

                  $querypd1="UPDATE `psmonday` SET `$uid`='$pd9ps' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbmonday` SET `$uid`='$pd9p' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Tuesday")
                {

                  $querypd1="UPDATE `pstuesday` SET `$uid`='$pd9ps' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbtuesday` SET `$uid`='$pd9p' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Wednesday")
                {
                  $querypd1="UPDATE `pswednesday` SET `$uid`='$pd9ps' WHERE `PDname`='$pd9'";
                $resultpd1=mysqli_query($conn,$querypd1);
                $querypd1="UPDATE `pbwednesday` SET `$uid`='$pd9p' WHERE `PDname`='$pd9'";
                $resultpd1=mysqli_query($conn,$querypd1);
                if($resultpd1)
                {
                  $i++;
                }
                }
                if($datt=="Thursday")
                {
                  $querypd1="UPDATE `psthursday` SET `$uid`='$pd9ps' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbthursday` SET `$uid`='$pd9p' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }

                if($datt=="Friday")
                {
                  $querypd1="UPDATE `psfriday` SET `$uid`='$pd9ps' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbfriday` SET `$uid`='$pd9p' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Saturday")
                {
                  $querypd1="UPDATE `pssaturday` SET `$uid`='$pd9ps' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsaturday` SET `$uid`='$pd9p' WHERE `PDname`='$pd9'";
                  $resultpd1=mysqli_query($conn,$querypd1);

                  if($resultpd1)
                  {
                    $i++;
                  }
                }

              }

              //**************************************************pd10********************************
              if(!empty($pd10))
              {
                  //echo "<script>";
                  //echo "alert('".$datt."');";
                  //echo "</script>";

                if($datt=="Sunday")
                {

                  $querypd1="UPDATE `pssunday` SET `$uid`='$pd10ps' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsunday` SET `$uid`='$pd10p' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                   $i++;
                  }
                }

                if($datt=="Monday")
                {

                  $querypd1="UPDATE `psmonday` SET `$uid`='$pd10ps' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbmonday` SET `$uid`='$pd10p' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Tuesday")
                {

                  $querypd1="UPDATE `pstuesday` SET `$uid`='$pd10ps' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbtuesday` SET `$uid`='$pd10p' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Wednesday")
                {
                  $querypd1="UPDATE `pswednesday` SET `$uid`='$pd10ps' WHERE `PDname`='$pd10'";
                $resultpd1=mysqli_query($conn,$querypd1);
                $querypd1="UPDATE `pbwednesday` SET `$uid`='$pd10p' WHERE `PDname`='$pd10'";
                $resultpd1=mysqli_query($conn,$querypd1);
                if($resultpd1)
                {
                  $i++;
                }
                }
                if($datt=="Thursday")
                {
                  $querypd1="UPDATE `psthursday` SET `$uid`='$pd10ps' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbthursday` SET `$uid`='$pd10p' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }

                if($datt=="Friday")
                {
                  $querypd1="UPDATE `psfriday` SET `$uid`='$pd10ps' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbfriday` SET `$uid`='$pd10p' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    $i++;
                  }
                }
                if($datt=="Saturday")
                {
                  $querypd1="UPDATE `pssaturday` SET `$uid`='$pd10ps' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  $querypd1="UPDATE `pbsaturday` SET `$uid`='$pd10p' WHERE `PDname`='$pd10'";
                  $resultpd1=mysqli_query($conn,$querypd1);

                  if($resultpd1)
                  {
                    $i++;
                  }
                }

              }

							if($i!=0)
							{
								$i=0;
								echo "<script>";
								echo "alert('Added');";
								echo "window.location.href='login.php'";
								echo "</script>";
							}
							else
							{
								echo "<script>";
								echo "alert('value not inserted');";
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
