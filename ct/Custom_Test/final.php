<?php include('config.php') ?>
<?php
    session_start();
    header("Cache-Control: private, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    date_default_timezone_set('Asia/Kolkata'); 
    if(isset($_SESSION['codingtest'])){
    $end_time=date("Y-m-d H:i:s"); 
    $start_time=$_SESSION['start_time'];
    $cid= $_SESSION['cid'];
    $email=$_SESSION['email'];
    $fn1=$_SESSION['fn1'];
    $fn2=$_SESSION['fn2'];
    $main_lang=$_SESSION['main-lang'];
    $myPhpVar= $_SESSION['count'];
    $lg1=$_SESSION['lg1'];
    $lg2=$_SESSION['lg2'];
    $qid1=$_SESSION['qid1'];
    $qid2=$_SESSION['qid2'];
    $source1=$_SESSION['source1'];
    $source2=$_SESSION['source2'];
    $test1=$_SESSION['test1'];
    $test2=$_SESSION['test2'];
    $codeid=$_SESSION['codeid'];
    $sum=$myPhpVar/6;
    $sum=$sum*100;
    $testcase1=$test1/10;
    $testcase1=$testcase1*100;
    $testcase2=$test2/10;
    $testcase2=$testcase2*100;
    //$sql = "INSERT INTO result (cid,email,res_per,start_time,end_time,video_link1,video_link2,lg1,lg2,lg) VALUES ('$cid','$email',$sum,'$start_time','$end_time','https://phptest.avianglobes.com/php/test/upload/$fn1','https://phptest.avianglobes.com/php/test/upload/$fn2','$lg1','$lg2','$main_lang')";
    $sql = "INSERT INTO code_result (cid,email,res_per,start_time,end_time,video_link1,video_link2,lg1,lg2,lg,id,qid1,qid2,code1,code2,test1,test2) VALUES ('$cid','$email',$sum,'$start_time','$end_time','https://phptest.avianglobes.com/code/upload/$fn1','https://phptest.avianglobes.com/code/upload/$fn2','$lg1','$lg2','$main_lang','$codeid','$qid1','$qid2','$source1','$source2','$testcase1','$testcase2')";
    if ($con->query($sql) === TRUE) {
  //      echo "New record created successfully";
            $test="Assessment";
         //when feebackform is submit 
            //check whether elements are empty or not ,if not empty proceed further
        
    }
   // else
   //  echo "hi";
// destroy the session
// session_destroy();
$con->close();
}
// session_destroy();
?>
<!DOCTYPE html>
<!-- code by webdevtrick ( https://webdevtrick.com) -->
<html>

<head>
  <meta charset="UTF-8">
  <title>Sequence Test</title>
      <link rel="stylesheet" href="final.css">
      <script>
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
      </script>
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <style>

body{
    background-image: url(https://phptest.avianglobes.com/CLient/bg.webp);
    background-repeat: round;
}

/*feedback*/
.feedback{
    width: 100%;
    max-width: 780px;
    background: #fff;
    margin: 0 auto;
    padding: 15px;
    padding-top: 50px;
    box-shadow: 1px 1px 16px rgba(0, 0, 0, 0.3);
}
.survey-hr{
  margin:10px 0;
  border: .5px solid #ddd;
}
.star-rating {
   /*margin: 25px 0 0px;*/
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  width: 175px;
  height: 35px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 20%;
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  width: 20%;
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}

span.scale-rating{
margin: 5px 0 15px;
    display: inline-block;
   
    width: 100%;
   
}
span.scale-rating>label {
  position:relative;
    -webkit-appearance: none;
  outline:0 !important;
    border: 1px solid grey;
    height:33px;
    margin: 0 5px 0 0;
  width: calc(10% - 7px);
    float: left;
  cursor:pointer;
}
span.scale-rating label {
  position:relative;
    -webkit-appearance: none;
  outline:0 !important;
    height:33px;
      
    margin: 0 5px 0 0;
  width: calc(10% - 7px);
    float: left;
  cursor:pointer;
}
span.scale-rating input[type=radio] {
  position:absolute;
    -webkit-appearance: none;
  opacity:0;
  outline:0 !important;
    /*border-right: 1px solid grey;*/
    height:33px;
 
    margin: 0 5px 0 0;
  
  width: 100%;
    float: left;
  cursor:pointer;
  z-index:3;
}
span.scale-rating label:hover{
background:#fddf8d;
}
span.scale-rating input[type=radio]:last-child{
border-right:0;
}
span.scale-rating label input[type=radio]:checked ~ label{
    -webkit-appearance: none;

    margin: 0;
  background:#fddf8d;
}
span.scale-rating label:before
{
  content:attr(value);
    top: 7px;
    width: 100%;
    position: absolute;
    left: 0;
    right: 0;
    text-align: center;
    vertical-align: middle;
  z-index:2;
}
#feedsub{
    background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
    color: #fff;
    border: none;
    position: relative;
    height: 45px;
    font-family:comfortaa;
    font-size: 1em;
    padding: 0.1em 1em;
    cursor: pointer;
    transition: 800ms ease all;
    outline: none;
}
#feedsub:hover{
    background:#fff;
    color:#1dc4e9;
}
#feedsub:before,#feedsub:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
      transition:400ms ease all;
}
#feedsub:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
#feedsub:hover:before,#feedsub:hover:after{
  width:100%;
  transition:800ms ease all;
}

.contact100-form-symbol img {
        max-width: 49px;
}
.contact100-form-symbol {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 5rem;
    height: 5rem;
    border: 1px solid #e7e7e7;
    border-radius: 50%;
    background: #fff;
  top: 15px;
    left: 50%;
   -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
}
.contact100-form-symbol img {
    max-width: 49px;
}
   </style>
</head>

<body>
<!--<h1 class="reveal">Thank You For Your Time.</h1>-->

 <!--feedback-->
<div id="result">
<section>      

<div class="feedback" style="margin-top:5%; border-radius: 2%;">
    <span class="contact100-form-symbol">
    <img src="https://phptest.avianglobes.com/feedback.png" alt="SYMBOL-Feedback">
    </span>
   <div style="font-family:comfortaa;"><center><b><h5 style="font-weight: bold;">Thank You! For your valuable time. Your Recruiter will contact you soon.</h5></b></center></div>
<br>
<h6>We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve!</h6>
<br>
<form method="POST" action="feedbacksubmit.php">
<label>1. Your overall experience with us ?</label><br>
  
<span class="star-rating">
  <input type="radio" name="rating" id="rating" value="1"><i></i>
  <input type="radio" name="rating" id="rating" value="2"><i></i>
  <input type="radio" name="rating" id="rating" value="3"><i></i>
  <input type="radio" name="rating" id="rating" value="4"><i></i>
  <input type="radio" name="rating" id="rating" value="5"><i></i>
</span>
  <hr class="survey-hr">
<label for="m_3189847521540640526commentText">2. Any Suggestions:</label><br/>
<textarea cols="75" id="comment" name="comment" rows="5" style="resize: none; width: 100%;"></textarea><br>
<br>
 <center><button name="feedsub" id="feedsub" type="submit">Send Feedback -></button></center>
</form>
  </div>         
</section>
</div>

</body>

</html>