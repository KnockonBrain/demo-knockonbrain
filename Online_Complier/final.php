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
    $qid1=$_SESSION['qid1'];
    $qid2=$_SESSION['qid2'];
    $source1=$_SESSION['source1'];
    $source2=$_SESSION['source2'];
    $test1=$_SESSION['test1'];
    $test2=$_SESSION['test2'];
    $lg1=$_SESSION['lg1'];
    $lg2=$_SESSION['lg2'];
    $sum=$myPhpVar/6;
    $sum=$sum*100;
    $testcase1=$test1/3;
    $testcase1=$testcase1*100;
    $testcase2=$test2/3;
    $testcase2=$testcase2*100;
    //$sql = "INSERT INTO result (cid,email,res_per,start_time,end_time,video_link1,video_link2,lg1,lg2,lg) VALUES ('$cid','$email',$sum,'$start_time','$end_time','https://35.154.101.124/php/test/upload/$fn1','https://35.154.101.124/php/test/upload/$fn2','$lg1','$lg2','$main_lang')";
   // $sql = "INSERT INTO code_result (cid,email,res_per,start_time,end_time,video_link1,video_link2,lg1,lg2,lg,qid1,qid2,code1,code2,test1,test2) VALUES ('$cid','$email',$sum,'$start_time','$end_time','https://www.knockonbrain.com/oc/upload/$fn1','https://www.knockonbrain.com/oc/upload/$fn2','$lg1','$lg2','$main_lang',33,23,'$source1','$source2','$testcase1','$testcase2')";
   $sql="INSERT INTO `code_result` (`rid`, `cid`, `can_name`, `email`, `res_per`, `start_time`, `end_time`, `video_link1`, `video_link2`, `lg1`, `lg2`, `lg`, `AI_ACCURACY`, `id`, `qid1`, `qid2`, `code1`, `code2`, `test1`, `test2`) VALUES (NULL, '56', '', 'n@', '5', '2022-05-03 19:59:03', '2022-05-23 19:59:03', '.in', '.in', 'c', 'c', 'c', 'Report Not Generated', '3889', '1', '1', 'h', 'h', '1', '1')";
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