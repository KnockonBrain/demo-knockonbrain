<?php
global $current_user; 
  date_default_timezone_set("Asia/Kolkata");// set time_zone according to your location
    $timestamp = date('Y-m-d H:i:s');
   $exp=Date('Y-m-d H:i:s', strtotime('+2 days'));
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="ibm866">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M2DF9WK');</script>
<!-- End Google Tag Manager -->
  <title>Invitation Mail</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="mail.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
 <link rel=" icon" type="image/png" href="../images/favicon-logo1.png"/>

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
<style>
   body{
       /*background-image:url("https://35.154.101.124/wp-content/uploads/2021/03/white-technology-background_23-2148390335.jpg");*/
       background-image:url("../images/bg.jpg");
       background-repeat:no-repeat;
       background-size:cover;
   }


  @media only screen and (max-width: 600px) {
      body{
 
		background-image:url("https://www.researchgate.net/profile/Jose-Fernandez-68/publication/279916406/figure/fig3/AS:616374057566217@1523966435568/figure-fig3_Q320.jpg");
      }
  }
  
 
</style>
<!--End of Tawk.to Script-->
<!-- End of Async Drift Code -->

</head>
<?php

session_start();
include 'data.php';
?>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2DF9WK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
     <button class="feedback" onclick="location.href = '../user/details.php';" style="font-size:20px; float: right; margin-top: -100px;">View Invitation Status</button>
</body>

<?php

//import required files.
//include 'data1.php';
// require "phpmailer/PHPMailerAutoload.php";
// require 'phpmailer/class.smtp.php';
// require 'phpmailer/class.phpmailer.php';
// //Setup   
// $mail=new PHPMailer;
// //$mail->SMTPDebug=2;
//   $mail->isSMTP();                                            // Send using SMTP
   
//   $mail->Host       = 'cluster.ownmyserver.com';// Set the SMTP server to send through
// //  $mail->Host       = 'sg3plcpnl0095.prod.sin3.secureserver.net';// Set the SMTP server to send through
// //   $mail->Host       = '51-79-82-34.cprapid.com';
//     //$mail->Host       = '	mail.avian-global.com';
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//   //$mail->Username   = 'info@praveen.giitsolution.com';                     // SMTP username
//   //$mail->Password   = 'Giitsolution.com';     
//      //$mail->Username   = 'info@knockonbrain.com';                     // SMTP username
//     //$mail->Password   = 'knockonbrain';  // SMTP password 
//       $mail->Username   = 'info@knockonbrain.com';    
//     // $mail->Username   = 'info@kob-mail.com'; 
//     // SMTP username
//     //   $mail->Username   = 'invitation@kobmailer.com';  
//       $mail->Password   = 'knockonbrain';
//     $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
//     $mail->Port       = 587;           
//   // echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";
                  
// //FROM email
// //$mail->setFrom("info@praveen.giitsolution.com");
// //$mail->setFrom("info@knockonbrain.com");
// $mail->setFrom("info@knockonbrain.com");
// $mail->setFrom("invitation@kobmailer.com");
//$mail->setFrom("info@avian-global.com");




//import required files.
//include 'data1.php';
require "phpmailer/PHPMailerAutoload.php";
require 'phpmailer/class.smtp.php';
require 'phpmailer/class.phpmailer.php';
//Setup   
$mail=new PHPMailer;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
// $mail->SMTPDebug=3;
   $mail->isSMTP();                                            // Send using SMTP
   
  $mail->Host       = 'sg3plcpnl0095.prod.sin3.secureserver.net';// Set the SMTP server to send through
    // $mail->Host       = '	mail.avian-global.com';
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   //$mail->Username   = 'info@praveen.giitsolution.com';                     // SMTP username
  //$mail->Password   = 'Giitsolution.com';     
     $mail->Username   = 'test@avianglobes.com';                     // SMTP username
    $mail->Password   = 'avian@6790';  // SMTP password 
    //   $mail->Username   = 'test@avianglobes.com';                     // SMTP username
    //   $mail->Password   = 'avian@6790';
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;           
   // echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";
                  
//FROM email
//$mail->setFrom("info@praveen.giitsolution.com");
$mail->setFrom("test@avianglobes.com");





//Change to from eamil
//$date=date("Y-m-d");
//echo $date;
$cid=$_SESSION['ID'];
$tid=$_GET['tid'];
$date=$_GET['date'];
$lang=$_GET['lang'];
$cname=$_SESSION['user_nicename'];
$type=$_GET['type'];

$sql10="SELECT company FROM users WHERE ID=?";
$stmt10=$pdo->prepare($sql10);
$stmt10->execute([$cid]);
$res10=$stmt10->fetch();
$company=$res10['company'];
$company=strtoupper($company);

if(count($tid)==0){
$sql1="SELECT email FROM psycho_details WHERE cid=?  AND date=?";
$stmt1=$pdo->prepare($sql1);
$stmt1->execute([$cid,$date]);
$res=$stmt1->fetchAll(PDO::FETCH_ASSOC);
}
else{
    $sql1="SELECT email FROM details WHERE cid=? AND quiz_id=? AND date=?";
$stmt1=$pdo->prepare($sql1);
$stmt1->execute([$cid,$tid[0],$date]);
$res=$stmt1->fetchAll(PDO::FETCH_ASSOC);
}
//fetch id of mcq test 

$index=0;
foreach ($tid as $k){
    $sql1 = mysqli_query($con1,"SELECT id FROM details WHERE cid=$cid AND quiz_id=$k AND date='$date'");
    $datap = mysqli_fetch_array($sql1);
    $array1=$datap[0];
     $mcqid[$index++]=$array1;
}

//fetch id of code test
$sql1="SELECT id FROM code_details WHERE cid=? AND date=?";
$stmt1=$pdo->prepare($sql1);
$stmt1->execute([$cid,$date]);
$resultid=$stmt1->fetch();
$codeid=$resultid['id'];

//fetch id of psyco test
$sql1="SELECT id FROM psycho_details WHERE cid=? AND date=?";
$stmt1=$pdo->prepare($sql1);
$stmt1->execute([$cid,$date]);
$resultid=$stmt1->fetch();
$psychoid=$resultid['id'];
//fetch test link associated to tid
/*$sql="SELECT link FROM exam_category ";
$stmt=$pdo->prepare($sql);
$stmt->execute();*/
// if($lang=="ocean")
// $result="https://psych.kobmail.com/start/";
// else
// $result="https://test.avianglobes.com/MBTI/start.php";
// $sql1="SELECT email FROM code_details WHERE cid=?  AND date=?";
// $stmt1=$pdo->prepare($sql1);
// $stmt1->execute([$cid,$date]);
// $res=$stmt1->fetchAll(PDO::FETCH_ASSOC);
//fetch req mail addresses


//fetch test link associated to tid
// $sql="SELECT link FROM exam_category WHERE id=?";
// $stmt=$pdo->prepare($sql);
// $stmt->execute([$tid]);
// $result=$stmt->fetch();

// $sql1="SELECT category FROM exam_category WHERE id=?";
// $stmt1=$pdo->prepare($sql1);
// $stmt1->execute([$tid]);
// $result1=$stmt1->fetch();
//echo $result['link'];

/*$to=explode(",",$_GET['address']);*/
//$to=$_SESSION['email'];
//echo $to;
//$res=explode(",",$_GET['address']);
echo "<p class='text-center'style='font-family:sans-serif; font-size:40px; margin-top: 120px; font-weight:bold;'>Invitation Status</p>";
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
			
			//Change the subject.
// 			$mail->Subject = 'Test Invitation-KnockOnBrain';
			$data = array('tid'=>$tid,'mcqid'=>$mcqid,'lang'=>$lang,'codeid'=>$codeid,'type'=>$type,'psychoid'=>$psychoid,'cid'=>$cid,'exp'=>$exp,'m1'=>$m['email']);
			$build="https://35.154.101.124/ct/Custom_Test/start.php?".http_build_query($data);
			if($company!=''){
                    $mail->Body='<div class="main-div" style="padding: 1rem; background-color: #ececec;">
		        <div class="sub-main" style="background-color: white; line-height: 22px; padding:25px 25px 15px 30px; font-size:15px; font-family: Helvetica;">
		        Dear Candidate,
		        <br>
		        <br>
                You have been invited by <b>'.$company.'</b> to take an online test to expedite your candidature.
                The test is already set up for you. All you have to do is click on the below button to go to the assessment. Also, this is a video proctored test so follow the instructions carefully.
                <br><br>';
             }
             else{
		    $mail->Body='<div class="main-div" style="padding: 1rem; background-color: #ececec;">
		        <div class="sub-main" style="background-color: white; line-height: 22px; padding:25px 25px 15px 30px; font-size:15px; font-family: Helvetica;">
		        Dear Candidate,
		        <br>
		        <br>
                You have been invited to take an online test to expedite your candidature.
                The test is already set up for you. All you have to do is click on the below button to go to the assessment. Also, this is a video proctored test so follow the instructions carefully.
                <br><br>';
             }   
                $mail->Body.='
                
                <img src="https://cdn3.iconfinder.com/data/icons/high-education/154/student-read-book-high-education-school-512.png" style="width: 20px;
                        height: 20px;
                        margin-right: 2px;
                        outline: none;
                        text-decoration: none;
                        margin-bottom:-5px !important"></img>
                
                <b style="vertical-align: super;">IMPORTANT INSTRUCTIONS :</b> <br>
                <ul>
                <li style="color:red;">The test is auto-proctored. Movement of eyes, changing of tabs, recognition of alter voices or people will nullify the probability of clearing the test</li>
                <li>Your camera should be at 90 degree during the test.</li>
                <li>It is mandatory to allow the webcam & screen sharing otherwise test will not get started.</li>
                <li>It is mandatory to give test on laptop/PC.</li>
                <li>Timer will start immediately, once you click on the start test button. Once the test starts, you cannot pause it.</li>
                <li>It takes 2-3 minutes to upload test video, please wait until your test is successfully submitted.</li>
                <li>Additionally, you can check the webcam and microphone here: <a href="https://webcamtests.com/">Webcam Test</a>, <a href="https://webcammictest.com/check-mic.html">Microphone Test</a></li>
                <b><li>The test link will be valid for 48 hours, attempt the test within the time limit.</li></b>
              
                </ul><br>
                
                <img src="https://cdn-icons-png.flaticon.com/128/1581/1581942.png" style="width: 20px;
                            height: 20px;
                            margin-right: 2px;
                            outline: none;
                            text-decoration: none;
                            margin-bottom: -5px !important;"></img>
                <b style="vertical-align: super; text-transform: uppercase;">TEST NAME : Assessment</b>
                 
                <br>
                <br>
                
                <center>
                    <div>
                                        
                        <a href="'.$build.'" style="cursor:pointer !important; background-color: #012970;
                                    border:none;
                                    text-align: center;
                                    display: inline-block;
                                    padding: 10px 14px 10px 14px;
                                    font-size: 1.2rem;
                                    text-decoration:none;
                                    margin-top:2%;
                                    letter-spacing: 0.7px;
                                    border-radius: 5px;
                                    color: #ffffff!important;">
                            <span>Go To Assessment</span>
                        </a>
                    </div>
                </center>
                <br>

                If the above button does not work for you, attempt the test through the given link: '.$build.'
                <br><br>
                If you stuck anywhere while starting the test please check <a href="https://35.154.101.124/candidate_instructions.php">Instructions</a>.
                
                <br><br>
                
                <b>GOOD LUCK!</b>
                <br>
                <br>
                Regards,
                <br>
                Team KnockOnBrain
                <br>
                
                 </div>
                </div>';
                
			//For client not supporting HTML rendering.
		//	$mail->Body="Heelooo";
			//$mail->AltBody = "Test Link: ".$result['link']."?m1=".$m['email']."&cid=".$cid."&tid=".$tid."  Test email: ".$m['email']."  Company Name: ".$cname;
		    $mail->AltBody = "Test Link: ".$build." Test email: ".$m['email']."  Company Name: ".$company;
			
			$testlink=$build."&m1=".null;
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
		
	echo "<center><p class='text-center'style='font-family:sans-serif;margin-top:40px;'><b><i>i:</i></b>&nbsp;Applicant will receive test link on above email.</p></center>";
	echo "<center><p class='text-center'style='font-family:sans-serif;margin-top:-40px; font-size:25px;color:red;'><br><b>Please inform applicant to check his spam folder too for assessment invitation.</b></p></center>";			
    echo "<div class='container text-center'><a href='https://35.154.101.124/user/assessment.php'".$cname."/'><button class='feedback2' style='margin-top:0.6rem'>Schedule More Test</button></a></div>";	
	
?>
<!--<p><center>Click on the button to copy the text from the text field. Try to paste the text (e.g. ctrl+v) afterwards in a different window, to see the effect.</center></p>-->

<!--<input type="text" value="<?php ?>" id="myInput" style="width:30%; align:center;">-->

<!--<div class="tooltip">-->
<!--<button onclick="myFunction()" onmouseout="outFunc()" style="color:red;">-->
<!--  <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>-->
<!--  Copy text-->
<!--  </button>-->
<!--</div>-->

<!--<script>-->
<!--function myFunction() {-->
<!--  var copyText = document.getElementById("myInput");-->
<!--  copyText.select();-->
<!--  copyText.setSelectionRange(0, 99999);-->
<!--  navigator.clipboard.writeText(copyText.value);-->
  
<!--  var tooltip = document.getElementById("myTooltip");-->
<!--  tooltip.innerHTML = "Copied: " + copyText.value;-->
<!--}-->

<!--function outFunc() {-->
<!--  var tooltip = document.getElementById("myTooltip");-->
<!--  tooltip.innerHTML = "Copy to clipboard";-->
<!--}-->
<!--</script>-->
</html>