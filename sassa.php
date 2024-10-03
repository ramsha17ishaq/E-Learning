
<?php


 session_start();
 $u = $_SESSION['stuSession'];
 $c = $_SESSION['stuCourse'];
 if(!isset($u))
 {
    header("location:index.php");
 }


    if($_SERVER['REQUEST_METHOD']=='POST')
    {

    $o = $_POST['t1'];
    $p = $_POST['t2'];
    $cp = $_POST['t3'];

    include("config.php");

    $q = "select * from faculty where fid='$u'";
    $r = mysql_query($q);

    $c = mysql_num_rows($r);
    if($c>0)
    {
        if($row = mysql_fetch_array($r))
        {
            $a = $row['pass'];
        }
        
        if($a == $o)
        {
            $qq = "update faculty set pass='$p' where fid='$u'";

            $rr = mysql_query($qq);
            
            if($rr > 0)
            {
               header("location:change.php?msg=Password updated successfully");
              }
            else
            {
                header("location:change.php?msg=Password Could not be update");
            }
        }
        else
        { header("location:change.php?msg=Old Password Doesnt Matched");
          }
    }
    else
    {
        echo "No Data to Display";
    }

    }

    ?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>E-Learning</title>
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/headereffects/css/component.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/headereffects/css/normalize.css" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"
        media="screen" />
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/magic_space.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- END CSS TEMPLATE -->
    <script type="text/javascript" src="assets/plugins/jquery-1.8.3.min.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="assets/plugins/slider-plugin/js/slider1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/slider-plugin/js/slider2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/plugins/slider-plugin/css/settings.css"
        media="screen" />
        <style type="text/css">
            h3{
                Font-family:Century Gothic;
            }
        </style>
</head>
<!-- END HEAD -->
<body  style="background-color: rgba(140,236,146);color: black;">
    <div class="main-wrapper">
        <header id="ha-header" class="ha-header ha-header-hide ">
            <div class="ha-header-perspective">
                <div class="ha-header-front navbar navbar-default">
                    <div class="compressed">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                type="button">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                            <a href="student.php" class="navbar-brand compressed">E - Learning
                               </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                 </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </header>
        <div class="section ha-waypoint" data-animate-down="ha-header-hide" data-animate-up="ha-header-hide">
            <div role="navigation" class="navbar navbar-transparent navbar-top">
                <div class="container">
                    <div class="compressed">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                type="button">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                            <a href="student.php" class="navbar-brand"><h3  style="font-family: Wide Latin;color: white"> E - Learning </h3>
                               </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="student.php">Student Home</a></li>
                                 <li><a href="slecture.php">lecture </a></li>
                                <li><a href="sassa.php">Assignment</a></li>
                                 <li><a href="schange.php">Change Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                

                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
 <div class="section dark-grey" style="margin-top: 100px;">
<div class="row">
    <div class="col-lg-12"  style="height: 550px; width: 1400px; background-image: url(aaron-burden-60068-unsplash.jpg);background-size: 1400px 600px;border-radius: 20px;"><br><br><br><br>

<div style="width:960px;height:300px;" style="background-color: rgba(220,220,220,0.5);">
        
    <table style="width:760px;margin-left: 300px" class="table table-striped">

    <tr>
        <td style="width:130px;">&nbsp;</td>
        <td style="width:700px;">&nbsp;</td>
        <td style="width:130px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:130px;">&nbsp;</td>
        <td style="width:700px;">

        <div id="me">

<fieldset style="width:700px;background-color: rgba(220,220,220,0.5);" >
        <h2 style="color: white;border: 1px solid white;text-align: center;">  View Assignment Panel  </h2>

    <form action="" method="post" enctype="multipart/form-data">

    <table style="width:700px;">

    <tr>

        <td style="width:100px;">&nbsp;</td>
                        <td style="width:500px;text-align:left;">&nbsp;</td>
        <td style="width:100px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:100px;">&nbsp;</td>
                        <td style="width:500px;text-align:left;">

        <?php

        include("config.php");

        $qq = "select * from assign where course='$c'";
        $rr = mysql_query($qq);
        $count = mysql_num_rows($rr);
        $co = 1;
        if($count > 0)
        {
            echo "<center><table border='1' class='table table-striped' style='width:500px;text-align:center;'>";
            echo "<tr>";
            echo "<th> S.No </th>";
            echo "<th> Title </th>";
            echo "<th> Submission </th>";
            echo "<th> Upload </th>";
            echo "</tr>";
            while($rows = mysql_fetch_array($rr))
            {
                echo "<tr>";
                echo "<td> ".$co." </td>";
                echo "<td> ".$rows['title']." </td>";
                echo "<td> ".$rows['sdate']." </td>";
                echo "<td> <a href='../faculty/".$rows['file']."' target='_blank'> View </a> </td>";
                echo "</tr>";
                $co++;
            }
            echo "</table></center>";
        }
        else
        {

        }

        ?>

        </td>
        <td style="width:100px;">&nbsp;</td>
    </tr>
    <tr>
                    <td style="width:100px;text-align:center;">&nbsp;</td>
                    <td style="width:500px;text-align:left;">&nbsp;</td>
        <td style="width:100px;">&nbsp;</td>
    </tr>

    </table>

    </form>

        </fieldset>

    <?php

    if(isset($_POST['s']))
    {
        $t = $_POST['t'];
        move_uploaded_file($_FILES['f']['tmp_name'],"assign/".$_FILES['f']['name']);
        $path = "upload/".$_FILES['f']['name'];

        include("config.php");
$d = date("d-M-Y");
$ss = mktime(0,0,0,date("m"),date("d")+15,date("y"));
$n = date("d-M-Y",$ss);

$q = "INSERT INTO assign (fid,course,idate,sdate,title,file) VALUES ('$u','$c','$d','$n','$t','$path')";

        $r = mysql_query($q) or die(mysql_error());

        if($r > 0)
        {
            header("location:sassa.php?msg=Assignment Successfully Added");
                }

    }
    ?>
        </div>

        </td>
        <td style="width:130px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:130px;">&nbsp;</td>
        <td style="width:500px;background-color: white"> <b>Submit Answer here : </b><a href="submit.php"> assignment answer </a> </td>
        <td style="width:130px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:130px;">&nbsp;</td>
        <td style="width:700px;">&nbsp;</td>
        <td style="width:130px;">&nbsp;</td>
    </tr>

    </table>
                            
        </div>
</div> 

<div class="col-lg-3" >
  
</div>







</div>







<div class="col-lg-3" ></div>

</div>


                     </div>
</div></div></div>


            
            <!--BEGIN SLIDER -->
           
       
    <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="assets/plugins/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/plugins/parrallax/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-appear/jquery.appear.js"></script>
    <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/core.js"></script>
</body>
</html>
