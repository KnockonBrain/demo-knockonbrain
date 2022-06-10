<?php 
session_start();

$cid=$_SESSION['ID'];
include 'CLient/data.php';

$stmt = $pdo->prepare("SELECT * FROM exam_category WHERE cid = :cid or cid is NULL");
$stmt->execute(['cid' => $cid]); 
$result = $stmt->FetchAll();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=428">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result of Applicants</title>
    <link rel=" icon" type="image/jpg" href="images/fevicon.jpg"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
    <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
    
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>
<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('ntw3vk4zr7ni');
</script>
<!-- End of Async Drift Code -->
    
    <script>
        $(document).ready(function(){
            function create_list(data){
                var table = $('#table');
                table.html('');
                var table_head = $('<tr>');
                table_head.append($('<th>').text('EMAIL'))
                table_head.append($('<th>').text('SCORE(%)'))
                table_head.append($('<th>').text('TEST NAME'))
                table_head.append($('<th>').text('TIME & DATE'))
                table_head.append($('<th>').text('VIDEO'))
                table_head.append($('<th>').text('AI ACCURACY'))
                table.append(table_head);
                for(var x in data){
                    var tr = $('<tr>');
                    tr.append($('<td>').text(data[x].email));
                    tr.append($('<td>').text(data[x].scoreper));
                    tr.append($('<td>').text(data[x].quiz_name));
                    tr.append($('<td>').text(data[x].Start_time));
                    tr.append($("<td>"+"<a href="+data[x].video_link+">"+"Video link"+"</a>"));
                      tr.append($('<td>').text(data[x].AI_accuracy));
                    
                    table.append(tr);
                };
            }
            $.ajax({
                url:'https://phptest.avianglobes.com/final1.php?filter=all',
                type:'GET',
                success:function(data){
                    var d = JSON.parse(data);
                    create_list(d);
                }
            })
            $('#filter').on('change',function(){
                var filter = $(this).val();
                $.ajax({
                url:'https://phptest.avianglobes.com/final1.php?filter='+filter,
                type:'GET',
                success:function(data){
                    var d = JSON.parse(data);
                    create_list(d);
                }
            })
            })
        })
    </script>
    <style>

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  background-color: #f1f1f1;
  background-position: center; 
  font-size:1.5rem;
 background-size: cover; 
  /*background-image:linear-gradient( rgba(0, 12, 45, 0.5), rgba(0, 12, 45, 0.2) ),url(../images/aminities-bg-1024x683.jpg);*/
  background-image: linear-gradient( rgba(0, 12, 45, 0.3), rgba(0, 12, 45, 0.1) ),url(https://i.makeagif.com/media/1-12-2021/YsWRDA.gif);
  overflow:auto;
}
.scroll{
  margin-top:-20px;
  float:right;

}
header
{
    left:0px;
    top:0;
    position: fixed;
    z-index: 1;
    background-color: #050a30;
    height: 70px;
    box-sizing: border-box;
    /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
    padding: 25px 25px 25px 0px;
    width: calc(100% - 0%);
    top: 0; 
}
header .cull
{
    margin:10px 0 0 0px;
    float: left;
    color:white;
}
header .cull h1
{
    font-size: 42px;
    font-family: "Gabriola", serif;
    margin-top: revert;
    float: right;
    font-weight: revert;
}
 header .cull
{
    margin-top: -40px;
    margin-right: 20px;
    /*float: right;*/
}


.sidebar{
  z-index: 1;
  top: 0;
  background: #050a30;
  margin-top: 100px;
  color:white;
  margin-left:10px;
  border-radius:10px;
  padding-top:40px;
  position: fixed;
  left: 0;
  width: 230px;
  height: 430px;
  transition: 0.5s;
  transition-property: left;
  overflow-y: hidden;
  overflow-x:hidden;
  
}

.profile_info{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding-left: 30px;
}

.sidebar .profile_info .profile_image{
  width: 100px;
  height: 100px;
  border-radius: 100px;
  background:white;
}

.sidebar .profile_info h4{
  color: white;
  margin-top: 5px;
}

.sidebar a{
  color: white;
  display: block;
  width: 100%;
  font-size:2.0rem;
  font-weight:500;
  line-height: 55px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
}
.sidebar a:hover {
  -ms-transform: scale(0.2); /* IE 9 */
  -webkit-transform: scale(0.2); /* Safari 3-8 */
  transform: scale(1.1); 
  /*color: white;*/
}
.sidebar i{
  padding-right: 10px;
  color:white;
}

label #sidebar_btn{
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left: 32rem;
  font-size: 20px;
  margin-top:8px;
  transition: 0.5s;
  transition-property: color;
}

label #sidebar_btn:hover{
  color: #DDE0EF;/*#19B3D3;*/
}

#check:checked ~ .sidebar{
  left: -185px;
    /*padding-top: 120px;*/
    margin-left:20px; 
    position:fixed;
}

#check:checked ~ .sidebar a span{
  display: none;
}

#check:checked ~ .sidebar a{
  font-size: 25px;
  margin-left: 165px;
  width: 100%;
  padding-bottom:20px;
  line-height:60px;
padding-left: 15px;
padding-top:10px;
}

.content{
  margin-left: 300px;
  margin-right:20px;
  /*/background: url(background.png) no-repeat;/*/
  /*background: #dedede;*/
  background-position: center;
  background-size: cover;
transition: 0.5s;
}

#check:checked ~ .content{
  margin-left: 170px;
  margin-right:120px;
}

#check:checked ~ .sidebar .profile_info{
  display: none;
}

#check{
  display: none;
}

.mobile_nav{
  display: none;
  margin-left:20px;
}


/*table*/
#filter {
 font-weight: 700;
 margin-top:70px;
 padding: 7px ;
 border: 1px solid #ced4da;
 margin-bottom:15px;
 border-radius: 0.5rem !important;
 box-shadow: 0 5px 9px 0 rgb(0 0 0 / 80%);
}
#filter:focus {
   outline: none !important;
}


.card {
    width: 100%;
    margin-bottom:80px;
    background-color: #fff;
    border: 0;
    border-radius: .55rem;
    display: flex;
    flex-direction: column;
    word-wrap: break-word;
    background-clip: border-box;
    padding: 1.5rem 1.5rem 1rem 1.5rem;
    box-shadow: 0 5px 9px 0 rgb(0 0 0 / 80%);
   
}
.cardheader {
    
    padding: 2px 20px 10px;
    background: 0 0;
    margin-bottom: 0;
}

.cardtitle {
    font-weight: 500;
    border-bottom:none !important;
    letter-spacing: 5px;
    font-size: 28px;
    line-height: 1.2;
    text-transform: uppercase;
}


table {
  border-collapse: collapse;
  margin: auto;
  width: 100%;
  padding: 2rem 2 rem !important;
  margin-bottom: 1rem; 
  padding-top:10px !important;
  padding-bottom:10px !important;
  overflow:scroll;
}

.table th,.table td {
    padding: 1.5rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;    
}

.table thead th {
    vertical-align: middle;
    border-bottom: 2px solid #dee2e6;
    font-weight: 500;
    text-align: inherit;

}

.table tbody{
    border-top: 2px solid #dee2e6; 
}
tr:nth-child(even) {
	background-color: #DDE0EF;
}
a{
 text-decoration:none;
 color:white;
}
td>a{
    text-decoration:none;
 color:blue;
}
.table>:not(:last-child)>:last-child>* {
     border-bottom-color: transparent !important; 
}
.page-link {
    color:#050a30 !important;
}
.page-item.active .page-link {
    color: white !important;
    background-color:#050a30 !important;
    border-color: #050a30 !important;
    z-index:1;
}


/*table ends*/

/*/footer CSS/*/
footer{
    left:0px;
    z-index: 1;
    position: fixed;
    background: #050a30;/*#333847*/
    width: calc(100% - 0%);
    bottom: 0; 
    height: 50px;
}
p.copyright {
  position: absolute;
  width: 57%;
  color: #fff;
  font-size: 1.2em;
  text-align: right;
  margin-top: 10px;
}
#lab_social_icon_footer {
  /*background-color: #333847;*/
  margin-left: 45%;
  margin-top: 10px;
}

#lab_social_icon_footer a {
  color: #dedede;
  padding:5px;
}

#lab_social_icon_footer .social:hover {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
}

.lab_social_icon_footer .social {
  -webkit-transform: scale(0.8);
  /* Browser Variations: */
  
  -moz-transform: scale(0.8);
  -o-transform: scale(0.8);
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
}

/*Multicoloured Hover Variations*/
.lab_social_icon_footer #social-fb:hover {
  color: #3B5998;
}

.lab_social_icon_footer #social-tw:hover {
  color: #4099FF;
}

.lab_social_icon_footer #social-gp:hover {
  color: #d34836;
}

.lab_social_icon_footer #social-em:hover {
  color: #f39c12;
}
@media screen and (max-width: 1100px){
    .content{
        width:fit-content;
    }
}

@media screen and (max-width: 792px){
    html{
        width:800px;
    }
    body{
        background-color:#dedede;
        background-image: none;
    }
  .sidebar{
    display: none;
  }

  #sidebar_btn{
    display: none;
  }

  .mobile_nav{
    display: block;
    margin-left: 10px;
    margin-right:10px;
  }

  .nav_bar{
    background: #050a30;
    margin-top: 80px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 5px 20px;
  }

  .nav_bar .nav_btn{
    color: white;
    font-size: 22px;
    cursor: pointer;
    transition: 0.5s;
    transition-property: color;
  }

  .nav_bar .nav_btn:hover{
    color: #dedede;
  }

  .mobile_nav_items{
    background: #050a30;
    display: none;
  }

  .mobile_nav_items a{
    color: white;
    display: block;
    text-align: center;
    letter-spacing: 1px;
    line-height: 60px;
    text-decoration: none;
    box-sizing: border-box;
    transition: 0.5s;
    transition-property: background;
  }

  .mobile_nav_items a:hover{
    opacity:0.7;
  }

  .mobile_nav_items i{
    padding-right: 8px;
  }

  .active{
    display: block;
    
  }
  .content{
      margin-left:10px;
      
  }
  #filter{
      margin-left:37%;
      margin-top:revert;
      background-color:white;
      padding: 9px ;
  }
    .head h1
    {
        width: auto;
        text-align: center;
        margin-left: auto;
    }
    .test
    {
        width: 350px;
    }
    .test .info
    {
        display: none;
    }
    .test .testform
    {
        width: 350px;
        float: none;
        padding: 30px 30px 20px;
    }
    #lab_social_icon_footer {
    margin-left: 70%
    }
    
}

@media (max-width:425px)
{
    body{
        background-color:#dedede;
    }
    header .cull
    {
        padding-top:10px;
    }
    header .cull h1
    {
        font-size: 30px;
    }
    p.copyright{
        font-size:2rem;
    }

}


    </style>
</head>
<body>
     <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <div class="scroll">
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      </div>
      
      <div class="ro">
        <div class="cull" style="margin:-20px 0px 0 20px;">
        <img alt="giit solutions" src="../images/Knockonbrain logo (1).png"> &nbsp;
        </div>
        <div class="cull">
            <h1>KnockOnBrain</h1>
        </div>
      
    </div>
  
    </header>
    <!--header area end-->
    
    <!--mobile navigation bar start-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="https://phptest.avianglobes.com/CLient/profile.php"><i class="fa fa-user" aria-hidden="true"></i><span>Profile</span></a>
        <a href="https://phptest.avianglobes.com/CLient/test.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><span>Schedule Test</span></a>
        
        <a href="../final2.php"><i class="fa fa-check-square-o" aria-hidden="true"></i><span>View Results</span></a>
        <a href="https://phptest.avianglobes.com/client12/addexamm.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Custom Test</span></a>
        <a href="https://phptest.avianglobes.com/CLient/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Logout</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <a href="https://phptest.avianglobes.com/CLient/profile.php"><img class="profile_image" src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/004/088/original/user.png" style="margin-bottom: 20px;"></img></a>
        
      </div>
      <a href="https://phptest.avianglobes.com/CLient/test.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><span>Schedule Test</span></a>
        
        <a href="../final2.php"><i class="fa fa-trophy" aria-hidden="true"></i><span>View Results</span></a>
        <a href="https://phptest.avianglobes.com/client12/addexamm.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Custom Test</span></a>
        <a href="https://phptest.avianglobes.com/CLient/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->
    
    <div class="content">
   <br><br>
        <div class="filter">
            <select id="filter">
            
                 <option value="all">All</option>
                 
                  <?php
                       foreach($result as $tname)
                      {
                           if($tname['username'] == NULL){
                          echo "<option value=".$tname['id'].">".$tname['category']."&nbsp".$tname['username']."</option>";
                      }
                      else
                         {
                            //  echo "<option value=".$tname['id'].">".$tname['category']."<h2 style='color:red;'> NEW </h2></option>";    
                            echo "<option value=".$tname['id'].">".$tname['category']."&nbsp-&nbsp".$tname['username']."</option>";
                         }
                      }
                    ?>
            </select>
        </div>

        <div class="card">
        <div class="cardheader">
            <center><h3 class="cardtitle">VIEW RESULTS</h3></center>
         </div>
        
        <div class="cart-body">
            <div class="table-wrap" id="con">
                <table class="table" id="table">
            
                </table>
                
                
             </div>
             
         </div>
        </div>
    </div> 

  <footer>   
    <div>   
          <p class="copyright">© 2021KnockOnBrain</p>    
    </div>  
        <section id="lab_social_icon_footer">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container">
          <div class="text-center center-block">
                  <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
                <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
                <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-2x social"></i></a>
                <a href="mailto:#"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
           </div>
    <br>
        </div>
        </section>     
</footer>
<script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
</script>

</body>
</html>
