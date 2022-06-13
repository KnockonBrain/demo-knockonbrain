<?php include('assign.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
        margin-top:180px;
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
    .button:hover{
        cursor: pointer;
    }
    .name{
    font-size: 22px;
    color:#2089a1;
    margin-top:8%;
    margin-bottom:6%;
    margin-left:40%;
    }
input[type=text], select {
    padding:5px 10px;
    display: inline-block;
    border: 1.5px solid black;
    border-radius: 7px;
    box-sizing: border-box;
}
     .bdy
    {
        background-image:url("https://35.154.101.124/CLient/bg.webp");
        background-repeat:no-repeat;
        background-size:cover;
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
<body class="bdy">
<form>
    <div class="name">
    <label><b>Your Name:</b></label>
    <input type="text" id="can_namecode" name="can_namecode" placeholder="Enter your full name" required>
</div> 
<button class="button"  name="start" id="mybut">START TEST</button>
<div id="instruct"><br><b>Instructions:</b>
<p>1. Your camera should be at 90 degree during the test.</p>
<p>2. It is mandatory to allow the webcam & screen sharing otherwise test will not get submitted.</p>
<p>3. Timer will start immediately,Once you click on the start button.</p>
<p>4.You can only visit a question once and navigation among questions is not allowed.</p>
<p>5. Each coding question has a <b>Run</b> and <b>Submit</b> button.For final submission of your solution please click on <b>Submit</b> Button</p>
<p>6. Click on <b>End Test</b> Button To end your test. </p>
<p>7. Please note the resemblance between Sample Output and your Output. </p>
<p>8. Do not print any extra line or extra space in your output. </p>
<p>9. Kindly note the Output is case sensitive. </p>
<p><b>Note:</b> Please follow the instructions carefully as it might affect your result.</p></div>
</form>
</body>
</html>