<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
     session_start();
    

    $dbhost = 'localhost';
    $dbname = "giitsolu_testphp";
    $dbusername = "giitsolu_testphp";
    $dbpassword = "A!i-E_MjibT{";
    
    $con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
                
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    } 
     

    $cid=$_SESSION['ID'];
    
    

    include '../CLient/nav.php';
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title>Pricing Table</title>
	<!--<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	    html {
            scroll-behavior: smooth;
        }
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');

*{
  margin: 0;
  padding: 0;
  /*box-sizing: border-box;*/
  /*outline: none;*/
  font-family: 'Open Sans', sans-serif;
}

.pricing_table .pt_item:hover{
  margin-top:-15px; 
  margin-bottom:20px;
  background: linear-gradient(to right, rgba(203, 186, 212),rgba(145, 40, 201));
  color: black;
  font-size: 15px;
  font-weight: 500;
  /*#9128c9;*/
  opacity: 0.95;
  cursor: pointer;
  letter-spacing: 0;
/*-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);*/
/*-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);*/
/*box-shadow: 5px 40px -10px rgba(0,0,0,0.57);*/
transition: all 0.6s ease 0s;
transform: scale(1.11);
z-index:1;
}

body{
  background: linear-gradient(to right, rgba(25,4,42,100), rgba(59,11,88,100), rgba(35,5,59,100));
  background-size: cover;
  color: #ffffff;
  font-size: 14px;
}

.wrapper{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.pricing_table{
    margin-left: 300px;
    margin-right: -10px;
    margin-top: 4%;
  display: flex;
  /*list-style-type: circle;*/
  box-shadow: 0 0 3px rgba(0,0,0,0.1);
  /*border-spacing: 40px;*/
}

.cards{
  display: flex;
  margin-left: 150px;
  margin-top: 7%;
  margin-bottom: 40px;
  cursor: pointer;
}
.box1{
    background: #4b98eb;
    /*box-sizing: border-box;*/
  border: 1px solid #1d2575;
  border-radius: 20px;
  box-shadow: 0 0 3px rgba(0,0,0,0.1);
  width: 300px;
  height: 200px;
}
.box1:hover{
    transform: scale(1.12);
    transition: all 0.6s ease 0s;
    background: #3f6ee8;
    /*margin-top: -15px;*/
}
.box3:hover{
    transform: scale(1.12);
    transition: all 0.6s ease 0s;
    background: #3f6ee8;
    /*margin-top: -15px;*/
}
.box2:hover{
    transform: scale(1.12);
    transition: all 0.6s ease 0s;
    background: #d132b4;
}
.cards .footer{
    font-size: 16px;
    font-weight: 550;
    color: #27272b;
    padding: 8px;
    border-radius: 20px;
}
.box1 .footer{
    margin-top: 65px;
    background: #88c0fc;
    text-align: center;
}
.box2{
    margin-left: 5px;
     background: #e053c6;
    /*box-sizing: border-box;*/
  border: 1px solid #372f8f;
  border-radius: 20px;
  box-shadow: 0 0 3px rgba(0,0,0,0.1);
  width: 305px;
  height: 200px;
}
.box2 .footer{
    margin-top: 69px;
    background: #fc90ca;
}
.box3{
    margin-left: 5px;
     background: #4b98eb;
    /*box-sizing: border-box;*/
  border: 1px solid #372f8f;
  border-radius: 20px;
  box-shadow: 0 0 3px rgba(0,0,0,0.1);
  width: 300px;
  height: 200px;
}
.box3 .footer{
    text-align: center;
    margin-top: 69px;
    background: #88c0fc;
}

.pricing_table .pt_item{
  width: 280px;
  background: 	#8249c4;
  border: 1px solid #2c054f;
  border-radius:2em;
  padding: 30px 30px 20px 30px;
  text-align: center;
  position: relative;
  margin: 3px;
  
  /*margin-top:-120px;*/
  /*opacity: 0.8;*/
}

.pricing_table .pt_item:first-child{
    margin-right: 1px;
  /*border-top-left-radius: 0px;*/
  /*border-bottom-left-radius: 3px;*/
}

.pricing_table .pt_item:last-child{
    margin-left: 1px;
  /*border: 2px;*/
  /*border-top-right-radius: 3px;*/
  /*border-bottom-right-radius: 3px;*/
}

.pricing_table .pt_item .title p{
  font-size: 18px; 
  font-weight: 700;
}

.pricing_table .pt_item .price{
  margin: 15px 0;
}

.pricing_table .pt_item .price p{
  color: 	#ffffff;
  position: relative;
}

.pricing_table .pt_item .price p .money{
  font-size: 30px;
  font-weight: 700;
  display: inline-block;
}


.pricing_table .pt_item  ul li{
  padding: 4px;
  font-size: 18px; 
  /*border-bottom: 2px solid #f4f4f9;*/
}

.pricing_table .pt_item  ul li:last-child{
  border: 1px;
}

.pricing_table .pt_item  ul li p span{
  font-weight: 700;
}

.pricing_table .pt_item button{
  margin-top: 15px;
  margin-bottom: 20px;
  border: 1px solid #220175;
  background: white;
  color: #a6078d;
  padding: 12px 17px;
  font-weight: 700;
  border-radius: 30px;
  cursor: pointer;
}
.pricing_table .pt_item button:hover{
    background: #a1e1ed;
    color: black;
    transition: 0.5s ease;
    transform: scale(1.2);
}

.pricing_table .pt_item.active .icon{
  position: absolute;
  top: -35px;
  right: -35px;
  /*border: 35px solid;*/
  border-color: transparent transparent transparent #1d8d42;
  transform: rotate(-45deg)
}

.pricing_table .pt_item.active .icon .i{
  color: #fff;
  position: absolute;
  bottom: -5px;
  right: 15px;
}

.pricing_table .pt_item.active .price p{
  color: 	#ffffff;
}

.pricing_table .pt_item.active{
  transform: scale(1.05);
  z-index: 1;
  border-right: 0;
  box-shadow: 2px 0 5px 2px rgba(0,0,0,0.05), -2px 0 5px 2px rgba(0,0,0,0.05);
  border-radius: 3px;
}
.prices{
    margin-right: -140px;
    margin-top: 60px;
}
.prices h2{
    font-size: 45px;
    font-weight: bolder;
    /*font-family: Canva Student;*/
    font-family: 'Montserrat', sans-serif;
    letter-spacing: 1.5px;
    color: #fa46d9;
    text-transform: uppercase;
}

@media (max-width: 600px){
   .wrapper {
       display: flex;
       flex-direction: column;
       margin-top: 185%;
       /*width: fit-content;*/
        margin-left: -84%;
    }
    .pricing_table{
        display: flex;
       flex-direction: column;
       margin-top: 70px;
       justify-content: center;
       /*margin-right: 5px;*/
    }
    .prices{
        width: fit-content;
        margin-left: 150px;
        margin-top: 120px;
    }
    .cards{
        display: flex;
        flex-direction: column;
        margin-top: 800px;
        margin-left: 30px;
    }
    .heading{
        margin-bottom: 25px;
    }
    .box1, .box2, .box3{
        margin-bottom: 10px;
    }
    .box1{
        margin-left: 5px;
    }
    .heading{order:1;}
    .box1{order:2;}
    .box2{order:3;}
    .box3{order:4;}
    
}

.values{
    margin-top: 11%;
}

.section-header h2 {
   font-size: 40px;
    font-weight: bolder;
    font-family: Canva Student;
    letter-spacing: 1.5px;
    color: #fa46d9;
    margin-bottom: 10px;
}
.section-header p {
    margin: 10px 0 0 0;
    padding: 0;
    font-size: 38px;
    line-height: 42px;
    font-weight: 700;
    color: #012970;
}
.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y) * -1);
    margin-right: calc(var(--bs-gutter-x)/ -2);
    margin-left: calc(var(--bs-gutter-x)/ -2);
}

.values .box:hover img {
    transform: scale(1);
}
.values .box img {
    padding: 30px 50px;
    transition: 0.5s;
    max-width: 100%;
    height: auto;
    vertical-align: middle;
}
.values .box h3 {
    font-size: 24px;
    color: #012970;
    font-weight: 700;
    margin-bottom: 18px;
}
.col-lg-4 {
    flex: 0 0 auto;
    width: 33.3333333333%;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
	</style>
</head>
<body>
<div class="wrapper">
    <div id="subcribe" class="prices">
        <h2> Pricing and <br> Packages</h2><br>
        <p style="font-size: 22px; font-weight: 300; font-family:'Times New Roman', Times, serif; ">Every package is powered<br>
            with all the features of KOB,<br>
            price variations are based on <br>duration!</p>
    </div>
    
  <div class="pricing_table">
    <div class="pt_item pt_1">
       <div class="title">
         <p>THREE MONTHS</p>
       </div>
      <div class="price">
        <p>
          <span class="money" style="text-decoration: line-through solid #db323e 5px;">&nbsp; ₹ 7,500 &nbsp;</span> <br>
         </p>
         <p>
          <span class="money" style="text-shadow: 4px 3px 4px #383838;">₹ 2,500</span>
        </p>
      </div>
      <ul>
       <li><div class="features">
           <br><p>Schedule Unlimited Assessments</p>
        </div></li>
        <li><div class="features">
          <p>AI Based Proctoring</p>
        </div></li>
        <li><div class="features">
          <p>Watch Test Video Anytime Till 1 Month</p>
        </div></li>
        <li><div class="features">
          <p>24X7 Help & Support</p>
        </div></li>
      </ul>
        <button name="btn" id="btn" onclick="pay()">BUY SUBSCRIPTION</button>
     <p style="font-size: 18px; color: #ffff12;"><b> 09 BOUGHT THIS </b></p>
    </div>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function pay(){
    var options = {
    "key": "rzp_live_sr9hBezVXK2AwL",
    "amount": 2500 * 100, 
    "currency": "INR",
    "name": "KNOCKONBRAIN",
    "description": "Test Transaction",
    "image": "logok.png",
    // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
    // "account_id": "acc_Ef7ArAsdU5t0XL",
    "handler": function (response){
        // alert(response.razorpay_payment_id);
        // alert(response.razorpay_order_id);
        // alert(response.razorpay_signature)
        // console.log(response);
        jQuery.ajax({
            type:'post',
            url:'payment_process.php',
            data:"payment_id=" + response.razorpay_payment_id,
            success:function(result){
 
                window.location.href="test.php";
            }
        });
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
    //  e.preventDefault();
    // document.getElementById('rzp-button').onclick = function(e){}
        
    }
</script>

    <div class="pt_item pt_2 ">
       <div class="title">
         <p>HALF YEARLY</p>
       </div>
      <div class="price">
          <p>
              <span class="money" style="text-decoration: line-through solid #db323e 5px;">&nbsp; ₹ 10,500 &nbsp;</span> <br>
          </p>
        <p>
          <!--<span class="rupee">&#8377;</span>-->
          <span class="money" style="text-shadow: 4px 3px 4px #383838;"> ₹ 3,500 </span>
          <!--//<span class="month">6 months</span>-->
        </p>
      </div>
      <ul>
         <li><div class="features">
           <br><p>Schedule Unlimited Assessments</p>
        </div></li>
        <li><div class="features">
          <p>AI Based Proctoring</p>
        </div></li>
        <li><div class="features">
          <p>Watch Test Video Anytime Till 1 Month</p>
        </div></li>
        <li><div class="features">
          <p>24X7 Help & Support</p>
        </div></li>
      </ul>
       <button id="btn1" onclick="pay1()">BUY SUBSCRIPTION</button>
       <p style="font-size: 18px; color: #ffff12;"><b> 27 BOUGHT THIS </b></p>
    </div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function pay1(){
    var options = {
    "key": "rzp_live_sr9hBezVXK2AwL",
    "amount": 3500 * 100, 
    "currency": "INR",
    "name": "KNOCKONBRAIN",
    "description": "Test Transaction",
    "image": "logok.png",
    // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
    // "account_id": "acc_Ef7ArAsdU5t0XL",
    "handler": function (response){
        jQuery.ajax({
            type:'post',
            url:'payment_process1.php',
            data:"payment_id=" + response.razorpay_payment_id,
            success:function(result){
                window.location.href="test.php";
            }
        });
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
    //  e.preventDefault();
    // document.getElementById('rzp-button').onclick = function(e){}
        
    }
</script>
    
    <div class="pt_item pt_4">
       <div class="title">
         <p>YEARLY</p>
       </div>
      <div class="price">
          <p>
              <span class="money" style="text-decoration: line-through solid #db323e 5px;">&nbsp; ₹ 18,000 &nbsp;</span> <br>
          </p>
        <p>
          <!--<span class="rupee">&#8377;</span>-->
          <span class="money" style="text-shadow: 4px 3px 4px #383838;">₹ 6,000</span>
          <!--<span class="month">/Annum</span>-->
        </p>
      </div>
      <ul>
        <li><div class="features">
           <br><p>Schedule Unlimited Assessments</p>
        </div></li>
        <li><div class="features">
          <p>AI Based Proctoring</p>
        </div></li>
        <li><div class="features">
          <p>Watch Test Video Anytime Till 1 Month</p>
        </div></li>
        <li><div class="features">
          <p>24X7 Help & Support</p>
        </div></li>
      </ul>
       <!--<a href="gateway.php"><button type=button>SUBSCRIBE</button></a>-->
       <button id="btn2" onclick="pay2()">BUY SUBSCRIPTION</button>
       <p style="font-size: 18px; color: #ffff24;"><b> 75 BOUGHT THIS </b></p>
       <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
       <!--#fff41a-->
<script>
    function pay2(){
    var options = {
    "key": "rzp_live_sr9hBezVXK2AwL",
    "amount": 6000 * 100, 
    "currency": "INR",
    "name": "KNOCKONBRAIN",
    "description": "Test Transaction",
    "image": "logok.png",
    // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
    // "account_id": "acc_Ef7ArAsdU5t0XL",
    "handler": function (response){
       
        jQuery.ajax({
            type:'post',
            url:'payment_process2.php',
            data:"payment_id=" + response.razorpay_payment_id,
            success:function(result){
                window.location.href="test.php";
            }
        });
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
      
    }
</script>
    
    </div>
  </div>
</div>

<div id="addons" class="cards">
    
    <div class="box1" onclick="pay3()">
        <div style="display: flex;">
            <div style="width: 50px; margin: 50px 0 0 30px; opacity: 0.8;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M128 192C110.3 192 96 177.7 96 160C96 142.3 110.3 128 128 128C145.7 128 160 142.3 160 160C160 177.7 145.7 192 128 192zM200 160C200 146.7 210.7 136 224 136H448C461.3 136 472 146.7 472 160C472 173.3 461.3 184 448 184H224C210.7 184 200 173.3 200 160zM200 256C200 242.7 210.7 232 224 232H448C461.3 232 472 242.7 472 256C472 269.3 461.3 280 448 280H224C210.7 280 200 269.3 200 256zM200 352C200 338.7 210.7 328 224 328H448C461.3 328 472 338.7 472 352C472 365.3 461.3 376 448 376H224C210.7 376 200 365.3 200 352zM128 224C145.7 224 160 238.3 160 256C160 273.7 145.7 288 128 288C110.3 288 96 273.7 96 256C96 238.3 110.3 224 128 224zM128 384C110.3 384 96 369.7 96 352C96 334.3 110.3 320 128 320C145.7 320 160 334.3 160 352C160 369.7 145.7 384 128 384zM0 96C0 60.65 28.65 32 64 32H512C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H512C520.8 432 528 424.8 528 416V96C528 87.16 520.8 80 512 80H64C55.16 80 48 87.16 48 96z"/></svg></div>
        <p style="margin: 45px 0 0 80px; font-size: 40px; font-weight: 600">₹ 1000</p>
        </div>
        <div class="footer" >
            View Answersheet
        </div>
    </div>
           <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function pay3(){
    var options = {
    "key": "rzp_live_sr9hBezVXK2AwL",
    "amount": 1000 * 100, 
    "currency": "INR",
    "name": "KNOCKONBRAIN",
    "description": "Test Transaction",
    "image": "logok.png",
    // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
    // "account_id": "acc_Ef7ArAsdU5t0XL",
    "handler": function (response){
       
        jQuery.ajax({
            type:'post',
            url:'payment_process3.php',
            data:"payment_id=" + response.razorpay_payment_id,
            success:function(result){
                window.location.href="test.php";
            }
        });
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
      
    }
</script>
    
    
    <div class="box2" onclick="pay4()">
        <div style="display: flex;">
            <div style="width: 30px; margin: 50px 0 0 30px; opacity: 0.8;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 24C0 10.75 10.75 0 24 0H360C373.3 0 384 10.75 384 24C384 37.25 373.3 48 360 48H352V66.98C352 107.3 335.1 145.1 307.5 174.5L225.9 256L307.5 337.5C335.1 366 352 404.7 352 445V464H360C373.3 464 384 474.7 384 488C384 501.3 373.3 512 360 512H24C10.75 512 0 501.3 0 488C0 474.7 10.75 464 24 464H32V445C32 404.7 48.01 366 76.52 337.5L158.1 256L76.52 174.5C48.01 145.1 32 107.3 32 66.98V48H24C10.75 48 0 37.25 0 24V24zM99.78 384H284.2C281 379.6 277.4 375.4 273.5 371.5L192 289.9L110.5 371.5C106.6 375.4 102.1 379.6 99.78 384H99.78zM284.2 128C296.1 110.4 304 89.03 304 66.98V48H80V66.98C80 89.03 87 110.4 99.78 128H284.2z"/></svg></div>
        <p style="margin: 45px 0 0 90px; font-size: 40px; font-weight: 600">₹ 1000</p>
        </div>
        <div class="footer">
            Extend Video Storage Time: 3 Months
        </div>
    </div>
<script>
    function pay4(){
    var options = {
    "key": "rzp_live_sr9hBezVXK2AwL",
    "amount": 1000 * 100, 
    "currency": "INR",
    "name": "KNOCKONBRAIN",
    "description": "Test Transaction",
    "image": "logok.png",
    // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
    // "account_id": "acc_Ef7ArAsdU5t0XL",
    "handler": function (response){
       
        jQuery.ajax({
            type:'post',
            url:'payment_process4.php',
            data:"payment_id=" + response.razorpay_payment_id,
            success:function(result){
                window.location.href="test.php";
            }
        });
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
      
    }
</script>
    
    
    <div class="box3" onclick="pay5()">
        <div style="display: flex;">
            <div style="width: 40px; margin: 50px 0 0 30px; opacity: 0.8;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M464 288h-416C21.5 288 0 309.5 0 336v96C0 458.5 21.5 480 48 480h416c26.5 0 48-21.5 48-48v-96C512 309.5 490.5 288 464 288zM320 416c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 416 320 416zM416 416c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S433.6 416 416 416zM464 32h-416C21.5 32 0 53.5 0 80v192.4C13.41 262.3 29.92 256 48 256h416c18.08 0 34.59 6.254 48 16.41V80C512 53.5 490.5 32 464 32z"/></svg></div></p>
        <p style="margin: 45px 0 0 85px; font-size: 40px; font-weight: 600">₹ 1299</p>
        </div>
        <div class="footer">
            Answersheet + Storage Extension
        </div>
    </div>
    <script>
    function pay5(){
    var options = {
    "key": "rzp_live_sr9hBezVXK2AwL",
    "amount": 1299 * 100, 
    "currency": "INR",
    "name": "KNOCKONBRAIN",
    "description": "Test Transaction",
    "image": "logok.png",
    // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
    // "account_id": "acc_Ef7ArAsdU5t0XL",
    "handler": function (response){
       
        jQuery.ajax({
            type:'post',
            url:'payment_process5.php',
            data:"payment_id=" + response.razorpay_payment_id,
            success:function(result){
                window.location.href="test.php";
            }
        });
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
      
    }
    </script>
    <div class="addons">
    <h2 class="heading" style="font-size: 45px; font-weight: bolder; letter-spacing: 1.5px; color: #fa46d9; text-transform: uppercase;
    margin-left: 100px; margin-top: 65px;"> Add-Ons </h2>
    <p style="font-size: 20px; font-weight: 300; font-family:'Times New Roman', Times, serif; float:right; margin-right: 30px;">Addon validity will be as <br>per the validity of your <br>base plan.</p>
    </div>
</div>



<!--<section id="values" class="values">-->
<!--      <div>-->
<!--        <header class="section-header">-->
<!--          <h2 style="text-align: center;">Features</h2>-->
          <!--<p>Features that simplify Recruiting!!!</p>-->
<!--        </header>-->

<!--        <div class="row">-->

<!--          <div class="col-lg-4">-->
<!--            <div class="box" data-aos="fade-up" data-aos-delay="200">-->
<!--              <img src="./img/values1.webp" class="img-fluid" width="800px" height="1500px" alt="">-->
<!--               <br><br>-->
<!--              <h3>Schedule Unlimited Test For Free</h3>-->
<!--              <p>KnockOnBrain is the only online assessment tool in market which is 100% free without any hidden cost.</p>-->
<!--            </div>-->
<!--          </div>-->

<!--          <div class="col-lg-4 mt-4 mt-lg-0">-->
<!--            <div class="box" data-aos="fade-up" data-aos-delay="400">-->
<!--              <img src="./img/values7.webp" class="img-fluid" width="800px" height="1000px" style="padding-top: 0px; padding-bottom: 0px;" alt="">-->
<!--              <br><br>-->
<!--              <h3>AI/ML Based Auto Proctoring</h3>-->
<!--              <p>Our remote proctoring system detects face and ensures that candidate has not cheated during the exam</p>-->
<!--            </div>-->
<!--          </div>-->

<!--          <div class="col-lg-4 mt-4 mt-lg-0">-->
<!--            <div class="box" data-aos="fade-up" data-aos-delay="600">-->
<!--              <img src="./img/values3.webp" class="img-fluid" alt="">-->
<!--              <h3>User Friendly Dashboard</h3>-->
<!--              <p>Quick-go flow with interactive and responsive dashboard where you can enjoy all the features</p>-->
<!--            </div>-->
<!--          </div>-->
<!--           <div class="col-lg-4 mt-4 mt-lg-0">-->
<!--            <div class="box" data-aos="fade-up" data-aos-delay="800">-->
<!--              <img src="./img/values6.webp" class="img-fluid" width="800px" height="1500px" alt="">-->
<!--              <br><br>-->
<!--              <h3>Watch Applicant Test Video Anytime</h3>-->
<!--              <p>All test sessions are digitally recorded and can be downloaded or watched anytime</p>-->
<!--            </div>-->
<!--          </div>-->
<!--         <div class="col-lg-4 mt-4 mt-lg-0">-->
<!--            <div class="box" data-aos="fade-up" data-aos-delay="1000">-->
<!--              <img src="./img/values67.webp"class="img-fluid" width="800px" height="1500px" alt="">-->
<!--              <br><br>-->
<!--              <h3>Customize your own test</h3>-->
<!--              <p>The software already have pre-defined tech-stack tests, apart from this you can create your own customize tests.</p>-->
<!--            </div>-->
<!--          </div>-->
<!--           <div class="col-lg-4 mt-4 mt-lg-0">-->
<!--            <div class="box" data-aos="fade-up" data-aos-delay="1200">-->
<!--              <img src="./img/values23.webp" class="img-fluid" width="800px" height="1500px" alt="">-->
<!--              <br><br>-->
<!--              <h3>10,000+ Questions</h3>-->
<!--              <p>With 20+ test categories our portal provides you with a catalogue of 10,000+ questions which make the every set of test questions unique</p>-->
<!--            </div>-->
<!--          </div>-->
          
<!--        </div>-->

<!--      </div>-->

<!--    </section><!-- End Values Section -->
</body>
</html>