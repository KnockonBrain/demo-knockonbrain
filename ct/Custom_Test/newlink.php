<?php
session_start();
require 'config.php';
$cid=$_GET['cid'];
$m1=$_GET['m1'];
$t=$_GET['tid'];
$m=$_GET['mcqid'];
$f=$_GET['f'];
$getname='name'.$t;
$attempt=mysqli_query($con,"SELECT count(*) FROM `results` WHERE id=$m and Email='$m1'");
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
        header("location:https://35.154.101.124/php/test/index.php?cid=$cid&id=$m&tid=$t&m1=$m1&f=1");
        }else{
             echo '<script type="text/javascript">';
        echo 'alert("Overall attempts over");';
        echo 'window.location.href = "https://35.154.101.124/ct/Custom_Test/test.php";';
        echo '</script>';
        }
    }

?>