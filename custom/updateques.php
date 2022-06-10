<?php
session_start();
if(isset($_SESSION['ID'])) {

// session_start();

include "connection.php";
// $rad=$_SESSION['option'];
//echo $rad;

$userid=$_GET['userid'];
$id=$_GET['id'];


$sql = mysqli_query($link,"SELECT * FROM questions WHERE id='" .$userid. "'");
$question='';
$question_no='';
$opt1='';
$opt2='';
$opt3='';
$opt4='';
$answer='';
$level='';
if ($sql) 
{
    // header("location: add_edit_questions.php?id=$id");
       while($row=mysqli_fetch_array($sql))
    {
        $question=$row["question"]; 
        $question_no=$row["question_no"];
        $opt1=$row["opt1"]; 
        $opt2=$row["opt2"]; 
        $opt3=$row["opt3"]; 
        $opt4=$row["opt4"]; 
        $answer=$row["answer"]; 
        $level=$row["level"]; 

    }
    
        
   

} else {
    echo "Error: " . mysqli_error($link);
}
?>

<html>

<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=428", initial-scale=1">
     <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel=" icon" type="image/jpg" href="../images/fevicon.jpg"/>
    <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
   
    <title>Update Question</title>
    
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
        height:90px;
        width: 100%;
        padding-bottom:20px;
        padding-left: 15px;
        padding-top:30px;
    }
    .content{
        margin-left: 400px;
        /*/background: url(background.png) no-repeat;/*/
        /*background: #dedede;*/
        background-position: center;
        background-size: cover;
        transition: 0.5s;
    }
    
    #check:checked ~ .content{
      margin-left: 370px;
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
        width:200px;
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

.para{
    margin-top:20px;
    margin-left:20px;
}

/* Modal Content */
.modal-content {
    background:white;
    margin-top:100px;
    width:650px;
    padding:0px 40px 0px 20px;
    border: 1px solid #888;
    border-radius: .55rem;
    box-shadow: 0px 8px 20px 2px #050a30;
    transition: 0.5s;
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
        transition: 0s;
     }

    #lab_social_icon_footer {
    margin-left: 70%
    }
    .modal-content{
        margin-left: auto;
    margin-right: auto;
        margin-top: 80px !important;
        position: inherit;
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
    <script>
        $(document).ready(function () {
            $('#nav-toggle').click(function (e) {
                e.preventDefault();
                e.stopPropagation();
                $('#toggle-item').toggle();
            });
            $('#toggle-item').click(function (e) {
                e.stopPropagation();
            });
            $('body').click(function () {
                $('#toggle-item').hide();
            });
        });
    </script>
    
     <div class="content">
<section>
    <div class="modal-content">
    <div class="head">
                <h3 style="text-align: center;
                    margin:5px;
                    font-weight: 600;
                    letter-spacing: 5px;
                    font-size: 25px;
                    line-height: 1.2;
                    padding:10px 0px 5px 0px;
                    ">UPDATE QUESTION</h3>
                 </div>
               
                <br>
      <form action="" name="form1" method="post">
      <div>
    <!--<iframe frameborder="0" width="100%" height="500px" src="https://replit.com/@vashist/Test?lite=true"></iframe>   -->
          <div>
            <div class="input-container"><input type="text" name="question" class=" textt" placeholder="Question" value="<?php  echo $question; ?>" required></div>
            <div>
            <div>
                <div style="width:50%; height:60px; float:left;">
                    <label class="container-left"><input type="radio" name="option" value="opA"><span class="check"></span>
                      <div class="input-container cl"><input type="text" name="opt1" class="text" placeholder="Option1" value="<?php  echo $opt1; ?>"required></div>
                    </label>
                </div>

                <div style="width: 50%; height:60px; float:right">
                    <label class="container-right"><input type="radio" name="option" value="opB"><span class="check"></span>
                    <div class="input-container cr"><input type="text" name="opt2" class="text" placeholder="Option2" value="<?php  echo $opt2; ?>" required></div>
                  </label>
                </div>
            </div>
            <div>
                <div style="width: 50%; height:60px; float:left">
                    <label class="container-left"><input type="radio" name="option" value="opC"><span class="check"></span>
                    <div class="input-container cl"><input type="text" name="opt3" class="text" placeholder="Option3" value="<?php  echo $opt3; ?>" required></div>
                    </label>
                </div>
                <div style="width: 50%; height:60px; float:right">
                    <label class="container-right"><input type="radio" name="option" value="opD"><span class="check"></span>
                    <div class="input-container cr"><input type="text" name="opt4" class="text"  placeholder="Option4" value="<?php  echo $opt4; ?>"  required></div>
                    </label>
                </div>
            </div>
          </div>
          </div>
            </div>
            
            <div class="para">
                <p>
                <b>Previous Selected Answer is: <?php echo $answer; ?></b>
            </p>
            </div>
                
          
            <div style="padding:0px 10px 10px 10px;" class="quelevel">
                <div><label> Add Level : </label>
                    <select style="width: 50%; margin:20px 20px 20px 20px; height:25px;"  class="text tex" name="level" value="Add Level" required>
                    <option value="Easy"><b>Easy</b></option>
                    <option value="Medium"><b>Medium</b></option>
                    <option value="Hard"><b>Hard</b></option>
                    </select>
               </div>
            </div>
            
            <div class="btnn"><center><button name="submit1" class="btn" ><b>Update Question</b></button></center></div>
    </div>
     </form>
      </div>
      </section>
  </div>


<!--footer-->          
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
<!--footer endss--> 

      <?php
     if(isset($_POST["submit1"]))

        {   
$ques=$_POST['question'];
$a= $_POST['opt1'];
$b=$_POST['opt2'];
$c=$_POST['opt3'];
$d=$_POST['opt4'];
$cnt=0;

if(isset($_POST['option'])){
    $option=$_POST['option'];
    
    $cnt=$cnt+1;
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
     $ans=$answer;
 }
            
            $id=$_GET['id'];
            // if($cnt != 0)
            // {
            $sql="update questions set question='".$_POST['question']."',opt1='".$_POST['opt1']."',opt2='".$_POST['opt2']."',opt3='".$_POST['opt3']."',opt4='".$_POST['opt4']."',answer='".$ans."',level='".$_POST['level']."' WHERE id='" . $_GET["userid"] . "'";
            mysqli_query($link,$sql) or die(mysqli_error($link));
            // }


               ?>
            <script type="text/javascript">
               window.location='addquess.php?userid='+"<?php echo $id;?>";
                  
            //    window.location='add_edit_questions.php?id='+"<?php echo $id; ?>";
            </script>
           <?php
        }
    ?>
<?php
}else{?>
<head>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=428", initial-scale=1" />
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
  <button class="submit" align="center" onclick="window.location.href = 'https://phptest.avianglobes.com/index.php';"><b>LOG IN</b>&nbsp;<i class="fa fa-arrow-right" aria-hidden="true" style="color:white"></i></button>
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

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


    </body>
    </html>