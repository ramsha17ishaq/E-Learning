<?php


    if($_SERVER['REQUEST_METHOD']=="POST")
{
        $u = $_POST['t1'];
        $p = $_POST['t2'];
        

        $n = $_POST['t4'];
        $g = $_POST['t5'];
        $c = $_POST['t6'];
        $a = $_POST['t7'];
       
        $con = mysqli_connect("localhost","root","");
        mysqli_select_db("elearning",$con);

        $q = "INSERT INTO reg (uname,pass,name,gender,course,address) VALUES ('$u','$p','$n','$g','$c','$a')";
        $r = mysqli_query($q);
        if($r > 0)
        {
           header("location:reg.php?msg=Registration Successfully");
       }
        else
        {
            echo "<script>alert('Could not register')</script>";
        }
    }
    else
    {
        echo "<script>alert('Plz check a check box')</script>";
    }


?>
