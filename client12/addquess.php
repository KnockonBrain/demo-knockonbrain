<?php
session_start();
if(isset($_SESSION['ID'])) {
    
    include "connection.php";
    session_start();
    $cid=$_SESSION['ID'];
    $username=$_SESSION['user_nicename'];
include "connection.php";
$userid='';
$userid=$_GET['userid'];
$exam_category='';
// $id='';
// 
setlocale(LC_ALL, 'fr_CA.utf-8');
$sql = mysqli_query($link,"SELECT * FROM exam_category WHERE id='" .$userid. "'");

if ($sql) 
{
       while($row=mysqli_fetch_array($sql))
    {
        $exam_category=$row["category"]; 
        $exam_time=$row["exam_time_in_minutes"];
        $id=$row["id"];
    }

} else {
    echo "Error: " . mysqli_error($link);
}
?>
<!DOCTYPE HTML> 
<html>
<head>
    <title>Add Questions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel=" icon" type="image/jpg" href="../images/fevicon.jpg"/>

<!-- End of Async Drift Code -->

     <meta charset="utf-8">
    <meta name="viewport" content="width=428", initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
    
  <style>
body {
font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  background-color: #f1f1f1;
  background-position: center;
  background-size: cover; 
   background-image: linear-gradient( rgba(0, 12, 45, 0.3), rgba(0, 12, 45, 0.1) ),url(https://i.makeagif.com/media/1-12-2021/YsWRDA.gif);
  overflow:auto;
  /*background-image:linear-gradient( rgba(0, 12, 45, 0.5), rgba(0, 12, 45, 0.2) ),url(../images/aminities-bg-1024x683.jpg);*/
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
    margin-top: 15px;
    margin-right: 15px;
    float: right;
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
  height: 390px;
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
  font-size:1.25rem;
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
  left: 20.5rem;
  font-size: 20px;
  margin-top:15px;
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
    height:390px;
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
  margin-left: 250px;
  /*/background: url(background.png) no-repeat;/*/
  /*background: #dedede;*/
  background-position: center;
  background-size: cover;
transition: 0.5s;
}

#check:checked ~ .content{
  margin-left: 130px;
  margin-right:40px;
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


/* Responsive CSS */

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
  margin-left: 80%;
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


/*****************Content CSS *******************/

  .main {
      background:white;
      padding:20px 50px 20px 20px;
      width: 65%;
      height: 40%;
      margin: 6em auto;
      border-radius: .55rem;
      box-shadow: 0px 8px 20px 2px #050a30;
    }


  .input-container{
    margin-left: 25px;
  	position:relative;
  	margin-bottom:25px;
  }
  .input-container label{
  	position:absolute;
  	top:0px;
  	left:0px;
  	font-size:16px;
    pointer-event:none;
  	transition: all 0.5s ease-in-out;
  }
  .input-container input{
    border:0;
    border-bottom:1px solid #555;
    width:100%;
    padding:8px 0 5px 0;
    font-size:16px;
  }
  .input-container input:focus{
   border:none;
   outline:none;
   border-bottom:3px solid #050a30;
  }

  .input-container input:focus ~ label,
  .input-container input:valid ~ label{
  	top:-12px;
  	font-size:12px;
  }
  /* Change the white to any color */
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active
{
 -webkit-box-shadow: 0 0 0 30px white inset !important;
}

  .quelevel{
    margin-left:10px;
  }

  .container-left{
    margin-left:25px;
  }
  .container-right{
    margin-left:25px;
  }
  center>button{
        cursor: pointer;
        border-radius: 5px;
        width:170px;
        color: #fff;
        background: #050a30;
        border: 0;
        padding: 12px 15px;
        font-size: 20px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
  }
center>button:hover
{
  background-color:#c3c7e3;
  color:#050a30;
  cursor: pointer;
}

.cl,.cr{
  margin-left: 50px;
  width:90%;
}

  .btnn:a {
      text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
      color: #E1BEE7;
      text-decoration: none
  }
  .mybtn{
    style:none !important;
    background: transparent !important;
    border: none !important;
  }


  .h2cl{
    margin-right:  1rem!important;
    margin-bottom: 2rem!important;
    margin-left: 1rem!important;
  }
  .licl{
    margin-right:  1rem!important;
    margin-bottom: 1rem!important;
    margin-left: 1rem!important;
    font-size: 18px;
  }

  /* The Modal (background) */
  .modal {

    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
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
    background-color: white;
    margin: auto;
    padding: 10px ;
    border: 1px solid #888;
    width: 50%;
    border-radius: 0.55rem;
    box-shadow: 0px 11px 35px 2px #050a30;
  }
/* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      padding-right: 20px ;
      
    }
    .close:hover,
    .close:focus {
      color: red;
      text-decoration: none;
      cursor: pointer;
    }
    
/* Table CSS */
.card {
    margin-top: 25px;
    margin-bottom:80px;
    background-color: #fff;
    border: 0;
    border-radius: .55rem;
    display: flex;
    flex-direction: column;
    word-wrap: break-word;
    background-clip: border-box;
    padding: 0rem 1.5rem 1rem 1.5rem;
    box-shadow: -10px 10px 20px #050a30;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card-header {
    padding: 2px 20px 10px;
    background: 0 0;
    margin-bottom: 0;
}

.card-title {
    font-weight: 500;
    letter-spacing: 5px;
    font-size: 25px;
    line-height: 1.2;
    text-transform: uppercase;
    margin-bottom: 0;
}
table {

  border-collapse: collapse;
  margin: auto;
  width: 100%;
  padding: 2rem 2 rem !important;
  margin-bottom: 1rem;
  overflow:scroll;
}

.table th,.table td {
    padding: 0.75rem;
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
    word-break: break-all;
    border-top: 2px solid #dee2e6;
}
tr:nth-child(even) {
	background-color: #DDE0EF;
}

a{
 text-decoration:none;
 color:white;
}
.fa-edit{
    color:blue;
    font-size:17px;
}
.fa-trash-alt{
    color:red;
    font-size:17px;
}
.fa-edit,.fa-trash-alt:hover{
    font-size:20px;
}

/**************End of Content CSS ***************************/

/*media screens*/

@media screen and (max-width: 792px){
    html{
        width:800px;
    }
    
    body{
        background-color:#dedede;
        background-image:none;
    }
  .sidebar{
    display: none;
  }

  #sidebar_btn{
    display: none;
  }

  .mobile_nav{
    display: block;
    margin-left:auto;
  }

  .nav_bar{
    background: #050a30;
    margin-top: 80px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px 20px;
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
    .content{
        margin:auto;
        padding: 10px 20px;
        transition: 0s;
     }
     .card{
         margin-top:20px;
        width: fit-content;
        padding: 0rem 1rem 1rem 1rem;
     }
 
    #lab_social_icon_footer {
    margin-left: 70%
    }
    .modal{
        padding-top: 30%;
    }
    .modal-content{
        width:70%;
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
        font-size:1.1rem;
    }
    .modal{
        padding-top: 350px;
    }
}

.scroll{
    float:right;
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
      
      <div class="row">
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
    <div class="mobile_nav">
      <div class="nav_bar">
        
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="https://35.154.101.124/CLient/profile.php"><i class="fa fa-user" aria-hidden="true"></i><span>Profile</span></a>
        <a href="https://35.154.101.124/CLient/test.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><span>Schedule Test</span></a>
        <a href="../final2.php"><i class="fa fa-check-square-o" aria-hidden="true"></i><span>View Results</span></a>
        <a href="https://35.154.101.124/client12/addexamm.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Custom Test</span></a>
        <a href="https://35.154.101.124/CLient/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Logout</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <a href="https://35.154.101.124/CLient/profile.php"><img class="profile_image" src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/004/088/original/user.png"></img></a>
      </div>
      
      <a href="https://35.154.101.124/CLient/test.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><span>Schedule Test</span></a>
        <a href="../final2.php"><i class="fa fa-trophy" aria-hidden="true"></i><span>View Results</span></a>
        <a href="https://35.154.101.124/client12/addexamm.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Custom Test</span></a>
        <a href="https://35.154.101.124/CLient/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->

    <!-- The Modal -->
            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                 <span class="close">&times;</span>
                <h2 class="h2cl"><center>Instructions</center></h2>
                <div class="image">

                    <ol class="list">
                        <li class="licl">Their should be atleast 20 questions to display your test properly.</li>
                        <li class="licl">Initially add atleast 10 easy, 7 medium & 3 hard questions, so the test will match the criteria of levels.</li>
                        <li class="licl">Click on the button labelled as "Correct Answer" for the correct answer of your question.</li>
                    </ol>
                  </div>

             </div>
            </div>

        <!------End of add question modal------------>
    <!--add ques box-->
    <div class="content">
        
        <!---Add Question modal start--------------->
          <div class="main">
                <form action="" name="form1" method="post">
                    <div>
                    <!--<iframe frameborder="0" width="100%" height="500px" src="https://replit.com/@vashist/Test?lite=true"></iframe>   -->
                          <div>
                            <span style="float: right; color: #050a30; cursor: pointer;" id="myBtn" class="mybtn"><i style="font-size:30px;" class="fa fa-info-circle"></i></span>
                            <div class="head">
                            <h3 style="text-align: center;
                                margin:5px;
                                font-weight: 600;
                                letter-spacing: 5px;
                                font-size: 25px;
                                line-height: 1.2;
                                padding:10px 0px 5px 0px;
                                ">ADD QUESTION
                            </h3>
                             </div>
                          
                             <br>
                            <div class="input-container"><input type="text" name="question" class=" textt" required><label> Enter Complete Question</label></div>
                            <div>
                            <div>
                                <div style="width:50%; height:60px; float:left;">
                                    <label class="container-left"><input type="radio" name="option" value="opA"><span class="check">  Correct Answer</span>
                                      <div class="input-container cl"><input type="text" name="opt1" class="text" placeholder=" Add Option-1 " style="font-size:13px;color:black" required></div>
                                    </label>
                                </div>
                                <div style="width: 50%; height:60px; float:right">
                                    <label class="container-right"><input type="radio" name="option" value="opB"><span class="check">  Correct Answer</span>
                                    <div class="input-container cr"><input type="text" name="opt2" class="text" style="font-size:13px;color:black" placeholder=" Add Option-2 " required></div>
                                  </label>
                                </div>
                            </div>
                            <div>
                                <div style="width: 50%; height:60px; float:left; padding-top:1rem;">
                                    <label class="container-left"><input type="radio" name="option" value="opC"><span class="check">  Correct Answer</span>
                                    <div class="input-container cl"><input type="text" name="opt3" class="text" style="font-size:13px;color:black" placeholder=" Add Option-3 " required></div>
                                    </label>
                                </div>
                                <div style="width: 50%; height:60px; float:right; padding-top:1rem;">
                                    <label class="container-right"><input type="radio" name="option" value="opD"><span class="check">  Correct Answer</span>
                                    <div class="input-container cr"><input type="text" name="opt4" class="text"  style="font-size:13px;color:black" placeholder=" Add Option-4 " required></div>
                                    </label>
                                </div>
                            </div>
                          </div>

                            <div style="padding:20px;" class="quelevel">
                                <div><label><b> Question Level : </b></label>
                                <select style="width: 50%; margin:30px 20px 20px 30px; height:25px;"  name="level" value="Add Level" required>
                                <option value="Easy"><b>Easy</b></option>
                                <option value="Medium"><b>Medium</b></option>
                                <option value="Hard"><b>Hard</b></option>
    			                     </select>
                               </div>
                            </div>
                        </div>
                            <div class="btnn"><center><button name="submit1" class="btn" ><b>Add Question</b></button></center></div>
                                                 
                    </div>
                 </form>

            </div>
        <!--Table--->
            <div class="card">
        <div class="card-header">
            <center><h3 class="card-title">Questions <?php echo $exam_category   ?> Test</h3></center>
        </div>
        <div class="cart-body">
            <div class="table-wrap">
                <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Option-1</th>
                        <th scope="col">Option-2</th>
                        <th scope="col">Option-3</th>
                        <th scope="col">Option-4</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Level</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                 <?php

    $count=0;
     $q1 = ("select * from questions where quiz_id= '$id' order by question_no asc")or die(mysqli_error($link));
     $res = mysqli_query($link,$q1);
     $total=mysqli_num_rows($res);

    if($total!=0){
    while($row=mysqli_fetch_assoc($res))
        {
            
            $field1name = $row["question"];
            $field2name = $row["opt1"];
            $field3name = $row["opt2"];
            $field4name = $row["opt3"];
            $field5name = $row["opt4"]; 
            $field6name = $row["answer"]; 
            $field7name = $row["level"]; 

            $count=$count+1;
             echo '<tr> 
             <td>'.$count.'</td>
              <td>'.$field1name.'</td> 
              <td>'.$field2name.'</td> 
              <td>'.$field3name.'</td> 
              <td>'.$field4name.'</td> 
              <td>'.$field5name.'</td> 
              <td>'.$field6name.'</td> 
              <td>'.$field7name.'</td> '
            //  </tr>';
            
            ?>
            
            <td><a href="updateques.php?userid=<?php echo $row["id"]; ?>&id=<?php echo $userid; ?>"><i class="fa fa-edit"></i></a></td>
            
           
            
            <td><a href="delete_options.php?userid=<?php echo $row['id']; ?>&id=<?php echo $row["id"]; ?>"  onclick="return confirm('Are you sure?');"><i class="fa fa-trash-alt"></i></a></td>
             <?php
             echo '</tr>';
                }
     }



        ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
        
        <!---Table End-->
     
    </div>
<!--add ques box ends-->
              
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
<?php

 if(isset($_POST["submit1"]))
    {  
$ques=$_POST['question'];
$a= $_POST['opt1'];
$b=$_POST['opt2'];
$c=$_POST['opt3'];
$d=$_POST['opt4'];
$op=0;
$up=0;
if(isset($_POST['option'])){
$option=$_POST['option'];
//echo $option;
$op=$op+1;
//$_SESSION['option']=$option;
}
else{
$option=NULL;
}
if($option != NULL){
if($option == 'opA'){
    $ans=$a;
}
elseif($option == 'opB'){
    $ans=$b;
}
elseif($option == 'opC'){
    $ans=$c;
}
else{
    $ans=$d;
}

}
else{
echo '<script type="text/javascript"> alert("You must select an answer") </script>';
}
       $loop=0;
       $count=0;
       $res=mysqli_query($link,"select * from questions where quiz_id= '$id' order by id asc")or die(mysqli_error($link));

   // echo "$count";
       $count=mysqli_fetch_row($res);
       if($count==0)
       {
          
       }
      else
       {
           $up=$up+1;
            while($row=mysqli_fetch_array($res))
            {
                $loop=$loop+1;
                mysqli_query($link,"update questions set question_no='$loop' where id=$row[id]");
             }
        } 

    $loop=$loop+1;
    if(($op != 0)){
    $query="insert into questions values(NULL,'$loop','$_POST[question]','$a','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$ans','$exam_category','$_POST[level]','$userid')";

    mysqli_query($link,$query) or die(mysqli_error($link));
    }
    ?>
    <script type="text/javascript">
        //  alert("Question Added successfully");
          window.location.href=window.location.href;
    </script>
   <?php
    
    }
  ?>

<?php
}else{?>
<head>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width="428", initial-scale=1" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Sign in</title>
<style>
body {
  background-color: #DDE0EF;
  font-family: 'Ubuntu', sans-serif;
}
.main {
  background-color: #FFFFFF;
  width: 600px;
  height: 210px;
  margin: 7em auto;
  border-radius: 1.5em;
  box-shadow: 0px 11px 35px 2px #050a30;
}

.logn {
  padding-top: 30px;
  padding-bottom: 5px;
  color: black;
  font-family: 'Ubuntu', sans-serif;
  font-weight: bold;
  font-size: 35px;
}

button {
    cursor: pointer;
    border-radius: 5px;
    width:170px;
    color: #fff;
    background: #050a30;
    border: 0;
    
    padding: 12px 15px;
    font-size: 20px;
    margin-left: 35%;
    margin-top: 5%;;
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
}
button:hover
{
  background-color:#c3c7e3;
  color:#050a30;
  cursor: pointer;
}
.submit:a {
  text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
  color: #E1BEE7;
  text-decoration: none
}

@media (max-width: 600px) {
  .main {
      border-radius: 0px;
}
</style>
</head>
<body>
<div class="main">
<p class="logn" align="center">Please Login First</p>
  <button class="submit" align="center" onclick="window.location.href = 'https://35.154.101.124/index.php';"><b>LOG IN</b>&nbsp;<i class="fa fa-arrow-right" aria-hidden="true" style="color:white"></i></button>
</div>
</body> 
<?}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('.nav_btn').click(function(){
    $('.mobile_nav_items').toggleClass('active');
  });
});
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

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
</html>
