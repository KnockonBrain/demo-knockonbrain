<!doctype html>
<html lang="en">
<head>
    <link rel=" icon" type="image/png" href="../../images/favicon-logo1.png"/>
    <style>
    body{
        background-color:white;
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
    
      #main{
       width:450px; 
    /*//background-color: rgb(0 0 0 / 8%)!important;*/
     background-color: #FFFFFF;
     padding-top:5px;
    padding-bottom:5px;
    margin-left:350px;
    
}
.register-heading{
    margin-top:90px;
    font-size:20px;
   
}
 
#submit{
    margin-left:150px;
     background-color : #3b4fe4;
  color: #ffffff;
  padding: 10px 20px;
  border-radius: 12px;
  /*border-color: #46b8da;*/
  font-family: 'Open Sans',sans-serif;
    font-weight: 400;
    font-size: 20px;
    margin-right:200px;
    line-height: 1.85714285714286;
    text-decoration: inherit;
    box-shadow:0px 12px 24px -8px rgb(59 79 228 / 40%);
    box-sizing: border-box;
   
    
}
li{
     font-family:'Open Sans',sans-serif;
     font-size:20px;
     float:center;
}
label{
    font-weight:bold;
    float:center;
}
/*#right{
     margin-top:10px;
     font-size:20px;
     font-family:Times New Roman;
}
#img-right{
    width:450px;
    margin-top:80px;
}*/
@media only screen and (max-width: 600px){
  #main{
    width:300px; 
}
#submit{
   margin-left:9px; 
}
/*#right{
     margin-top:10px;
}
#img-right{
    width:350px;
    margin-top:0px;
}
.register-heading{
    margin-top:60px;
}
.register-heading{
    font-size:20px;
}*/
}
      </style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Reset Password</title>
      <link rel=" icon" type="image/png" href="../../images/favicon-logo1.png"/>
<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="card-body">
<?php
if($_GET['key'] && $_GET['token'])
{
include "config.php";
$email = $_GET['key'];
$token = $_GET['token'];
$query = mysqli_query($conn,
"SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `user_email`='".$email."';"
);

$curDate = date("Y-m-d H:i:s");
if (mysqli_num_rows($query) > 0) {
$row= mysqli_fetch_array($query);
if($row['exp_date'] >= $curDate){ ?>
<div class ="container">
<div class="row">
    <div class="col-md-7">
         <div class="col-md-7">
         <center><div class="container w-50" style="margin-left:410px;">
           <p class="register-heading text-center " style="font-family:''Open Sans',sans-serif';font-weight:bold; color:black;
           font-size:35px; margin-top:40px;margin-left:-150px;margin-right:-300px;">Enter your new password</p></p></div></center><br>
                             <div class="container shadow-lg p-3 mb-5 bg-white rounded" id="main">
                    
            <div class="card-body">
<form action="update-forget-password.php" method="post">
<input type="hidden" name="user_email" value="<?php echo $email;?>">
<input type="hidden" name="reset_link_token" value="<?php echo $token;?>">
<div class="form-group">
<label for="exampleInputEmail1">Password</label>
<input type="password" name='user_password' class="form-control">
</div>                
<div class="form-group">
<label for="exampleInputEmail1">Confirm Password</label>
<input type="password" name='cpassword' class="form-control">
</div>
<center><button type="submit" name="new-password" class="jbtn">Submit&nbsp;</button></center>
</form>
 </div>
          </div>
      </div>
<?php 
} 
} 
else{
?>
<div style='margin-top:100px'><center><h2><b>This forget password link has been expired</b></h2></center></div>
<?php
}
}
?>
</div>
</div>
</div>
</body>
</html>