<?php

session_start();
include 'config.php';
// $cid=$_SESSION['ID'];
$email=$_SESSION['email'];
echo $cid;
echo $email;

        
        include 'data.php';
    
        $cid=$_SESSION['ID'];

        if(isset($_POST['submit']))
        {
             $timestamp = date('Y-m-d H:i:s');
             
             $tid=$_POST['checkboxName'];
             $lang=$_POST['language'];
             $type=$_POST['psycho'];
             
          if(empty($_POST['address'])){
              echo '<script language="javascript">';
            echo 'alert("Please enter email")';
            echo '</script>';
          }
        
        
        else if($tid==NULL){
            echo '<script type="text/javascript">  window.onload = function(){
            alert("Please select atleast 1 MCQ Test");}
            </script>';
          }
          else if(count($tid)>4){
            echo '<script type="text/javascript">  window.onload = function(){
            alert("Please select atmost 4 MCQ Tests");}
            </script>';
          }
          else{
              $address = $_POST['address'];
             $cid=$_SESSION['ID'];
            $current_username=$_SESSION['user_nicename'];
             $exp=Date('Y-m-d H:i:s', strtotime('+2 days'));
            $email = preg_split("/[\s,]+/", $address);
      
            $to = implode(",", $email);
             
            foreach($email as $d)
            {
              foreach($tid as $t){
                  
              $sql="INSERT INTO details(cid,quiz_id,date,email,exp_date) VALUES(:cid,:t,:timestamp,:d,:exp)";
              $stmt=$pdo->prepare($sql);
              $stmt->execute(['cid'=>$cid,'t'=>$t,'timestamp'=>$timestamp,'d'=>$d,'exp'=>$exp]);
            }
            }
    
            $data = array('tid'=>$tid,'lang'=>$lang,'type'=>$type,'date'=>$timestamp);
            $build=http_build_query($data);
            header("Location:m2mcustom.php?$build");
          }
         }
        
         if(isset($_POST['bitu'])){
             $tid=$_POST['checkboxName'];
             $lang=$_POST['language'];
             $type=$_POST['psycho'];
             if(count($tid)<2 && $lang=="" && $type==""){
            echo '<script language="javascript">';
            echo 'alert("Please select atleast 2 tests")';
            echo '</script>';
          }
          else if((count($tid)==0 && $type=='')||(count($tid)==0 && $lang=='')){
               echo '<script language="javascript">';
            echo 'alert("Please select atleast 2 tests")';
            echo '</script>';
          }
          else if(count($tid)>3 ){
            echo '<script language="javascript">';
            echo 'alert("Please select at max 3 MCQ tests")';
            echo '</script>';
          }
          else{
             $data = array('tid'=>$tid,'lang'=>$lang,'type'=>$type);
            $build=http_build_query($data);
             
            header("Location:echo.php?$build"); 
          }
         }
    
$tab_query = "SELECT * FROM `tab-menu` ORDER BY tabid";
$qquery="SELECT * from exam_category";
$tab_result = mysqli_query($db, $tab_query);
$qqresult=mysqli_query($db, $qquery);
$tab_menu = '';
$tab_content = '';
$i = 0;
$cid=141;
while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  $tab_menu .= '
  <li class="active"><a href="#'.$row["tabid"].'" data-toggle="tab">'.$row["Tab_name"].'</a></li>
  ';
 
  $tab_content .= '
   <div id="'.$row["tabid"].'" class="tab-pane fade in active">
  ';
 }
 else
 {
//   $tab_menu .= '
//   <li><a href="#'.$row["tabid"].'" data-toggle="tab">'.$row["Tab_name"].'</a></li>
//   ';
  $tab_content .= '
   <div id="'.$row["tabid"].'" class="tab-pane fade">
  ';
 }
 if($row["tabid"]==0)
 {
 $main="SELECT * from main_category";
 $main_query=mysqli_query($db, $main);
 
 while($main_row = mysqli_fetch_array($main_query))
 {
    $mid=$main_row['mid'];
 $tab_content .= '
 <div>
    <label style="color:#337ab7; white-space: pre; margin-right: 20%; margin-top: -15px;">
     '.$main_row["mname"].'</label> 
  </div>

  ';
 $product_query = "SELECT * FROM exam_category WHERE main_category='".$mid."' and (cid='".$cid."' or cid is NULL) ORDER BY category";
 $product_result = mysqli_query($db, $product_query);
 
 while($sub_row = mysqli_fetch_array($product_result))
 {
  $tab_content .= '
  
    <label class="col-md-5" style="margin-right:10px; margin-bottom: 5px;">
     <input type="checkbox" name="checkboxName[]" value='.$sub_row["id"].'> '.$sub_row["category"].'
    </label>
  ';
 }
 }
 }
 else if($row["tabid"]==1)
 {
 }
 else
 {
 }
 $tab_content .= '<div style="clear:both"></div></div>';
 $i++;
}
?>

<!DOCTYPE HTML> 
<html>
<head>
    <title>Schedule Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <!--<link rel="icon" href="../datta-lite/assets/images/favicon.ico" type="image/x-icon">-->
    <link rel=" icon" type="image/png" href="../images/favicon-logo1.png"/>
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="../datta-lite/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../datta-lite/assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="../datta-lite/assets/css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel=" icon" type="image/jpg" href="../images/fevicon.jpg"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    
<script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>


<style>

html{
    font-size: revert;
}
 body {
     font-family: "Open Sans", sans-serif !important;
    background-color:white;
    color:black;
    /*background-color: #f1f1f1;*/
    background-position: center;
    background-size: cover;
    background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url(bg.webp);
    overflow-x:hidden;
    
    }
    .bitu { 
        background: none!important; 
        border: none; 
        padding: 0!important; /*optional*/ 
        font-family: arial, sans-serif; /*input has OS specific font-family*/ 
        color: #069; 
        /*text-decoration: underline; */
        cursor: pointer; 
        
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

    .grid-item {
      padding:0 50px;
      font-weight: 800;
    }
  
    /*.text*/
    /*{  */
    /*    color: grey;*/
    /*    border:none;*/
    /*    border-bottom: 1px solid #555;*/
    /*    padding: 10px 10px;*/
        /*margin: 5px 10px 15px 0px;*/
        /*margin-left:185px;*/
    /*    margin-top:0px;*/
    /*    width: 100%;    */
    /*    font-size:13px;*/
        /*height:100px;*/
    /*    font-weight:100px;*/
       
    /*}*/
    
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
  

 .pcoded-navbar {
  display: block;
  z-index: 1029;
  position: fixed;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-box-shadow: 1px 0 20px 0 #3f4d67;
          box-shadow: 1px 0 20px 0 #3f4d67;
  width: 264px;
  height: 100vh;
  top: 0;
  background: #3f4d67;
  color: #a9b7d0;
}

.pcoded-navbar ul {
  padding-left: 0;
  list-style: none;
  margin-bottom: 0;
}

.pcoded-navbar.mob-open ~ .pcoded-header:before,
.pcoded-navbar.mob-open ~ .pcoded-main-container:before, .pcoded-navbar.navbar-collapsed:hover ~ .pcoded-header:before,
.pcoded-navbar.navbar-collapsed:hover ~ .pcoded-main-container:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0) !important ;
  z-index: 1;
}
 .pcoded-navbar .pcoded-inner-navbar li.active > a, .pcoded-navbar .pcoded-inner-navbar li:focus > a, .pcoded-navbar .pcoded-inner-navbar li:hover > a {
    color: #1dc4e9;
}

.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
     background-color: revert; 
}

.tab-content{
    height: 200px;
    overflow-y: auto;
    padding:10px 20px !important;
}
</style>
</head>
<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="https://phptest.avianglobes.com/" class="b-brand">
                    <div class="b-bg">
                       <!--<img style="width:66px; height:55px; color: white;" src="../Knockonbrain logo.png" alt="" class="feather b-brand">-->
                       <i class="feather icon-command"></i>
                       <!--<img src="../Knockonbrain logo.png" alt="" class="feather b-brand">-->
                    </div>
                    <span class="b-title">Knock On Brain</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
        
                    <li class="nav-item pcoded-menu-caption">
                        <label>Schedule Test</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="https://phptest.avianglobes.com/CLient/test.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-list"></i></span><span class="pcoded-mtext">MCQs Test</span></a>
                     </li>
                     <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="https://phptest.avianglobes.com/CLient/codingtest.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-edit"></i></span><span class="pcoded-mtext">Coding Test</span></a>
                     </li>
                     
                     <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="https://phptest.avianglobes.com/CLient/psychotest.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-edit"></i></span><span class="pcoded-mtext">Psychometric Test</span></a>
                     </li>
                     <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="https://phptest.avianglobes.com/CLient/testtable.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-edit"></i></span><span class="pcoded-mtext">Common Test</span></a>
                     </li>
    
                    <li class="nav-item pcoded-menu-caption">
                        <label>Results</label>
                    </li>
                  
                    <li data-username="Charts Morris" class="nav-item"><a href="https://phptest.avianglobes.com/CLient/new_file.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">View MCQ Results</span></a></li>
                     <li data-username="Charts Morris" class="nav-item"><a href="https://phptest.avianglobes.com/CLient/new_file_code.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">View Coding Results</span></a></li>
                     <li data-username="Charts Morris" class="nav-item"><a href="https://phptest.avianglobes.com/CLient/psych_result_table.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">View Psychometric Results</span></a></li>
                    
                    <li class="nav-item pcoded-menu-caption">
                        <label>Customize</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="../client12/addexam3.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Custom Test</span></span></a>
                    </li>
                    <!--<li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">-->
                    <!--    <a href="../CLient/newtest.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Generate MCQ Test Link</span></span></a>-->
                    <!--</li>-->
                    <li class="nav-item pcoded-menu-caption">
                        <label>Personalization</label>
                    </li>
                    <li data-username="Charts Morris" class="nav-item"><a href="https://phptest.avianglobes.com/CLient/profile.php" class="nav-link "><span class="pcoded-micon"><i class="fa fa-user"></i></span><span class="pcoded-mtext">Profile</span></a></li>
                    
                    <li class="nav-item pcoded-menu-caption">
                        <label>Exit</label>
                    </li>
                    <li data-username="Charts Morris" class="nav-item">
                        <a href="https://phptest.avianglobes.com/CLient/logout.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Log Out</span></a></li>
                                            <li data-username="Charts Morris" class="nav-item"><a href="https://wa.me/918826439673" class="nav-link "><span class="pcoded-micon"><i class="fa fa-whatsapp"></i></span><span class="pcoded-mtext">Help ?</span></a></li>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="https://phptest.avianglobes.com/" class="b-brand">
                   <div class="b-bg">
                       <!--<img style="width:66px; height:45px; color: white;" src="../Knockonbrain logo.png" alt="" class="feather b-brand">-->
                       <i class="feather icon-command"></i>
                       
                   </div>
                   <span class="b-title">Knock On Brain</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize fa-2x"></i></a></li>
                
            </ul>
            
        </div>
    </header>
    
    <!-- [ Header ] end -->
    
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
                                    <img src="https://image.flaticon.com/icons/png/512/1205/1205526.png" alt="SYMBOL-MAIL">
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
                                                ">SCHEDULE MULTIPLE TEST</h3>
                                        </div>
                                         <hr>
                                        
                                        <form name="f1" id="f1" method="POST" action="">
                                               
                                                <div class="flex-container">
                                                <div class="grid-item">
                                                    <ul class="nav nav-tabs">
                                                       <?php
                                                       echo $tab_menu; 
                                                       ?>
                                                    </ul>
                                                  <div class="tab-content">
                                                   </br>
                                                   <?php
                                                   echo $tab_content;
                                                   ?>
                                                  </div>
                                                   
                                                </div>
                                                
                                            </div>
                                               
                                               
                                            <br>
                                            <div class="flex-container">
                                                <div class="grid-item">
                                                    <label>
                                                      <i class="fa fa-envelope icon"></i>&nbsp;&nbsp;&nbsp;Applicant E-mail ID
                                                    </label>
                                                </div>
                                                <div class="grid-item"><textarea type="text" class="text txtarea1" id='address' name='address' placeholder='You can invite upto 20 applicants at a time &#10 example:&#10 anil@knockonbrain.com  &#10 vashist@knockonbrain.com  &#10 neelam@knockonbrain.com'></textarea>
                                                </div>
                                            </div>
                                            
                                            <br>
                                                    <div class="grid-item">
                                                        <p>Do you want to generate common test link? <button class="bitu" name="bitu" type="submit">Click Here!</button></p>
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
                <li class="licl">Select minimum 1 and maximum 4 tests.</li>
                <li class="licl">The link will be valid for 7 days, candidate can attempt the test anytime.</li>
                <li class="licl" style="color:red;">Ask candidates to check spam folder as well for the test link in case of email invites.</li>
                <b><li class="licl">No monitoring required, as our tool is AI/ML integrated to detect either the candidate has cheated or not & also records the test video which can be viewed in results.</li></b>
                <li class="licl">Our test have pre defined complexity of question which is suitable to conduct test for beginner and experienced both.</li>
            </ol>
            </div>
        </div>
    </div>
<!--End of Instructions-->
    
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
<script src="../datta-lite/assets/js/vendor-all.min.js"></script>
	<script src="../datta-lite/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../datta-lite/assets/js/pcoded.min.js"></script>

</body>
 <?php

?>