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
                color: white;
        	}
            th{
                text-align: center;
            }
        </style>
</head>
<!-- END HEAD -->
<body  style="background-image: url(sharon-mccutcheon-528615-unsplash.jpg);background-size: cover; color: black;">
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
                            <a href="admin.php" class="navbar-brand compressed">E - Learning
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
                            <a href="admin.php" class="navbar-brand"><h3  style="font-family: Wide Latin;color: white"> E - Learning </h3>
                               </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="admin.php">Admin Home</a></li>
                                 <li><a href="addcourse.php">Add Course </a></li>
                                <li><a href="addfaculty.php">Add Faculty</a></li>
                                 <li><a href="listofcourse.php">List Of Course</a></li>
                                  <li><a href="f&s.php">List Of Faculty & Students</a></li>
                         		<li><a href="logout.php">Logout</a></li>
                         		

                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <div class="row">

    <div class="col-lg-1" style="margin-top: 150px;text-align: center;"></div>
    <div class="col-lg-5" style="margin-top: 150px;border-radius: 15px; text-align: center;background-color:rgb(200,200,0,0.6)">
<form action="" method="POST" >
<br><h3 style="background-color: rgba(200,100,100,0.3);" >List Of faculty</h3><br>
<table class="table table-striped table-responsive">
    <tr><th>First Name</th><th>Last Name</th><th>Course</th><th>Contact no.</th></tr>
   
            <?php

    

    include("config.php");

    $q = "select * from faculty";

     $r = mysql_query($q);
        
        $c = mysql_num_rows($r);
        if($c > 0)
        {
         while($row = mysql_fetch_array($r))
            {
                $cid = $row['fname'];
                $cname = $row['lname'];
                $duration = $row['course'];
                 $duration1 = $row['contact'];
                ?>
        <tr><td><?php echo "$cid"; ?></td>
            <td><?php echo "$cname"; ?></td>
            <td><?php echo "$duration"; ?></td>
            <td><?php echo "$duration1"; ?></td>
               </tr>
  
</form>
<?php 

}
}
?>
</table>
    </div>
   

    <div class="col-lg-1" style="margin-top: 150px;text-align: center;"></div>
  <div class="col-lg-4" style="margin-top: 150px;border-radius: 15px; text-align: center;background-color:rgb(200,200,0,0.6)">
<form action="" method="POST" >
<br><h3 style="background-color: rgba(200,100,100,0.3);" >List Of Students</h3><br>
<table class="table table-striped table-responsive">
    <tr><th>Student Name</th><th>Gender</th><th>Course </th><th>Address</th></tr>
   
            <?php

    

    include("config.php");

    $q = "select * from reg";

     $r = mysql_query($q);
        
        $c = mysql_num_rows($r);
        if($c > 0)
        {
         while($row = mysql_fetch_array($r))
            {
                $sid = $row['name'];
                $sname = $row['gender'];
                $course = $row['course'];
                $addr = $row['address'];
               
                ?>
        <tr><td><?php echo "$sid"; ?></td><td><?php echo "$sname"; ?></td><td><?php echo "$course"; ?></td>
            <td><?php echo "$addr"; ?></td></tr>
  
</form>
<?php 

}
}
?>
</table>
    </div>
	
</div>


                     </div>
</div>

<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {

    $id = $_POST['t1'];

    if($id=="")
    include("config.php");

    $q = "delete from course where cid='$id'";

    $r = mysql_query($q) or die(mysql_error());

    if($r > 0)
    {
       header("location:listofcourse.php?msg=Course Delete Successfully");  
        }
        else{

            header("location:listofcourse.php?msg=Course Cannot Deleted ")  ;
      
        }

    }
    ?>
            
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
