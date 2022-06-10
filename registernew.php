<?php include('server.php') ?>
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

  <title>REGISTER</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
      
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

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assest/vendor/aos/aos.css" rel="stylesheet">
  <link href="assest/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assest/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assest/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assest/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assest/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assest/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  
  <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="build/css/intlTelInput.css">

  <!-- Template Main CSS File -->
  <link href="assest/css/style1.css" rel="stylesheet">
  
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
  
 <style>
 *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body, input {
  font-family: "Poppins", sans-serif;
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

.iti input, .iti input[type=tel]{
  left:-5px;
 padding-left:90px !important;
 font-weight: 600;
    font-size: 1.1rem;
  
}
::placeholder{
    color: #bababa;
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
.input-field input::placeholder {
  color: #aaa;
  font-weight: 500;
}

     .iti {
        width:60%;
     }
      .close1{
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        width: 2rem;
        height: 2rem;
        border: 1px solid #e7e7e7;
        border-radius: 50%;
        background: #fff;
        top: -13px;
        left: 100%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        background-color: black;
        color: white;
        font-size: 1.3rem;
    }
    .close1:hover,
    .close1:focus {
        background-color: #f2f2f2;
      color: red;
      text-decoration: none;
      cursor: pointer;
    }
    
    /* Phone Gallery*/
       
    .phoneslider{
        display:none;
    }
    .mySlides {display: none;}
    img {vertical-align: middle;}
    
    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }
    
    /* Caption text */
    .text {
      color: black;
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
    
    .active1 {
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
    /*Gallery Ends*/
    
        /*form-----*/
    input[type=email], input[type=password],input[type=tel],input[type=text]{
      width: 60%;
      padding: 15px;
      border: none;
      background: #f1f1f1;
      font-weight: 500;
      font-size: 16px;
      letter-spacing: 1px;
      border-radius: 50px;
      transition: 0.5s;
      color: #fff;
     
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
    
        
   @media only screen and (max-width: 800px) {
      .container1{
          display:none;
      }
      .phoneslider{
          display:block;
      }
    } 
    
/*End ------*/
 @media only screen and (max-width: 500px) {
      .iti{
          width:80%;
      }
      input[type=email], input[type=password], input[type=tel], input[type=text] {
         width: 80%;
     } 
 }

  </style>
</head>

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
        
      <div class="forms-container">
        <div class="signin-signup">
            <form action="register.php" method="post"class="sign-up-form" autocomplete="off">
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
            
            <input type="submit" class="btn" name="register" value="Register " />
            <h1 class="title" style="font-weight:100;font-size: 0.9em;"> Already  have an account?</h1>
             <a class="btn transparent" id="sign-in-btn" style="color:#67B2E0;">
            <u>Sign in</u>  
            </a>
           
          </form>
          <script>
          var phone_number = window.intlTelInput(document.querySelector("#phone_number"), 
          {
              separateDialCode: true, preferredCountries:["in"], hiddenInput: "full", 
              utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
              
          });
              $("form").submit(function() 
              {
                  var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
                  // $("input[name='phone_number[full]'").val(full_number);
                  // alert(full_number)
                  $("#phone_number").val(full_number);
                  
              });
              </script>
        </div>
      </div>

      
  <!---------------phone code-------->
<script src="build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      utilsScript: "build/js/utils.js",
    });
  </script>
  
  <!--------END Phone code--------->
  
 
  <main id="main">
			  
<!-- ======= benefits Section ======= -->
    <section id="benefits" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assest/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>BENEFITS</h3>
            <p class="fst-italic">
              Join with us and get to enjoy all these benefits for free.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Time Saving <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Improve Quality of Resources <i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Cost Reduction & Mis Hiring <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Increase Onboarding v/s Interviews <i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End benefits Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Features</h2>
          <p>Features that simplify Recruiting!!!</p>
        </div>

        <div class="row1">
            
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-camera-home"></i></div>
              <h4><a href="">Watch Applicant Test Video Anytime</a></h4>
              <p>All test sessions are recorded and can be downloaded or watched anytime as per convenience.</p>
            </div>
          </div>  
              
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-calendar-plus"></i></div>
              <h4><a href="">Schedule Unlimited Test For Free</a></h4>
              <p>KnockOnBrain is the only online assessment tool in market which is 100% free without any hidden cost.</p>
            </div>
          </div>


          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Customize your own test</a></h4>
              <p>The tool has already some pre-defined categories of tests, apart from this you can create your own custom tests.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-desktop"></i></div>
              <h4><a href="">User Friendly Dashboard</a></h4>
              <p>Quick-go flow with interactive and responsive dashboard where you can enjoy all the features.</p>
            </div>
          </div>

          
        </div>

      </div>
    </section><!-- End Services Section -->

   
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Knock On Brain is absolutely 100% free tool to use with no hidden costs</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
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

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
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

        </div>

      </div>
    </section><!-- End Pricing Section -->
    
    
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
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
        <br>
        <div style="text-align:center; padding-top:10px">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span>
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
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


     

      </div>
    </section>
    <!-- End gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>KnockOnBrain</h3>
            <p>
              1144, Tower B2,<br>
              Spaze IT Park, Sector-49,<br>
               Gurgaon <br><br>
              <strong>Phone:</strong> +91-882-643-9673<br>
              <strong>Email:</strong> contactus@knockonbrain.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#benefits">Benefits</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Features</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#pricing">Why Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://phptest.avianglobes.com/">Tech Scope</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://phptest.avianglobes.com/">Online Assessment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://phptest.avianglobes.com/">Custom Solution For Corporates</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Connect with us</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/KnockonBrain/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <!--<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>-->
              <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
              <a href="https://www.linkedin.com/company/knockonbrain/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>KnockOnBrain</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="">KnockOnBrain</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assest/vendor/aos/aos.js"></script>
  <script src="assest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assest/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assest/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assest/vendor/php-email-form/validate.js"></script>
  <script src="assest/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assest/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assest/js/main.js"></script>
  
  <script>
// Get the modal
var modal = document.getElementById("pop");
var btn = document.getElementById("signin");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
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
  setTimeout(showSlides, 5000); // Change image every 5 seconds
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
$("#phone_number").val(full_number);
});
  
 </script>

</body>

</html>