<?php
session_start();
include 'config.php';
$cid=$_SESSION['ID'];
// $email=$_SESSION['email'];
// echo $cid;
// echo $email;
$tid=$_GET['tid'];
$lang=$_GET['lang'];
$type=$_GET['type'];
$my_count = count($_POST);

date_default_timezone_set("Asia/Kolkata");
  $timestamp = date('Y-m-d H:i:s');
   $exp=Date('Y-m-d H:i:s', strtotime('+2 days'));
   
// echo $tid;
// echo $lang;
// echo $my_count;
// echo count($_POST['checkboxName']);
// print_r($_POST);
// if(( count($tid)>1 && count($tid)<=2))
// {
$data = array('m1'=>'','tid'=>$tid,'cid'=>$cid,'exp'=>$exp,'lang'=>$lang,'type'=>$type);
// header('location:https://test.avianglobes.com/ct/Custom_Test/start.php?http_build_query($data)');

// echo "<a href='https://test.avianglobes.com/ct/Custom_Test/start.php?" . http_build_query($data) . "'>next page</a>";
$testlink="https://35.154.101.124/ct/Custom_Test/start.php?".http_build_query($data);
//     foreach($_POST['checkboxName'] as $value)
//     {
//       echo $value.'<br>';
//     }
//   if(!empty($_POST['language'])) {
//         echo '  ' . $_POST['language'].'<br>';
//     } 
//       if(!empty($_POST['psycho'])) {
//         echo '  ' . $_POST['psycho'].'<br>';
//     } 



   
?>
<!DOCTYPE html>
<html>
<head>
<title>KnockOnBrain</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel=" icon" type="image/jpg" href="../images/favicon-logo1.jpg" />

<!--<link href="../Knockonbrain logo.png" rel="icon">-->
<!--<link href="../Knockonbrain logo.png" rel="apple-touch-icon">-->



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
  
<style>

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 240px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
  word-wrap: break-word;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
#myInput {
  width: 75%;
  background: #f0f2fc;
  font-family: inherit;
  font-weight:300;
  color: black;
  letter-spacing: 1px;
  text-indent: 5%;
  border-radius: 5px 0 0 5px;
}
#sub {
  width: 90px;
  height: 44px;
  background: #012970;
  font-family: inherit;
  font-weight: bold;
  color: white;
  letter-spacing: 1px;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  justify-content:center;
  transition: background .3s ease-in-out;
}
  

#sub:hover {
  background: #5579f9;
}
form {
  /*width: 450px;*/
 margin: 40px;
}
body {
  font-family: 'Lato', sans-serif;
  color: black;
  margin:10px;
}

.header {
  font-size: 35px;
  font-weight:600;
  text-transform: uppercase;
  letter-spacing: 2px;
  color:#012970;
}


.description {
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 1.3em;
  margin: -2px 0 45px;
}


.input {
  display: flex;
  /*align-items: center;*/
}


.button {
    display: flex;
    align-items: center;
  height: 44px;
  border: none;
}
input:focus {
  outline: none;
  outline: 2px solid #9ab9ff;
  box-shadow: 0 0 2px #9ab9ff;
}
.icon {
  display: inline-block;
  position:absolute;
  /*top:50%;*/
  /*left:50%;*/
  /*margin-left:150px;*/
  /*margin-top:30px;*/
  /*-ms-transform:translate(-50%,-50%);*/
  /*-webkit-transform:translate(-50%,-50%);*/
  /*transform:translate(-50%,-50%);*/
}

/* Icons */

.back1 {
  color:#fff;
  background: #012970;
  border-radius:4px;
  text-align:center;
  text-decoration:none;
  font-family:fontawesome;
  position: relative;
  display: inline-block;
  width:40px;
  height:40px;
  padding-top:12px;
  margin:0 2px;
  -o-transition:all .5s;
  -webkit-transition: all .5s;
  -moz-transition: all .5s;
  transition: all .5s;
   -webkit-font-smoothing: antialiased;
}

.back1:hover {
  background: #5579f9;
}

/* pop-up text */

.back1 span {
  color:#666;
  position:absolute;
  font-family:sans-serif;
  bottom:0;
  left:-25px;
  right:-25px;
  padding:5px 7px;
  z-index:-1;
  font-size:14px;
  border-radius:2px;
  background:#fff;
  visibility:hidden;
  opacity:0;
  -o-transition:all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -webkit-transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

/* pop-up text arrow */

.back1 span:before {
  content:'';
  width: 0; 
  height: 0; 
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #fff;
  position:absolute;
  bottom:-5px;
  left:40px;
}

/* text pops up when icon is in hover state */

.back1:hover span {
  bottom:50px;
  visibility:visible;
  opacity:1;
}

/* font awesome icons */

.back1:nth-of-type(2):before {
content:'\f09a';
}
.back1:nth-of-type(3):before {
content:'\f16d';
}
.back1:nth-of-type(5):before {
content:'\f2c6';
}
.back1:nth-of-type(6):before {
content:'\f0d2';
}
.back1:nth-of-type(1):before {
content:'\f08c';
}
.back1:nth-of-type(4):before {
content:'\f232';
}
/*.tooltip .button{*/
/*    margin-left:400px;*/
/*}*/
.back:link, .back:visited {
  text-align: center;
  text-decoration: none;
  display: inline-block;
    padding: 15px 30px;
    border-radius: 4px;
    transition: 0.5s;
    background: #012970;
    box-shadow: 0px 5px 30px rgb(65 84 241 / 40%);
}

.back:hover, .back:active {
 background: #5579f9;
}

@media screen and (max-width: 850px) {
  .column {
    width: 100%;
  }
  
}
@media screen and (max-width: 1244px) {
  .column2 h2 {
      
font-size:12px;
}
}
@media screen and (max-width: 500px) {
    form{
        margin:20px;
    }
    
}
.column2 {
  float: left;
   border:1px solid black;
  width: 33.33%;
  padding: 15px;
  height: 200px; /* Should be removed. Only for demonstration */
}
.row2{
    border-style:solid;
   margin-top:10px;
}
/* Clear floats after the columns */
.row2:after {
  content: "";
  
  display: table;
  clear: both;
}
</style>
</head>
<body>
    
<div class="row">
  <div class="column" >
    <form action="#" method="post" name="sign up for beta form">
          <div class="header">
             <p>Your test link has been generated</p>
          </div>
          <div class="description">
            <p>Click on the button to copy the text from the text field.</p>
            <b><p>The test link will be valid for 48 hours.</p></b>
          </div>
          <div class="input">
            <input type="text" class="button" id="myInput"  name="email" value="<?php echo $testlink?>">
            <!--<input type="submit" class="button" id="submit" value="SIGN UP">-->
            <div class="tooltip">
            <button onclick="myFunction()" onmouseout="outFunc()" class="button" id="sub" >
            <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                <i class="fas fa-paste fa-lg" ></i>
            </button>
            </div>
            <br>
            <br>
          </div>
                                    <!--      <div class="card-block">             -->
                                    <!--<span style="float: right; color: #2B3856; cursor: pointer; margin-top:10px;" id="myBtn" class="mybtn"><i style="font-size:21px;" class="fa fa-info-circle"></i></span>-->
                                    <!--    <div class="head">-->
                                    <!--        <h3 style="text-align: center;-->
                                    <!--            margin:10px 5px 0px 5px;-->
                                    <!--            font-weight: 600;-->
                                    <!--            letter-spacing: 5px;-->
                                    <!--            font-size: 25px;-->
                                    <!--            line-height: 1.2;-->
                                    <!--            ">SCHEDULED TESTS</h3>-->
                                    <!--    </div>-->
                                    <!--     <hr>-->
                                        
                                    <!--    <form name="f1" id="f1" method="POST" action="echo2.php">-->
                                               
                                    <!--            <div class="flex-container">-->
                                    <!--            <div class="grid-item" style="width:1000px;">-->
                                                   
                                                   <br>
                                                   <h2 style="color:#012970;">SCHEDULED TESTS</h2>
                                                   
                                                   <div class="row2">
  <div class="column2" style="background-color:#f0f2fc;">
    <h2 style="color:#012970;">MCQ</h2>
    <?php
    foreach($tid as $value)
   {
     $query1="SELECT category FROM exam_category WHERE id='$value' ";
     $q1res=mysqli_query($db,$query1);
     $res=mysqli_fetch_assoc($q1res);
     $total=mysqli_num_rows($res);
    
       ?>
     <p><?php echo $res['category'];?></p>
 <?php 
  }
  ?>
    <!--<p>Some text..</p>-->
  </div>
  <div class="column2" style="background-color:#f0f2fc;">
    <h2 style="color:#012970;">Coding</h2>
    <p><?php 
    print_r($lang);
    ?></p>
  </div>
  <div class="column2" style="background-color:#f0f2fc;">
    <h2 style="color:#012970;">Psychometric</h2>
    <p><?php 
    print_r($type);
    ?></p>
  </div>
</div>
                                                   
                                                   
                                            <!--    </div>-->
                                                
                                            <!--</div>-->
                                               
                                               
                                            <!--<br>-->
                                            <!--<div class="flex-container">-->
                                            <!--    <div class="grid-item">-->
                                            <!--        <label>-->
                                            <!--          <i class="fa fa-envelope icon"></i>&nbsp;&nbsp;&nbsp;Applicant E-mail ID-->
                                            <!--        </label>-->
                                            <!--    </div>-->
                                            <!--    <div class="grid-item"><textarea type="text" class="text txtarea1" id='address' name='address' required placeholder='You can invite upto 20 applicants at a time &#10 example:&#10 anil@knockonbrain.com  &#10 vashist@knockonbrain.com  &#10 neelam@knockonbrain.com'></textarea>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <br>
                                         
                                            <!--<center>-->
                                            <!--    <div class="btnn">-->
                                            <!--        <center>-->
                                            <!--            <button type="submit" class="jbtn" name="submit" id="submit"><b>Send Invite</b>&nbsp;<i class="fa fa-arrow-right"></i></button>-->
                                            <!--        </center>-->
                                            <!--    </div>-->
                                            <!--</center>-->
                                    <!--    </form>-->
                                    <!--</div>  -->
         
          <div class="description">
            <p>You can share this link in your job posting on social media and job based platforms.</p>
          </div>
          <div class="icon">
           <a href="https://linkedin.com/" class="back1"><span>LinkedIn</span></a>
            <a href="https://www.facebook.com/" class="back1"><span>Facebook</span></a>
            <a href="https://instagram.com/" class="back1"><span>Instagram</span></a>
             <a href="https://www.whatsapp.com/" class="back1"><span>WhatsApp</span></a>
            <a href="https://www.telegram.org/" class="back1"><span>Telegram</span></a>
           
            <a href="https://in.pinterest.com/" class="back1"><span>Pinterest</span></a>
        </div>
        <div style="margin-top:100px;">
        <a href="testtable.php" class="back" style="color:white;">Back to dashboard</a>
        </div>
        </form>
  </div>
  
  <div class="column">
     <img src="copyurl3.jpg" style="width: 100%; margin-top: -20px;">
  </div>
  
</div>

    
<!--<p>Click on the button to copy the text from the text field. Try to paste the text (e.g. ctrl+v) afterwards in a different window, to see the effect.</p>-->

<!--<input type="text" value="" id="myInput" style="width:30%;">-->

<!--<div class="tooltip">-->
<!--<button onclick="myFunction()" onmouseout="outFunc()">-->
<!--  <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>-->
<!--  Copy text-->
<!--  </button>-->
<!--</div>-->

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}

</script>
 <?php
// }
// else
// {
//     echo"select atleast two test to proceed";
//      header("location:testtable.php");
// }
?>
</body>
</html>
