<?php
session_start();
$ques = array();
$ques[0] = $_SESSION['qid1'];
$ques[1] = $_SESSION['qid2'];
//echo $_SESSION['main-lang'];
?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<!--<link rel = 'stylesheet' href = 'teststyle.css'>-->
<link rel = 'stylesheet' href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

<title>Coding Test</title>
<script>
window.history.forward();

function noBack() {
    window.history.forward();
}
</script>
<script>

var countDownDate = new Date( '<?php echo date('r', $_SESSION['TIMER']) ?>' ).getTime();
// Update the count down every 1 second
var x = setInterval( function() {
    // Get today's date and time
    var now = new Date().getTime();
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    // console.log(distance); 
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("clock-time").innerHTML = hours + "h "+ minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if(hours==0 && minutes==5 && seconds==0){
        alert('5 min are left');
    }
  // If the count down is over, write some text 
if (distance < 0) {
    clearInterval(x);
    alert('Time is Over!');
    window.location.href = "final.php";
   // document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<style>
*{
    margin:0;
    padding: 0;
    background-color: #f3f7f7;
}
.header{
    height: 60px;
    background: #3f4d67;
    color:white;
    padding: 15px 15px;
}
.heading{
    background-color:#3f4d67 ;
    position: absolute;
    top:25px;
    font-size: 32px;
    font-weight: 700;
    letter-spacing: 1px;
    cursor: pointer;
}
.clock-icon{
    color:white;
    background-color:#3f4d67 ;
    position: absolute;
    top:29px;
    right:130px;
    font-size:40px !important;
}
.clock-time{
    color:white;
    background-color:#3f4d67 ;
    position: absolute;
    top:35px;
    right:20px; 
    font-size:24px;
}
/*.sub-btn{*/
/*    position:absolute;*/
/*    right:635px;*/
/*    top:520px;*/
/*    border-radius: 2px;*/
/*    background-color: #b94545;*/
/*    color: #fff;*/
/*    padding: 12px 20px;*/
/*    border: 1px solid #b94545;*/
/*    box-shadow: 0 4px 12px 0 rgba(180, 45, 45, 0.561);*/
/*    font-family: monaco,Courier,monospace;*/
/*    font-weight: 700;*/
/*    font-size: 24px;*/
/*    cursor: pointer;*/
/*}*/
.disclaimer{
    color:black;
    position:relative;
    font-size:20px;
    font-family: Georgia, serif;
}
.panel{
    position: relative;
    margin-top:30px;
    margin-bottom:30px;
    margin-right:125px;
    margin-left:125px;
    background-color: white;
    height: 100px;
    padding: 15px 15px;
    border-radius: 2px;
}
.head{
    color: #0e141e;
    background-color: white;
    font-weight: 600;
    line-height: 1.4;
    font-size: 26px;
    display: block;
    margin-bottom: 5px;
    font-family: Arial,Helvetica,sans-serif;
}
.content{
    background-color: white;
    display: inline-block;
    width: 83%;
    color: #576871;
    font-size: 18px;
}
    .btn{
      background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
      color:#fff;
      border:none;
      position:relative;
      height:45px;
      cursor:pointer;
      transition:800ms ease all;
      outline:none;
      text-decoration:none;
      font-family: "Open Sans", sans-serif;
    font-weight: 600;
    font-size: 20px;
      padding: 10px 15px;
    }
    .btn:hover{
      background:#fff;
      color:#1dc4e9;
    }
    .btn:before,.btn:after{
      content:'';
      position:absolute;
      top:0;
      right:0;
      height:2px;
      width:0;
     background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
      transition:400ms ease all;
    }
    .btn:after{
      right:inherit;
      top:inherit;
      left:0;
      bottom:0;
    }
    .btn:hover:before,.btn:hover:after{
      width:100%;
      transition:800ms ease all;
    }
    
    .sub-btn{
       background: linear-gradient(-135deg, #b94545 0%, #b94545 100%);
        color: #fff;
        border: none;
        position: absolute;
        height: 45px;
        cursor: pointer;
        transition: 800ms ease all;
        outline: none;
        text-decoration: none;
        padding: 10px 13px;
        font-family: "Open Sans", sans-serif;
    font-weight: 600;
        font-size: 24px;
        cursor: pointer;
        left:45%;
    }
    .sub-btn:hover{
      background:transparent;
      color:#b94545;
    }
    .sub-btn:before,.sub-btn:after{
      content:'';
      position:absolute;
      top:0;
      right:0;
      height:2px;
      width:0;
     background: linear-gradient(-135deg, #b94545 0%, #b94545 100%);
      transition:400ms ease all;
    }
    .sub-btn:after{
      right:inherit;
      top:inherit;
      left:0;
      bottom:0;
    }
    .sub-btn:hover:before,.sub-btn:hover:after{
      width:100%;
      transition:800ms ease all;
    }

</style>
</head>
<body>
<form action="final.php" method="POST">
<div>
    <div class="header">
        <label class="heading"><i class="fa fa-code" aria-hidden="true" style="background-color: transparent;"></i>&nbsp;CODING TEST</label>
        <i class="fa fa-clock-o clock-icon" aria-hidden="true"></i>
        <label class="clock-time" id="clock-time"></label>
       <!-- <button type="submit" name="sub" class="sub-btn" >End Test</button>-->
    </div>
    <div class="panel">
        <label class="head">Question-1</label>
        <p class="content" >Click on "attempt button" to solve Question 1</p>
        <?php
           echo '<a class = "btn" href = "link1.php">Attempt</a>';
        ?>
    </div>
    <div class="panel">
        <label class="head">Question-2</label>
        <p class="content" >Click on "attempt button" to solve Question 2</p>
        <?php
          echo '<a class = "btn" href = "link2.php">Attempt</a>';
    ?>
    </div>
    <br>
    <br>
    <center><label class="disclaimer">* Click on "End Test" button for the final submission of your test *</label></center>
    <br>
    <button type = 'submit' name = 'sub' class = 'sub-btn' >End Test</button>
    </div>
    </form>
    </body>
    </html>