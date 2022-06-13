<?php
    session_start();
    $cid=$_SESSION['ID'];
   $canid=$_GET['canid'];
   $dbhost = 'localhost';
    $dbname = "giitsolu_testphp";
    $dbusername = "giitsolu_testphp";
    $dbpassword = "A!i-E_MjibT{";
    
    $con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
                
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
?>
<?php
$rid=$_GET['rid'];
$cquery = mysqli_query($con,"SELECT * FROM `code_result` WHERE rid='$rid'");
$data = mysqli_fetch_array($cquery);
$qid1= $data['qid1'];
$qid2=$data['qid2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Answer Sheet</title>
    <link rel="stylesheet" type="text/css" href="style_Report.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        crossorigin="anonymous">
	<script src="pdfdownloader_Report.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="bower_components/sweetalert2/dist/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
   <style>
       *{
           margin-top:10px;
       }
       table{
           width: 100%;
           table-layout: fixed;
           margin: 5px;
       }
       td{
           width: 50%;
           margin-bottom:10px;
       }
      @media (max-width: 600px){
           pre{
               width: 96%; 
               overflow: scroll;
           }
           td{
            display: contents !important;
            margin-bottom:0px;
            }
            
      }
   </style>
</head>

<body>
   
<div id="report">
	<table>
		<tr>
			<td><img src="logo1.png">
			</td>
			<td id="heading">
				<b>Coding Answer Sheet</b>
			</td>
		</tr>
	</table>
<hr class="solid">
<b>DETAILS</b>
<br>
<table>
	<tr>
		<td style="width:50%">
			<b>Score: </b>
		        <?php
		          $qscore = mysqli_query($con,"SELECT res_per FROM code_result WHERE rid=$rid");
                  $score = mysqli_fetch_array($qscore);
              echo $score[0];
		        ?>
		        <br>
			<b>Time Taken:</b>
			<?php
			    $duration= mysqli_query($con,"SELECT * FROM code_result WHERE rid=$rid");
                $data = mysqli_fetch_array($duration);
                $start_time=$data['start_time'];
                $end_time=$data['end_time'];
                $t1  = strtotime($start_time);
                $t2 = strtotime($end_time);
                $difference = $t2 - $t1;
                 if($difference / 3600 > 0){
                    $hour = $difference / 3600;
                    $hour = (int)$hour;
                    $difference = $difference - ($hour * 3600);
                }else{
                     $hour = "00";
                }
                if($difference / 60 > 0){
                      $min = $difference / 60;
                      $min = (int)$min;
                      $difference = $difference - ($min * 60);
                }else{
                      $min = "00";
                }
               
                echo $min." Minutes ".$difference." Seconds";
			?>
			<br><br>
		</td>
		<td style="display: inline; float: right;">
			<b style="color: dodgerblue;">Language Used: </b>
			<?php
                $lg= mysqli_query($con,"SELECT lg FROM code_result WHERE rid=$rid");
                $lgn = mysqli_fetch_array($lg);
                echo $lgn[0];
            ?>
		</td>
	</tr>
	
</table>
<hr class="solid">
<b>Problem Statement 1 :</b><br>
<td style="width: 50%; word-wrap: break-word;">
<?php
	 $qd1= mysqli_query($con,"SELECT qdesc FROM code_question WHERE qid=$qid1");
     $qdg1 = mysqli_fetch_array($qd1);
     echo $qdg1[0];	    
?>
</td>
<table>
<tr>
<td>
<b>Submitted Code :</b>
<pre style="background: #ebebed; ">
<?php
	 $sd1= mysqli_query($con,"SELECT code1 FROM code_result WHERE rid=$rid");
     $sdg1 = mysqli_fetch_array($sd1);
     echo $sdg1[0];	
?>
</pre>
</td>
<td style="float: right;">
<b style="color: dodgerblue;">Testcases Passed:</b>
<?php
    $test_case1= mysqli_query($con,"SELECT test1 FROM code_result WHERE rid=$rid");
    $tc1 = mysqli_fetch_array($test_case1);
    echo $tc1[0];
?> <br>
<b style="color: dodgerblue;">Status:</b>
<?php
     $test_case1= mysqli_query($con,"SELECT test1 FROM code_result WHERE rid=$rid");
    $tc1 = mysqli_fetch_array($test_case1);
    $tcp1= $tc1[0];
    if($tcp1=="100"){
        echo "All Test Cases Passed";
    }
    else if($tcp1<"100" && $tcp1>0){
        echo "Test Cases Passed Partially";
    }
    else if($tcp1=="0"){
        echo "No Test Cases Passed";
    }
?>
</td>
</tr>
</table>
<hr class="solid">
<b>Problem Statement 2 :</b><br>
<td>
<?php
	 $qd2= mysqli_query($con,"SELECT qdesc FROM code_question WHERE qid=$qid2");
     $qdg2 = mysqli_fetch_array($qd2);
     echo $qdg2[0];	      
?>
</td>
<table>
<tr>
<td>
<b>Submitted Code :</b>
<pre style="background: #ebebed;">
<?php
	 $sd2= mysqli_query($con,"SELECT code2 FROM code_result WHERE rid=$rid");
     $sdg2 = mysqli_fetch_array($sd2);
     echo $sdg2[0];	
?>
</pre>
</td>
<td style="float: right;">
<b style="color: dodgerblue;">Testcases Passed:</b>
<?php
    $test_case2= mysqli_query($con,"SELECT test2 FROM code_result WHERE rid=$rid");
    $tc2 = mysqli_fetch_array($test_case2);
    echo $tc2[0];
?>
<br>
<b style="color: dodgerblue;">Status:</b>
<?php
    $test_case2= mysqli_query($con,"SELECT test2 FROM code_result WHERE rid=$rid");
    $tc2 = mysqli_fetch_array($test_case2);
    $tcc=$tc2[0];
    if($tcc=="100"){
        echo "All Test Cases Passed";
    }
    else if($tcc<"100"&& $tcc>0){
        echo "Test Cases Passed Partially";
    }
    else {
        echo "No Test Cases Passed";
    }
?>
</td>
</tr>
</table>
</body>
</html>