
<?php


 session_start();
 $u = $_SESSION['facSession'];
 $c = $_SESSION['facCourse'];
 $cc = $_SESSION['facCourse'];
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
                            <a href="Faculty.php" class="navbar-brand compressed">E - Learning
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
                            <a href="Faculty.php" class="navbar-brand"><h3  style="font-family: Wide Latin;color: white"> E - Learning </h3>
                               </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="Faculty.php">Faculty Home</a></li>
                                 <li><a href="addl.php">Add lecture </a></li>
                                <li><a href="assa.php">Add Assignment</a></li>
                                 <li><a href="change.php">Change Password</a></li>
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
<div class="col-lg-3" >
   
</div>
<div class="col-lg-6" style="background-color: rgba(220,220,220,0.5); ">
    <h3 style="color: black">Change Password</h3>
    <form action="" method="post" >
     <h4 style="color: black">Enter Old Password</h4>
   
    <input type="text" name="t1" class="form-control" >
     <h4 style="color: black">Enter New Password</h4>
   
     <input type="text" name="t2" class="form-control">
      <h4 style="color: black">Re-Enter Password </h4>
   
      <input type="text" name="t3" class="form-control"><br>
       <input type="submit" name="" class="form-control btn btn-success" ><br><br>
</form>
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
