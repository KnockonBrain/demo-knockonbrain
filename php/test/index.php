<?php require 'dbconfig.php';

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

ob_start();
$qu = array(
    'cid' => $_GET['cid'], 
    'id' => $_GET['id'],
    'tid' => $_GET['tid'],
    'm1' => $_GET['m1']
    );
$id101=$_GET['id'];
    $email101=$_GET['m1'];
  $attempt=mysqli_query($conn,"SELECT count(*) FROM `results` WHERE id=$id101 and Email='$email101'");
            $data_attempt = mysqli_fetch_array($attempt);
    date_default_timezone_set("Asia/Kolkata");
    $curDate =date("Y-m-d H:i");
    $result_id=$_GET['id'];
    $query = "Select * from details where id='$result_id' ";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    
     //fetching testname
    $testname=$_GET['tid'];
    $query1 = "SELECT * FROM exam_category where id= '$testname'";
    $result_ques1 = mysqli_query($conn,$query1);
    $row1=mysqli_fetch_assoc($result_ques1);
    $test=$row1['category'];
  
  // echo $row['exp_date'];
    if($row['exp_date'] >= $curDate || $_GET['id']==""){ 
         if($qu['m1']==NULL)
        {
           $da=http_build_query($qu);
            header("Location: newemail.php?$da");
        }
        
        //when feebackform is submit 
        //check whether elements are empty or not ,if not empty proceed further
        if(isset($_POST['feedsub']) || !empty($_POST['rating']))
        {
            $sql = "INSERT INTO feedback (email,test_name,rating,comment) VALUES ('".$_GET["m1"]."','".$test."','".$_POST["rating"]."','".$_POST["comment"]."')";
            $result = mysqli_query($conn,$sql);
            header("Location: feedbacksubmit.php");
         }
         if($data_attempt[0]<1){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta charset="euc-kr">
    <link rel="shortcut icon" type="image/png" href="favicon-logo1.png"/>
    <link rel=" icon" type="image/png" href="../favicon-logo1.png"/>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>
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
  <style>
        html, body {
        padding: 0px!important;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 1em;
    }
    .body1
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
  float:right;
  margin-right:-580px;
   font-family: 'Open Sans',sans-serif;
    font-weight: 400;
    font-size: 20px;
    line-height: 1.85714285714286;
    text-decoration: inherit;
    box-shadow:0px 12px 24px -8px rgb(59 79 228 / 40%);
    box-sizing: border-box;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after{
  opacity: 1;
  right: 0;
}

video {
    display: none;
    
    width: 30%;
    border-radius: 5px;
    border: 1px solid black;
}
#mybut {
  margin: 0;
  position: absolute;
  top: 30%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
#myForm{
    display:none;
}
#myForm:fullscreen {
    display:block;
    width: 100%;
    height: 100%;
    padding:50px;
    background-color: white;
    overflow-y: auto;
}
#myForm {
  -webkit-touch-callout: none; /* donot allow selecting iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
}

  </style>

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="icon" type="image/png" href="../images/favicon-logo1.png"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
	function wps_params(){
	let x = document.getElementById("can_name").value;
        if (x == "") {
        alert('Please enter your name');
        window.location.reload(false);
        }
	if (window.location.href.indexOf("index") > -1 && jQuery(window).width() <= 480) {
	   window.location = "https://35.154.101.124/php/test/mobilerror.php";
	   }
	   
	}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="body1">
<style>
.time {
    height:55px;
    margin-right: 60px!important;
    margin-top: 60px!important;
    background:#34495e;
    color:white;
    line-height:50px;
    padding-bottom:30px;
    position:fixed;
    bottom:20px;
    right:20px;
    border-radius:50px;
    display:inline-block;
    padding:0 20px;
    z-index:999;
    box-shadow:0 4px 8px rgb(0 0 0 / 10%);
}
#btn
{
    
}
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
.button1 {
   background-color :  #3b4fe4;
  color: #ffffff;
  padding: 10px 20px;
  border-radius: 12px;
  float:center;
  margin-left:500px;
  margin-bottom:100px;
   font-family: 'Open Sans',sans-serif;
    font-weight: 400;
    font-size: 20px;
    line-height: 1.85714285714286;
    text-decoration: inherit;
    box-shadow:0px 12px 24px -8px rgb(59 79 228 / 40%);
    box-sizing: border-box;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}

.head
{
    text-align: center;
    font-family: Comfortaa;
    padding:20px 0 20px;
}
h6
{
    font-family: Comfortaa;
}
.ques
{
    width: 73%;
    margin: auto;
}
.content{
    width:70%;
    margin-right:50%;
}
@media (max-width:1199px)
{
    .ques
    {
        width: 88%;
    }
}
@media (max-width:991px)
{
    .ques
    {
        width: 96%;
    }
}
@media(max-width:480px){
    .content{
        width:80%;
        margin-left:-20%;
    }
    #instruct{
        margin-left:40px;
        margin-right:50px;
        margin-bottom:20px;
        margin-top:270px;
    }
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
.name{
    font-size: 20px;
    color:#2089a1;
    margin-top:6%;
    margin-bottom:6%;
    margin-left:35%;
    }
input[type=text], select {
    padding:5px 10px;
    display: inline-block;
    border: 1.5px solid #4085C9;
    border-radius: 7px;
    box-sizing: border-box;
}
    </style>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
<!-- <script src="node_modules/@ffmpeg/ffmpeg/dist/ffmpeg.min.js"></script>   -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.0.0/video.min.js"></script>

<!-- Load RecordRTC core and adapter -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/RecordRTC/5.6.1/RecordRTC.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/6.1.4/adapter.js"></script>

<!-- Load VideoJS Record Extension -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-record/4.2.0/videojs.record.min.js"></script>
<script src="https://www.webrtc-experiment.com/EBML.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.5.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!--<script src="screen5.js"></script>-->
<script>
     const myString = window.location.search;
        console.log(myString);
        const urlParams = new URLSearchParams(myString);
        const email = urlParams.get('m1');
        console.log(email);
        const cid = urlParams.get('cid');
        console.log(cid);
        const tid = urlParams.get('tid');
        console.log(tid);
        const flag = urlParams.get('f');
        console.log(flag);
        
        
if(!navigator.getDisplayMedia && !navigator.mediaDevices.getDisplayMedia) {
    var error = 'Your browser does NOT supports getDisplayMedia API.';
    document.querySelector('h1').innerHTML = error;

    document.querySelector('video').style.display = 'none';
    document.getElementById('btn-start-recording').style.display = 'none';
    document.getElementById('btn-stop-recording').style.display = 'none';
    throw new Error(error);
}

function invokeGetDisplayMedia(success, error) {
    var displaymediastreamconstraints = {
        video: {
            displaySurface: 'monitor', // monitor, window, application, browser
            logicalSurface: true,
            cursor: 'always' // never, always, motion
        }
    };

    // above constraints are NOT supported YET
    // that's why overridnig them
    displaymediastreamconstraints = {
        video: true
    };

    if(navigator.mediaDevices.getDisplayMedia) {
        navigator.mediaDevices.getDisplayMedia(displaymediastreamconstraints).then(success).catch(error);
    }
    else {
        navigator.getDisplayMedia(displaymediastreamconstraints).then(success).catch(error);
    }
}

function captureScreen(callback) {
    invokeGetDisplayMedia(function(screen) {
        addStreamStopListener(screen, function() {
             document.getElementById('btn-stop-recording').click();
        });
        callback(screen);
    }, function(error) {
        console.error(error);
        var b = document.getElementById("mybut");
        b.style.visibility = 'hidden';
        //alert('Unable to capture your screen. Please check console logs.\n' + error);
        // document.getElementById("nocamera").innerHTML+="Please Share your screen to give test !!";
        swal({
                        title: "Screen sharing cancelled",
                        text: "You Can't give the test without screen sharing!!",
                        icon: "warning",
                        buttons: false,
                        closeOnEsc: false,
                        closeOnClickOutside: false
                    });
        
    });
}

function captureCamera(cb) {
    navigator.mediaDevices.getUserMedia({audio: true, video: true}).then(cb).catch(function(err) {
        var b = document.getElementById("mybut");
        b.style.visibility = 'hidden';
  /* handle the error */
  swal({
                        title: "Camera access cancelled",
                        text: "You Can't give the test without camera access!!",
                        icon: "warning",
                        buttons: false,
                        closeOnEsc: false,
                        closeOnClickOutside: false
                    });
});
//navigator.mediaDevices.getUserMedia({audio: true, video: true}).then(cb);
}

function keepStreamActive(stream) {
    var video = document.createElement('video');
    video.muted = false;
    video.srcObject = stream;
    video.style.display = 'none';
    (document.body || document.documentElement).appendChild(video);
}

captureScreen(function(screen) {
    keepStreamActive(screen);
    captureCamera(function(camera) {
        keepStreamActive(camera);

        // screen.width = window.screen.width;
        // screen.height = window.screen.height;
        screen.width = 640;
        screen.height = 360;
        screen.fullcanvas = true;
        
        // camera.width = 320;
        // camera.height = 240;
        camera.width= 200;
        camera.height = 130;
        camera.top = screen.height - camera.height;
        camera.left = screen.width - camera.width;
        
        var recorder = RecordRTC([screen, camera], {
            type: 'video',
            mimeType: 'video/webm;codecs=H264',
            video: {
                width: { min: 320, ideal: 320 },
                height: { min: 240 },
            },
            canvas: {
            width: 640,
            height: 360
            },
            frameInterval: 200,
            numberOfAudioChannels: 2,
            frameRate: 5,
            previewStream: function(s) {
                document.querySelector('video').muted = true;
                document.querySelector('video').srcObject = s;
            }
        });

        recorder.startRecording();
        
        function stopRecordingCallback() {
            

            recorder.stopRecording(function() {
                getSeekableBlob(recorder.getBlob(), function(seekableBlob) {
                    var fileName = getFileName('webm');
                    fetchRadioValue(fileName);
                    var fileobject = new File([seekableBlob], fileName, {
                    type: 'webm'
                    })
                    var serverUrl = 'https://35.154.101.124/php/test/upload-video.php';
                    var formData = new FormData();
                    formData.append('email',email);
                    formData.append('cid',cid);
                    formData.append('tid',tid);
                    formData.append('video',fileobject);
                    formData.append('video-filename',fileobject.name);
                
                    console.log('upload recording ' + fileobject.name + ' to ' + serverUrl);
                    swal({
                        title: "Your Video is being uploaded",
                        text: "Please wait Until You Get Success alert!",
                        icon: "https://i.gifer.com/7plX.gif",
                        buttons: false,
                        closeOnClickOutside: false,
                    });
                    // start upload
                    fetch(serverUrl, {
                    method: 'POST',
                    body: formData
                    }).then(
                    success => swal({
                      title: "Test Submitted",
                      text: "Click on OK button",
                      icon: "success",
                      closeOnEsc: false,
                      closeOnClickOutside: false
                    }).then(function() {
                        if(flag==1){
                             window.location.href = "https://35.154.101.124/ct/Custom_Test/test.php";
                        }
                    })
                    ).catch(
                    error => swal({
                        title: "Sorry your video was not uploaded",
                        text: "Please contact your recruiter for retest.",
                        icon: "error",
                        closeOnEsc: false,
                        closeOnClickOutside: false
                    })
                    );
                    //video.src = URL.createObjectURL(seekableBlob);
                    document.querySelector('video').srcObject = null;
                    document.querySelector('video').src = URL.createObjectURL(seekableBlob);
                    document.querySelector('video').muted = true;
                    [screen, camera].forEach(function(stream) {
                        stream.getTracks().forEach(function(track) {
                            track.stop();
                        });
                      });
               });//seekableblob
            });//stoprecordingfunction
        };//stoprecordingcallback
            jQuery(document).on( 'click', "#btn-stop-recording", function( event ) {
            stopRecordingCallback();
            event.preventDefault();
            //fetchRadioValue();
            this.disabled = true;
            document.getElementById('myForm').style.display = 'none';
            document.getElementById('timer').style.display = 'none';
            document.getElementById("left").innerHTML = "Time Over";
           
            });
        //window.timeout = setTimeout(stopRecordingCallback, 1800 * 1000);

       
        // document.getElementById('btn-stop-recording').onclick = function() {
    
        // window.stopCallback();
    //      document.getElementById('btn-stop-recording').onclick = function() {
    // this.disabled = true;
    // stopRecordingCallback();

// };

    });
   
});

function addStreamStopListener(stream, callback) {
    stream.addEventListener('ended', function() {
        callback();
        callback = function() {};
    }, false);
    stream.addEventListener('inactive', function() {
        callback();
        callback = function() {};
    }, false);
    stream.getTracks().forEach(function(track) {
        track.addEventListener('ended', function() {
            callback();
            callback = function() {};
        }, false);
        track.addEventListener('inactive', function() {
            callback();
            callback = function() {};
        }, false);
    });
}
function getFileName(fileExtension) {
                var d = new Date();
                var year = d.getUTCFullYear();
                var month = d.getUTCMonth();
                var date = d.getUTCDate();
                return 'RecordRTC-' + year + month + date + '-' + getRandomString() + '.' + fileExtension;
            }

            function getRandomString() {
                if (window.crypto && window.crypto.getRandomValues && navigator.userAgent.indexOf('Safari') === -1) {
                    var a = window.crypto.getRandomValues(new Uint32Array(3)),
                        token = '';
                    for (var i = 0, l = a.length; i < l; i++) {
                        token += a[i].toString(36);
                    }
                    return token;
                } else {
                    return (Math.random() * new Date().getTime()).toString(36).replace(/\./g, '');
                }
            }
</script>

<video controls autoplay playsinline></video>
<form id="can_name1">
<div class="name">
<label><b>Your Name:</b></label>
<input type="hidden" id="cid" name="cid" value="<?php echo $qu['cid'];?>">
  <input type="hidden" id="m1" name="m1" value="<?php echo $qu['m1'];?>">
   <input type="hidden" id="id" name="id" value="<?php echo $qu['id'];?>">
    <input type="hidden" id="tid" name="tid" value="<?php echo $qu['tid'];?>">
<input type="hidden" id="f" name="f" value="<?php echo $_GET['f'];?>">
<input type="text" id="can_name" name="can_name" placeholder="Enter your full name" onkeydown = "if (event.keyCode == 13){
                        alert('Please click on start button');
        return false;}"  required>
</div>
</form>
<button class="button" id="mybut" onclick="wps_params()">START TEST</button>
<div id="instruct" class="content"><br><b>Instructions:</b>
<p>1. Your camera should be at 90 degree during the test.</p>
<p><b>2. It is mandatory to allow the webcam & screen sharing otherwise test will not get submitted.</b></p>
<p>3. Timer will start immediately, Once you click on the start button.</p>
<p><b>4. DO NOT press esc key, else your test will be terminated automatically.</b></p>
<p>5. It takes 2-3 minutes to upload test video, Please wait until your test is successfully submitted.</p>
<p><b>6. Please Ensure that you are attempting this test from Desktop.</b></p>
<p><b>Note:</b> Please follow the instructions carefully as it might affect your result. For any further query kindly refer: <a href="https://35.154.101.124/candidate_instructions.php">Instructions</a></p>
</div>


<?php   
                
                
                //$fetchqry = "SELECT * FROM `ques2`  where `quiz_id` = 4 order by RAND()";
                if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                $link = "https";
                else
                    $link = "http";
                
                // Here append the common URL characters.
                $link .= "://";
                
                // Append the host(domain name, ip) to the URL.
                $link .= $_SERVER['HTTP_HOST'];
                
                // Append the requested resource location to the URL
                $link .= $_SERVER['REQUEST_URI'];
                    
                // Print the link
                //echo $link;
                $url_components = parse_url($link);
  
                // Use parse_str() function to parse the
                // string passed via URL
                parse_str($url_components['query'], $params);
                    
                // Display result
                //echo ' Hi '.$params['tid'];
                $quiz_id = $params['tid'];
                
                
                //calculating no of easys mediums and difficults in database for particular quizid
                
                $leveleasy = "SELECT * FROM `questions` where `quiz_id`= $quiz_id and `level`='Easy'";
                $resulteasy = $conn->query($leveleasy);
                $easy= mysqli_num_rows($resulteasy);
                $levelmedium = "SELECT * FROM `questions` where `quiz_id`= $quiz_id and `level`='Medium'";
                $resultmedium = $conn->query($levelmedium);
                $medium= mysqli_num_rows($resultmedium);
                $levelhard = "SELECT * FROM `questions` where `quiz_id`= $quiz_id and `level`='Hard'";
                $resulthard = $conn->query($levelhard);
                $hard= mysqli_num_rows($resulthard);
                
                
                
                //calculating no of questions from exam category table
                $fetch_ques = "SELECT * FROM `exam_category` where `id`= $quiz_id";
                $result_ques = $conn->query($fetch_ques);
                $noq = mysqli_fetch_assoc($result_ques);
                
                
                
                if($noq['noq']==20){
                    if($easy<10 or $medium<7 or $hard<3){
                      $fetchqry = "SELECT * FROM `questions` where `quiz_id`=$quiz_id order by RAND() LIMIT 20";
                    }
                    else{
                    $fetchqry = 
                    "(SELECT * FROM `questions` where `quiz_id`= $quiz_id and `level`='Easy' order by RAND() LIMIT 10)
                    UNION ALL
                    (SELECT * FROM `questions` where `quiz_id`= $quiz_id and `level`='Medium' order by RAND() LIMIT 7)
                    UNION ALL
                    (SELECT * FROM `questions` where `quiz_id`= $quiz_id and `level`='Hard' order by RAND() LIMIT 3)
                    order by RAND()";
                    }
                }
                else{
                    if($easy<6 or $medium<3 or $hard<1){
                      $fetchqry = "SELECT * FROM `questions` where `quiz_id`=$quiz_id order by RAND() LIMIT 10";
                    }
                    else{
                    $fetchqry = 
                    "(SELECT * FROM `questions` where `quiz_id`= $quiz_id and `level`='Easy' order by RAND() LIMIT 6)
                    UNION ALL
                    (SELECT * FROM `questions` where `quiz_id`= $quiz_id and `level`='Medium' order by RAND() LIMIT 3)
                    UNION ALL
                    (SELECT * FROM `questions` where `quiz_id`= $quiz_id and `level`='Hard' order by RAND() LIMIT 1)
                    order by RAND()";
                    }
                }
                
                
                
				$result = $conn->query($fetchqry);
				//$result2 = $conn->query($fetchqry);
				$num=mysqli_num_rows($result);
				//$quiz = mysqli_fetch_assoc($result2);?>
                <div class="ques">
				<table class="table table-sm table-borderless" id="myForm" class="no-select">
				<tr><td><center><h1 class="head"><?php echo $noq['category'];?></h1></center></td></tr>
                <tr><td><h4><div class="time" id="left">Timer-<span id="timer"></span></div></h4></td></tr>
				
				 <?php
				  $i=0;
			   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $each = array(
                    'option1'=>$row['opt1'],
                    'option2'=>$row['opt2'],
                    'option3'=>$row['opt3'],
                    'option4'=>$row['opt4'],
                );
                // shuffle($each);
                // foreach ($each as $key => $value) {
                //     echo $value;
                // }
?>

                   
                   <tr><td>
                        <div class="card  text-left" style="border:1px solid #0068A0; background-color:#68c1f3; color:white; width:73rem; margin-right:5px; " >
                        <h6 class="card-header px-3 py-3">
                            <?php echo @$snr +=1;?>&nbsp;-&nbsp; <?php  echo nl2br($row['question']);
                            $quesno[$i]=$row['id'];
                            $i++;
                            ?></h6>
                       </div>
                    </td></tr>
                    
            
            
                <?php foreach ($each as $key => $value) {?>
                   <tr><td>
                       <div class="form-check mx-4">
                        <input class="form-check-input"  type="radio" id="<?php echo $row['answer'];?>" name="<?php echo $row['id'];?>" value="<?php echo $value;?>">&nbsp;<?php echo nl2br($value); ?>
                   </div>
                   </td></tr> 
                <?php } ?>
            
                    <tr><td><div class="float-end mb-4 mx-2"><button class="btn" style="background-color:#F78385; color:white;" onclick="clearSelection('<?php echo $row['id'];?>');" id='btn btn1'>Deselect Answer</button> 
                    </div></td></tr>
                
                <?php }?> 
                
                
               
        <tr><td><div class="my-3"><center><button class="btn" style="background-color:#43b2f0; color:white; font-size:20px;" id="btn-stop-recording" name="submit">Submit Test</button></center></div></td></tr>
   
</table>
</div>

<!--feedback-->
<div id="result" style="display:none;">
<section>      

<div class="feedback" style="margin-top:5%; border-radius: 2%;">
    <span class="contact100-form-symbol">
    <img src="https://35.154.101.124/images/feedback.png" alt="SYMBOL-Feedback">
    </span>
   <div style="font-family:comfortaa;"><center><b><h5 style="font-weight: bold;">Thank You! For your valuable time. Your Recruiter will contact you soon.</h5></b></center></div>
<br>
<h6>We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve!</h6>
<br>
<form method="POST">
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
 <center><button name="feedsub" id="feedsub" type="submit" value="default">Send Feedback -></button></center>
</form>
  </div>         
</section>
</div>

<?php		
              $fetchtime = "SELECT `exam_time_in_minutes` FROM `exam_category` where `id`= $quiz_id";
				$fetched = mysqli_query($conn,$fetchtime);
				$time = mysqli_fetch_array($fetched,MYSQLI_ASSOC);
			$settime = $time['exam_time_in_minutes'];
	        $settime1 = $time['exam_time_in_minutes']; //for duration
            $settime = $settime.":00";
?>
<script>
   
    
</script>
<script>
    const clearSelection = (name) =>
    {
        const radioBtns = document.querySelectorAll("input[type='radio'][name='"+name+"']");
        radioBtns.forEach(radioBtn => {
            if(radioBtn.checked===true)
            radioBtn.checked=false;
        });
    };
</script>

<script type="text/javascript">
var x = document.getElementById("myForm");
var b = document.getElementById("mybut");
var cname=  document.getElementById("can_name1");
var count=0;

b.addEventListener('click', function() {
    navigator.keyboard.lock();
    x.requestFullscreen()||x.webkitRequestFullscreen()||x.msRequestFullscreen();
     //rightclick disable
    document.addEventListener('contextmenu', function(e) {
    e.preventDefault();}, false);
    startTimer();
    setInterval( checkFocus, 200 );
});
 //tab switching
function checkFocus() {
  if ( document.hasFocus() ) {
    console.log("The document has the focus.");
  } 
  else {
      count=count+1;
      console.log("The document has not the focus.");
      if(count==5){
       window.open('terminate.html', '_self').close();
       window.open("terminate.html");
        //document.getElementById("btn-stop-recording").click();
      }
  }
//console.log(count);
}
  window.onload = function() {
        //document.getElementById('myForm').style.display = 'none';
        // document.getElementById('nocamera').style.display = 'none';
        
        //startTimer();
        };
        document.getElementById('timer').innerHTML = '<?php echo $settime; ?>';
let primin; //for duration
let prisec;
let durmin;
let dursec;      
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
   if(m==0 && s==0){ $('#myForm').find('#btn-stop-recording').trigger('click');}
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
  primin=m;
    prisec=s;
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
  if(sec == 0 && m == 0){ alert('stop it')};
}
</script>			
<script>

		function fetchRadioValue(fileName) {
            var score = 0;
            var scoreper=0;
// 			document.getElementById("result").innerHTML = "";
			var ele = document.getElementsByTagName('input');
			var noq = '<?php echo $noq['noq'];?>';
			const quespri=<?php echo json_encode($quesno); ?>;                                                  
                
            var anspri=[];
            for(i=0;i<noq;i++){
                anspri[i]="null";
            }
           
			for(i = 0; i < ele.length; i++) {
				
				if(ele[i].type="radio") {
				
					if(ele[i].checked){
				 		temp=ele[i].name;
					    temp2=quespri.indexOf(temp);
					 anspri[temp2]=ele[i].value;
				
                        if (ele[i].value == ele[i].id){
                            score = score + 1 ;
                            scoreper=(score/noq)*100;
                            scoreper.toFixed(2);
                        }              
                    }
				}
			}
            var news = ele[0].value ;
            var quiz_id = '<?php echo $params['tid'];?>';
            var client_id = '<?php echo $params['cid'];?>';
            var email = '<?php echo $params['m1'];?>';
            var quiz_name = '<?php echo $noq['category'];?>';
             var id = '<?php echo $_GET['id'];?>';
        //document.getElementById("result").innerHTML+="The total score is " + div ;
        //  document.getElementById("result").innerHTML="<div style=margin-top:20%><center><h1>Thank You!</h1><br><h2>For your valuable time.<br>Your Recruiter will contact you soon.</h2></center></div>" ;
        var can_name=document.getElementById("can_name").value;
         document.getElementById("result").style.display = 'block';
           $.post("conn.php", { score : score , quiz_id : quiz_id,id:id,can_name:can_name,durmin:durmin,dursec:dursec, client_id :client_id,email :email,quiz_name : quiz_name, scoreper : scoreper, fileName : fileName,quespri : quespri , anspri : anspri  },function(response){
             console.log(response);
         });
         //window.location.href = "timer.html";
		}
	document.getElementById('btn-stop-recording').onclick = function() {
    document.exitFullscreen()||document.webkitExitFullscreen()||document.msExitFullscreen();
    document.getElementById('instruct').style.display = 'none';
     document.getElementById('can_name1').style.display = 'none';
    b.style.visibility = 'hidden';
    cname.style.visibility = 'hidden';
    //duration 
            var timealloted = <?php echo $settime1; ?>;
            var tempallomin=parseInt(timealloted);
            var allomin=tempallomin-1;
            var allosec=60;
            durmin=allomin-primin;
            dursec=allosec-prisec;
};

//          fetchRadioValue();
//          this.disabled = true;
//          document.getElementById('myForm').style.display = 'none';
//          document.getElementById('timer').style.display = 'none';
//          document.getElementById("left").innerHTML = "Test Finished";
//         };

document.addEventListener('keydown', function(event){
if(event.key === "Escape"){
    console.log("pressed");
    document.getElementById('can_name1').style.display = 'none';
    b.style.visibility = 'hidden';
    cname.style.visibility = 'hidden';
    document.getElementById('instruct').style.display = 'none';
    //document.getElementById("result").innerHTML="<div style=margin-top:20%><center><h2>Your test has been terminated.</h2></center></div>";
    //window.location = "terminate.html";
    window.open('terminate.html',"_self");
    if (!document.fullscreenElement) {
        //window.open("terminate.html");
        //window.open(location.href,"_self").close();
        // window.close();
        // window.open("terminate.html");
    }
}
});
</script>
<?php 
 }else{
 ?>

<div style='margin-top:100px'><center><h1><b>ATTEMPTS OVER ....</b></h1></center></div>
<?php
    
}
} 

else{
?>

<div style='margin-top:100px'><center><h1><b>THIS TEST LINK HAS BEEN EXPIRED.</b></h1></center></div>
<?php
}

?>

</body>
</html> 
<?php
ob_end_flush();
?>