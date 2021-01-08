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
			$yu="";
			if(isset($_GET['yu']))
			{
				$yu=$_GET['yu'];
			}

      if(isset($_GET['pdCol']))
      {
        $pdCol=(int)$_GET['pdCol'];
      }


							$udd=$_SESSION['UID'];
							$pd1=$pdt;

							if($_SESSION['user']=="Farmer")
							{
								$pd1p="";
								if(!empty($pd1))
								{
									$querypd1="UPDATE `farmer` SET `PD1`='$pd1p' WHERE `PD1`='$pd1'";
									$resultpd1=mysqli_query($conn,$querypd1);

									if($resultpd1)
									{
										?>
										<script>
											window.location.href='hp.php';
										</script>
										<?php
									}

									$querypd2="UPDATE `farmer` SET `PD2`='$pd1p' WHERE `PD2`='$pd1'";
									$resultpd2=mysqli_query($conn,$querypd2);

									if($resultpd2)
									{
										?>
										<script>
											window.location.href='hp.php';
										</script>
										<?php
									}

									$querypd3="UPDATE `farmer` SET `PD3`='$pd1p' WHERE `PD3`='$pd1'";
									$resultpd3=mysqli_query($conn,$querypd3);

									if($resultpd3)
									{
										?>
										<script>
											window.location.href='hp.php';
										</script>
										<?php
									}

									$querypd4="UPDATE `farmer` SET `PD4`='$pd1p' WHERE `PD4`='$pd1'";
									$resultpd4=mysqli_query($conn,$querypd4);

									if($resultpd4)
									{
										?>
										<script>
											window.location.href='hp.php';
										</script>
										<?php
									}
								}
							}

							else
							{

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

              if($_SESSION['byPs']=="buy")
              {
                $pd1p=0;
                if(!empty($pd1))
                {
                  $querypd1="UPDATE `pb".date("l")."` SET `$udd`='$pd1p' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    ?>
                    <script >
                      window.location.href='hp.php';
                    </script>
                    <?php
                  }
                }
              }
              else if($_SESSION['byPs']=="sell")
              {
                $pd1p=0;
                if(!empty($pd1))
                {
                  $querypd1="UPDATE `ps".date("l")."` SET `$udd`='$pd1p' WHERE `PDname`='$pd1'";
                  $resultpd1=mysqli_query($conn,$querypd1);
                  if($resultpd1)
                  {
                    ?>
                    <script >
                      window.location.href='hp.php';
                    </script>
                    <?php
                  }
                }
              }
  
								
							}
 ?>