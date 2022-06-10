<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KnockOnBrain</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
      
  <link href="favicon-logo1.png" rel="icon">
  <link href="favicon-logo1.png" rel="apple-touch-icon">

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
  
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>
  
 <style>
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


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
    
    <a href="" class="logo me-auto">
        <img src="logo1.png" alt="" class="img-fluid" style="width:220px; max-height:revert; position: absolute; margin-top: -30px;">
        <!--<h1 class="logo me-auto"  style="font-family: Times New Roman; color:white; margin-left: 70px;">KnockOnBrain</h1>-->
    </a>

      <nav id="navbar" class="navbar">
          
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#benefits">Benefits</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Why Us</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
         
         <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="d-flex align-items-center" style="height: 80%; padding-top: 70px;">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Free Registrations Ending Soon!</h1>
          <h2>Do register under free registration policy to keep enjoying the service without any pay!</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
			<form action="" method="post"class="sign-up-form" autocomplete="off">
    		<div class="sign-up" id="sign" >
                <h1><center>Register</h1>
    			<input type="email" name="email" id="email" placeholder="Your Email" autocomplete="off" required style="color:black;">
    			<center><input style="display: block; width:100%; color:black;" type="tel" name="phone_number" id="phone_number" value="" placeholder="Phone Number" autocomplete="off"  class="input-field input-code"></center>
    			<!--<center><input type="tel" name="phone" id="phone" placeholder="Phone Number" ></center>-->
    			<!--<input type="tel" name="Phone No." id="Phone Number" placeholder="Phone Number" />-->
                <input type="password" name="pass" id="pass" placeholder="Password" required style="color:black;"></center>
                <input type="text" name="company"  placeholder="Company Name" required style="color:black;">
                <!--<input type="text" name="company" placeholder="Company Name"  required="">-->
                
                <div style="color:white; display:flex; margin:0px;">
                    
                    <input type="checkbox" id="check" required="" style="width:revert; margin: 5px; margin-left:40px;"> I agree Knock On Brain can send updates on given Email Id.
                    
                </div>
                
                <center><input type="submit" class="btn-get-started scrollto" name="register" value="Register"/>
                <br><br>
    				<p style="color:white">Already have an account? <a href="#" id="signin">Sign in</a></p>
    			</center>
    		</div>
          </form>
        </div>
      </div>
    </div>
    
  </div><!-- End Hero -->

<!--popup-->
 <div class="popup" id="pop">
  <div class="popup-content">
    <!--<img src="assest/img/close.png" alt ="close" id="close" class="close">-->
    <span class="close1">
                &times;
    </span>
    <form id="login" action="" name="myform" method="post" class="sign-in-form" autocomplete="off" required="">
	<div class="sign-up" id="sign" > 
    <input type="email" name="username" id="email" placeholder="Your Email" autocomplete="off" required style="color:black;">
    <input type="password" name="password" id="pass" placeholder="Password" autocomplete="off" required style="color:black;">
    <input type="submit" value="Login"  name="login_user" class="btn-get-started scrollto" />
    
	</div>
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

        <div class="row">
            
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