<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $organization = $_POST['organization'];
        $message = $_POST['message'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();                                            // Send using SMTP
   
    $mail->Host       = 'sg3plcpnl0095.prod.sin3.secureserver.net';// Set the SMTP server to send through
    //$mail->Host       = '	mail.avian-global.com';
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   //$mail->Username   = 'info@praveen.giitsolution.com';                     // SMTP username
  //$mail->Password   = 'Giitsolution.com';     
     //$mail->Username   = 'info@knockonbrain.com';                     // SMTP username
    //$mail->Password   = 'knockonbrain';  // SMTP password 
      $mail->Username   = 'test@avianglobes.com';   // SMTP username
      
      $mail->Password   = 'avian@6790';
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587; 
        //Email Settings
        $mail->isHTML(true);
        
       $mail->setFrom($email, $name);
        //$mail->setFrom("info@avianglobes.com");
        $mail->addAddress("test@avianglobes.com"); //enter you email address
       
       
       
        $mail->Subject = ("$email");
        $mail->Body = "<p>Name: ".$name. 
                      "<p>Email: ".$email .
                      "<p>Number: ".$number .
                      "<p>Organization: ".$organization .
                      "<p>Message: ".$message;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
$respons=array("status" => $status, "response" => $response);
        exit(json_encode($respons));
    }
?>
