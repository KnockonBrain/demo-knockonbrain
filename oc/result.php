<?php
    session_start();
    header('location:test.php');
    $qid= $_SESSION['qid'];
    $cid= $_SESSION['cid'];
    $email=$_SESSION['email'];
    $myPhpVar= $_COOKIE['myJavascriptVar']; //to store the count variable
    $_SESSION['count']+=$myPhpVar;
    $con->close();
 ?>