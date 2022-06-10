<?php
ob_start();
session_start();
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobile()){
    echo "<script>location.href='mobilerror.php';</script>";
    //echo 'hello';
}
$ques = array();
$ques[0] = $_SESSION['qid1'];
$ques[1] = $_SESSION['qid2'];
$cid=$_SESSION['cid'];
$exp=$_SESSION['exp'];
$m1=$_SESSION['email'];
// echo $_SESSION['main-lang'];

 date_default_timezone_set("Asia/Kolkata");
    $curDate =date("Y-m-d H:i");
    
 if($_SESSION['exp']>= $curDate){ 
     
    if(isset($_SESSION['codingtest'])){
        $ct="block";
        $codeid=$_SESSION['codeid'];
    }
    else
        $ct="none";
    if(isset($_SESSION['mcqtest'])){
        $mt="block";
        $tid=$_SESSION['mcqtest'];
        $mcqid=$_SESSION['mcqid'];
    }
    else
        $mt="none";
    if(isset($_SESSION['psychotest'])){
        $pt="block";
        $psychoid=$_SESSION['psychoid'];
        if($_SESSION['psychotest'] == "MBTI")
        {
            $type = "https://35.154.101.124/Personality_Assessment/start.php?";
        }
        else
        {
            $type="https://test.knockonbrain.com/start/?";
        }
    }
    else
        $pt="none";
    // echo $cid;
    // echo $m1;
    // echo $tid;
    ?>
    <!DOCTYPE html>
    <html lang = 'en'>
    <head>
    <script src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <meta charset = 'UTF-8'>
    <meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
    <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
    <link rel="icon" type="image/png" href="../../images/favicon-logo1.png">
    <!--<link rel = 'stylesheet' href = 'teststyle.css'>-->
    <link rel = 'stylesheet' href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    
    <title>Assessment</title>
    <script>
    window.history.forward();
    
    function noBack() {
        window.history.forward();
    }
    </script>
    <!--<script>-->
    
    <!--var countDownDate = new Date( '' ).getTime();-->
    <!--// Update the count down every 1 second-->
    <!--var x = setInterval( function() {-->
        <!--// Get today's date and time-->
    <!--    var now = new Date().getTime();-->
        <!--// Find the distance between now and the count down date-->
    <!--    var distance = countDownDate - now;-->
        <!--// console.log(distance); -->
        <!--// Time calculations for days, hours, minutes and seconds-->
    <!--    var days = Math.floor(distance / (1000 * 60 * 60 * 24));-->
    <!--    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));-->
    <!--    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));-->
    <!--    var seconds = Math.floor((distance % (1000 * 60)) / 1000);-->
        
        <!--// Output the result in an element with id="demo"-->
    <!--    document.getElementById("clock-time").innerHTML = hours + "h "+ minutes + "m " + seconds + "s ";-->
        
        <!--// If the count down is over, write some text -->
    <!--    if(hours==0 && minutes==5 && seconds==0){-->
    <!--        alert('5 min are left');-->
    <!--    }-->
      <!--// If the count down is over, write some text -->
    <!--if (distance < 0) {-->
    <!--    clearInterval(x);-->
    <!--    alert('Time is Over!');-->
    <!--    window.location.href = "final.php";-->
    <!--   // document.getElementById("demo").innerHTML = "EXPIRED";-->
    <!--  }-->
    <!--}, 1000);-->
    <!--</script>-->
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
        display:<?php echo $ct ?>;
    }
    .panel1{
        position: relative;
        margin-top:30px;
        margin-bottom:30px;
        margin-right:125px;
        margin-left:125px;
        background-color: white;
        height: 100px;
        padding: 15px 15px;
        border-radius: 2px;
        display:<?php echo $mt ?>;
    }
    .panel2{
        position: relative;
        margin-top:30px;
        margin-bottom:30px;
        margin-right:125px;
        margin-left:125px;
        background-color: white;
        height: 100px;
        padding: 15px 15px;
        border-radius: 2px;
        display:<?php echo $pt ?>;
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
    .head1{
        color: #0e141e;
        background-color: white;
        font-weight: 600;
        line-height: 1.4;
        font-size: 26px;
        display: block;
        margin-bottom: 5px;
        font-family: Arial,Helvetica,sans-serif;
    }
    
    .head2{
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
    .content1{
        background-color: white;
        display: inline-block;
        width: 83%;
        color: #576871;
        font-size: 18px;
    }
    .content2{
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
    /*    a:link {*/
    /*  color: green;*/
    /*  background-color: transparent;*/
    /*  text-decoration: none;*/
    /*}*/
    /*a:visited {*/
    /*  color: pink;*/
    /*  background-color: transparent;*/
    /*  text-decoration: none;*/
    /*}*/
    /*a:hover {*/
    /*  color: red;*/
    /*  background-color: transparent;*/
    /*  text-decoration: underline;*/
    /*}*/
    /*a:active {*/
    /*  color: yellow;*/
    /*  background-color: transparent;*/
    /*  text-decoration: underline;*/
    /*}*/
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
    /*    a:visited {*/
    /*  color: pink;*/
    /*  cursor: "auto";*/
      /*background-color: transparent;*/
      /*text-decoration: none;*/
    /*  display:none;*/
    /*}*/
    
    </style>
    </head>
    <body>
    <form action="final.php" method="POST">
    <div>
        <div class="header">
            <label class="heading"><i class="fa fa-code" aria-hidden="true" style="background-color: transparent;"></i>&nbsp;Assessment</label>
            <!--<i class="fa fa-clock-o clock-icon" aria-hidden="true"></i>-->
            <!--<label class="clock-time" id="clock-time"></label>-->
           <!-- <button type="submit" name="sub" class="sub-btn" >End Test</button>-->
        </div>
        
            <?php
            include('config.php');
            $n=sizeof($tid);
    // echo $n;
    // echo $cid;
    // echo $email;
    for($i=0;$i<$n;$i=$i+1){
        
        $t=$tid[$i];
        $m=$mcqid[$i];
         $jq="SELECT * from exam_category where id=$t";
        $jdata=mysqli_query($con,$jq);
                                    
        if($jrows=mysqli_fetch_assoc($jdata)){
        
            $print=$jrows['category'];
        }
       $getname='name'.$t;
        
        ?>
        
        <div class="panel1">
        <label class="head1"><?php echo $print ?></label>
            
            <?php
            if ( $_SESSION[$getname] == 0 ){ 
            ?>
            <p class="content1" >Already Attempted!</p>
            <a class = "btn" id="<?php echo $i ?>" href = "newlink.php?cid=<?php echo $cid?>&tid=<?php echo $t ?>&mcqid=<?php echo $m ?>&m1=<?php echo $m1 ?>&f=1">Attempted</a>
           <?php
            }
            else{
           ?>
           <p class="content1" >Click on "attempt button" to give the Test</p>
            <a class = "btn" id="<?php echo $i ?>" href = "newlink.php?cid=<?php echo $cid?>&tid=<?php echo $t ?>&mcqid=<?php echo $m ?>&m1=<?php echo $m1 ?>&f=1">Attempt</a>
            <?php
            }
            ?>
        <br>
        
          </div>
    <?php
    // }
        }
    ?>
    <script>
    // function removeLink(linkid){
    //   document.getElementById(linkid).href = '#'
    //   //or even
    //   //document.getElementById(linkid).href = 'javascript:return false;'
    // //   document.getElementById(linkid).innerHTML = 'Please Wait...';
        
    // //   //even fancier:
    // //   document.getElementById(linkid).style.textDecoration = 'none';
    // //   document.getElementById(linkid).style.color = '#000000';
    // }
    // // var transform = function(obj){
    // //         var id = obj.id;
    // //         this.disabled = true;
    // //         alert(parseInt(id));
    // // }
    // // document.getElementById("0").onclick = function() {
    // //     //disable
    // //     this.disabled = true;
    
    // //     //do some validation stuff
    // }
    </script>
            <!--<label class="head1">MCQ Test</label>-->
            <!--<p class="content1" >Click on "attempt button" to give the Test</p>-->
            <!--<a class = "btn" href = "https://35.154.101.124/php/test/index.php?cid=<?php echo $cid?>&tid=<?php echo $t ?>&m1=<?php echo $m1 ?>">Attempt</a>-->
         
      
        <div class="panel">
            <label class="head">Coding Question-1</label>
            <!--<p class="content" >Click on "attempt button" to solve Question 1</p>-->
            <?php
            if($_SESSION['enable1'] == 0)
            {
               echo '
               <p class="content" >Already Attempted!</p>
               <a class = "btn" href = "link1.php">Attempted</a>';
            }
            else{
                echo '
                <p class="content" >Click on "attempt button" to solve Question 1</p>
                <a class = "btn" href = "link1.php">Attempt</a>';
            }
            ?>
        </div>
        <div class="panel">
            <label class="head">Coding Question-2</label>
            <!--<p class="content" >Click on "attempt button" to solve Question 2</p>-->
            <?php
            if($_SESSION['enable2'] == 0)
            {
               echo '
               <p class="content" >Already Attempted!</p>
               <a class = "btn" href = "link2.php">Attempted</a>';
            }
            else{
                echo '
                <p class="content" >Click on "attempt button" to solve Question 2</p>
                <a class = "btn" href = "link2.php">Attempt</a>';
            }
            //   echo '<a class = "btn" href = "link2.php">Attempt</a>';
        ?>
        </div>
         
        <?php
        $name='name'.$_SESSION['psychotest'];
        
        ?>
        <div class="panel2">
            <label class="head2">Psychometric Test</label>
            <?php
            if($_SESSION[$name]==0)
            {
            ?>
            
            <p class="content2" >Already Attempted!</p>
            <a class = "btn" href = "psychlink.php?cid=<?php echo $cid?>psychoid=<?php echo $psychoid?>&m1=<?php echo $m1 ?>&f=1">Attempted</a>
           <?php
            }
            else
            {
            ?>
             <p class="content2" >Click on "attempt button" to give the Test</p>
            <a class = "btn" href = "psychlink.php?cid=<?php echo $cid?>psychoid=<?php echo $psychoid?>&m1=<?php echo $m1 ?>&f=1">Attempt</a>   
            <?php
                
            }
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
 <?php      
 }
  
  else{
    header( 'location:https://35.154.101.124/CLient/testexpire.php');
 }
  
ob_end_flush();
?>