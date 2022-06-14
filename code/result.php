<?php
    session_start();
    header('location:test.php');
    $qid= $_SESSION['qid'];
    $cid= $_SESSION['cid'];
    $email=$_SESSION['email'];
    $myPhpVar= $_COOKIE['myJavascriptVar']; //to store the count variable
    if (!isset($_SESSION['test1']) || empty($_SESSION['test1']))
  {
    $_SESSION['test1']=$myPhpVar;
  }
  else{
    $_SESSION['test2']=$myPhpVar;
  }
    $_SESSION['count']+=$myPhpVar;
    $con->close();
 ?>