<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
   session_start();
    if(isset($_SESSION['user_nicename'])) {
        
        include 'data1.php';
    
        $cid=$_SESSION['ID'];
        $user= mysqli_query($con1, "Select * from users where ID=$cid");
    $user_date = mysqli_fetch_array($user);
    $user_exp=$user_date['exp_date'];
    $user_type=$user_date['type'];
        date_default_timezone_set("Asia/Kolkata");// set time_zone according to your location
        $timestamp = date('Y-m-d H:i:s');
        
        //when form is submit 
        //check whether elements are empty or not ,if not empty proceed further
        if(isset($_POST['submit'])&& !empty($_POST['testtype'])&& !empty($_POST['address']))
        {
            if($user_exp>$timestamp){//check whether trial period valid or not
             $lang=$_POST['testtype'];
          
             $address = $_POST['address'];
        
            $cid=$_SESSION['ID'];
            $current_username=$_SESSION['user_nicename'];
        
            $email = preg_split("/[\s,]+/", $address);
      
            $to = implode(",", $email);
            $exp=Date('Y-m-d H:i:s', strtotime('+2 days'));
        
            foreach($email as $d)
            {
                $sql="INSERT INTO code_details(cid,date,email,exp_date,lang) VALUES(:cid,:timestamp,:d,:exp,:lang)";
                $stmt=$pdo->prepare($sql);
                $stmt->execute(['cid'=>$cid,'timestamp'=>$timestamp,'d'=>$d,'exp'=>$exp,'lang'=>$lang]);
            }
        
           header("Location:cinvitation.php?lang=$lang&date=$timestamp");
        }
        else
        { 
            if($user_type=='trial' || $user_type=='add-on1'){
             ?>
              <script>
   //alert message for trial end and subscription button
         window.addEventListener('load',function(){
      swal({
            title: "TRIAL HAS ENDED",
            text: "If you want to continue then subscribe!",
           icon: "warning",
            buttons: "subscribe",
        //   buttons: true,
            dangerMode: true,
          })
        .then((willDelete) => {
        if (willDelete) {
              //console.log('subscribed');
              window.location.href = "subscription.php";
            }
           else {
                console.log('no');
          }
        });   
});

</script>
       <?php
}else{
    ?>
     <script>
   //alert message for trial end and subscription button
         window.addEventListener('load',function(){
      swal({
            title: "SUBSCRIPTION ENDED",
            text: "Renew subscription to keep enjoying the services!",
           icon: "warning",
            buttons: "Renew",
        //   buttons: true,
            dangerMode: true,
          })
        .then((willsubscribe) => {
        if (willsubscribe) {
              //console.log('subscribed');
              window.location.href = "subscription.php";
            }
           else {
                console.log('no');
          }
        });   
});

</script>  
 <?php
}
        }
         }
            
    $stmt = $pdo->prepare("SELECT * FROM exam_category WHERE cid = :cid or cid is NULL");
    $stmt->execute(['cid' => $cid]); 
    $result = $stmt->FetchAll();      
    include "../client12/jheader.php";
?>
<!DOCTYPE HTML> 
<html>
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M2DF9WK');</script>
<!-- End Google Tag Manager -->
    <title>Schedule Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon-logo1.jpg" />
    <link rel=" icon" type="image/jpg" href="../images/fevicon-logo1.jpg"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    
<script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>


<!--<script>-->
<!--"use strict";-->

<!--!function() {-->
<!--  var t = window.driftt = window.drift = window.driftt || [];-->
<!--  if (!t.init) {-->
<!--    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));-->
<!--    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], -->
<!--    t.factory = function(e) {-->
<!--      return function() {-->
<!--        var n = Array.prototype.slice.call(arguments);-->
<!--        return n.unshift(e), t.push(n), t;-->
<!--      };-->
<!--    }, t.methods.forEach(function(e) {-->
<!--      t[e] = t.factory(e);-->
<!--    }), t.load = function(t) {-->
<!--      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");-->
<!--      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";-->
<!--      var i = document.getElementsByTagName("script")[0];-->
<!--      i.parentNode.insertBefore(o, i);-->
<!--    };-->
<!--  }-->
<!--}();-->
<!--drift.SNIPPET_VERSION = '0.3.1';-->
<!--drift.load('ntw3vk4zr7ni');-->
<!--</script>-->
<!-- End of Async Drift Code -->

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
 body {
    background-color:white;
    color:black;
    /*background-color: #f1f1f1;*/
    background-position: center;
    background-size: cover;
    background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url(bg.webp);
    overflow:visible;
    }
    .fixed-button {
     position: fixed; 
     bottom: -50px; 
     right: 30px; 
     opacity: 0; 
     z-index: 9; 
     -webkit-transition: all 0.5s ease; 
     transition: all 0.5s ease; 
     -webkit-animation: pulse 2s infinite; 
     animation: pulse 2s infinite; 
     border-radius: 0.25rem; 
        display: none;
    }
     /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 170px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    
    /* Modal Content */
    .modal-content {
        line-height: 1.5rem;
        background-color: white;
        margin: auto;
        padding: 10px ;
        border: 1px solid #888;
        width: 45%;
        border-radius: 5px;
        box-shadow: 0px 11px 35px 2px #2B3856;
    }
    .h2cl{
      font-size: 35px;
      margin-top:10px;
    }
    /* The Close Button */
    /*.close {*/
    /*  color: #aaaaaa;*/
    /*  text-align: right;*/
    /*  font-size: 28px;*/
    /*  font-weight: bold;*/
    /*  padding-right: 20px ;*/
      
    /*}*/
    .close1{
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        width: 2rem;
        height: 2rem;
        border: 1px solid #e7e7e7;
        border-radius: 50%;
        background: #fff;
        top: -13px;
        left: 100%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        background-color: black;
        color: white;
        font-size: 1.3rem;
    }
    .close1:hover,
    .close1:focus {
        background-color: #f2f2f2;
      color: red;
      text-decoration: none;
      cursor: pointer;
    }
    
    /*schedule test*/
    .card{
        box-shadow: -2px 8px 20px #2b3856;
        border-radius:5px !important;
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
        top: -50px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
    }
    .contact100-form-symbol img {
        max-width: 49px;
    }
    .info
    {
        float: right;
        background-color:#103F6E;
        color: white;
        width: 350px;
        padding: 40px 0px 200px 0px;
    }
    .info h4
    {
        text-align: center;
        font-size: 20px;
        margin-bottom: 33px;
    }
    .info .icon
    {
        margin-bottom: 25px;
        padding-left: 35px;
    }
    .info .icon i
    {
        font-size: 25px;
        margin-right: 15px;
    }
    .rtest
    {
        float: right;
        font-size: 15px;
    }
    .rtest i
    {
        color:#0090FF;
    }
    .grid-item {
      padding:0 50px;
      font-weight: 800;
    }
    .rtest label
    {
        font-size: 14px;
    }
    .text
    {  
        color: grey;
        border:none;
        border-bottom: 1px solid #555;
        padding: 10px 10px;
        /*margin: 5px 10px 15px 0px;*/
        /*margin-left:185px;*/
        margin-top:0px;
        width: 60%;    
        font-size:13px;
        /*height:100px;*/
        font-weight:100px;
       
    }
    
    #address
    {  
        border:none;
        border-bottom: 1px solid #555;
        padding: 10px 10px;
        /*margin: 5px 10px 15px 0px;*/
        /*margin-left:185px;*/
        margin-top:10px;
        width: 100%;    
        font-size:13px;
        height:120px;
        font-weight:100px;
        resize: none;
        overflow:auto;
    }
    
    #address:focus
    {
        outline: none;
        height:120px;
    }
    label{
        margin-bottom:revert;
    }
    
    .jbtn{
      background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
      color:#fff;
      border:none;
      position:relative;
      height:45px;
      font-size:1.6em;
      padding:0.1em 1em;
      cursor:pointer;
      transition:800ms ease all;
      outline:none;
    }
    .jbtn:hover{
      background:#fff;
      color:#1dc4e9;
    }
    .jbtn:before,.jbtn:after{
      content:'';
      position:absolute;
      top:0;
      right:0;
      height:2px;
      width:0;
     background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
      transition:400ms ease all;
    }
    .jbtn:after{
      right:inherit;
      top:inherit;
      left:0;
      bottom:0;
    }
    .jbtn:hover:before,.jbtn:hover:after{
      width:100%;
      transition:800ms ease all;
    }
    
    
 @media screen and (max-width: 792px){   
.modal-content {
    margin-top: 20px;
    width: 90%;
  }
 }
  @media screen and (max-width: 995px){  
    .card{
      margin-top: 45px;
    }
    .grid-item {
        padding: 0 10px;
        font-weight: 800;
    }
  }
      
 
</style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2DF9WK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row justify-content-center">
                                <!--[ daily sales section ] start-->
                                <div class="col-md-10 col-xl-8 ">
                                    <div class="card daily-sales">
                                        
                                        <!--schedule test box-->
                                        <span class="contact100-form-symbol">
                                            <img src="coding.png" alt="SYMBOL-MAIL">
                                        </span>
                                        <div class="card-block">             
                                            <span style="float: right; color: #2B3856; cursor: pointer; margin-top:10px;" id="myBtn" class="mybtn"><i style="font-size:21px;" class="fa fa-info-circle"></i></span>
                                                <div class="head">
                                                    <h3 style="text-align: center;
                                                        margin:10px 5px 5px 5px;
                                                        font-weight: 600;
                                                        letter-spacing: 5px;
                                                        font-size: 25px;
                                                        line-height: 1.2;
                                                        ">SCHEDULE CODING TEST</h3>
                                                </div>
                                                 <hr>
                                                
                                                <form name="f1" id="f1" method="POST" action="">
                                                    <div class="rtest">
                                                        <label style="float: right;"><i style="color: #2B3856;" class="text-primary fa fa-clock"></i>&nbsp;&nbsp;Test duration: 20 mins</label>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="flex-container">
                                                        <div class="grid-item">
                                                            <label id="dropdown_lab"><i class="fa fa-calendar-plus-o" ></i>&nbsp;&nbsp;&nbsp;Select Language</label>
                                                        </div>
                                                           
                                                        <div class="grid-item">
                                                          <select class="text" name="testtype" size="1" required style="width:100%;" ><br>
                                                           <option value="">Select Language</option>
                                                           <option value="C">C</option>
                                                           <option value="Cpp">C++</option>
                                                           <option value="Java">Java</option></option>
                                                           <option value="Python">Python</option>
                                                           <option value="PHP">PHP</option>
                                                           <option value="Csharp">C#</option>
                                                           <option value="JavaScript">JavaScript</option>
                                                           <option value="Ruby">Ruby</option>
                                                         <!--  <option value="Ruby">Ruby</option> -->
                                                              <?php
                                                                //   foreach($result as $tname)
                                                                  
                                                                //   {
                                                                //       if($tname['username'] == NULL){
                                                                //       echo "<option value=".$tname['id'].">".$tname['category']."&nbsp".$tname['username']."</option>";
                                                                //   }
                                                                //   else
                                                                //      {
                                                                //         //  echo "<option value=".$tname['id'].">".$tname['category']."<h2 style='color:red;'> NEW </h2></option>";    
                                                                //         echo "<option value=".$tname['id'].">".$tname['category']."&nbsp-&nbsp".$tname['username']."</option>";
                                                                //      }
                                                                //   }
                                                                  ?>
                                                          </select>
                                                          </div>
                                                    </div>
                                                    <br>
                                                    <div class="flex-container">
                                                        <div class="grid-item">
                                                            <label>
                                                              <i class="fa fa-envelope icon"></i>&nbsp;&nbsp;&nbsp;Applicant E-mail ID
                                                            </label>
                                                        </div>
                                                        <div class="grid-item"><textarea type="text" class="text txtarea1" id='address' name='address' required placeholder='You can invite upto 20 applicants at a time &#10 example:&#10 anil@gmail.com  &#10 vashist@yahoo.com  &#10 neelam@domain.com'></textarea>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <center>
                                                        <div class="btnn">
                                                            <center>
                                                                <button type="submit" class="jbtn" name="submit" id="submit"><b>Send Invite</b>&nbsp;<i class="fa fa-arrow-right"></i></button>
                                                            </center>
                                                        </div>
                                                    </center>
                                                </form>
                                            </div>  
                                        <!--schedule test box ends-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Instructions--->
<!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close1">
                &times;
            </span>
           
            <h2 class="h2cl"><center>Instructions</center></h2>
            <div class="image">

            <ol class="list">
                <li class="licl">Candidates will receive link for the selected test on the given email-id's.</li>
                <li class="licl">The link will be valid for 48 hours, candidate can attempt the test anytime within the time limit.</li>
                <li class="licl" style="color:red;">Ask candidates to check spam folder as well for the test link.</li>
                <b><li class="licl">No monitoring required, as our tool is AI/ML integrated to detect either the candidate has cheated or not & also records the test video which can be viewed in results.</li></b>
                <li class="licl">Our test have pre defined complexity of question which is suitable to conduct test for beginner and experienced both.</li>
            </ol>
            </div>
        </div>
    </div>
<!--End of Instructions-->
    <script>/*
        $("#invite").click(function(e) {
    e.preventDefault();
      /*  var cid = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var city = $('#city').val();
    $.ajax({
        type: "POST",
        url: "https://praveen.giitsolution.com/<?php echo $current_user->user_nicename;?>/sendmail",
        data: { 
            cid: "<?php echo $current_user->ID;?>";
            tid:"<?php echo $tid;?>";
            date:"<?php echo $date;?>";
            count:"<?php echo $count;?>";
        },
        success: function(result) {
            alert('ok');
        },
        error: function(result) {
            alert('error');
        }
    });
});*/
    </script>
   
   
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
</body>
 <?php
}

else{?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login First</title>
    <style>
    
        body{
            background-color:white;
            color:black;
            background-size: cover;
            background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url(bg.webp);
            overflow:visible;
        }
        .main {
            border-radius: 5px;
            background-color: #FFFFFF;
            width:45%;
            height: 210px;
            margin: auto;
            margin-top:7em;
            box-shadow: -2px 8px 20px #2b3856;
        }
    
        .logn {
          padding-top: 30px;
          padding-bottom: 5px;
          color: black;
          font-family: 'Ubuntu', sans-serif;
          font-weight: 500;
          font-size: 35px;
        }
        .jbtn{
          background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
          color:#fff;
          border:none;
          position:relative;
          height:45px;
          font-size:1.4em;
          padding:0.1em 1em;
          cursor:pointer;
          transition:800ms ease all;
          outline:none;
        }
        .jbtn:hover{
          background:#fff;
          color:#1dc4e9;
        }
        .jbtn:before,.jbtn:after{
          content:'';
          position:absolute;
          top:0;
          right:0;
          height:2px;
          width:0;
         background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
          transition:400ms ease all;
        }
        .jbtn:after{
          right:inherit;
          top:inherit;
          left:0;
          bottom:0;
        }
        .jbtn:hover:before,.jbtn:hover:after{
          width:100%;
          transition:800ms ease all;
        }
       @media screen and (max-width: 792px){
            .main{
              margin-top:12rem;
               width:revert;
               height: 190px;
            }
        }
  </style>
    <body>
        <div class="main">
            <p class="logn" align="center">Please Login First</p>
            <center><button class="jbtn" align="center" onclick="window.location.href = 'https://35.154.101.124/register.php';"><b>LOG IN</b>&nbsp;<i class="fa fa-arrow-right" aria-hidden="true" style="color:white"></i></button></center>
        </div>
    </body> 
<?php
    }
?>

</html>