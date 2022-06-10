
<?php
require_once("CLient/config.php");
    session_start();
   
    if(isset($_POST['submit'])) {
       $name = $_POST['name'];
       $mypassword = md5($_POST['password']); 

        $sql = "SELECT * FROM users WHERE user_nicename = '$name' and user_password = '$mypassword'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
       if($count==1){
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["user_nicename"] = $row['user_nicename'];
        }else {
                $sql = "SELECT * FROM users WHERE user_email = '$name' and user_password = '$mypassword'";
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
                $count2 = mysqli_num_rows($result);
                if($count2==1){
                $_SESSION["ID"] = $row['ID'];
                $_SESSION["user_nicename"] = $row['user_nicename'];
                }
                else{$message = "Invalid Username or Password!";}
        }
         
    }
         
            if(isset($_SESSION["ID"])) {
            header("Location:CLient/test.php");
            }
   
    
?>
<html>
<head>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="images/Knockonbrain logo.png">
        <link rel=" icon" type="image/jpg" href="images/fevicon.jpg"/>
        <link rel="icon" type="image/png" sizes="16x16" href="images/Knockonbrain logo.png">
        <title>Client Login Page</title>
        <link rel="shortcut icon" type="image/jpg" href="images/fevicon.jpg"/>
        <!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('ntw3vk4zr7ni');
</script>
<!-- End of Async Drift Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>
    <style>
            .bcontainer
            {
                background-color: #F9FAFE;
                padding-top: 50px;
                padding-bottom: 50px;
            }
            .bcontainer h1
            {
                text-align:center;
                font-size: 50px;
                margin-bottom: 50px;
            }
            .container
            {
                width: 960px;
                margin: auto;
                box-sizing: border-box;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

                background-color: white;
            }
            .details
            {
                width: 35%;
                float: left;
                background-color:#103F6E;
                color: white;
                padding: 50px 35px 10px 35px;
            }
            .details h3
            {
                font-size: 24px;
                margin-bottom: 17px;
            }
            .details p
            {
                font-size: 15px;
                margin-bottom: 40px;
            }
            .details .icon
            {
                margin-bottom: 30px;
            }
            .details .icon i
            {
                font-size: 20px;
                margin-right: 15px;
                border-radius: 50%;
                border: 1px solid white;
                padding: 10px;
                float: left;
            }
            .details .icon label
            {
                font-size: 15px;
            }
            .details .icon p
            {
                font-size: 15px;
                padding-top: 10px;
            }
            
            .messages
            {
                width: 65%;
                float: right;
                padding: 50px 35px 0px;
                background-color: white;
            }
            .messages h3
            {
                font-size: 24px;
                margin-bottom: 30px;
                text-align: center;
            }
            .messages .boxx
            {
                float: left;
            }
            .messages .box
            {
            }
            .messages label
            {
                text-transform: uppercase;
                font-size: 14px;
                font-weight: 600;
            }
            .messages .text
            {
                
                width: 250px;
                margin:15px 0;
                border: 1px solid gray;
                border-top-style: hidden;
                border-right-style: hidden;
                border-left-style: hidden;
                padding: 0px 0 10px;
                margin-right: 20px;
            }
            .messages .textt
            {
                width: 95%;
            }
            .messages .sform
            {
                display: none;
                padding: 20px;
                background-color:#ECF9F0;
                color: #61B683;
                border-radius: 10px;
                font-size: 18px;
                width: 100%;
                margin: auto;
            }
            .messages  .dform
            {
                display: none;
                padding: 20px;
                background-color:#f0aaaa;
                color: #c25555;
                border-radius: 10px;
                font-size: 18px;
                width: 100%;
                margin: auto;
            }
            .messages .dform:hover
            {
                cursor: pointer;
                text-decoration: underline; 
                color:red;
            }
            .messages .text:focus
            {
                outline:none;
            }
            .messages .btnn
            {
                text-align: center;
            }
            .messages button
            {
                padding: 12px 10px;
                cursor: pointer;
                font-size: 17px;
                outline: none;
                border:none;
                background-color:#103F6E;
                color: white;
                border: 5px;
                margin-top: 15px;
            }
            .messages button:hover
            {
                background-color:#43b2f0;
                cursor: pointer;
            }
            @media (max-width:1000px)
            {
                .container
                {
                    width: 700px;
                    margin-bottom: 20px;
                }
                .details
                {
                    padding: 50px 00px 10px 20px;
                }
                .details h3
                {
                    font-size: 20px;
                    margin-bottom: 17px;
                }
                .details p
                {
                    font-size: 14px;
                }
                .details .icon i
                {
                    font-size: 14px;
                    margin-right: 10px;
                    padding: 6px;
                }
                .details .icon label
                {
                    font-size: 13px;
                }
                .details .icon p
                {
                    font-size: 13px;
                    padding-top: 6px;
                }
                .messages
                {
                    padding: 50px 10px 0px 35px;
                }
                .messages .text
                {
                    width: 185px;
                }
                .messages .textt
                {
                    width: 95%;
                }
                .messages button
                {
                    margin-top: 0px;        
                }
                .messages .sform
                {
                    font-size: 16px;
                }
                .messages  .dform
                {
                    font-size: 16px;
                }
            }
            @media (max-width:730px)
            {
                .container
                {
                    width: 350px;
                }
                .details
                {
                    padding: 50px 15px 10px 35px;
                    float: none;
                    width: auto;
                }
                .details h3
                {
                    font-size: 24px;
                    margin-bottom: 17px;
                }
                .details p
                {
                    font-size: 15px;
                    margin-bottom: 40px;
                }
                .details .icon
                {
                    margin-bottom: 30px;
                }
                .details .icon i
                {
                    font-size: 20px;
                    margin-right: 15px;
                    padding: 10px;
                }
                .details .icon label
                {
                    font-size: 15px;
                }
                .details .icon p
                {
                    font-size: 15px;
                    padding-top: 10px;
                }
                .messages
                {
                    width: auto;
                    float: none;
                    padding: 50px 35px 30px;
                }
                .messages .sform
                {
                    font-size: 18px;
                    margin-bottom: 300px;
                }
                .messages  .dform
                {
                    font-size: 18px;
                    margin-bottom: 300px;
                }
                .messages .boxx
                {
                    float: none;
                }
                .messages .text
                {
                    width: 100%;
                }
                .messages button
                {
                    margin-top: 10px;
                }
            }
         
	.xcontainer{
			max-width: 1170px;
			margin: auto;
			box-sizing: border-box;		
		}
		ul{
			list-style: none;
		}
		.xrow{
			display: flex;
			flex-wrap: wrap;
		}
		.footer{
			background-color:#2B3856 ;
			padding: 70px 0;
			line-height: 1.5;
			font-family: 'Poppins', sans-serif;
		}
		.footer-col{
			width: 30%;
			padding: 0 15px;
		}
		.footer-col h2{
			font-size: 30px;
			color: #ffffff;
			text-transform: capitalize;
			margin-bottom: 35px;
			font-weight: 500;
			position: relative;
			margin-left: 05px;
		}
		.footer-col h3{
			font-size: 16px;
			color: #ffffff;
			text-transform: capitalize;
			font-weight: 300;
			display: block;
			transition: all 0.3s ease;	
		}
		.footer-col h2::before{
			content:'';
			position: absolute;
			left:0;
			bottom: -10px;
			background-color: #e91e63;
			height: 2px;
			box-sizing: border-box;
			width: 50px;
		}
		.footer-col ul li:not(:last-child){
			margin-bottom: 10px;
		}
		.footer-col ul li a{
			font-size: 16px;
			color: #ffffff;
			text-transform: capitalize;
			color: #bbbbbb;
			font-weight: 300;
			display: block;
			text-decoration: none;
			transition: all 0.3s ease;

			
		}
		.footer-col ul li a:hover{
			color: #ffffff;
			padding-left: 8px;
		}
		.footer-col .social-links a{
			display: inline-block;
			height: 40px;
			width: 40px;
			background-color: #0020C2;
			margin: 0 10px 10px 0;
			text-align: center;
			line-height: 40px;
			border-radius: 50%;
			color: #ffffff;
			transition: all 0.5s ease;
			
			
		}
	    .footer-col .social-links a i{
	       margin-top: 11px; 
	        
	    }
		.footer-col .social-links a:hover{
			color: #24262b;
			background-color: #ffffff;
		}
		.copy h4{
		    text-align: center;
		    color: #ffffff;
		    margin-top: 15px;
		}
		/*responsive*/
		@media(max-width: 700px){
		.footer-col{
			width: 100%;
			
		}
		}


            
            
        </style>
</head>
<body>
        <nav>
            <div class="row">
                <div class="toggle">
                    <button class="openbtn" id="nav-toggle" onclick="openNav()" ><i class="fas fa-bars icon"></i></button>  
                </div>
                <div class="cull" style="margin:9px 0px 0 10px;">
                <img alt="giit solutions" src="images/Knockonbrain logo (1).png"> &nbsp;
                </div>
                <div class="cull">
                    
                    <h1>KnockOnBrain</h1>
                </div>
                <ul class="cul">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="disclaimer.php">Disclaimer</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="toggle-item" id="toggle-item">
                <hr>
                <div class="item"><a class="active" href="index.php">Home</a></div><hr>
                <div class="item"><a href="disclaimer.php">Disclaimer</a></div><hr>
                <div class="item"><a href="contact.php">Contact Us</a></div><hr>
            </div>
        </nav>
   
    <script>
                                $(document).ready(function()
                                    {
                                        $('#nav-toggle').click( function(e) 
                                        {
                                            e.preventDefault();
                                            e.stopPropagation(); 
                                            $('#toggle-item').toggle();
                                        });
                                        $('#toggle-item').click( function(e) 
                                        {
                                            e.stopPropagation(); 
                                        });
                                        $('body').click( function() 
                                        {
                                            $('#toggle-item').hide();
                                        });
                                    });   
                            </script>
                            

                            
        <section>
            <div class="bodyhead"> 
                <div class="row">
                    <div class="textheading">
                        <h1>Knock On Brain</h1>
                        <h2> Makes Recruitment Easy!</h2>
                    </div>
                    <form name="frmUser" method="post" action="" id="f1">
                    <div class="textform">
                        <div>
                            <?php
                       echo "<div style='color:#ffb3b3;'><strong><h1>$message</h1></strong></div>"
                       ?><br>
                            <div class="label1"><label for="username" class="">Username/Email</label></div>
                            <div class=""><input type="text" name="name" class="text1" id="username" required></div>
                            <div class="label1"><label for="pwd" class="">Password</label></div>
                            <div class=""><input type="password" name="password" class="text1" id="pwd" required></div>
                            
                            
                            <div class="button">
                                <input type="submit" name="submit" value="Login" id="submit" class="btn btn1">
                                <a href="../register.php"><button type="button" class="btn btn2">Register</button></a>
                            </div>
                            <div class="forgot">
                                <p><a href="../CLient/forgetPassword/forget.php">Forgot your Password?</a></p>
                                
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
        <section>
            <div class="features">
                <h1> Features</h1>
                <div class="row">
                    <div class="box">
                        <div class=""><i class="fas fa-scroll icon"></i></div>
                        <h4>Schedule Unlimited Test For Free</h4>
                    </div>
                    <div class="box">
                        <div class=""><i class="fab fa-reddit icon"></i></div>
                        <h4>AI/ML Based Auto Proctoring</h4>
                    </div>
                    <div class="box">
                        <div class=""><i class="fas fa-cloud icon"></i></div>
                        <h4>Video Storage on Cloud</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="box">
                        <div class=""><i class="fas fa-video icon"></i></div>
                        <h4>Watch Applicant Test Video Anytime</h4>
                    </div>
                    <div class="box">
                        <div class=""><i class="fas fa-edit icon"></i></div>
                        <h4>Create Your Own Test</h4>
                    </div>
                    <div class="box">
                        <div class=""><i class="fas fa-list icon"></i></div>
                        <h4>10,000+ Questions For Each Category</h4>
                    </div>
                </div>
                
                
            </div>
        </section>
        <section>
            <div class="benefits">
                <div class="row">                    
                    <div class="sideicons">
                        <h1> Benefits</h1>
                        <div class="box">
                            <div class="icon"><i class="fas fa-cash-register"></i></div>
                            <h4>No Debit or Credit Required For Registration</h4>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fas fa-user-check"></i></div>
                            <h4>Easy To Use</h4>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fas fa-user-circle"></i></div>
                            <h4>Time Saving</h4>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fas fa-list-alt"></i></div>
                            <h4>Filter Applicants</h4>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fas fa-dollar-sign"></i></div>
                            <h4>Cost Saving Solution</h4>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <h4>24X7 Help & Support</h4>
                        </div>
                        
                    </div>
                    <div class="image">
                        <img src="images/facilites.jpg">
                    </div>
                </div>
            </div>
        </section>
        <br><br>
<section class="bcontainer">
    <h1> Contact Us</h1>
            <div class="container">
                
                <div class="row">
                    <div class="details">
                        <h3> Let's get in touch </h3>
                        <p> We're open for any suggestions or just to have a chat! </p>
                        <div class="row">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                                <label>1144, Tower B2, Spaze IT Park, Sector-49, Gurgaon</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                                <p>+91-882-643-9673</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                                <p>+1-209-330-3761</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                                <p>contactus@knockonbrain.com</p>
                            </div>
                        </div>
                    </div>  
                    <div class="messages">
                        <h3> Send Us A Message  </h3>
                        <div class="sform">
                            <h4>Thanks for contacting us, we will revert you soon!</h4>
                        </div>
                        <div class="dform">
                            <h4 id="error">Error! Try Again</h4>
                        </div>
                        <div id="myForm" method="POST">
                            <div class="form">
                                <div class="row">
                                    <div class="boxx">
                                        <div><label> Full Name </label></div>
                                        <input type="text" class="text" placeholder="Name" id="namec" required>
                                    </div>
                                    <div class="boxx">
                                        <div><label> Email </label></div>
                                        <input type="email" class="text" placeholder="Email" id="emailc" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="boxx">
                                        <div><label> Phone No. </label></div>
                                        <input type="text" class="text" placeholder="Phone No." id="number" required>
                                    </div>
                                    <div class="boxx">
                                        <div><label> Organization </label></div>
                                        <input type="text" class="text" placeholder="Organization" id="organization" required>
                                    </div>
                                </div>
                                <div class="box">
                                    <div><label> Message </label></div>
                                    <textarea class="text textt" required placeholder="Message" rows="2" id="message"></textarea>
                                </div>
                                    <div class="btnn"><button class="btnn">Send Message</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
            
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
        //function sendEmail() {
            
           $(document).ready(function() {

        $('.btnn').click(function(e) {
      e.preventDefault();
            
            
            var name = $("#namec");
            var email = $("#emailc");
            var number = $("#number");
            var organization = $("#organization");
            var message = $("#message");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(number) && isNotEmpty(organization) && isNotEmpty(message)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       number:number.val(),
                       organization: organization.val(),
                       message: message.val()
                   }, success: function (respons) 
                   {
                        if(respons.status=="success")
                        {
                            $('.form').css('display','none');
                            $('.sform').css('display','block');
                            $('.dform').css('display','none');
                        }
                        else
                        {
                            $('.dform').css('display','block');
                            $('.sform').css('display','none');
                            $('.form').css('display','none');
                        }
                   }
                });
            }
        });
        $('#error').click(function(e) {
            $('.form').css('display','block');
            $('.dform').css('display',' none');
        });
        
      });

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

			<footer class="footer">
				<div class="xcontainer">
					<div class="xrow">
						<div class="footer-col">
							<h2>Knock On Brain</h2>	
							<h3 class="about">Makes Recuitment Easy!</h3>
						</div>
						<div class="footer-col">
							<h2>Quick Links</h2>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="disclaimer.php">Disclaimer</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>	
						</div>						
						<div class="footer-col">
							<div class="social-links">
							<h2>Let's connect</h2>
							<h3 class="about">Follow us to get regular updates of new features</h3></br>
								<a href="https://www.facebook.com/KnockonBrain-100820525522165"><i class="fab fa-facebook-f"></i></a>
							
								<a href="https://www.linkedin.com/company/knockonbrain"><i class="fab fa-linkedin-in"></i></a>
								
							</div>
						</div>
					</div>

				</div>
				</br>
            	<hr>
				<div class="copy">
				    <h4>Copyright © 2021 KnockOnBrain</h4>
				</div>
			</footer>
        
        
    </body>
</html>