<?php 
include( 'config.php' );
?> 
<?php
session_start();
$cid=$_GET['cid'];
$m1=$_GET['m1'];
$psychoid=$_SESSION['psychoid'];
$t=$_SESSION['psychotest'];
$f=$_GET['f'];
if($_SESSION['psychotest'] == "MBTI")
    {
        $type = "https://35.154.101.124/Personality_Assessment/start.php";
    }
    else
    {
        $type="https://35.154.101.124/start/";
    }
$getname='name'.$t;
$attempt=mysqli_query($con,"SELECT count(*) FROM `mbti_result` WHERE ID101=$psychoid and email='$m1'");
$data_attempt = mysqli_fetch_array($attempt);
if ( $_SESSION[$getname] == 0 ){   //If already attempted question
        echo '<script type="text/javascript">';
        echo 'alert("Already attempted!");';
        echo 'window.location.href = "https://35.154.101.124/ct/Custom_Test/test.php";';
        echo '</script>';
    } 
    else {   //if not attempted
        $_SESSION[$getname] = 0;
        if($data_attempt[0]<1){
        header("location:$type?cid=$cid&id=$psychoid&m1=$m1&f=1");
        }
       else{
         echo '<script type="text/javascript">';
        echo 'alert("Overall attempts over");';
        echo 'window.location.href = "https://35.154.101.124/ct/Custom_Test/test.php";';
        echo '</script>';
        }
    }

?>