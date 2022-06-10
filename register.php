<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M2DF9WK');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Merriweather:wght@300&family=Rubik&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
 <title>LOGIN</title>
    <link href="favicon-logo1.png" rel="icon">
    <link href="favicon-logo1.png" rel="apple-touch-icon">
    <link rel="shortcut icon" type="image/png" href="../images/favicon-logo1.png"/>
    <link rel=" icon" type="image/png" href="../images/favicon-logo1.png"/>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>

  <style>
  /*  homepage knockonbrain pacifico cursive*/
  @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body,
input {
  font-family: "Poppins", sans-serif;
}

.container {
  position: relative;
  width: 100%;
  background-color: #fff;
  min-height: 100vh;
  overflow: hidden;
}

.forms-container {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.signin-signup {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  left: 75%;
  width: 50%;
  transition: 1s 0.7s ease-in-out;
  display: grid;
  grid-template-columns: 1fr;
  z-index: 5;
}

form {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0rem 5rem;
  transition: all 0.2s 0.7s;
  overflow: hidden;
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}

form.sign-up-form {
  opacity: 0;
  z-index: 1;
}

form.sign-in-form {
  z-index: 2;
}

.title {
  font-size: 2.2rem;
  color: #444;
  margin-bottom: 10px;
}

.input-field {
  max-width: 380px;
  width: 100%;
  background-color: #f0f0f0;
  margin: 10px 0;
  height: 55px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
}
.input-field1 {
  /*max-width: 500px;*/
  width: 140%;
  background-color: #f0f0f0;
  /*margin: 10px 0;*/
 left:-40px;
 right:10px;
  height: 55px;
  border-radius: 55px;
  border-color:white;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
  border-style:none;
   outline: none ;
}

.iti input, .iti input[type=tel]{
  left:-5px;
 padding-left:90px !important;
 font-weight: 600;
    font-size: 1.1rem;
  
}
::placeholder{
    color: #bababa;
   
    
}
.iti.iti--allow-dropdown.iti--separate-dial-code{
    width: 24rem;
    margin-left: 3%;
}
.input-code{
    border: none;
    outline:none;
}

.input-field i {
  text-align: center;
  line-height: 55px;
  color: #acacac;
  transition: 0.5s;
  font-size: 1.1rem;
}

.input-field input {
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
}
.input-field1 input::placeholder {
  color: #aaa;
  font-weight: 700;
}
.input-field input::placeholder {
  color: #aaa;
  font-weight: 500;
}
/*.tele{*/
/*  background: none;*/
/*  outline: none;*/
/*  border: none;*/
/*  line-height: 1;*/
/*  font-weight: 600;*/
/*  font-size: 1.1rem;*/
/*  color: #333;*/
/*}*/
/*.tele ::placeholder {*/
/*  color: #aaa;*/
/*  font-weight: 500;*/
/*}*/

/*.iti__flag-container{*/
/*    text-align: center;*/
/*  line-height: 55px;*/
/*  color: #acacac;*/
/*  transition: 0.5s;*/
/*  font-size: 1.1rem;*/
/*}*/

.social-text {
  padding: 0.7rem 0;
  font-size: 1rem;
}

.social-media {
  display: flex;
  justify-content: center;
}

.social-icon {
  height: 46px;
  width: 46px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 0.45rem;
  color: #333;
  border-radius: 50%;
  border: 1px solid #333;
  text-decoration: none;
  font-size: 1.1rem;
  transition: 0.3s;
}

.social-icon:hover {
  color: #4481eb;
  border-color: #4481eb;
}

.btn {
  width: 150px;
  background-color: #67B2E0;
  border: none;
  outline: none;
  height: 49px;
  border-radius: 49px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}

.btn:hover {
  background-color: #4d84e2;
}
.panels-container {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.container:before {
  content: "";
  position: absolute;
  height: 2000px;
  width: 2000px;
  top: -10%;
  right: 48%;
  transform: translateY(-50%);
  /*background-image: linear-gradient(-45deg, #67B2E0; 0%, #04befe 100%);*/
  background-color:#67B2E0;
  transition: 1.8s ease-in-out;
  border-radius: 50%;
  z-index: 6;
}

.image {
  width: 100%;
  transition: transform 1.1s ease-in-out;
  transition-delay: 0.4s;
}

.panel {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: space-around;
  text-align: center;
  z-index: 6;
}

.left-panel {
  pointer-events: all;
  padding: 3rem 17% 2rem 12%;
}

.right-panel {
  pointer-events: none;
  padding: 0rem 12% 2rem 24%;
}

.panel .content {
  color: #fff;
  transition: transform 0.9s ease-in-out;
  transition-delay: 0.6s;
}

.panel h3 {
  font-weight: 600;
  line-height: 1;
  font-size: 1.5rem;
}

.panel p {
  font-size: 0.95rem;
  padding: 0.7rem 0;
}

/*.btn.transparent {*/
/*  margin: 0;*/
/*  background: none;*/
/*  border: 2px solid #fff;*/
/*  width: 130px;*/
/*  height: 41px;*/
/*  font-weight: 600;*/
/*  font-size: 0.8rem;*/
/*}*/

.btn.transparent {
    overflow: visible;
    width: auto;
}
.btn.transparent{
    font-family: "Verdana" sans-serif;
    font-size: 1em;
    text-align: center;
    color: blue;
    background: none;
    margin: 0;
    padding: 0;
    border: none;
    cursor: pointer;
   
    -moz-user-select: text;
 
    /* override all your button styles here if there are any others */
}
.btn.transparent span {
    text-decoration: underline;
}
.btn.transparent:hover span,
.btn.transparent:focus span {
    color: black;
}





.right-panel .image,
.right-panel .content {
  transform: translateX(800px);
}

/* ANIMATION */

.container.sign-up-mode:before {
  transform: translate(100%, -50%);
  right: 52%;
}

.container.sign-up-mode .left-panel .image,
.container.sign-up-mode .left-panel .content {
  transform: translateX(-800px);
}

.container.sign-up-mode .signin-signup {
  left: 25%;
}

.container.sign-up-mode form.sign-up-form {
  opacity: 1;
  z-index: 2;
  margin-top: 20px;
}

.container.sign-up-mode form.sign-in-form {
  opacity: 0;
  z-index: 1;
}

.container.sign-up-mode .right-panel .image,
.container.sign-up-mode .right-panel .content {
  transform: translateX(0%);
}

.container.sign-up-mode .left-panel {
  pointer-events: none;
}

.container.sign-up-mode .right-panel {
  pointer-events: all;
}
.a{
    display:none;
}

@media (max-width: 870px) {
   
  .container {
    min-height: 800px;
    height: 100vh;
  }
  .signin-signup {
    width: 100%;
    top: 95%;
    transform: translate(-50%, -100%);
    transition: 1s 0.8s ease-in-out;
  }

  .signin-signup,
  .container.sign-up-mode .signin-signup {
    left: 50%;
  }
  .header{
    position:fixed;
  top:30px;
  padding: 20px 0;
  padding-top: 2rem;
    left:150px;
    z-index:100;
    transform: translate(-50%, -50%);
}
.header .logo span {
    font-size: 15px;
    font-weight: 10;
    text-align:left;
    letter-spacing: 1px;
    color: #012970;
    font-family: "Nunito", sans-serif;
    margin-top: 3px;
}
  .panels-container {
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 2fr 1fr;
  }

  .panel {
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    padding: 2.5rem 8%;
    grid-column: 1 / 2;
  }

  .right-panel {
    grid-row: 3 / 4;
  }

  .left-panel {
    grid-row: 1 / 2;
  }

  .image {
    width: 200px;
    transition: transform 0.9s ease-in-out;
    transition-delay: 0.6s;
  }

  .panel .content {
    padding-right: 15%;
    transition: transform 0.9s ease-in-out;
    transition-delay: 0.8s;
  }

  .panel h3 {
    font-size: 1.2rem;
  }

  .panel p {
    font-size: 0.7rem;
    padding: 0.5rem 0;
  }

  .btn.transparent {
    width: 110px;
    height: 35px;
    font-size: 0.7rem;
    /*color:#67B2E0;*/
  }

  .container:before {
    width: 1500px;
    height: 1500px;
    transform: translateX(-50%);
    left: 30%;
    bottom: 68%;
    right: initial;
    top: initial;
    transition: 2s ease-in-out;
  }

  .container.sign-up-mode:before {
    transform: translate(-50%, 100%);
    bottom: 32%;
    right: initial;
  }

  .container.sign-up-mode .left-panel .image,
  .container.sign-up-mode .left-panel .content {
    transform: translateY(-300px);
  }

  .container.sign-up-mode .right-panel .image,
  .container.sign-up-mode .right-panel .content {
    transform: translateY(0px);
  }

  .right-panel .image,
  .right-panel .content {
    transform: translateY(300px);
  }

  .container.sign-up-mode .signin-signup {
    top: 5%;
    transform: translate(-50%, 0);
  }
  .b{
      display:none;
  }
  .a{
      display:revert;
  }
}
@media (max-width: 370px) {
/*    .header{*/
/*    position:fixed;*/
/*  top:30px;*/
/*  padding: 20px 0;*/
/*    left:150px;*/
/*    z-index:100;*/
/*    transform: translate(-50%, -50%);*/
/*}*/
/*.header .logo span {*/
/*    font-size: 7px;*/
/*    font-weight: 10;*/
/*    text-align:left;*/
/*    letter-spacing: 1px;*/
/*    color: #012970;*/
/*    font-family: "Nunito", sans-serif;*/
/*    margin-top: 3px;*/
/*}*/
/*.iti.iti--allow-dropdown.iti--separate-dial-code{*/
/*  outline: none ;*/
/*    border-color: white;*/
   
/*    margin-left:revert !important;*/
    
/*   }*/
/*   .input-field{*/
/*       max-width:380px;*/
/*       width:auto;*/
/*   }*/
/* .iti input, .iti input[type=tel]{*/
/*   max-width: revert !important;*/
/*  width: revert !important;*/
 
/*}*/
}
@media (max-width: 580px) {
    .iti.iti--allow-dropdown.iti--separate-dial-code {
         width: 100%;
    }
    .iti input, .iti input[type=tel] {
    
    font-weight: 580;
    font-size: 0.7rem;
}
   .header {
    top: 20px !important;
   }
   
.header .logo span {
    font-size: 25px !important;
}
.title {
    font-size: 1.5rem;
    color: #444;
    margin-bottom: 10px;
    margin-top:10px;
}
  .sign-in-form {
    padding: 0 1.5rem;
    margin-top: -250px!important;

  }
  .sign-up-form {
  opacity: 0;
  z-index: 1;
  /*margin-top: -700px!important;*/
}

.sign-in-form {
  z-index: 2;
}
.sign-up-form {
  z-index: 2;
}
 .btn.transparent {
    width: 110px;
    height: 35px;
    
    font-size: 0.9rem;
    /*color:#67B2E0;*/
  }

  .image {
    display: none;
  }
  .panel .content {
    padding: 0.5rem 1rem;
    /*margin-bottom:130px!important;*/
  }
  
  .container {
    padding: 1.5rem;
  }

  .container:before {
    bottom: 76%;
    left: 50%;
  }

  .container.sign-up-mode:before {
    bottom: 16.5%;
    left: 50%;
    margin-bottom: 50px!important;
  }
}
.whatsapp{
    position:fixed;
    bottom:20px;
    left:40px;
    z-index:100;
    transform: translate(-50%, -50%);
}
.header{
    width:fit-content;
    position:fixed;
  top:30px;
  padding: 20px 0;
    left:150px;
    z-index:100;
    transform: translate(-50%, -50%);
}
.header .logo {
  line-height: 0;
}

.header .logo img {
  max-height: 40px;
}

.header .logo span {
    margin-left: -10px;
  font-size: 30px;
  font-weight: 790;
  letter-spacing: 1px;
  color: #012970;
  /*font-family: "Nunito", sans-serif;*/
  margin-top: 3px;
}

.whatsapp{
    position:fixed;
    bottom:20px;
    left:40px;
    z-index:100;
    transform: translate(-50%, -50%);
}
.whatsapp:hover{
    cursor:pointer;
    position:fixed;
    bottom:50px;
    left:30px;
    animation: shake 0.8s  ;
    animation-iteration-count: infinite;
}
.iti__selected-flag{
    border-radius:20px;
}

.iti input, .iti input[type=tel]{
  margin: 10px 0;
  border-radius: 55px;
 
}

.mySlides {display: none;}
img {
    vertical-align: middle;
    margin-top: 15px;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.containerz {
    background-color: #6DB7E2;
    padding: 18px;
    margin: auto;
    box-shadow: 0px 0 30px rgb(1 41 112 / 18%);
    font-size: 18px;
    border-radius: 10px;
}

.containerz::after {
  content: "";
  clear: both;
  display: table;
}

.containerz img {
    margin-right: 25px;
    box-shadow: 0px 0 5px rgb(1 41 112 / 8%);
    border-radius: 50%;
}

.leftcontainerz{
    width:30%;
    float: left;
    margin: 0;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
} 

.rightcontainerz{
    width:70%;
    float: right;
    padding: 10px;
    text-align:left;
} 
.stars i {
    color: #ffc107;
    margin: 0 3px;
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
      <header id="header" class="header fixed-top">
      <a href="index.php" class="logo d-flex align-items-center" style="text-decoration: none;">
        <!--<img src="assets/img/logo.png" alt="">-->
        <img style="width:220px; color: white; max-height: revert;" src="logo1.png" alt="">
        <!--<img src="assets/img/logo.png" alt="">-->
        <!--<span style="font-family: Times New Roman; font-size:32px; vertical-align: middle;">KnockOnBrain</span>-->
        <!-- <img style="width:50px; height:30px; color: white;" src="Knockonbrain logo.png" alt="">-->
        <!--<span>Knock On Brain</span>-->
      </a>
     
      </header>
    <div class="container">
        
      <div class="forms-container">
        <div class="signin-signup">
            	<form id="login" action="" name="myform" method="post" class="sign-in-form" autocomplete="off" required="">
          <!--<form action="#" class="sign-in-form">-->
            <h2 class="title" style="margin-top:100px;">Sign in</h2>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Email" autocomplete="off" required="">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
             	<input type="password" name="password" placeholder="Password" autocomplete="new-password" required="">
            </div>
            <a href="https://phptest.avianglobes.com/user/forgetPassword/jforget.php" style="color:#67B2E0;">Forgot your password?</a>
            <input type="submit" value="Login"  name="login_user" class="btn solid" />
            <h1 class="title" style="font-weight:100;font-size: 0.9em;"> Don't have an account?</h1>
           <a class="btn transparent" id="sign-up-btn" style="color:#67B2E0;">
             <u>Register </u> 
            </a>
            <!-- <p class="social-text">Or Sign in with social platforms</p> -->
            <!-- <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
            
          </form>
          	<form action="register.php" method="post" class="sign-up-form" id="for" autocomplete="off">
          <!--<form action="#" class="sign-up-form">-->
            <h2 class="title">Create Account</h2>
             
           
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              	<input type="email" name="email" placeholder="Email"  autocomplete="off" required="" >
  		
            </div>
             <!--<div class="input-field">-->
             <!-- <i class="fas fa-user"></i>-->
              	<!--<input type="tel" placeholder="Phone Number" name="user_name" value="" autocomplete="off" required="">-->
  			<input type="tel" name="phone_number" id="phone_number" value="" placeholder="Phone Number" autocomplete="off"  class="input-field input-code">
             
            <!--</div>-->
            <div class="input-field">
              <i class="fas fa-lock"></i>
            	<input type="password" name="pass" placeholder="Password" autocomplete="new-password"  required="">
            </div>
            
            <div class="input-field">
              <i class="fas fa-briefcase"></i>
            	<input type="text" name="company" placeholder="Organization"  required="">
           </div>
           
           <div>
                <input type="checkbox" id="check" required="" style="margin-left:8px; margin-right:5px;"> I agree, Knock On Brain can send updates on given Email Id.
            </div>
            
            <!--<input onclick="sweetAlert('Successfully Registered!', 'You are now logged in on knockonbrain', 'success');" type="submit" class="btn" name="register" value="Register"/>-->
            <input onclick="myFunction();" type="submit" class="btn" name="register" value="Register"/>
            <h1 class="title" style="font-weight:100;font-size: 0.9em;"> Already  have an account?</h1>
             <a class="btn transparent" id="sign-in-btn" style="color:#67B2E0;">
            <u>Sign in</u>
            </a>
           
          </form>
          
          <script>
    var formn =document.getElementById('for');
    function myFunction(){
        if(formn.checkValidity()){
     swal({
  title: "Successfully Registered!",
  text: "You are now logged in on knockonbrain",
  icon: "success",
  button: "ok",
});
        }
    }
</script>
           <script>

var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
  separateDialCode: true,
  preferredCountries:["in"],
  hiddenInput: "full",
  utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
});

$("form").submit(function() {
  var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
// $("input[name='phone_number[full]'").val(full_number);
// alert(full_number)
$("#phone_number").val(full_number);
});
  
 </script>
        </div>
      </div>
<div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1> Welcome!</h1>
            <p style="font-size: 16px;">
             Please fill the required details for quick registration!
            </p>
            <!--<button class="btn transparent" id="sign-up-btn">-->
            <!--  Sign up-->
            <!--</button>-->
          </div>
          <img src="log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
        <!--visible before 870px-->
          <div class="content a">
            <h1>Welcome Back!</h1>
            <p style="font-size: 16px;">
                Enter your details to login!
            </p>
          </div>
           <!--visible after 870px-->
          <div class="content b">
            <h2>What they are saying about us!!</h2>
            <br>
            <div class="slideshow-container">
                
                <div class="mySlides fade">
                 
                  <div class="containerz">
                    <div class="stars">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    
                    <div class="leftcontainerz">
                      <img src="assets/img/boy.webp" style="width:100px">
                    </div>
                    
                    <div class="rightcontainerz">
                      <p>Great tool. The features are fresh, the usability is fantastic and most important a time saving tool.</p>
                      <p class="testi-name">-CEO</p>
                    </div>
                    
                 </div>
            
                </div>
                
                <div class="mySlides fade">
                 
                 <div class="containerz">
                     <div class="stars">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                     </div>
                      <div class="leftcontainerz">
                          <img src="assets/img/boy.webp" style="width:100px">
                      </div>
                      <div class="rightcontainerz">
                          <p>Helped us in organizing end-to-end online examination for the recruitment, allow us to effortlessly conduct the unlimited tests, set up custom test and roll out results. </p>
                          <p class="testi-name">-Senior Manager</p>
                      </div>
                 </div>
                 
                </div>
                
                <div class="mySlides fade">
                
                 <div class="containerz">
                     <div class="stars">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                      <div class="leftcontainerz">
                          <img src="assets/img/girl.webp" style="width:100px">
                      </div>
                      <div class="rightcontainerz">
                          <p>Team is always available to offer any assistance by helping and addressing queries, providing almost real-time solutions to the administration and test applicant.</p>
                          <p class="testi-name">-HR Manager</p>
                      </div>
                 </div>
                 
                </div>
                
                <div class="mySlides fade">
                
                 <div class="containerz">
                    <div class="stars">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="leftcontainerz">
                      <img src="assets/img/girl.webp" style="width:100px">
                    </div>
                    <div class="rightcontainerz">
                      <p>Helped us to onboard the quality resource for our organization.</p>
                      <p class="testi-name">-Senior HR</p>
                    </div>
                 </div>
                 
                </div>
                
                <div class="mySlides fade">
                
                 <div class="containerz">
                     <div class="stars">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                      <div class="leftcontainerz">
                          <img src="assets/img/girl.webp" style="width:100px">
                      </div>
                      <div class="rightcontainerz">
                          <p>Knockonbrain made it easier for us to hire the technical resources for our organization.</p>
                          <p class="testi-name">-IT Recruiter</p>
                      </div>
                 </div>
                 
                </div>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
          </div>
         
        </div>
      </div>
    </div>
    
     <div  class="whatsapp">
    
      <a href="https://wa.me/918826439673" ><img src="https://img.icons8.com/color/48/000000/whatsapp--v5.png"/></a>
      
  </div>
 
  </body>
  <script>
       const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");
        
        sign_up_btn.addEventListener("click", () => {
          container.classList.add("sign-up-mode");
        });
        
        sign_in_btn.addEventListener("click", () => {
          container.classList.remove("sign-up-mode");
        });
    </script>
    
     <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 7000); // Change image every 2 seconds
        }
    </script>
</html>