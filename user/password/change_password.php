<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<link rel="shortcut icon" type="image/jpg" href="images/60489118d23f1-removebg-preview.png.jpg"/>
<!-- <style>section {
    width: 500px;
    margin: auto;
    /* border: 3px solid #73AD21; */
  }</style> -->
</head>
<body>
   <!--Section: Block Content-->
<section class="mb-5 text-center">

    <p>Set a new password</p>
    
    <form method="post" action="change_password.php">
    <?php include('errors.php');?>
        <div class="md-form md-outline">
            <input type="password" id="current" class="form-control" name="current">
            <label data-error="wrong" data-success="right" for="current">Current Password</label>
          </div>

      <div class="md-form md-outline">
        <input type="password" id="newPass" class="form-control" name="newPass">
        <label data-error="wrong" data-success="right" for="newPass">New password</label>
      </div>
  
      <div class="md-form md-outline">
        <input type="password" id="newPassConfirm" class="form-control" name="newPassconfirm">
        <label data-error="wrong" data-success="right" for="newPassConfirm">Confirm password</label>
      </div>
  
      <button type="submit" name = 'change' class="btn btn-primary mb-4">Change password</button>
  
    </form>
   
    <div class="d-flex justify-content-between align-items-center mb-2">
        
         
         
      <u><a href="../../login.php">Back</a></u>
  
      <!--<u><a href="https://mdbootstrap.com/docs/jquery/admin/auth/register/">Register</a></u>-->
  
    </div>

  </section>
  <!--Section: Block Content--> 
</body>
</html>
