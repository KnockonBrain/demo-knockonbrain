<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Merriweather:wght@300&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <link href="assest/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    
    <title>REGISTER</title>
    
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
  /*margin-top: 50px;*/
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
    
    .container1{
          display:none;
      }
      .phoneslider{
          display:block;
      }
   
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
    margin-top:30px;
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
    bottom: 20%;
    left: 50%;
    margin-bottom: 70px!important;
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
}
.iti__selected-flag{
    border-radius:20px;
}

.iti input, .iti input[type=tel]{
  margin: 10px 0;
  border-radius: 55px;
 
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

.active1 {
  background-color: #717171;
}

.mySlides {
    display: none;
    
}

/* Slideshow container */
.slideshow-container {
  max-width: 100px;
  position: relative;
  margin: auto;
}

/*slider desktop*/
    
    .container1.ss {
        width: 60%;
        margin:auto;
    }
    
    img {
        vertical-align: middle;
    }
    
    /* Position the image container (needed to position the left and right arrows) */
    .container1 {
      position: relative;
    }
    
    /* Hide the images by default */
    .mySlides1 {
      display: none;
    }
    
    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
      cursor: pointer;
    }
    
    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 40%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }
    
    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }
    
    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    /* Container for image text */
    .caption-container {
      text-align: center;
      background-color: #222;
      padding: 2px 16px;
      color: white;
    }
    
    .row1:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Six columns side by side */
    .column1 {
      float: left;
      width: 16.66%;
    }
    
    /* Add a transparency effect for thumnbail images */
    .demo {
      opacity: 0.6;
    }
    
    .active,
    .demo:hover {
      opacity: 1;
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

.services .icon-box {
  box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
  padding: 50px 30px;
  transition: all ease-in-out 0.4s;
  background: #fff;
   flex-wrap: wrap;
   height: 100%;
   width: 80%;
}
.services .icon-box .icon {
  margin-bottom: 10px;
}
.services .icon-box .icon i {
  color: #47b2e4;
  font-size: 36px;
  transition: 0.3s;
}
.services .icon-box h4 {
  font-weight: 500;
  margin-bottom: 15px;
  font-size: 24px;
}
.services .icon-box h4 a {
  color: #37517e;
  transition: ease-in-out 0.3s;
}
.services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}
.services .icon-box:hover {
  transform: translateY(-10px);
}
.services .icon-box:hover h4 a {
  color: #47b2e4;
}

section {
  padding: 40px;
  overflow: hidden;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}
.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
  color: #37517e;
}
.section-title h2::before {
  content: "";
  position: absolute;
  display: block;
  width: 120px;
  height: 1px;
  background: #ddd;
  bottom: 1px;
  left: calc(50% - 60px);
}
.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #47b2e4;
  bottom: 0;
  left: calc(50% - 20px);
}
.section-title p {
  margin-bottom: 0;
}

.row {
    --bs-gutter-x: 2rem;
    display: flex;
    /*flex-wrap: wrap;*/
}

.pricing .row {
  padding-top: 40px;
}
.pricing .box {
  padding: 60px 40px;
  box-shadow: 0 3px 20px -2px rgba(20, 45, 100, 0.1);
  background: #fff;
  height: 100%;
  border-top: 4px solid #fff;
  border-radius: 5px;
  margin-left: 85px;
  margin-right: 80px;
  width: 95%;
}
.pricing h3 {
  font-weight: 500;
  margin-bottom: 15px;
  font-size: 20px;
  color: #37517e;
}
.pricing h4 {
  font-size: 48px;
  color: #37517e;
  font-weight: 400;
  font-family: "Jost", sans-serif;
  margin-bottom: 25px;
}
.pricing h4 sup {
  font-size: 28px;
}
.pricing h4 span {
  color: #47b2e4;
  font-size: 18px;
  display: block;
}
.pricing ul {
  padding: 20px 0;
  list-style: none;
  color: #999;
  text-align: left;
  line-height: 20px;
}
.pricing ul li {
  padding: 10px 0 10px 30px;
  position: relative;
}
.pricing ul i {
  color: #28a745;
  font-size: 24px;
  position: absolute;
  left: 0;
  top: 6px;
}
.pricing ul .na {
  color: #ccc;
}
.pricing ul .na i {
  color: #ccc;
}
.pricing ul .na span {
  text-decoration: line-through;
}

.pricing .featured {
  border-top-color: #47b2e4;
}

.bx {
    font-family: boxicons!important;
    font-weight: 400;
    font-style: normal;
    font-variant: normal;
    line-height: 1;
    text-rendering: auto;
    display: inline-block;
    text-transform: none;
    speak: none;
    -webkit-font-smoothing: antialiased;
    /*-moz-osx-font-smoothing: grayscale;*/
}
.bx-check:before {
    content: "\eca4";
}

.skills .content ul {
  list-style: none;
  padding: 0;
}
.skills .content ul li {
  padding-bottom: 10px;
}
.skills .content ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #47b2e4;
}
.skills .content p:last-child {
  margin-bottom: 0;
}
.skills .progress {
  height: 60px;
  display: block;
  background: none;
  border-radius: 0;
}
.skills .progress .skill {
  padding: 0;
  margin: 0 0 6px 0;
  text-transform: uppercase;
  display: block;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  font-size: 15px;
  color: #37517e;
}
.skills .progress .skill .val {
  float: right;
  font-style: normal;
}
.skills .progress-bar-wrap {
  background: #e8edf5;
  height: 10px;
}
.skills .progress-bar {
  height: 10px;
  transition: 0.9s;
  background-color: #4668a2;
}

@media screen and (max-width: 600px) {
  .skills {
    display: flex;
    align-content: stretch;
    flex-direction: column;
  }
  .skills .img1{
    width: 200%;
    margin-left: -65px;
  }
  .skills .col-lg-6{
      display: contents;
  }
  
  .row{
    display: flex;
    /*align-content: center;*/
    flex-direction: column;
    /*margin-bottom: 3%;*/
  } 
  .row .icon-box{
      width: 120%;
      display: table-cell;
  }
  
  .pricing .box{
      display: table-cell;
      width: 90%;
  }
  
  #gallery .section-title{
      display:none;
  }

/* Fading animation */

.skills{
    animation: fadeInAnimation ease 3s
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
}
@keyframes fadeInAnimation {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
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
            	<form action="alter.php" method="post" class="sign-in-form" autocomplete="off">
          <!--<form action="#" class="sign-in-form">-->
            <h2 class="title" style="padding-top: 60px;">Create Account</h2>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" autocomplete="off" required="">
            </div>
            
            <input type="tel" name="phone_number" id="phone_number" value="" placeholder="Phone Number" autocomplete="off"  class="input-field input-code" required="">
            
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

            <input type="submit" value="Register"  name="register" class="btn solid" />
            <h1 class="title" style="font-weight:100;font-size: 0.9em;"> Already have an account?</h1>
           <a class="btn transparent" id="sign-up-btn" style="color:#67B2E0;">
             <u>Sign In</u> 
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
          	<form action="" method="post"class="sign-up-form" autocomplete="off">
          <!--<form action="#" class="sign-up-form">-->
            <h2 class="title">Sign In</h2>
             
           
            <div class="input-field">
              <i class="fas fa-user"></i>
              	<input type="email" name="username" placeholder="Email"  autocomplete="off" required="" >
  		
            </div>
            
            <!--</div>-->
            <div class="input-field">
              <i class="fas fa-lock"></i>
            	<input type="password" name="password" placeholder="Password" autocomplete="new-password"  required="">
            </div>
            
            <a href="https://35.154.101.124/CLient/forgetPassword/jforget.php" style="color:#67B2E0;">Forgot password?</a>
            
            <input type="submit" class="btn"  name="login_user" value="Login" />
            <h1 class="title" style="font-weight:100;font-size: 0.9em;"> Don't have an account?</h1>
             <a class="btn transparent" id="sign-in-btn" style="color:#67B2E0;">
            <u>Register</u>  
            </a>
           
          </form>
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
  
  <main id="main">
  
  <!--- ====== Benefits Section ====== -->
  
  <section id="benefits" class="skills" style="background-color: #f3f5fa; display: flex;">
    <div class="col-lg-6 d-flex align-items-center">
        <div class="img1">
        <img src="assest/img/skills.png" style="width: 50%; margin-left: 12%; margin-bottom: 40px; margin-top: 40px;"> </div>
    </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" style="margin-left: -20%;">
            <br><h3 style="font-weight: 700; font-size: 32px; color: #37517e; font-family: "Poppins", sans-serif;">BENEFITS</h3>
            <p style="font-style: italic; font-size: 15px; margin-bottom: 15px;"> Join with us and get to enjoy all these benefits for free</p>
            
            <div class="skills-content">
                
              <div class="progress">
                <span class="skill">Time Saving <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                 <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                </div>
   			</div> 
              

              <div class="progress">
                <span class="skill">Improve Quality of Resources <i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Cost Reduction & Mis Hiring <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Increase Onboarding v/s Interviews <i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                </div>
              </div>
              </div>

            </div>
        </div>

  </section>
  
  <!-- ======= Features Section ======= -->
  <section id="features" class="services section-bg">
       <div class="section-title">
          <h2>Features</h2>
          <p>Features that simplify Recruiting!!!</p>
        </div>
        
        <div class="row">
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0">
            <div class="icon-box" style=" margin-left: 120px;">
              <div class="icon"><i class="bx bx-camera-home"></i></div>
              <h4><a href="">Watch Applicant Test Video Anytime</a></h4>
              <p>All test sessions are recorded and can be downloaded or watched anytime as per convenience.</p>
            </div>
          </div>  
          
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box" style=" margin-left: 78px;">
              <div class="icon"><i class="bx bx-calendar-plus"></i></div>
              <h4><a href="">Schedule Unlimited Test For Free</a></h4>
              <p>KnockOnBrain is the only online assessment tool in market which is 100% free without any hidden cost.</p>
            </div>
          </div>
          
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0">
            <div class="icon-box" style=" margin-left: 30px;">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Customize your own test</a></h4>
              <p>The tool has already some pre-defined categories of tests, apart from this you can create your own custom tests.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box" style=" margin-left: -20px;">
              <div class="icon"><i class="bx bx-desktop"></i></div>
              <h4><a href="">User Friendly Dashboard</a></h4>
              <p>Quick-go flow with interactive and responsive dashboard where you can enjoy all the features.</p>
            </div>
          </div>
        </div><br><br>
      
  </section><!-- End Features -->
  
  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing" style="background-color: #f3f5fa;">
      <div class="section-title">
          <h2>Why Us</h2>
          <p>Knock On Brain is absolutely 100% free tool to use with no hidden costs</p>
        </div>
        
        <div class="row">
        <div class="col-lg-6">
            <div class="box featured">
              <h3>KnockOnBrain</h3>
              <h4><sup><i class="fas fa-rupee-sign"></i></sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Schedule Unlimited Test</li>
                <li><i class="bx bx-check"></i> AI Based Proctoring</li>
                <li><i class="bx bx-check"></i> Watch Complete test Video Anytime</li>
                <li><i class="bx bx-check"></i> Conduct coding based test</li>
                <li><i class="bx bx-check"></i> Free to use test library</li>
                <li><i class="bx bx-check"></i> Ease in creating your own test</li>
                <li><i class="bx bx-check"></i> Invite upto 1 Lakh Candidates in a day</li>
                <li><i class="bx bx-check"></i> Quick and intuitive portal</li>
                <li><i class="bx bx-check"></i> No hidden charges or limitations</li>
                <li><i class="bx bx-check"></i> 24X7 Help & Support</li>
         
              </ul>
              <!--<a href="#" class="buy-btn">Get Started</a>-->
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box">
              <h3>Market</h3>
              <h4><sup><i class="fas fa-rupee-sign"></i></sup>10k-50k?<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-x" style="color:red;"></i> <span>Schedule Unlimited Test</span></li>
                <li><i class="bx bx-check"></i> AI Based Proctoring</li>
                <li><i class="bx bx-x" style="color:red;"></i> <span>Watch Complete test Video Anytime</span></li>
                <li><i class="bx bx-check"></i> Conduct coding based test</li>
                <li><i class="bx bx-x" style="color:red;"></i> <span>Free to use test library</span></li>
                <li><i class="bx bx-x" style="color:red;"></i> <span>Ease in creating your own test</span></li>
                <li><i class="bx bx-x" style="color:red;"></i> <span>Invite upto 1 Lakh Candidates in a day</span></li>
                <li><i class="bx bx-x" style="color:red;"></i> <span>Quick and intuitive portal</span></li>
                <li><i class="bx bx-x" style="color:red;"></i> <span>No hidden charges or limitations</span></li>
                <li><i class="bx bx-check"></i></i> <span>24X7 Help & Support</span></li>

              </ul>
              <!--<a href="#" class="buy-btn">Get Started</a>-->
            </div>
          </div>
          </div><br><br>
  </section><!-- End Pricing -->
  
  <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="section-bg" style="width: 90%; margin-left: 80px;">
        
        <div class="section-title" style="margin-bottom: -30px;">
          <h2>Portal View</h2>
          <!--<p>Features that simplify Recruiting!!!</p>-->
        </div>

        <div class="row phoneslider">
         <div class="slideshow-container">
            
            <div class="mySlides">
              <img src="assest/img/img2.png" style="width:100%">
            </div>
            
            <div class="mySlides">
              <img src="assest/img/img7.png" style="width:100%">
            </div>
            
            <div class="mySlides">
              <img src="assest/img/img3.png" style="width:100%">
            </div>
            
            <div class="mySlides">
              <img src="assest/img/img4.png" style="width:100%">
            </div>
            
            <div class="mySlides">
              <img src="assest/img/img10.png" style="width:100%">
            </div>
            
            <div class="mySlides">
              <img src="assest/img/img9.png" style="width:100%">
            </div>

         </div>
        
    </div>
    
    <!--second slider-->    
        <div class="container1 ss">
          <div class="mySlides1">
            <img src="assest/img/img2.png" style="width:100%">
          </div>
        
          <div class="mySlides1">
            <img src="assest/img/img7.png" style="width:100%">
          </div>
        
          <div class="mySlides1">
            <img src="assest/img/img3.png" style="width:100%">
          </div>
            
          <div class="mySlides1">
            <img src="assest/img/img4.png" style="width:100%">
          </div>
        
          <div class="mySlides1">
            <img src="assest/img/img10.png" style="width:100%">
          </div>
        
        <div class="mySlides1">
            <img src="assest/img/img9.png" style="width:100%">
          </div>
            
          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
        
          <div class="caption-container" style="height:30px;">
            <p id="caption"></p>
          </div>
        
          <div class="row1">
            
            <div class="column1">
              <img class="demo cursor" src="assest/img/img2.png" style="width:100%" onclick="currentSlide(1)" alt="Schedule Test">
            </div>
            <div class="column1">
              <img class="demo cursor" src="assest/img/img7.png" style="width:100%" onclick="currentSlide(2)" alt="Coding Test">
            </div>
            <div class="column1">
              <img class="demo cursor" src="assest/img/img3.png" style="width:100%" onclick="currentSlide(3)" alt="Custom Test">
            </div>
            <div class="column1">
              <img class="demo cursor" src="assest/img/img4.png" style="width:100%" onclick="currentSlide(4)" alt="View Result">
            </div>
            <div class="column1">
              <img class="demo cursor" src="assest/img/img10.png" style="width:100%" onclick="currentSlide(5)" alt="Schedule Demo">
            </div>
            <div class="column1">
              <img class="demo cursor" src="assest/img/img9.png" style="width:100%" onclick="currentSlide(6)" alt="Psychometric Test Result">
            </div>
          </div>
        </div>
    </section>
    <!-- End gallery Section -->

  </main>
 
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
            dots[i].className = dots[i].className.replace(" active1", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active1";
          setTimeout(showSlides, 7000); // Change image every 2 seconds
        }
    </script>
    
    <script>
    var slideIndex = 1;
    showSlides1(slideIndex);
    function plusSlides(n) {
      showSlides1(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides1(slideIndex = n);
    }
    
    function showSlides1(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides1");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
  
}
</html>