<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
{
    session_start();
    $c = $_POST['ch'];
    $u = $_POST['t1'];
    $p = $_POST['t2'];
        
    include("config.php");

    if($c == 0)
    {
        header("location:login.php?msg=Please select any Login Type");
          
    }
    else if($c == 1)
    {
        $q = "SELECT * FROM reg WHERE uname='$u' and pass='$p'";
        $r = mysql_query($q);
        
        $c = mysql_num_rows($r);
        if($c > 0)
        {
            if($row = mysql_fetch_array($r))
            {
                $course = $row['course'];
            }
            $_SESSION['stuSession'] = $u;
            $_SESSION['stuCourse'] = $course;
            header("Location: student.php");
        }
        else
        {
           header("location:login.php?msg=error");
 
        }
    }
    else if($c == 2)
    {
        $q = "SELECT * FROM faculty WHERE fid='$u' and pass='$p'";
        $r = mysql_query($q);
        
        $c = mysql_num_rows($r);
        if($c > 0)
        {
            if($row = mysql_fetch_array($r))
            {
                $course = $row['course'];
            }
            $_SESSION['facSession'] = $u;
            $_SESSION['facCourse'] = $course;
            header("Location: faculty.php");
        }
        else
        {
           header("location:login.php?msg=error");
 
        }
    }
    else if($c == 3)
    
    {
        $q = "SELECT * FROM admin WHERE uname='$u' and pass='$p'";
        $r = mysql_query($q);
        
        $c = mysql_num_rows($r);
        if($c > 0)
        {
            header("Location: admin.php");
        }
        else
        {
           header("location:login.php?msg=error");
 
        }
    }
}

?>