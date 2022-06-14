<?php
ob_start();
?>
<!Doctype html>
<html>
    <head>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="contact-form-16/fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="contact-form-16/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="contact-form-16/css/style.css"> 
    <title>Pyschometric Test</title>
    <style>
        body{
            overflow:hidden;
        }
    </style>
    </head>
    <body>
    <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">All the best for your test!</h3>
              
              

              <p><img src="contact-form-16/images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <!--<div class="row">-->
                <!--  <div class="col-md-12 form-group">-->
                <!--    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">-->
                <!--  </div>-->
                <!--</div>-->
                <div class="row">
                  <div class="col-md-12 form-group">
                    <!--<textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Instructions"></textarea>-->
                    <p>1) It is mandatory to enter email to proceed with the test.<br>2) Please ensure that you are attempting this test from desktop.
                    <br>3) It is mandatory to attempt all the questions.<br>4) Timer will start immediately, once you click on the start button.<br>5) Click on "Submit" button to submit the test.<br><b><span style="color:#D10000;">NOTE: </span>Please follow the instructions carefully as it might affect your result.</b></p>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" required="" name="email" placeholder="Enter Email" class="form-control" id="name">
                  </div>
                </div>
                <!--<div class="row">-->
                <!--  <div class="col-md-12 form-group">-->
                <!--    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">-->
                <!--  </div>-->
                <!--</div>-->
                
                <div class="row">
                  <div class="col-12">
                    <!--<input type="submit" class="btn btn-primary rounded-0 py-2 px-4" value="Proceed" name='btn'>-->
                     <button name='btn' class="btn btn-primary rounded-0 py-2 px-4">Proceed</button>
                  <!--<span class="submitting"></span>-->
                  </div>
                </div>
              </form>

              <!--<div id="form-message-warning mt-4"></div> -->
              <!--<div id="form-message-success">-->
              <!--  Your message was sent, thank you!-->
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <!--<script src="contact-form-16/js/jquery-3.3.1.min.js"></script>-->
    <!--<script src="contact-form-16/js/popper.min.js"></script>-->
    <!--<script src="contact-form-16/js/bootstrap.min.js"></script>-->
    <!--<script src="contact-form-16/js/jquery.validate.min.js"></script>-->
    <!--<script src="contact-form-16/js/main.js"></script>-->

        <!--<form method="post" action="">-->
        <!--<input type="text" required="" name="email" placeholder="Enter Email">-->
        <!--<button name='btn'>Submit</button>-->
        <!--</form>-->
    </body>
</html>
<?php

if(isset($_POST['btn'])){
    session_start();
    $email=$_POST['email'];
    $cid=$_SESSION['cid'];
     $_SESSION['email']=$email;
    // echo $email;
    // $qu = array(
    // 'cid' => $cid, 
    // 'm1' => $email
    // );
    
// $qu = http_build_query($qu);
// header("Location: assign.php?$qu");

date_default_timezone_set( 'Asia/Kolkata' ); 
    $_SESSION['TIMER'] = time() + 1800; //Allocating Time as 40 min (60*40) 
    $_SESSION['start_time'] = date( 'Y-m-d H:i:s' );
    header( 'location:start.php' );
}

ob_end_flush();
?>