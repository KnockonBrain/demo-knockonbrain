<?php
global $current_user; 
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="ibm866">
  <title>Mail</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <?php
 
  ?>
  <!-- Start of Async Drift Code -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61309803d6e7610a49b3408e/1feit3k4h';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- End of Async Drift Code -->

  <style>
   body{
     
   /*background-image:url("https://35.154.101.124/wp-content/uploads/2021/03/white-technology-background_23-2148390335.jpg");*/
   
   background-image:url("../images/bg.jpg");
   background-repeat:no-repeat;
   background-size:cover;
   
   }
   #main{
    width:450px; 
    //background-color: rgb(0 0 0 / 8%)!important
    background-color: white;
 padding-top:5px;
    padding-bottom:5px;
    margin-left:350px;
    
}
    .feedback {
  background-color :#2B3856;
  color: #ffffff;
  padding: 10px 20px;
  border-radius: 10px;
  float:right;
  margin-top:10px;
  margin-right:6px;
   font-family: 'Open Sans',sans-serif;
    font-weight: 400;
    font-size: 20px;
    line-height: 1.85714285714286;
    text-decoration: inherit;
    box-shadow:0px 12px 24px -8px rgb(59 79 228 / 40%);
    box-sizing: border-box;
    pointer:cursor;
}

     .feedback:hover{
         background-color:#DDE0EF;
    color:#2B3856;
    cursor: pointer;
     }
    
   

    .feedback2{
         background-color : #2B3856;
         color: white;
         padding: 10px 20px;
         border-radius: 12px;
         font-family: 'Open Sans',sans-serif;
         font-weight: 400;
         font-size: 20px;
         line-height: 1.85714285714286;
         text-decoration: none;
         box-shadow:0px 12px 24px -8px rgb(59 79 228 / 40%);
         box-sizing: border-box;
         pointer:cursor;
  
      }
      .feedback2:hover{
          background-color:#DDE0EF;
    color:#2B3856;
    cursor: pointer;
      }
      @media only screen and (max-width: 600px) {
          body{
     
   /*background-image:url("https://35.154.101.124/wp-content/uploads/2021/03/white-technology-background_23-2148390335.jpg");*/
   
   background-image:url("https://www.researchgate.net/profile/Jose-Fernandez-68/publication/279916406/figure/fig3/AS:616374057566217@1523966435568/figure-fig3_Q320.jpg");
   /*background-repeat:no-repeat;*/
   /*background-size:cover;*/
   margin-bottom:200px;
   
   }
       .feedback{
           margin-left:170px;
       }
       .w-50
       {
           /*margin-left:100px;*/
           margin-right:190px;
       }
       .text-cent
       {
           font-family:sans-serif;
           margin-top:-40px; 
           font-size:10px;
           color:red;
       }

}
@media only screen and (max-width: 1366px) {
     .feedback{
         margin-left:1200px;
     }         
}
.feed {
  background-color :  #3b4fe4;
  color: #ffffff;
  padding: 10px 20px;
  border-radius: 12px;
  float:left;
  margin-top:10px;
  margin-left:40px;
   font-family: 'Open Sans',sans-serif;
    font-weight: 400;
    font-size: 20px;
    line-height: 1.85714285714286;
    text-decoration: inherit;
    box-shadow:0px 12px 24px -8px rgb(59 79 228 / 40%);
    box-sizing: border-box;
    pointer:cursor;
}

#mybutton {
  /*position: fixed;*/
  /*top: 4px;*/
  /*right: 10px;*/
  margin-top:-10px;
}     

  </style>
</head>
<?php

session_start();
include 'data.php';
/*$_SESSION['url'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['User']))
{
    header("location:login.php");
}*/
 //echo $_SESSION['flag'];
/*$s="SELECT f FROM flag";
 $stmt2=$pdo->query($s);
 $stmt2->execute();
 $res=$stmt2->fetchAll();
 foreach($res as $p)
 {
     
 }
 echo $p['f'];
if($p['f']==1)
{*/
//echo $_GET['address'];
/*global $cid;
global $tid;
global $date;
global $count;
$cid=$_GET['cid'];
$tid=$_GET['tid'];
$date=$_GET['date'];
$count=$_GET['count'];
echo $cid .$tid. $date.$count;
/*$sql1="SELECT email FROM details WHERE cid=? AND tid=? AND date=? AND count=?";
$stmt1=$pdo->prepare($sql1);
$stmt1->execute([$cid,$tid,$date,$count]);
$res=$stmt1->fetchAll(PDO::FETCH_ASSOC);
foreach($res as $m)
{
   echo $m['email'];
    
}*/
?>

<body>
    <button class="feedback" onclick="location.href = '../CLient/new_file.php';" style="font-size:20px;width: 12rem;
    margin-bottom: 40px;">View Results</button>
    


<?php

//import required files.
//include 'data1.php';
require "phpmailer/PHPMailerAutoload.php";
require 'phpmailer/class.smtp.php';
require 'phpmailer/class.phpmailer.php';
//Setup   
$mail=new PHPMailer;
//$mail->SMTPDebug=2;
   $mail->isSMTP();                                            // Send using SMTP
   
   $mail->Host       = 'leeds.ownmyserver.com';// Set the SMTP server to send through
    //$mail->Host       = '	mail.avian-global.com';
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   //$mail->Username   = 'info@praveen.giitsolution.com';                     // SMTP username
  //$mail->Password   = 'Giitsolution.com';     
     //$mail->Username   = 'info@knockonbrain.com';                     // SMTP username
    //$mail->Password   = 'knockonbrain';  // SMTP password 
      $mail->Username   = 'info@knockonbrain.com';                     // SMTP username
      $mail->Password   = 'knockonbrain';
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;           
   // echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";
                  
//FROM email
//$mail->setFrom("info@praveen.giitsolution.com");
$mail->setFrom("info@knockonbrain.com");
//$mail->setFrom("info@avian-global.com");
//Change to from eamil
//$date=date("Y-m-d");
//echo $date;
$cid=$_SESSION['ID'];
$tid=$_GET['tid'];
$date=$_GET['date'];

$cname=$_SESSION['user_nicename'];

//fetch req mail addresses
$sql1="SELECT email FROM details WHERE cid=? AND quiz_id=? AND date=?";
$stmt1=$pdo->prepare($sql1);
$stmt1->execute([$cid,$tid,$date]);
$res=$stmt1->fetchAll(PDO::FETCH_ASSOC);

//fetch test link associated to tid
$sql="SELECT link FROM exam_category WHERE id=?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$tid]);
$result=$stmt->fetch();

//echo $result['link'];

/*$to=explode(",",$_GET['address']);*/
//$to=$_SESSION['email'];
//echo $to;
//$res=explode(",",$_GET['address']);
echo "<p class='text-center'style='font-family:sans-serif; font-size:40px; font-weight:bold;'>Invitation Status</p>";
echo "<br><div class='container w-50 text-center' style=padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;'>
<table class='table table-bordered table-striped'><thead style='background-color:#2B3856;color:white'><th>EMAIL</th><th>STATUS</th></thead><tbody>";

foreach($res as $m)
     {
             //  echo $m['email'];
				$mail->clearAddresses();//clear all recipents
				$mail->addAddress($m['email']);
			//	$mail->addAddress('gurleenbindra1999@gmail.com');
				//echo $to;
			//	echo $m['email'];
			//	var_dump($email);
			//TOMAIL
			//Change to whom you want to send.
		$mail->addReplyTo("info@knockonbrain.com");
		//	$mail->addReplyTo("info@avian-global.com");
		//	$mail->addReplyTo("info@praveen.giitsolution.com");
			//Change reply email, whom the reciever can reply.
			//addCC
			//addBCC 
			// Attachments
			//Add your attachement here.
			//$mail->addAttachment('git-transport.png',"Git workflow image");         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			// Content
			$mail->isHTML(true);  // Set email format to HTML
			//Change the subject.
			$mail->Subject = 'Test Invitation-KnockOnBrain';
			
		   $mail->Body="<p>Dear Applicant,</p><p>You are invited to give the assessment for the selection process.</p><p>Access the link below for the test.<p><table><tr><td>TEST LINK: </td><td>".$result['link']."?cid=".$cid."&tid=".$tid."&m1=".$m['email']."</td></tr></table>
		    <br><b>Instructions to attempt the test:</b><p>1. Your camera should be at 90 degree during the test.</b></p>
		    <p><b>2. It is mandatory to allow the webcam & screen sharing otherwise test will not get started.</p>
		    <p>3. Test can only be accessed on PC/Laptop.</p>
		    <p>4. Timer will start immediately,Once you click on the start button.</p>
	        <p><b>5. It takes 2-3 minutes to upload test video, Please wait until your test is successfully submitted.</b></p>
	        
	        <br>
	        <p><b>Note:</b>Please follow the instructions carefully as it might affect your result.</p>";
			//For client not supporting HTML rendering.
		//	$mail->Body="Heelooo";
			//$mail->AltBody = "Test Link: ".$result['link']."?m1=".$m['email']."&cid=".$cid."&tid=".$tid."  Test email: ".$m['email']."  Company Name: ".$cname;
		    $mail->AltBody = "Test Link: ".$result['link']."?cid=".$cid."&tid=".$tid."&m1=".$m['email']."  Test email: ".$m['email']."  Company Name: ".$cname;
			
			
			echo "<tr><td>".$m['email']."</td>";
			
	       
		
			if($mail->send())
			{
			    echo "<td>SUCCESS</td>";
			}
			else
			{
			    echo "<td>FAILURE</td>";
			}
		  
	           echo "</tr>";
                
                //	if($mail->send())
		//	{
			    //echo "<div align='center'>Invitations sent successfully!!</div>";
			//}
			//else
			//echo "<";
			//echo $m['email'];
			
               
     }
     echo "</tbody></table></div>";
     	
			
		echo "<br>";		
	echo "<center><p class='text-center'style='font-family:sans-serif;margin-top:40px;'><b><i>i:</i></b>&nbsp;Applicant will receive test link on above Email.</p></center>";		
		echo "<center><p class='text-cent'style='font-family:sans-serif;margin-top:-40px; font-size:30px;color:red;'><br><b>Please inform the applicant to check his spam folder too.</b></p></center>";	
    echo "<div class='container text-center'><a href='https://35.154.101.124/CLient/test.php'".$cname."/'><button class='feedback2' style='margin-top:40px;'>Schedule More Test</button></a></div>";		
	
?>
</body>
</html>