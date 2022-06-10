<?php include('server.php'); ?>
<html>
<head>
    <title>Create an Account</title>
    <link rel="shortcut icon" type="image/jpg" href="images/fevicon.jpg"/>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
<link rel="icon" type="image/jpg" href="../../images/fevicon.jpg"/>
<style>
body{
    background-image:url("https://phptest.avianglobes.com/wp-content/uploads/2020/06/bg-blob-gradient.svg");
 background-repeat:no-repeat;
   background-size:cover;
   
}
nav {
            top: 20px;
            position: absolute;
            z-index: 1;
            width: 100%;
        }
        nav .cul {
            margin-right: 30px;
            float: right;
        }

        nav ul li {
            display: inline-block;
            margin: 0 5px;
            font-family: "Podkova", serif;
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
    margin-top:90px;
    font-size:20px;
   
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
#submit{
    background-color:#3b4fe4;;
    border:1px solid #3b4fe4;
  padding: 10px 20px;
  font-family: 'Open Sans',sans-serif;
    font-size: 20px;
    margin-top:10px;
    box-shadow:0px 12px 24px -8px rgb(59 79 228 / 40%);
    box-sizing: border-box;
}
#submit:hover
{
    border:1px solid #43b2f0;
    background-color:#43b2f0;
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
            margin-left: -30px;
			
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
	       margin-top: 10px; 
	        
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
        <ul class="cul">
            <li><a href="#">Home</a></li>
        </ul>
    </nav>
    <div class ="container">
<div class="row">
    <div class="">
         <center><div class="">
           <p class="register-heading text-center " style="font-family:''Open Sans',sans-serif';font-weight:bold; color:black;
           font-size:40px; margin-top:20px;">Change Email</p></div></center>
                             <div class="shadow-lg p-3 mb-5 bg-white rounded" id="main">

    <form method="post" action="emailchange.php">
        <?php include('errors.php');?>
            <div class="form-group" style="margin-top:20px">
            
            <div class="form-group">
                Current Email
                <input type="email" class="form-control" name="current_email" id="name" placeholder="Enter Current Email" value="" autocomplete="off" required>
            </div>
            
            <div class="form-group">
                New Email
                <input type="email" class="form-control" name="new_email" id="email" placeholder="Enter New Email" value="" autocomplete="off" required>
            </div>
            <center><button type="submit" class="btn btn-primary" id="submit" name="EmailChange" value="Update" onclick="return validation()">Update</center>
            </div>
        </form>
        
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12"></div>
       
    </div>
   
    </div>
    </div>
    
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
						<li><a href="#">Home</a></li>
						<li><a href="#">Disclaimer</a></li>
						<li><a href="#">Contact</a></li>
					</ul>	
				</div>						
				<div class="footer-col">
					<div class="social-links">
					<h2>Let's connect</h2>
					<h3 class="about">Follow us to get regular updates of new features</h3></br>
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
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