<?php
/*
 Template Name: disha2
*/
 $dbhost = 'localhost';
    $dbname = "giitsolu_testphp";
    $dbusername = "giitsolu_testphp";
    $dbpassword = "A!i-E_MjibT{";
    
    $con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
                
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
session_start();
if(isset($_SESSION['ID'])) {
    include 'data.php';
     $cid=$_SESSION['ID'];
     $stmt = $pdo->prepare("SELECT * FROM users WHERE ID = :cid");
     $stmt->execute(['cid' => $cid]); 
     $result = $stmt->fetch();
     
//      $sql10="SELECT company FROM users WHERE ID=?";
// $stmt10=$pdo->prepare($sql10);
// $stmt10->execute([$cid]);
// $res10=$stmt10->fetch();
// $company=$res10['company'];
     
    
         $phone = $result['Phone'];
         $email = $result['user_email'];
         $company = $result['company'];
         $exp_date= $result['exp_date'];
         $user_registered=$result['user_registered'];
     $timestamp = date('Y-m-d H:i:s');
     $type=$result['type'];
     
     
     
      if($exp_date>=$timestamp){
        $validty="Valid till ".substr($exp_date,0,10);
    } 
    else
        $validty="Invalid from ".substr($exp_date,0,10);
     
    $stmt1 = mysqli_query($con,"SELECT * FROM trial WHERE cid=$cid order by id DESC");
	$data = mysqli_fetch_array($stmt1);
	$dateString = '2022-03-31 00:00:00';
	
	if($type=="trial"){
         $plan="Free Trial";
     }
    else if($type=="add-on1"){
         $plan="AnswerSheet add-on";
     }
     else if($type=="add-on2"){
         $plan="Storage Extension add-on";
     }
     else if($type=="add-on3"){
         $plan="Both AnswerSheet and Storage Extension add-on";
     }
	else
	    $plan = $data['plan'];
	
	if($plan=="Quarterly"){
	    $planv= "3 Months";
	}
	else if($plan=="Half yearly"){
	    $planv= "6 Months";
	}
	else if($plan=="Yearly"){
	    $planv= "1 Year";
	}
	else{
	    if($user_registered<$dateString)
	        $planv= "1 Year Free Subscription";
	   else
	        $planv="30 Days";
	}
 ?>
 
<!Doctype html>
<html>
    <head>
       
    <title>Profile</title> 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet">
<style>
    body{
	font-family: 'Raleway', sans-serif;
	width: fit-content;
}

.best-plan{	
	margin: 0 auto 30px 0;
	position: relative;
	z-index: 99;
	font-family: 'Raleway', sans-serif;
	font-size: 15px;
	line-height: 1.55;
	color: rgba(51,51,51,1);
	font-weight: 300;
}

.best-plan__head{
	text-align: center;
	margin-bottom: 45px;	
}

.best-plan__title{
	font-size: 36px;
	margin-bottom: 15px;
	margin-top:50px;
	font-weight: 800;
	color:#3c2f17;
}
.best-plan__title + p{
	font-size: 18px;
	font-weight: 300;
}

.b-price-plan{
	border: 1px solid #b6babf;
	max-width: 450px;
	margin: 0 auto 30px auto;
	background: #fff;	
	-webkit-border-radius: 5px;
	        border-radius: 5px;
	-webkit-transition: opacity .35s linear, -webkit-transform .35s linear, -webkit-box-shadow .3s linear;
	transition: opacity .35s linear, -webkit-transform .35s linear, -webkit-box-shadow .3s linear;
	-o-transition: transform .35s linear, opacity .35s linear, box-shadow .3s linear;
	transition: transform .35s linear, opacity .35s linear, box-shadow .3s linear;
	transition: transform .35s linear, opacity .35s linear, box-shadow .3s linear, -webkit-transform .35s linear, -webkit-box-shadow .3s linear;	
}

.b-price-plan__item{
	padding: 15px 30px;	
}

.b-price-plan__head{
	padding-top: 20px;	
	padding-bottom: 20px;
	text-align: center;		
	overflow: hidden;
	position: relative;
}

.b-price-plan__head > h3{
	font-size: 18px;
	text-align: center;	
	position: relative;
	z-index: 1;
	margin: 0;
	letter-spacing: 1px;	
}

.price_foot{		
	text-align: center;
	position: relative;	
	overflow: hidden;	
}
.price_foot:before{
	content: '';
	position: absolute; top: 100%; left: 0;
	width: 100%;
	height: 100%;
	background: #d5d8db;
	-webkit-transition: top .6s linear;
	-o-transition: top .6s linear;
	transition: top .6s linear;
}

.b-price-plan__cost{	
	font-size: 20px;
	font-weight: 600;
	position: relative;
	z-index: 99;
	text-align: center;	
	background: rgba(125,138,164,.1);
}
.cost-title{
	font-size: 55px;
	line-height: 1;
	font-weight: 700;	
	color: rgba(125,138,164,1);
}
.cost-title:before{
	content: '\f155';
	font-family: 'FontAwesome';
	display: inline-block;
	margin-right: 5px;
	font-size: 20px;
	position: relative; top: -20px;
}
.cost-title > span{
	position: relative; top: -25px; left: 5px;
    font-size: 18px;	
}
.cost-time{
	font-size: 13px;
	color: rgba(125,138,164,.75);
}


.price-plan_pro{
	position: relative;
	z-index: 99;
	-webkit-box-shadow: 0 0 0 6px rgba(255, 255, 255, 0.3);
	        box-shadow:0 0 0 6px rgba(255, 255, 255, 0.3);
}

.p_plan_list{	
	padding: 0;
	margin: 0;
}
.p_plan_list > li{
	position: relative;
	padding: 15px 30px 15px 54px;
	margin: 0;
	list-style: none;
	background-color: #fff;
	border-top: 1px solid rgba(125,138,164,.1);
	-webkit-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}
.p_plan_list > li:hover{	
    border-color: rgba(125,138,164,.1);
	-webkit-border-radius: 5px;
	        border-radius: 5px;
    -webkit-box-shadow: 0 2px 4px rgba(125,138,164,.06);
            box-shadow: 0 2px 4px rgba(125,138,164,.06);
    position: relative;
    -webkit-transform: scale(1.05);
        -ms-transform: scale(1.05);
            transform: scale(1.05);
    z-index: 99;
}

.p_plan_list > li .fa{	
	color: rgba(125,138,164,1);
	margin-right: 8px;	
	width: 16px;
	height: 16px;
	position: absolute; top: 50%; left: 30px;
	margin-top: -8px;
}
.p_plan_list > li .fa.text-success{
	color: rgba(160,206,78,1)!important;
}
.p_plan_list > li .fa.text-danger{
	color: rgba(253,99,71,1)!important;
}
.p_plan_list > li:first-of-type{
	border-top: none;
}

/* price_btn style */

.price_btn{	
	overflow: hidden;	
	position: relative;
	z-index: 99;
	margin: 15px auto;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 2px;
	color: rgba(125,138,164,1) ;
	text-decoration: none;		
	text-transform: uppercase;
	width: 80%;
	border: 2px solid rgba(125,138,164,1) !important;
	background: #fff !important;
	padding: 15px 20px !important;	    
    -webkit-border-radius: 5px;	    
            border-radius: 5px;				
}
.price_btn:before,
.price_btn:after{
	content: '';
	position: absolute; top: 0; left: 0;
	width: 0;
	height: 50%;
	background: rgba(125,138,164,1) !important;
	-webkit-transition: width .3s ease-in;
	-o-transition: width .3s ease-in;
	transition: width .3s ease-in;
}
.price_btn:after{
	top: auto;
	bottom: 0;
	-webkit-transition: width .4s ease-in;
	-o-transition: width .4s ease-in;
	transition: width .4s ease-in;
}
.price_btn:hover:before,
.price_btn:hover:after{
	width: 100%;
}

.price_btn > span{
	position: relative;
	z-index: 1;
}

.price_btn .fa{
	font-size: 18px;
	position: absolute; top: 50%; left: 100%;
	z-index: 99;
	width: 30px;		
	opacity: 0;
	-webkit-transition: left .55s linear, opacity .55s linear;
	-o-transition: left .55s linear, opacity .55s linear;
	transition: left .55s linear, opacity .55s linear;
	-webkit-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	        transform: translateY(-50%);
}
.price_btn:hover .fa{
	left: 90%;
	opacity: 1;
}

.price_btn:hover{
	overflow: visible;
	background: #fff;
	border-color: rgba(125,138,164,1) !important;	
  
}
.price_btn:active,
.price_btn:focus{	
	background: rgba(125,138,164,1) !important;
	border-color: rgba(125,138,164,1) !important;
}

.b-price-plan:hover{
	-webkit-box-shadow: 0 10px 20px rgba(125,138,164,.25) !important;
	        box-shadow: 0 10px 20px rgba(125,138,164,.25) !important;
}
.b-price-plan:hover .price_foot:before{
	top: 0;
}

.b-price-plan:hover{
	/*opacity: .25;*/
	-webkit-transform: scale(1.05);
	    -ms-transform: scale(1.05);
	        transform: scale(1.05);
}

.ftr{
    text-align: center;
}

@media(max-width: 600px){
    body{
        width: fit-content !important;
    }
    .row{
        margin-top: 50px;
        margin-left: 7px !important;
        width: 96% !important;
    }
    
    .price_btn{
        /*padding-right: 20px;*/
        width: 90%;
    }
}

</style>  
    </head>
    <script>
$(function(){
    var message_status = $("#status");
    $("h6[contenteditable=true]").blur(function(){
        var field_userid = $(this).attr("id");
        var value = $(this).text();
  var string = value;
  $.post("proedit.php", { string: string,field_userid: field_userid}, function(data) {
           if(data != '')
     {
   message_status.show();
   message_status.text(data);
   //hide the message
   setTimeout(function(){message_status.hide()},1000);
     }
        });
    });
});

</script>
<script>
      (function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      dayMonth = "<?php echo $exp_date;?>",
      birthday = dayMonth;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("countdown").innerHTML=SUBSCRIPTION ENDED;
        }
        //seconds
      }, 0)
  }());
  </script>

    <body style=" width: 80%;">
        <?php
        include "../client12/jheader.php";
        ?>
        <!--<nav>-->
        <!--    <ul class="cul">-->
        <!--        <li><a href="https://35.154.101.124/CLient/test.php"><i class="fa fa-home fa-2x" title="Home Page"></i></a></li>-->
                <!--<li><a href="../test.php"><button class="jbtnn">Home</button></a></li>-->
        <!--    </ul>-->
        <!-- </nav>-->
        <div class="best-plan">
            <div class="container">
					<!--<div class="best-plan__head"> </div>-->
					<div class="b_plan_body">					
						<div class="row" style="width: 120%; margin-left: 350px;">
							<div class="col-md-4 col-sm-4">
								<!-- price plans item begin -->
								<div class="b-price-plan" style="width: 100%;">
									<!--<div class="b-price-plan__item b-price-plan__head">-->
									<!--	<h3>Professional</h3>-->
									<!--</div>-->
									<div class="b-price-plan__item b-price-plan__cost" style="background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%)">											
										<div style="color: white;">Information</div>
										<!--<div class="cost-time">Monthly</div>-->
									</div>
									<ul class="p_plan_list">
										<li><p class="m-b-10 f-w-600"><i class="fas fa-envelope"></i> Email</p>
                                        <h6 class="text-muted f-w-400"><?php echo $email; ?></h6></li>
                                        
										<li><p class="m-b-10 f-w-600"><i class="fas fa-phone"></i> Phone</p>
                                        <h6 class="text-muted f-w-400"><?php echo $phone; ?></h6></li>	
                                        
										<li><p class="m-b-10 f-w-600"><i class="fas fa-building"></i> Company Name</p>
                                        <h6 class="text-muted f-w-400 company" id="<?php echo $cid; ?>" data-placeholder='Add Company Name' contenteditable="true" style="border-bottom: 2px solid; padding: 2px; display: inline-block; width: 80%;"><?php echo $company ?></h6> <i class="fas fa-edit"></i></li>
										
										<li><p style="color: #1873db!important;">*You can edit your company name here</p></li>
										<!--<li><i class="fa fa-cogs" aria-hidden="true"></i> Support 24 x 7</li>-->
									</ul>								
									<div class="b-price-plan__item price_foot">																			
										<a href="changePassword/change.php" class="btn btn-warning price_btn" style="color: black">
											<span>Change Password</span> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<!-- price plans item end -->								
							</div>	
							<div class="col-md-4 col-sm-4">
								<!-- price plans item begin -->
								<div class="b-price-plan" style="width: 100%;">
									<!--<div class="b-price-plan__item b-price-plan__head">-->
									<!--	<h3>Enterprise</h3>-->
									<!--</div>-->
									<div class="b-price-plan__item b-price-plan__cost" style="background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%)">											
										<div style="color: white">Subscription</div>
										<!--<div class="cost-time">Monthly</div>-->
									</div>
									<ul class="p_plan_list">
										<li><p class="m-b-10 f-w-600"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
                                      <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z"/>
                                    </svg> Package</p>
                                        <h6 class="text-muted f-w-400"><?php echo $plan; ?></h6></li>
                                        
										<li><p class="m-b-10 f-w-600"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
                                      <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                                    </svg> Validity</p>
                                        <h6 class="text-muted f-w-400"><?php echo $validty; ?></h6></li>
                                        
										<li><p class="m-b-10 f-w-600"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                          <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                                        </svg>Duration</p>
                                        <h6 class="text-muted f-w-400"><?php echo $planv; ?></h6> </li>
                                        
										<li><p style="color: #1873db!important; font-size: 14px;">*You can click here to view/buy Pricing Plans</p></li>
										<!--<li><i class="fa fa-cogs" aria-hidden="true"></i> Support 24 x 7</li>-->
									</ul>								
									<div class="b-price-plan__item price_foot">																			
										<a href="subscription.php" class="btn btn-warning price_btn" style="color: black">
											<span>Plans and Pricing</span> <i class="fa fa-caret-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
								<!-- price plans item end -->								
							</div>
						</div>	
                      
                      <!--<div class="ftr">Design by <a href="http://www.csshint.com/">www.csshint.com</a></div>-->
            
            
					</div>
				</div>
                </div>
    </body>
    <?php
   }
else{?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="shortcut icon" type="image/jpg" href="../images/fevicon.jpg"/>-->
    <link rel="icon" type="image/jpg" href="../images/fevicon.jpg"/>
    <title>Login First</title>
    <style>
    
        body{
            background-color:white;
            color:black;
            background-size: cover;
            background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url(../CLient/bg.png);
            overflow:visible;
        }
        .main {
            border-radius: 5px;
            background-color: #FFFFFF;
            width:40%;
            height: 210px;
            margin: auto;
            margin-top:7em;
            box-shadow: -2px 8px 20px #2b3856;
        }
    
        .logn {
          padding-top: 30px;
          padding-bottom: 5px;
          color: black;
          font-family: 'Ubuntu', sans-serif;
          font-weight: 500;
          font-size: 35px;
        }
        .jbtn{
          background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
          color:#fff;
          border:none;
          position:relative;
          height:45px;
          font-size:1.4em;
          padding:0.1em 1em;
          cursor:pointer;
          transition:800ms ease all;
          outline:none;
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
        
       @media screen and (max-width: 792px){
            .main{
              margin-top:12rem;
               width:revert;
               height: 190px;
            }
        }
  </style>
</head>
    <body>
        <div class="main">
            <p class="logn" align="center">Please Login First</p>
            <center><button class="jbtn" align="center" onclick="window.location.href = 'https://35.154.101.124/index.php';"><b>LOG IN</b>&nbsp;<i class="fa fa-arrow-right" aria-hidden="true" style="color:white"></i></button></center>
        </div>
    </body> 
<?php
    }
?>
</html>