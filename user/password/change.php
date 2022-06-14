<?php include('server.php'); ?>
<html>
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M2DF9WK');</script>
<!-- End Google Tag Manager -->
    <title>Change Password</title>
    <meta charset="utf-8">
   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
      <link rel=" icon" type="image/png" href="../../images/favicon-logo1.png"/>

<style>
    body {
        
        background-color:white;
        color:black;
        /*background-color: #f1f1f1;*/
        background-position: center;
        background-size: cover;
        background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url(../bg.webp);
        overflow:visible;
    }
    nav {
        top: 20px;
        position: absolute;
        z-index: 1;
        width: 100%;
    }
    nav .cul {
        margin-left: 100px;
        float: left;
    }

    nav ul li {
        display: inline-block;
        margin: 0 5px;
    }

    nav ul li a {
        color: black;
        font-size: 21px;
        padding: 7px 8px;
        border-radius: 3px;
        text-decoration:none;
    }
    nav ul li a:hover {
        transition: .5s;
        color: #43b2f0;
        text-decoration:none;
    }
    .container
    {
        margin-top: 40px;
        width:450px; 
        margin: auto;
         padding-top:25px;
        padding-bottom:5px;
    }
    #main{
        width:450px; 
        margin: auto;
    }
    .register-heading{
        text-align: center;
        margin: 5px;
        font-weight: 600;
        letter-spacing: 4px;
        font-size: 25px;
        line-height: 1.2;
    }
    .error {
        width: 92%;
        margin: 0px auto;
        padding: 10px;
        border:1px solid #a94442;
        color: #a94442;
        background: #f2dede;
        border-radius: 5px;
        text-align: left;
    }
    .success {
        color: #3c763d;
        background: #dff0d8;
        border: 1px solid #3c763d;
        margin-bottom: 20px;
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
    
    li{
        
         font-size:20px;
         float:center;
    }
    .jbtnn{
      background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
      color:#fff;
      border:none;
      position:relative;
      height:45px;
      font-size:1.1em;
      padding:0.1em 1em;
      cursor:pointer;
      transition:800ms ease all;
      outline:none;
    }
    .jbtnn:hover{
      background:transparent;
      color:#1dc4e9;
    }
    .jbtnn:before,.jbtnn:after{
      content:'';
      position:absolute;
      top:0;
      right:0;
      height:2px;
      width:0;
     background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
      transition:400ms ease all;
    }
    .jbtnn:after{
      right:inherit;
      top:inherit;
      left:0;
      bottom:0;
    }
    .jbtnn:hover:before,.jbtnn:hover:after{
      width:100%;
      transition:800ms ease all;
    }
    label{
        font-weight:bold;
        float:center;
    }
    @media only screen and (max-width: 600px){
        .container
        {
            margin: auto;
            width:340px; 
            margin-top: 40px;
        }
        #main
        {
            margin: auto;
            width:340px; 
        }
        #submit{
           margin-left:9px; 
        }
    }
</style>
</head>

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




<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2DF9WK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <nav>
        <ul class="cul">
            <li><a href="../mcq.php"><i class="fa fa-home fa-2x" title="Home Page"></i></a></li>
            <!--<li><a href="../test.php"><button class="jbtnn">Home</button></a></li>-->
        </ul>
    </nav>
    <div class ="container">
    <div class="row">
        <div class="">
            <center>
                <div class="">
                    <p class="register-heading text-center " style="font-weight:bold; color:black;
                    font-size:40px; margin-top:20px;">Change Password</p>
                </div>
            </center>
            <br>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" id="main">

        <form action="" method="POST" id="change.php">
                <?php include('errors.php');?>
                <div class="form-group" style="margin-top:20px">
                
                <div class="form-group">
                    Current password
                    <input type="password" class="form-control" name="current" id="current" placeholder="Password" value="" autocomplete="off" required>
                </div>
                
                <div class="form-group">
                    New password
                    <input type="password" class="form-control" name="newPass" id="newPass" placeholder="Enter new password" value="" autocomplete="off" required>
                </div>
                
                <div class="form-group">
                    Confirm Password
                    <input type="password" class="form-control" name="newPassconfirm" id="newPassConfirm" placeholder="Enter Password" value="" autocomplete="off" required>
                </div>
                <center>
                    <button type="submit" class="jbtn" id="submit" name = 'change' value="Update" onclick="return validation()">Update</button>
                </center>
                </div>
            </form>
        
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    </div>
    </div>
 
</body>
</html>