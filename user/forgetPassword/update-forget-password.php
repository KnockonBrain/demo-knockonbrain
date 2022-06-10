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
    
</style>
<title>Reset Password</title>
<link rel=" icon" type="image/png" href="../../images/favicon-logo1.png"/>
</head>
<?php
if(isset($_POST['user_password']) && $_POST['reset_link_token'] && $_POST['user_email'] && $_POST['cpassword'])
{
include "config.php";
if($_POST['user_password'] !== $_POST['cpassword']){                                //two password do not matching
    echo "<script>
    alert('Password does not match');
    window.history.go(-1);
    </script>";
}
else{
$emailId = $_POST['user_email'];
$token = $_POST['reset_link_token'];
$password = md5($_POST['user_password']);
$query = mysqli_query($conn,"SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `user_email`='".$emailId."'");
$row = mysqli_num_rows($query);
if($row){
mysqli_query($conn,"UPDATE users set  user_password='" . $password . "', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE user_email='" . $emailId . "'");
echo "<center><div style='margin-top:100px;pointer:cursor;'><h2>Congratulations! Your password has been updated successfully.</h2></div></center>";
}else{
echo "<center><div style='margin-top:100px;pointer:cursor;'><h2>Something went wrong. Please try again</h2><div></center>";
}
}
}
echo "<center><div class='container text-center'><a href='https://phptest.avianglobes.com'>
    <button class='jbtn' style='margin-top:60px;'>Home</button></a></div></center>";
?>