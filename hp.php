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
    include 'navi.php';
  ?>


  <body id="page-top">
    <div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg);background-size: fixed;">
      <div class="overlay-itro"></div>
      
      <div class="overlay-itro"></div>
      <div class="intro-content display-table">
          <div class="table-cell">
          <div class="container" style="margin-top: 9.7em;">
            <?php 
            //*************************************************** farmer *************************************************************
              if($_SESSION['user']=="Farmer")
              {
                  $arrDay=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
                    $val=0;
                    $v=0;
                    while($v<=6)
                    {
                      if($array[$v]=date("l"))
                      {
                        $val=$v;//count a no of the day
                      }
                      $v++;
                    }
                    ?>
                      <div class="row">
<!---------------------------------div 1 farmer--------------------------------->
              <div class="col-md-4">
                  <div class="service-box"> 
                    <div class="service-content"><font color="black">
                      <?php  
                         if(isset($_GET['uid']))
                          {
                            $_SESSION['uid']=(int)$_GET['uid'];
                          }
                          $queryt="DESC `pb".date("l")."`";
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
                          echo "<th> Products</th>";
                          echo "<th> Price</th>";
                          echo "<th> Action</th>";
                          while($i<5)
                          {
                            if($row[$i]!="")
                            {
                              echo "<tr>";
                              echo "<td>".$row[$i]."</td>";
                              echo "<td><a href='functions/seePce.php?pd={$row[$i]}'>see</a></td>";
                              echo "<td><a href='rmPD2.php?pdct={$row[$i]}&yu=Farmer&pdCol={$i}'>Remove</a></td>";
                              echo "</tr>";
                            }
              
                            $i++;
                          }
                          echo "</table>";
                          echo "<a href='addPD.php'><input type='submit' value='Add New Product' class='btn btn-outline-primary button-big button-rouded'></a>";
                              ?>
                            </font>
                       </div>
                    </div>
                  </div>
<!--------------------------------------------------------end div 1 farmer// div 2 farmer-------------------------------------------------------->
              <div class="col-md-8">
                <?php  $pdna="";
                      if(isset($_GET['pd']))
                        {
                          $pdna=$_GET['pd'];
                          
                        }
                ?>
                  <div class="service-box"> 
                    <div class="service-content"><font color="black">
                      <form action="hp.php" method="POST">
                        <div style="float: right;">
                          <table>
                            <tr>
                              <td><input type="text" name="textsearch" ></td>
                              <td><input type="submit" name="btnsearch" value="Search"></td>
                            </tr>
                          </table>
                        </div>
                      </form>
                      <?php  
                          if(isset($_POST['btnsearch']))
                          {
                            $pdna=$_POST['textsearch'];
                          }
                      ?>

                      <br><br><br>
                      <h2 style="margin-top: -80px"><?php echo "TODAY(".date("l").")".strtoupper($pdna)." PRICE"; ?></h2>
                      <?php 
                          $countP=0;
                          $query1="DESC `pb".date("l")."`";
                          $result1=mysqli_query($conn,$query1);
                          while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                          {
                            $countP++;
                          }

                          $queryt="SELECT * FROM `pb".date("l")."` WHERE `PDname`='$pdna'";
                          $resultt=mysqli_query($conn,$queryt);
                          $row=mysqli_fetch_array($resultt,MYSQLI_NUM);

                          echo "<table class='table'>";
                          echo "<tr>";
                          echo "<th> Shop No  </th>";
                          echo "<th> Shop Name  </th>";
                          echo "<th> Price (SLR)</th>";
                          //echo "<th> Action</th>";
                          echo "</tr>";

                         $cx=2;
                         $ct=1;
                         while($cx<$countP)
                         {
                            if($row[$cx]!=0)
                            {
                              echo "<tr>";
                              echo "<td>".$ct."</td>";
                              echo "<td>Any shop".$cx."</td>";
                              echo "<td>Rs.".$row[$cx]."</td>";
                              echo "</tr>";
                            }
                            $ct++;
                            $cx++;
                         }
                          echo "</table>";
                              ?>
                            </font>
                       </div>
                    </div>
                  </div>
                </div>
                <!--end of fist row//2nd  row-->
              </div>
            </div>
          </div>
        </div>
        <div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg);height: 500px;margin-top: -8%">
            <div class="overlay-itro"></div>
            <div class="overlay-itro"></div>
            <div class="intro-content display-table">
            <div class="container">

                <div class="row">
                  <!------------------------ div 3 farmer------------------------>
                  <div class="col-md-12">
                    <?php  $pdna="";
                      if(isset($_GET['pd']))
                        {
                          $pdna=$_GET['pd'];
                          
                        }
                    ?>
                  <div class="service-box"> 
                    <div class="service-content"><font color="black">
                      <form action="hp.php" method="POST">
                        <div style="float: right;">
                          <table>
                            <tr>
                              <td><input type="text" name="textsearch" ></td>
                              <td><input type="submit" name="btnsearch" value="Search"></td>
                            </tr>
                          </table>
                        </div>
                      </form>
                      <?php  
                          if(isset($_POST['btnsearch']))
                          {
                            $pdna=$_POST['textsearch'];
                          }
                      ?>

                      <br><br><br>
                      <h2 style="margin-top: -80px"><?php echo "  THIS WEEK ".strtoupper($pdna)." PRICE"; ?></h2>
                      <?php 
                          $tdy=(string)date("l");

                          //echo "<script>";
                          //echo "alert('".$tdy."');";
                          //echo "</script>";
                          //echo $tdy;
                          $countP=0;
                          $query1="DESC `pb".date("l")."`";
                          $result1=mysqli_query($conn,$query1);
                          while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                          {
                            $countP++;
                          }

                          $queryt="SELECT * FROM `pb".date("l")."` WHERE `PDname`='$pdna'";
                          $resultt=mysqli_query($conn,$queryt);
                          $row=mysqli_fetch_array($resultt,MYSQLI_NUM);

                          echo "<table class='table'>";
                          echo "<tr>";
                          echo "<th> Shop No  </th>";
                          echo "<th> Shop Name  </th>";

                          if($tdy=="Sunday")
                          {
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }

                          if($tdy=="Monday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Tuesday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }

                          if($tdy=="Wednesday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Thursday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Friday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(thu)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Saturday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(thu)<br> (SLR)</th>";
                            echo "<th> Price(fri)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          
                          
                          echo "</tr>";

                          $query0="SELECT * FROM `pbSunday` WHERE `PDname`='$pdna'";
                          $result0=mysqli_query($conn,$query0);
                          $row0=mysqli_fetch_array($result0,MYSQLI_NUM);

                          $query1="SELECT * FROM `pbMonday` WHERE `PDname`='$pdna'";
                          $result1=mysqli_query($conn,$query1);
                          $row1=mysqli_fetch_array($result1,MYSQLI_NUM);

                          $query2="SELECT * FROM `pbTuesday` WHERE `PDname`='$pdna'";
                          $result2=mysqli_query($conn,$query2);
                          $row2=mysqli_fetch_array($result2,MYSQLI_NUM);

                          $query3="SELECT * FROM `pbWednesday` WHERE `PDname`='$pdna'";
                          $result3=mysqli_query($conn,$query3);
                          $row3=mysqli_fetch_array($result3,MYSQLI_NUM);

                          $query4="SELECT * FROM `pbThursday` WHERE `PDname`='$pdna'";
                          $result4=mysqli_query($conn,$query4);
                          $row4=mysqli_fetch_array($result4,MYSQLI_NUM);

                          $query5="SELECT * FROM `pbFriday` WHERE `PDname`='$pdna'";
                          $result5=mysqli_query($conn,$query5);
                          $row5=mysqli_fetch_array($result5,MYSQLI_NUM);

                          $query6="SELECT * FROM `pbSaturday` WHERE `PDname`='$pdna'";
                          $result6=mysqli_query($conn,$query6);
                          $row6=mysqli_fetch_array($result6,MYSQLI_NUM);

                          if(isset($_POST['btnsearch']))
                          {
                            $cx=2;
                         $ct=1;
                         $cvvv=0;
                         while($cvvv<=$val)
                         {
                          $cvvv++;
                         }
                         while($cx<$countP)
                         {
                            if($tdy=="Sunday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                              }
                               echo "</tr>";
                            }
                            if($tdy=="Monday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              
                              echo "</tr>";
                            }
                            if($tdy=="Tuesday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Wednesday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Thursday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Friday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0 || $row5[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";
                                    echo "<td>Rs.".$row5[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Saturday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0 || $row5[$cx]!=0 || $row6[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";
                                    echo "<td>Rs.".$row5[$cx]."</td>";
                                    echo "<td>Rs.".$row6[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            $ct++;
                            $cx++;
                         }
                          }
                         
                          echo "</table>";
                              ?>
                            </font>

                       </div>

                    </div>

                  </div>
                </div>
              </div>
                  <!--end div 3 farmer-->
                </div>


                    <?php

              }
              //*************************************************** end farmer//Retailer *************************************************************
              else if($_SESSION['user']=="Retailer")
                {
                  $arrDay=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
                    $val=0;
                    $v=0;
                    while($v<=6)
                    {
                      if($array[$v]=date("l"))
                      {
                       $val=$v;//count a no of the day
                      }
                      $v++;
                    }
                    ?>
                    <!-- row 1 retailer-->
                    
                      <!--row 2 retailer-->
                    <div class="row">
                      <!------------------------ div 2 RETAILER------------------------>

                  <div class="col-md-12">
                    <?php  $pdna="";
                      if(isset($_GET['pd']))
                        {
                          $pdna=$_GET['pd'];
                          
                        }
                    ?>
                  <div class="service-box"> 
                    <div class="service-content"><font color="black">
                      <form action="hp.php" method="POST">
                        <div style="float: right;">
                          <table>
                            <tr>
                              <td><input type="text" name="textsearch" ></td>
                              <td><input type="submit" name="btnsearch" value="Search"></td>
                            </tr>
                          </table>
                        </div>
                      </form>
                      <?php  
                          if(isset($_POST['btnsearch']))
                          {
                            $pdna=$_POST['textsearch'];
                          }
                      ?>

                      <br><br><br>
                      <h2 style="margin-top: -80px"><?php echo "  THIS WEEK ".strtoupper($pdna)." SELLING PRICE"; ?></h2>
                      <?php 
                          $tdy=(string)date("l");

                          //echo "<script>";
                          //echo "alert('".$tdy."');";
                          //echo "</script>";
                          //echo $tdy;
                          $countP=0;
                          $query1="DESC `ps".date("l")."`";
                          $result1=mysqli_query($conn,$query1);
                          while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                          {
                            $countP++;
                          }
                          $queryt="SELECT * FROM `ps".date("l")."` WHERE `PDname`='$pdna'";
                          $resultt=mysqli_query($conn,$queryt);
                          $row=mysqli_fetch_array($resultt,MYSQLI_NUM);

                          echo "<table class='table'>";
                          echo "<tr>";
                          echo "<th> Shop No  </th>";
                          echo "<th> Shop Name  </th>";

                          if($tdy=="Sunday")
                          {
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }

                          if($tdy=="Monday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Tuesday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }

                          if($tdy=="Wednesday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Thursday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Friday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(thu)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Saturday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(thu)<br> (SLR)</th>";
                            echo "<th> Price(fri)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          
                          
                          echo "</tr>";

                          $query0="SELECT * FROM `psSunday` WHERE `PDname`='$pdna'";
                          $result0=mysqli_query($conn,$query0);
                          $row0=mysqli_fetch_array($result0,MYSQLI_NUM);

                          $query1="SELECT * FROM `psMonday` WHERE `PDname`='$pdna'";
                          $result1=mysqli_query($conn,$query1);
                          $row1=mysqli_fetch_array($result1,MYSQLI_NUM);

                          $query2="SELECT * FROM `psTuesday` WHERE `PDname`='$pdna'";
                          $result2=mysqli_query($conn,$query2);
                          $row2=mysqli_fetch_array($result2,MYSQLI_NUM);

                          $query3="SELECT * FROM `psWednesday` WHERE `PDname`='$pdna'";
                          $result3=mysqli_query($conn,$query3);
                          $row3=mysqli_fetch_array($result3,MYSQLI_NUM);

                          $query4="SELECT * FROM `psThursday` WHERE `PDname`='$pdna'";
                          $result4=mysqli_query($conn,$query4);
                          $row4=mysqli_fetch_array($result4,MYSQLI_NUM);

                          $query5="SELECT * FROM `psFriday` WHERE `PDname`='$pdna'";
                          $result5=mysqli_query($conn,$query5);
                          $row5=mysqli_fetch_array($result5,MYSQLI_NUM);

                          $query6="SELECT * FROM `psSaturday` WHERE `PDname`='$pdna'";
                          $result6=mysqli_query($conn,$query6);
                          $row6=mysqli_fetch_array($result6,MYSQLI_NUM);

                          if(isset($_POST['btnsearch']))
                          {
                            $cx=2;
                            $ct=1;
                            $cvvv=0;
                         while($cvvv<=$val)
                         {
                          $cvvv++;
                         }
                         while($cx<$countP)
                         {
                            if($tdy=="Sunday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                              }
                               echo "</tr>";
                            }
                            if($tdy=="Monday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              
                              echo "</tr>";
                            }
                            if($tdy=="Tuesday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Wednesday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Thursday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Friday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0 || $row5[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";
                                    echo "<td>Rs.".$row5[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Saturday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0 || $row5[$cx]!=0 || $row6[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";
                                    echo "<td>Rs.".$row5[$cx]."</td>";
                                    echo "<td>Rs.".$row6[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            $ct++;
                            $cx++;
                         }
                          }
                         
                          echo "</table>";
                              ?>
                            </font>
                       </div>
                    </div>
                  </div>
                  <!--end div 2 retailer-->
                    </div>


                    <?php
                }
                else if($_SESSION['user']=="Seller")
                {
                    $arrDay=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
                    $val=0;
                    $v=0;
                    while($v<=6)
                    {
                      if($array[$v]=date("l"))
                      {
                        $val=$v;//count a no of the day
                      }
                      $v++;
                    }
                    ?>
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
                          
                          $query1="SELECT * FROM `pb".date("l")."`";
                          $result1=mysqli_query($conn,$query1);
            
                          echo "<table  class='table'>";
                          $i=1;
                          echo "<tr>";
                          echo "<th>Products</th>";
                          echo "<th>Price<br>1kg(SLR)</th>";
                          echo "<th>Action</th>";
                          echo "</tr>";
                          while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
                          {
                            echo "<tr>";
                            if($row1[$_SESSION['uid']]!=0)
                            {
                              echo "<td>".$row1['PDname']."</td>";
                              echo "<td>Rs.".$row1[$_SESSION['uid']]."</td>";
                              echo "<td><a href='change.php?pdct={$row1['PDname']}&act=buy'>change</a>|<a href='rmPD2.php?pdct={$row1['PDname']}&act=buy'>Remove</a></td>";
                           
                            }
                            echo "</tr>";
                            $i++;
                          }
                          ?>
                              
                          <?php
                          echo "</table>";
                          echo "<td><a href='addPD.php?pdct={$row1[$_SESSION['uid']]}&act=buy'><input type='subnit' value='Add New Product' class='btn btn-outline-primary button-big button-rouded'></a></td>";
                      ?>
                    </font>
                  </div>
                    </div>
                  </div>
                </div>


                <!---------------------------------2 nd div------------------------------>
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
                          
                          $query1="SELECT * FROM `ps".date("l")."`";
                          $result1=mysqli_query($conn,$query1);
            
                          echo "<table  class='table'>";
                          $i=1;
                          echo "<tr>";
                          echo "<th>Products</th>";
                          echo "<th>Price<br>1kg(SLR)</th>";
                          echo "<th>Action</th>";
                          echo "</tr>";
                          while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
                          {
                            echo "<tr>";
                            if($row1[$_SESSION['uid']]!=0)
                            {
                              echo "<td>".$row1['PDname']."</td>";
                              echo "<td>Rs.".$row1[$_SESSION['uid']]."</td>";
                              echo "<td><a href='change.php?pdct={$row1['PDname']}&act=sell'>change</a>|<a href='rmPD2.php?pdct={$row1['PDname']}&act=sell'>Remove</a></td>";
                           
                            }
                            echo "</tr>";
                            $i++;
                          }
                          ?>
                              
                          <?php
                          
                          echo "</table>";
                          echo "<td><a href='addPD.php?pdct={$row1[$_SESSION['uid']]}&act=sell'><input type='subnit' value='Add New Product' class='btn btn-outline-primary    button-big button-rouded'></a></td>";
                      ?>
                  </div>
                    
                    </div>
                  </font>
                  </div>
                </div>

                    </div>
                    <!--end row 1 seller//2 row eller-->

                    <div class="row">

                      <!----------------------------3 rd div----------------------------------->
              <div class="col-md-6">
                  <div class="service-box">
                    <div class="service-content">
                      <h2 >Today Avg Buying Price</h2><font color="black">
                      <?php  
                          if(isset($_GET['uid']))
                          {
                            $_SESSION['uid']=(int)$_GET['uid'];
                          }

                          $query="desc`pb".date("l")."`";
                          $result=mysqli_query($conn,$query);
                          $count=0;
                          while($row1=mysqli_fetch_array($result,MYSQLI_NUM))
                          {
                            $count++;
                          }
                          
                          $query1="SELECT * FROM `pb".date("l")."`";
                          $result1=mysqli_query($conn,$query1);
            
                          echo "<table  class='table'>";
                          $i=1;
                          echo "<tr>";
                          echo "<th>Products</th>";
                          echo "<th>Price<br>1kg(SLR)</th>";
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

                              $query2="SELECT * FROM `pb".date("l")."` WHERE `PDname`='$pdN'";
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
                            
                              echo "<td>Rs.".round($pce/$itrtion,2)."</td>";
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
             

               <!---------------------------------------4 th div--------------------------------------->

              <div class="col-md-6">
                  <div class="service-box">
                    <div class="service-content">
                      <h2 >Today Avg Selling Price</h2><font color="black">
                      <?php  
                          if(isset($_GET['uid']))
                          {
                            $_SESSION['uid']=(int)$_GET['uid'];
                          }

                          $query="desc`ps".date("l")."`";
                          $result=mysqli_query($conn,$query);
                          $count=0;
                          while($row1=mysqli_fetch_array($result,MYSQLI_NUM))
                          {
                            $count++;
                          }
                          
                          $query1="SELECT * FROM `ps".date("l")."`";
                          $result1=mysqli_query($conn,$query1);
            
                          echo "<table  class='table'>";
                          $i=1;
                          echo "<tr>";
                          echo "<th>Products</th>";
                          echo "<th>Price<br>1kg(SLR)</th>";
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

                              $query2="SELECT * FROM `ps".date("l")."` WHERE `PDname`='$pdN'";
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
                            
                              echo "<td>Rs.".round($pce/$itrtion,2) ."</td>";
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


              <!---end 4th div---->

                    </div>
                    <!--end row 2 seller//3 row eller-->
                  </div>
                </div>
              </div>
            </div>
            <div id="home" class="intro route bg-image" style="background-image: url(img/bg1.jpg);height: 1000px;">
            <div class="overlay-itro"></div>
            <div class="overlay-itro"></div>
            <div class="intro-content display-table" >
            <div class="container">

                    <div class="row" style="margin-top: 8%;">

                      <!------------------div 5 seller------------------------------>

                  <div class="col-md-12">
                    <?php  $pdna="";
                      if(isset($_GET['pd']))
                        {
                          $pdna=$_GET['pd'];
                          
                        }

                    ?>
                  <div class="service-box"> 
                    <div class="service-content"><font color="black">
                      <form action="hp.php" method="POST">
                        <div style="float: right;">
                          <table>
                            <tr>
                              <td><input type="text" name="textsearch" ></td>
                              <td><input type="submit" name="btnsearch" value="Search"></td>
                            </tr>
                          </table>
                        </div>
                      </form>
                      <?php  
                          if(isset($_POST['btnsearch']))
                          {
                            $pdna=$_POST['textsearch'];
                          }
                      ?>

                      <br><br><br><center>
                      <h2 style="margin-top: -80px"><?php echo "  THIS WEEK ".strtoupper($pdna)." BUYING PRICE"; ?></h2></center>
                      <?php 
                          $tdy=(string)date("l");

                          //echo "<script>";
                          //echo "alert('".$tdy."');";
                          //echo "</script>";
                          //echo $tdy;
                          $countP=0;
                          $query1="DESC `pb".date("l")."`";
                          $result1=mysqli_query($conn,$query1);
                          //$shNUarr=[];
                          while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                          {
                            //$shNUarr[$countP]=$row[$countP];
                            $countP++;
                          }

                          $queryt="SELECT * FROM `pb".date("l")."` WHERE `PDname`='$pdna'";
                          $resultt=mysqli_query($conn,$queryt);
                          $row=mysqli_fetch_array($resultt,MYSQLI_NUM);

                          echo "<table class='table'>";
                          echo "<tr>";
                          echo "<th> Shop No  </th>";
                          echo "<th> Shop Name  </th>";

                          if($tdy=="Sunday")
                          {
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }

                          if($tdy=="Monday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Tuesday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }

                          if($tdy=="Wednesday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Thursday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Friday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(thu)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          if($tdy=="Saturday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(thu)<br> (SLR)</th>";
                            echo "<th> Price(fri)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          
                          
                          echo "</tr>";

                          $query0="SELECT * FROM `pbSunday` WHERE `PDname`='$pdna'";
                          $result0=mysqli_query($conn,$query0);
                          $row0=mysqli_fetch_array($result0,MYSQLI_NUM);

                          $query1="SELECT * FROM `pbMonday` WHERE `PDname`='$pdna'";
                          $result1=mysqli_query($conn,$query1);
                          $row1=mysqli_fetch_array($result1,MYSQLI_NUM);

                          $query1D="DESC `pbmonday`";
                          $result1D=mysqli_query($conn,$query1D);
                          $row1D=mysqli_fetch_array($result1D,MYSQLI_NUM);
                          

                          $query2="SELECT * FROM `pbTuesday` WHERE `PDname`='$pdna'";
                          $result2=mysqli_query($conn,$query2);
                          $row2=mysqli_fetch_array($result2,MYSQLI_NUM);

                          $query3="SELECT * FROM `pbWednesday` WHERE `PDname`='$pdna'";
                          $result3=mysqli_query($conn,$query3);
                          $row3=mysqli_fetch_array($result3,MYSQLI_NUM);

                          $query4="SELECT * FROM `pbThursday` WHERE `PDname`='$pdna'";
                          $result4=mysqli_query($conn,$query4);
                          $row4=mysqli_fetch_array($result4,MYSQLI_NUM);

                          $query5="SELECT * FROM `pbFriday` WHERE `PDname`='$pdna'";
                          $result5=mysqli_query($conn,$query5);
                          $row5=mysqli_fetch_array($result5,MYSQLI_NUM);

                          $query6="SELECT * FROM `pbSaturday` WHERE `PDname`='$pdna'";
                          $result6=mysqli_query($conn,$query6);
                          $row6=mysqli_fetch_array($result6,MYSQLI_NUM);

                          if(isset($_POST['btnsearch']))
                          {
                            $cx=2;
                            $ct=1;
                            $cvvv=0;
                            while($cvvv<=$val)
                            {
                              $cvvv++;
                            }
                         while($cx<$countP)
                         {
                            if($tdy=="Sunday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                              }
                               echo "</tr>";
                            }
                            if($tdy=="Monday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              
                              echo "</tr>";
                            }
                            if($tdy=="Tuesday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Wednesday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Thursday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Friday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0 || $row5[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";
                                    echo "<td>Rs.".$row5[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Saturday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0 || $row5[$cx]!=0 || $row6[$cx]!=0)
                              {
                                $query1="DESC `pb".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";
                                    echo "<td>Rs.".$row5[$cx]."</td>";
                                    echo "<td>Rs.".$row6[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            $ct++;
                            $cx++;
                         }
                          }
                         
                          echo "</table>";
                              ?>


                              <?php  
                          if(isset($_POST['btnsearch']))
                          {
                            $pdna=$_POST['textsearch'];
                          }
                      ?>

                      <br><br><br><br><br><br>
                      <h2 style="margin-top: -80px"><?php echo "  THIS WEEK ".strtoupper($pdna)." SELLING PRICE"; ?></h2>
                      <?php 
                          $tdy=(string)date("l");

                          //echo "<script>";
                          //echo "alert('".$tdy."');";
                          //echo "</script>";
                          //echo $tdy;
                          $countP=0;
                          $query1="DESC `ps".date("l")."`";
                          $result1=mysqli_query($conn,$query1);
                          //$shNUarr=[];
                          while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                          {
                            //$shNUarr[$countP]=$row[$countP]
                            $countP++;

                          }

                          $queryt="SELECT * FROM `ps".date("l")."` WHERE `PDname`='$pdna'";
                          $resultt=mysqli_query($conn,$queryt);
                          $row=mysqli_fetch_array($resultt,MYSQLI_NUM);

                          echo "<table class='table'>";
                          echo "<tr>";
                          echo "<th> Shop No  </th>";
                          echo "<th> Shop Name  </th>";

                          if($tdy=="Sunday")
                          {
                            echo "<th> Price(today)<br> (SLR)</th>";
                            //echo "<th> Price(mon)<br> (SLR)</th>";
                            //echo "<th> Price(tue)<br> (SLR)</th>";
                            //echo "<th> Price(wed)<br> (SLR)</th>";
                            //echo "<th> Price(thu)<br> (SLR)</th>";
                            //echo "<th> Price(fri)<br> (SLR)</th>";
                            //echo "<th> Price(sat)<br> (SLR)</th>";
                          }

                          if($tdy=="Monday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                            //echo "<th> Price(tue)<br> (SLR)</th>";
                            //echo "<th> Price(wed)<br> (SLR)</th>";
                            //echo "<th> Price(thu)<br> (SLR)</th>";
                            //echo "<th> Price(fri)<br> (SLR)</th>";
                            //echo "<th> Price(sat)<br> (SLR)</th>";
                          }
                          if($tdy=="Tuesday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                            //echo "<th> Price(wed)<br> (SLR)</th>";
                            //echo "<th> Price(thu)<br> (SLR)</th>";
                            //echo "<th> Price(fri)<br> (SLR)</th>";
                            //echo "<th> Price(sat)<br> (SLR)</th>";
                          }

                          if($tdy=="Wednesday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                            //echo "<th> Price(thu)<br> (SLR)</th>";
                            //echo "<th> Price(fri)<br> (SLR)</th>";
                            //echo "<th> Price(sat)<br> (SLR)</th>";
                          }
                          if($tdy=="Thursday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                            //echo "<th> Price(fri)<br> (SLR)</th>";
                            //echo "<th> Price(sat)<br> (SLR)</th>";
                          }
                          if($tdy=="Friday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(thu)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                            //echo "<th> Price(sat)<br> (SLR)</th>";
                          }
                          if($tdy=="Saturday")
                          {
                            echo "<th> Price(sun)<br> (SLR)</th>";
                            echo "<th> Price(mon)<br> (SLR)</th>";
                            echo "<th> Price(tue)<br> (SLR)</th>";
                            echo "<th> Price(wed)<br> (SLR)</th>";
                            echo "<th> Price(thu)<br> (SLR)</th>";
                            echo "<th> Price(fri)<br> (SLR)</th>";
                            echo "<th> Price(today)<br> (SLR)</th>";
                          }
                          
                          
                          echo "</tr>";

                          $query0="SELECT * FROM `psSunday` WHERE `PDname`='$pdna'";
                          $result0=mysqli_query($conn,$query0);
                          $row0=mysqli_fetch_array($result0,MYSQLI_NUM);

                          $query1="SELECT * FROM `psMonday` WHERE `PDname`='$pdna'";
                          $result1=mysqli_query($conn,$query1);
                          $row1=mysqli_fetch_array($result1,MYSQLI_NUM);

                          $query2="SELECT * FROM `psTuesday` WHERE `PDname`='$pdna'";
                          $result2=mysqli_query($conn,$query2);
                          $row2=mysqli_fetch_array($result2,MYSQLI_NUM);

                          $query3="SELECT * FROM `psWednesday` WHERE `PDname`='$pdna'";
                          $result3=mysqli_query($conn,$query3);
                          $row3=mysqli_fetch_array($result3,MYSQLI_NUM);

                          $query4="SELECT * FROM `psThursday` WHERE `PDname`='$pdna'";
                          $result4=mysqli_query($conn,$query4);
                          $row4=mysqli_fetch_array($result4,MYSQLI_NUM);

                          $query5="SELECT * FROM `psFriday` WHERE `PDname`='$pdna'";
                          $result5=mysqli_query($conn,$query5);
                          $row5=mysqli_fetch_array($result5,MYSQLI_NUM);

                          $query6="SELECT * FROM `psSaturday` WHERE `PDname`='$pdna'";
                          $result6=mysqli_query($conn,$query6);
                          $row6=mysqli_fetch_array($result6,MYSQLI_NUM);

                          //$gtnm=$_SESSION['UF'];
                          //$queryName="SELECT * FROM `user` WHERE `UID`='$gtnm'";
                          //$resultName=mysqli_query($conn,$queryName);
                          //$rowName=mysqli_fetch_array($resultName,MYSQLI_NUM);


                          if(isset($_POST['btnsearch']))
                          {
                            $cx=2;
                         $ct=1;
                         $cvvv=0;
                         while($cvvv<=$val)
                         {
                          $cvvv++;
                         }
                         while($cx<$countP)
                         {
                            if($tdy=="Sunday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                              }
                               echo "</tr>";
                            }
                            if($tdy=="Monday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              
                              echo "</tr>";
                            }
                            if($tdy=="Tuesday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Wednesday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Thursday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Friday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0 || $row5[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";
                                    echo "<td>Rs.".$row5[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            if($tdy=="Saturday")
                            {
                              $row_n=0;
                              echo "<tr>";
                              if($row0[$cx]!=0 || $row1[$cx]!=0 || $row2[$cx]!=0 || $row3[$cx]!=0 || $row4[$cx]!=0 || $row5[$cx]!=0 || $row6[$cx]!=0)
                              {
                                $query1="DESC `ps".date("l")."`";
                                $result1=mysqli_query($conn,$query1);
                                
                                while($row=mysqli_fetch_array($result1,MYSQLI_NUM))
                                {
                                  
                                  if($row_n==$cx)
                                  {
                                    $uid=$row[0];
                                    $query1="SELECT * FROM `user` WHERE `UID`='$uid' limit 1";
                                    $result1=mysqli_query($conn,$query1);
                                    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                    echo "<td>".$row['SN']."</td>";
                                    echo "<td>".$row['SNM']."</td>";
                                    echo "<td>Rs.".$row0[$cx]."</td>";
                                    echo "<td>Rs.".$row1[$cx]."</td>";
                                    echo "<td>Rs.".$row2[$cx]."</td>";
                                    echo "<td>Rs.".$row3[$cx]."</td>";
                                    echo "<td>Rs.".$row4[$cx]."</td>";
                                    echo "<td>Rs.".$row5[$cx]."</td>";
                                    echo "<td>Rs.".$row6[$cx]."</td>";

                                  }
                                  $row_n++;
                                }
                                
                              }
                              echo "</tr>";
                            }
                            $ct++;
                            $cx++;
                         }
                          }
                         
                          echo "</table>";
                              ?>
                            </font>
                       </div>
                    </div>
                  </div>
                  <!--end div 5 seller-->
                    </div>
                    <?php
                }
      
                  ?>
          </div>
        </div>
      </div>
    </div>

              
<?php include 'footer.php'; ?>
  

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
