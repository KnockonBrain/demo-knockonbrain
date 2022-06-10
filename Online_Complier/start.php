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
<body>
<form>
<button class="button"  name="start" id="mybut">START TEST</button>
<div id="instruct"><br><b>Instructions:</b>
<p>1. Your camera should be at 90 degree during the test.</p>
<p><b>2. It is mandatory to allow the webcam & screen sharing otherwise test will not get submitted.</b></p>
<p>3. Timer will start immediately,Once you click on the start button.</p>
<p><b>4. DO NOT press esc key, else your test will be terminated automatically.</b></p>
<p>5. It takes 2-3 minutes to upload test video, Please wait until your test is successfully submitted.</p>
<p><b>Note:</b> Please follow the instructions carefully as it might affect your result.</p></div>
</form>
</body>
</html>