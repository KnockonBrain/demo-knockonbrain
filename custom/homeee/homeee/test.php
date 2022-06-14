<?php
/*
 Template Name: disha2
*/
session_start();
if(isset($_SESSION['user_nicename'])) {


include 'data.php';

$sql_test="SELECT id,category FROM exam_category";
$stmt_test=$pdo->query($sql_test);
$stmt_test->execute();
$result=$stmt_test->FetchAll();

  
    //when form is submit 
    //check whether elements are empty or not ,if not empty proceed further
    if(isset($_POST['submit'])&& !empty($_POST['testtype'])&& !empty($_POST['address']))
    {
         $timestamp = date('Y-m-d H:i:s');
         $tid=$_POST['testtype'];
      
         $address = $_POST['address'];
    
        $cid=$_SESSION['ID'];
        $current_username=$_SESSION['user_nicename'];
    
        $email = preg_split("/\\r\\n|\\r|\\n/", $address);
  
        $to = implode(",", $email);
    
        foreach($email as $d)
        {
          $sql="INSERT INTO details(cid,quiz_id,date,email) VALUES(:cid,:tid,:timestamp,:d)";
          $stmt=$pdo->prepare($sql);
          $stmt->execute(['cid'=>$cid,'tid'=>$tid,'timestamp'=>$timestamp,'d'=>$d]);
        // echo $d."<br>";
        }
    
       
       header("Location:mail2mail.php?tid=$tid&date=$timestamp");
     }
        
      

?>
<!DOCTYPE HTML> 
<html>
<head>
<title>Schedule Test</title>
<link rel="shortcut icon" type="image/jpg" href="images/fevicon.jpg"/>

<!-- End of Async Drift Code -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Start of Async Drift Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>
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
  <style>
        *
            {
                padding: 0;
                margin: 0;
                text-decoration: none;
                list-style: none;
                box-sizing: border-box;
                font-family:'Open Sans',sans-serif;
            }
            .row:after 
            {
                content: "";
                display: table;
                clear: both;
            }
            nav
            {
                top:35px;
                position: absolute;
                width: 100%;
                z-index: 1;
                float: right;
            }
            .toggle, #toggle-item
            {
                display: none;
            }
            nav .cul
            {
                margin-right: 70px;
                float: right;
            }
            nav ul li
            {
                display: inline-block;
                margin: 0 5px;
                font-family: "Podkova", serif;
            }
            nav ul li a
            {
                color:#cccccc;
                font-size: 21px;
                padding: 7px 13px;
                border-radius: 3px;
                text-decoration: none;
            }
            nav ul li a:hover
            {
                transition: .5s;
                color: white;
            }
            .head
            {
                background-position: center; 
                background-size: cover; 
                position: relative;
                background-image:linear-gradient( rgba(0, 12, 45, 0.5), rgba(0, 12, 45, 0.5) ),url(images/aminities-bg-1024x683.jpg);
                margin: 0;
                padding: 0;
            }
            .head h1
            {
                padding: 110px 0 310px;
                
                
                color: white;
                font-size: 47px;
                width: 880px;
                margin: auto;
                
            }
            .test
            {
                width: 880px;
                background-color: white;
                margin: auto;
                box-sizing: border-box;
                box-shadow: 0 40px 120px -40px rgba(0, 0, 0, 0.5), 0 40px 120px -40px rgba(0, 0, 0, 0.5);
                top: 240px;
                position: absolute;
                left: 1%;
                right: 1%;
            }
            .test .testform
            {
                background-color: white;
                color:black;
                width: 530px;
                float: left;
                padding: 30px 50px 0px;
            }
            .test .info
            {
                float: right;
                background-color:#103F6E;
                color: white;
                width: 350px;
                padding: 40px 0px 200px 0px;
            }
            .test .info h4
            {
                text-align: center;
                font-size: 20px;
                margin-bottom: 33px;
            }
            .test .info .icon
            {
                margin-bottom: 25px;
                padding-left: 35px;
            }
            .test .info .icon i
            {
                font-size: 25px;
                margin-right: 15px;
            }
            .testform .rtest
            {
                float: right;
                font-size: 15px;
            }
            .testform .rtest i
            {
                color:#0090FF;
            }
            .testform label
            {
                width: 100%;
                font-size: 15px;
                font-weight: bold;
            }
            .testform .rtest label
            {
                font-size: 14px;
            }
            .testform .text
            {  
                border-radius:6px;
                padding: 10px 8px;
                margin: 5px 10px 15px 0px;
                width: 100%;
                border: 1px solid gray;
            }
            .testform .text:focus
            {
                border: 1.5px solid #79b1ed;
                box-sizing: border-box;
                box-shadow: 0 0 4px 3px #BFDEFF;
                outline: none;  
            }
            .testform .btn
            {
                text-align: center;  
            }
            .testform button
            {
                padding: 12px 15px;
                width:170px;
                margin-top: 10px;
                cursor: pointer;
                font-size: 20px;
                outline: none;
                border:none;
                background-color:#3b4fe4;
                color: white;
                border-radius: 10px;
            }
            .testform button:hover
            {
                background-color:#43b2f0;
                cursor: pointer;
            }
            @media (max-width:950px)
            {
                .head h1
                {
                    width: 700px;
                    margin: auto;
                }
                .test
                {
                    width: 700px;
                }
                .test .testform
                {
                    width: 410px;
                }
                .test .info
                {
                    width: 290px;
                }
                
                .test .info .icon
                {
                    margin-bottom: 25px;
                    padding-left: 25px;
                }
                .test .info .icon i
                {
                    font-size: 25px;
                    margin-right: 5px;
                }
                .test .info h4
                {
                    font-size: 17px;
                    margin-bottom: 25px;
                }
            }
            @media (max-width:750px)
            {
                nav .cul
                {
                    margin-right: 20px;
                }
                .head h1
                {
                    width: auto;
                    text-align: center;
                    margin-left: auto;
                }
                .test
                {
                    width: 350px;
                }
                .test .info
                {
                    display: none;
                }
                .test .testform
                {
                    width: 350px;
                    float: none;
                    padding: 30px 30px 20px;
                }
                
            }
            @media (max-width:470px)
            {
                nav .cul
                {
                    display: none;
                }
                .toggle
                {
                    display: block;
                    width: 100%;
                }
                .openbtn 
                {
                    display: block;
                    font-size: 28px;
                    cursor: pointer;
                    padding: 4px 10px;
                    border: none;
                    background-color: rgb(0,0,0,.3);
                    margin:17px 30px 0;
                    color:white;
                    float: right;
                }
                .openbtn:hover
                {
                    background-color: black;
                }
                #toggle-item
                {
                    width:100%;
                    background-color: black;

                    padding: 10px 0;
                    position: absolute;
                }
                .toggle-item .item
                {
                    padding: 15px;
                    text-align: center;
                    font-size: 22px;
                    font-weight: bold;
                    width: 100%;
                }
                .toggle-item .item a
                {
                    cursor: pointer;
                    width: 100%;
                    color:#999999;
                }
                .toggle-item .item a:hover
                {
                    color:white;
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
<?php 



//echo "hello world";
/*$dbhost = 'localhost';
$dbname = 'i7248764_wp5';
$dbusername = 'i7248764_wp5';
$dbpassword = 'Q.mDSQU2eE3irVQjpUk91';

$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);*/

?>
</head>

<body>
    <?php
 global $current_user; $_SESSION["user_nicename"];
//echo $current_user->user_nicename;
/* if ( is_user_logged_in() ) { 
 echo 'Username: ' . $current_user->user_login . "\n"; echo 'User display name: ' . $current_user->display_name . "\n"; echo 'id'.  $current_user->ID; } 
else { wp_loginout(); }*/
// echo $current_user->ID;
 ?>
 <!--<div id="mybutton">-->
    
<!--<button class="feedback" onclick="location.href = 'knack.giitsolutions.in/result';">View Result</button>-->
<!--<button class="feedback" onclick="location.href = 'knack.giitsolutions.in/resindex';">View Result</button>-->
<!--</div>-->
<br>
<!------ Include the above in your HEAD tag ---------->
        <nav>
            <div class="row">
                <div class="toggle">
                    <button class="openbtn" id="nav-toggle" onclick="openNav()" ><i class="fas fa-bars icon"></i></button>  
                </div>
                <ul class="cul">
                    <li><a href="../final2.php">View Result</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="toggle-item" id="toggle-item">
                <div class="item"><a href="../final2.php">View Result</a></div><hr>
                <div class="item"><a href="logout.php">Logout</a></div><hr>
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
        <section class="head">
            <h1><b>Scheduled Test</b></h1>
        </section>
        <section>
            <div class="test">
                <div class="row">
                 <div class="testform">
                       <form name="f1" id="f1" method="POST" action="">
                            
                           <div class="rtest">
                                <label><i class="text-primary fa fa-info"></i>&nbsp;Test duration: 30 mins</label>
                                
                            </div>
                            <br>
                            <label><i class="fa fa-check-square-o"></i>&nbsp;Select Test</label>
                                  <select class="custom-select form-control text" name="testtype" size="1" required ><br>
                                   <option value="">Select...</option>
                                       <?php
                                          foreach($result as $tname)
                                          {
                                              echo "<option value=".$tname['id'].">".$tname['category']."</option>";
                                          }
                                          ?>
                                  </select>
                                    <!--<small style="float:right"><i class="text-primary fa fa-info"></i>&nbsp;Test duration: 30 mins</small>-->
                               <br>
                            <label><i class="fa fa-envelope icon"></i>&nbsp;Applicant E-mail ID</label>
                            <textarea type="text" class="text" id='address' name='address' required placeholder='You can invite upto 20 applicants at a time...&#10 example:&#10 anil@knockonbrain.com&#10 vashist@knockonbrain.com &#10 neelam@knockonbrain.com' style="height:150px"></textarea>
                            <center><div class="btn">
                                  <center>   <button type="submit" name="submit" id="submit"  style="margin-top:10px;"><b>Send Invite</b>&nbsp;<i class="fa fa-arrow-right"></i>
                                  </button></center>
                               </div></center>
                               
                        </form>
                     </div>  
                    <div class="info">
                        <h4> Contact Information </h4>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                            <label>contactus@knockonbrain.com</label>
                        </div>
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                            <label>+1-209-330-3761</label>
                        </div>
                    </div>
                </div>

            </div>
            
        </section><br><br><br><br><br><br><br><br><br><br><br>
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
        

<!--<button name="invite" id="invite">
    send invite
</button>-->
<!--<button type="button" class="btn btn-success" name="invite" id="invite" disabled=<?php echo $flag ;?> >Send Invite</button>-->
 <script type="text/javascript">
//         textarea = document.querySelector("#address");
//         textarea.addEventListener('input', autoResize, false);
     
//         function autoResize() {
//             this.style.height = 'auto';
//             this.style.height = this.scrollHeight + 'px';
//         }
//     </script>
   
   <?php
}else echo "<h1>Please login first .</h1>";
?>
    </body>
    </html>
    
 
       
    <script>/*
        $("#invite").click(function(e) {
    e.preventDefault();
      /*  var cid = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var city = $('#city').val();
    $.ajax({
        type: "POST",
        url: "https://praveen.giitsolution.com/<?php echo $current_user->user_nicename;?>/sendmail",
        data: { 
            cid: "<?php echo $current_user->ID;?>";
            tid:"<?php echo $tid;?>";
            date:"<?php echo $date;?>";
            count:"<?php echo $count;?>";
        },
        success: function(result) {
            alert('ok');
        },
        error: function(result) {
            alert('error');
        }
    });
});*/
    </script>
   