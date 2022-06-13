<!doctype html>
<html lang="en">
   <head>
       <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-193335251-1');
    </script>
       <!-- Start of Async Drift Code -->
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


      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <title>Reset Password</title>
      <link rel=" icon" type="image/png" href="../../images/favicon-logo1.png"/>
    
      
       <!-- CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
       <style>
  body{
    background-color:white;
    color:black;
    background-position: center;
    background-size: cover;
    background-image:url("https://35.154.101.124/CLient/bg.webp")!important;
    overflow:visible;
    font-size: 16px;
    font-weight: 400;
    }
    .container
    {
        width:450px; 
        margin: auto;
        padding-top:5px;
        padding-bottom:5px;
        margin-top:50px;
    }
    #main
    {
        width:450px; 
        margin: auto;
    }
    .register-heading{
        text-align: center;
        margin: 5px;
        font-weight: 600;
        letter-spacing: 4px;
        font-size: 25px;
        line-height: 1.2;
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
      font-weight:600;
    }
    .jbtn:hover{
      background:transparent;
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
    
    li{
         font-family:'Open Sans',sans-serif;
         font-size:20px;
         float:center;
    }
    label{
        font-weight:bold;
        float:center;
    }
    /*#right{
         margin-top:10px;
         font-size:20px;
         font-family:Times New Roman;
    }
    #img-right{
        width:450px;
        margin-top:80px;
    }*/
    @media only screen and (max-width: 600px){
        .container
        {
            margin: auto;
            width:340px; 
            margin-top: 40px;
        }
        #main
        {
            width:340px; 
            margin: auto;
        }
        #submit{
           margin-left:9px; 
        }

</style>

   </head>
   <body>
       <div class ="container">
        <div class="row">
    <div class="">
         <div class="">
         <center><div class="">
           <p class="register-heading text-center" style="font-family:''Open Sans',sans-serif';font-weight:bold; color:black;
           font-size:35px; margin-top:40px;">Reset Password</p></div></center><br>
                             <div class="shadow-lg p-3 mb-5 bg-white rounded" id="main">
            <div class="card-body">
              <form action="password-reset-token.php" method="post">
                    <div class="form-group">
                        <i class="fa fa-envelope icon" aria-hidden="true"></i>&nbsp;Email Address:
                        <br>
                        <br>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="" autocomplete="off" required>
                    </div>
                  <small id="emailHelp" class="form-text text-muted">You will receive a link to reset your password on this Email Id.</small>
                </div>
                <div class="btnn">
                    <center>
                        <button type="submit" name="password-reset-token" id="submit" class="jbtn">Submit&nbsp;<i class="fa fa-arrow-right"></i></button>
                    </center>
                </div>
                <!--<center><input type="submit" name="password-reset-token" id="submit" ></center>-->
              </form>
            </div>
          </div>
      </div>
      </div>
      </div>
   </body>
</html>