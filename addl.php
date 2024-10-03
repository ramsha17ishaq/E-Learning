<?php
 session_start();
 $u = $_SESSION['facSession'];
 $c = $_SESSION['facCourse'];
 $cc = $_SESSION['facCourse'];
 if(!isset($u))
 {
    header("location:index.php");
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
            body{
                color: white;
            }
            h2{
                color: white;
            }
        </style>
</head>
<!-- END HEAD -->
<body  style="background-color: rgba(140,236,146);">
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
	<div class="col-lg-12"  style="height: 550px; width: 1400px; background-image: url(aaron-burden-60068-unsplash.jpg);background-size: 1400px 600px;border-radius: 20px;">
     
<script>

function a(str)
{
    if(window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest(); 
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function ()
    {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("me").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","chkLecture.php?id="+str,true);
    xmlhttp.send();
}
</script>


        <div style="width:960px;height:400px;">
        
    <table style="width:960px;">

    <tr>
        <td style="width:130px;">&nbsp;</td>
        <td style="width:700px;">&nbsp;</td>
        <td style="width:130px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:130px;">&nbsp;</td>
        <td style="width:700px;">

        <fieldset style="width:700px;">
        <legend> <h2 > Lecture Panel </h2> </legend>

        <input type="radio" name="r" value="0" onchange="a(this.value)"> Add Lecture <br>
        <input type="radio" name="r" value="1" onchange="a(this.value)"> View Lecture <br>
        </fieldset>

        </td>
        <td style="width:130px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:130px;">&nbsp;</td>
        <td style="width:700px;">

        <div id="me">

<fieldset style="width:700px;">
        <legend> <h2>  Add Lecture Panel  </h2> </legend>

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
            &nbsp;Title For Lecture
                    </td>
        <td style="width:100px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:100px;">&nbsp;</td>
                        <td style="width:500px;text-align:left;">
            <input type="text" name="t" style="width:500px;" class="style1">
                     </td>
        <td style="width:100px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:100px;">&nbsp;</td>
                        <td style="width:500px;text-align:left;">  </td>
        <td style="width:100px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:100px;">&nbsp;</td>
                        <td style="width:500px;text-align:left;">
    &nbsp;Upload a Lecture File &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="file" name="f" class="style1"> 
                     </td>
        <td style="width:100px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:100px;">&nbsp;</td>
                        <td style="width:500px;text-align:left;">
            &nbsp;
                     </td>
        <td style="width:100px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:100px;">&nbsp;</td>
                        <td style="width:500px;text-align:left;">
                        &nbsp;<input style="width:120px;" type="submit" value="SUBMIT" name="s" class="style2">
                                   &nbsp;<input style="width:120px;" type="reset" value="RESET" name="r" class="style2">
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
        move_uploaded_file($_FILES['f']['tmp_name'],"upload/".$_FILES['f']['name']);
        $path = "upload/".$_FILES['f']['name'];

        include("config.php");

        $q = "INSERT INTO lecture (fid,course,ldate,file,title) VALUES ('$u','$c',curdate(),'$path','$t')";

        $r = mysql_query($q) or die(mysql_error());

        if($r > 0)
        {
            echo "<script>alert('Lecture Successfully Added');</script>";
        }
        else{
          echo "<script>alert('errrrrrrooorrrr');</script>";
  
    }

    }
    ?>
        </div>

        </td>
        <td style="width:130px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:130px;">&nbsp;</td>
        <td style="width:700px;">&nbsp;</td>
        <td style="width:130px;">&nbsp;</td>
    </tr>

    </table>
                            
        </div>








    </div><div class="col-lg-3" ></div>

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
