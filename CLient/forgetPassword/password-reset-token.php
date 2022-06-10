<head>
      <link rel=" icon" type="image/png" href="../../images/favicon-logo1.png"/>
<style>
  body{
    color:black;
    background-position: center;
    background-size: cover;
    background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url('bg.webp');
    overflow:visible;
    font-size: 16px;
    font-weight: 400;
    }
    .jbtn{
          background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
          color:#fff;
          border:none;
          position:relative;
          height:45px;
          font-size:1.6em;
          padding:0.1em 1em;
          cursor:pointer;
          transition:800ms ease all;
          outline:none;
          font-weight:600;
        }
        .jbtn:hover{
          background:#fff;
          color:#1dc4e9;
        }
        .jbtn:before,.jbtn:after{
          content:'';
          position:absolute;
          top:0;
          right:0;
          height:2px;
          width:0;
         background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
          transition:400ms ease all;
        }
        .jbtn:after{
          right:inherit;
          top:inherit;
          left:0;
          bottom:0;
        }
        .jbtn:hover:before,.jbtn:hover:after{
          width:100%;
          transition:800ms ease all;
        }
        
    
</style>
<title>Reset Password</title>
      <link rel=" icon" type="image/png" href="../../images/favicon-logo1.png"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>

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

</head>

<?php
if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    include "config.php";
    
    $emailId = $_POST['email'];
    // $username=mysqli_query($conn,"SELECT * FROM users WHERE user_email='" . $emailId . "'");
    $result = mysqli_query($conn,"SELECT * FROM users WHERE user_email='" . $emailId . "'");

    $row= mysqli_fetch_array($result);

  if($row)
  {
    
     $token = md5($emailId).rand(10,9999);

     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
     $password = $row['user_password'];
    $expDate = date("Y-m-d H:i:s",$expFormat);

    $update = mysqli_query($conn,"UPDATE users set  user_password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE user_email='" . $emailId . "'");

    $link = "<a href='https://phptest.avianglobes.com/CLient/forgetPassword/reset-password.php?key=".$emailId."&token=".$token."'>Reset password</a>";

    require '../phpmailer/PHPMailerAutoload.php';
    require '../phpmailer/class.smtp.php';
    require '../phpmailer/class.phpmailer.php';

    $mail = new PHPMailer();

    
    $mail->IsSMTP();
   
    $mail->SMTPAuth = true;                  
    
    $mail->Username = "info@knockonbrain.com";
    
    $mail->Password = "knockonbrain";
    $mail->SMTPSecure = "tls";  
    
    $mail->Host = 'cluster.ownmyserver.com';
    
    $mail->Port = "587";
    $mail->From='info@knockonbrain.com';
    $mail->FromName='KnockonBrain';
    $mail->AddAddress($emailId, '');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = '<b>Dear '.$emailId.',<br><br>Please Click below to reset your password for knockonbrain </b> <br><br>'.$link.'<br><br><b> If you did not ask to reset your password, Please ignore this message<br><br> Thank You,<br> Knockonbrain<b>';
    if($mail->Send())
    {
      echo "<center><div style='margin-top:100px;pointer:cursor;'><h2>Please check Your Email and Click on the link sent to your email to reset the password.</h2></div></center>";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
     echo "<center><div style='margin-top:100px;pointer:cursor;'><h2>Invalid Email Address. Go back</h2></div></center>";
  }
}
echo "<center><div class='container text-center'><a href='https://phptest.avianglobes.com'>
    <button class='jbtn' style='margin-top:60px;'>Home</button></a></div></center>";	
?>