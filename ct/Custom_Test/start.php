<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$cid=$_GET['cid'];
$lang=$_GET['lang'];
$type=$_GET['type'];
$tid=$_GET['tid'];
$exp=$_GET['exp'];
$email=$_GET['m1'];
$mcqid=$_GET['mcqid'];
$codeid=$_GET['codeid'];
$pyschoid=$_GET['pyschoid'];
// echo "Test1 ID: ".$_GET['tid'][0]; echo "<br />";
// echo "Test2 ID: ".$_GET['tid'][1]; echo "<br />";
// echo $cid;
$data = array('m1'=>'','tid'=>$tid,'mcqid'=>$mcqid,'codeid'=>$codeid,'psychoid'=>$psychoid,'cid'=>$cid,'exp'=>$exp,'lang'=>$lang,'type'=>$type,'f'=>1);
$q=http_build_query($data);
if ($email==''){
    
    header( "location:newemail.php?$q" );
    
}
else{
    // $_SESSION['email'] = $_GET['email']; //Assigning candidate email ID
    include('assign.php');
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Test</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <style>
    #instruct{
        background-color: rgb(0 0 0 / 8%)!important;
        padding-top:5px;
        padding-bottom:5px;
        padding-right:5px;
        padding-left:30px;
        margin-left:270px;
        margin-right:270px;
        margin-top:300px;
    }
    .button {
        background-color :  #3b4fe4;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 12px;
        margin-right:-580px;
        font-family: 'Open Sans',sans-serif;
        font-weight: 400;
        font-size: 20px;
        line-height: 1.85714285714286;
        text-decoration: inherit;
        box-shadow:0px 12px 24px -8px rgb(59 79 228 / 40%);
        box-sizing: border-box;
        margin: 0;
  
    }
    #mybut{
        position: absolute;
        top: 30%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>
</head>
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
<body>
<form>
<button class="button"  name="start" id="mybut">START TEST</button>
<div id="instruct"><br><b>Instructions:</b>
<p>1. Your camera should be at 90 degree during the test.</p>
<p>2. It is mandatory to allow the webcam & screen sharing otherwise test will not get submitted.</p>
<p>3. Timer will start immediately,Once you click on the start button.</p>
<p>4.You can only visit a question once and navigation among questions is not allowed.</p>
<p>5. Each coding question has a <b>Run</b> and <b>Submit</b> button.For final submission of your solution please click on <b>Submit</b> Button</p>
<p>6. Click on <b>End Test</b> Button To end your test. </p>
<p><b>Note:</b> Please follow the instructions carefully as it might affect your result.</p></div>
</form>
</body>
</html>