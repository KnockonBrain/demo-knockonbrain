<?php include('assign.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyschometric Test</title>
    <style>
    .bdy
    {
        background-image:url("https://35.154.101.124/CLient/bg.webp");
        background-repeat:no-repeat;
        background-size:cover;
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
    .button:hover {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }
    .name{
        font-size: 22px;
        color:#2089a1;
        margin-top:6%;
        margin-bottom:6%;
    }
    #mybut{
        position: absolute;
        top: 28%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    #can_name{
        font-size: 17px; 
        border-color: #4691d4; 
        padding:8px;
    }
    #instruct{
        background-color: rgb(0 0 0 / 8%)!important;
        padding-top:5px;
        padding-bottom:5px;
        padding-right:5px;
        padding-left:30px;
        margin-left:270px;
        margin-right:270px;
        margin-top:150px;
     }
    input[type=text], select {
    padding:12px 20px;
    display: inline-block;
    border: 1px solid black;
    border-radius: 4px;
    box-sizing: border-box;
}
</style>
<script type="text/javascript" >
   window.history.forward();
        function noBack() {
            window.history.forward();
        }
</script>
</head>
<body class="bdy">
<form>
    <div class="name">
    <center><label><b>Your Name:</b></label>
    <input type="text" id="can_name" name="can_name" placeholder="Enter your full name" required></center>
    </div>
<button class="button" name="start" id="mybut" value="sub" onclick="wps_params()">START TEST</button>

<div id="instruct"><br><b>Instructions:</b>
<p><b>1. It is mandatory to attempt all the questions </b></p>
<p>2. Timer will start immediately,Once you click on the start button.</p>
<p><b>3. Click on "Submit" button to submit the test otherwise test will not get submitted.</b></p>

<p><b>Note:</b> Please follow the instructions carefully as it might affect your result.</p></div>

</form>
</body>

</html>