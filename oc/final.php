<?php include('config.php') ?>
<?php
    session_start();
    header("Cache-Control: private, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    date_default_timezone_set('Asia/Kolkata'); 
    $end_time=date("Y-m-d H:i:s"); 
    $start_time=$_SESSION['start_time'];
    $cid= $_SESSION['cid'];
    $email=$_SESSION['email'];
    $fn1=$_SESSION['fn1'];
    $fn2=$_SESSION['fn2'];
    $main_lang=$_SESSION['main-lang'];
    $myPhpVar= $_SESSION['count'];
    $lg1=$_SESSION['lg1'];
    $lg2=$_SESSION['lg2'];
    $sum=$myPhpVar/6;
    $sum=$sum*100;
    //$sql = "INSERT INTO result (cid,email,res_per,start_time,end_time,video_link1,video_link2,lg1,lg2,lg) VALUES ('$cid','$email',$sum,'$start_time','$end_time','https://35.154.101.124/php/test/upload/$fn1','https://35.154.101.124/php/test/upload/$fn2','$lg1','$lg2','$main_lang')";
    $sql = "INSERT INTO code_result (cid,email,res_per,start_time,end_time,video_link1,video_link2,lg1,lg2,lg) VALUES ('$cid','$email',$sum,'$start_time','$end_time','https://test.avianglobes.com/Online%20Complier/upload/$fn1','https://test.avianglobes.com/Online%20Complier/upload/$fn2','$lg1','$lg2','$main_lang')";
    if ($con->query($sql) === TRUE) {
  //      echo "New record created successfully";
    }
   // else
   //  echo "hi";
// destroy the session
session_destroy();
$con->close();
?>
<!DOCTYPE html>
<!-- code by webdevtrick ( https://webdevtrick.com) -->
<html>

<head>
  <meta charset="UTF-8">
  <title>Coding Test</title>
      <link rel="stylesheet" href="final.css">
      <script>
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
      </script>
</head>

<body>

  <h1 class="reveal">Thank You For Your Time.</h1>
</body>

</html>