<?php
session_start();

if(isset($_SESSION['ID'])) {
include('jheader.php');
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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Recruitment Tool</title>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    body{
        background-position: center;
          background-size: cover;
       background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url(../CLient/bg.webp);
    }
textarea
{
    overflow: auto;
    resize: none;
    border: none;
    border-bottom: 1px solid black;
    width: 100%;
}
.question {
    width: 75%
}

.options {
    position: relative;
    padding-left: 40px
}

#options label {
    display: block;
    margin-bottom: 15px;
    font-size: 14px;
    cursor: pointer
}

/*.options input1 {*/
/*    opacity: 0*/
/*}*/

.checkmark {
    position: absolute;
    top: -1px;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 50%
}

.options input:checked~.checkmark:after {
    display: block
}

.options .checkmark:after {
    content: "";
    width: 10px;
    height: 10px;
    display: block;
    background: white;
    position: absolute;
    top: 50%;
    left: 50%;
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 300ms ease-in-out 0s
}

.options input[type="radio"]:checked.checkmark {
    background: #21bf73;
    transition: 300ms ease-in-out 0s
}

.options input[type="radio"]:checked~.checkmark:after {
    transform: translate(-50%, -50%) scale(1)
}

.btn-primary {
    background-color: #555;
    color: #ddd;
    border: 1px solid #ddd
}

.btn-primary:hover {
    background-color: #21bf73;
    border: 1px solid #21bf73
}

.btn-success {
    padding: 5px 25px;
    background-color: #21bf73
}

@media(max-width:576px) {
    .question {
        width: 100%;
        word-spacing: 2px
    }
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
	display:none;
}
.jbtn{
  background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
  color:#fff;
  border:none;
  position:relative;
  height:50px;
  font-size:1.6em;
  padding:0.3em 1em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
  margin-top:-50px;
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
    /*word-wrap: break-word;*/
    white-space:revert;
  }
  .input-container input:focus{
   border:none;
   outline:none;
   border-bottom:3px solid #1dc4e9;
  }

  .input-container input:focus ~ label,
  .input-container input:valid ~ label{
  	top:-12px;
  	font-size:12px;
  }

  .select-block {
    width: 200px;
    margin: -60px 0px 30px 170px;
    position: relative;
  }

  select {
    width: 100%;
    height: 50px;
    font-size: 100%;
    font-weight: bold;
    cursor: pointer;
    border-radius: 0;
    /*background-color: #1A33FF;*/
    border: none;
    border: 2px solid #1dc4e9;
    border-radius: 4px;
    color: black;
    appearance: none;
    padding: 8px 38px 10px 18px;
    -webkit-appearance: none;
    -moz-appearance: none;
    transition: color 0.3s ease, background-color 0.3s ease, border-bottom-color 0.3s ease;
  }

  /* For IE <= 11 */
  select::-ms-expand {
    display: none;
  }

  .selectIcon {
    top: 7px;
    right: 15px;
    width: 30px;
    height: 36px;
    padding-left: 5px;
    pointer-events: none;
    position: absolute;
    transition: background-color 0.3s ease, border-color 0.3s ease;
  }

  .selectIcon svg.icon {
    transition: fill 0.3s ease;
    fill: black;
  }

  select:hover,
  select:focus {
    color: #000000;
    background-color: white;
  }

  select:hover~.selectIcon,
  select:focus~.selectIcon {
    background-color: white;
  }

  select:hover~.selectIcon svg.icon,
  select:focus~.selectIcon svg.icon {
    fill: #1dc4e9;
  }
.quelevel{
    margin-left:10px;
    margin-top:-20px;
    
  }
/* div.b {  */
/*  word-wrap: break-word;  */
/*}*/

     @media screen and (max-width: 460px) {
       .select-block {
         width: 50%;
       }
       .quelevel {
           padding-left: 0 !important;
            padding-right: 0;
       }
   }
   @media screen and (max-width: 380px) {
       .select-block {
         width: revert;
         margin:auto;
         margin-bottom: 1rem;
         
       }
       .quelevel {
           text-align: center;
           padding:revert;
           padding-left: 0;
            padding-right: 0;
       }
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


<body>
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
                                <div class="col-md-10 col-xl-7">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <!--<h6 class="mb-4">Daily Recruitments</h6>-->
                                           <form action="" name="form1" method="post">
                    <div>
                    <!--<iframe frameborder="0" width="100%" height="500px" src="https://replit.com/@vashist/Test?lite=true"></iframe>   -->
                    

                          <div>
                            
                            <div class="head"  style="text-align:center;">
                            <h3><u><b>UPDATE QUESTION</b></u></h3>
                             </div>
                          
                             <br>
                             <div class="container mt-sm-0 my-1">
                                <div class="question ml-sm-2 pl-sm-2 pt-2">
                                    <div class="py-2 h5">
                                        <div class="input-container">
                                            <textarea name="question" class=" textt"  required><?php  echo $question; ?> </textarea>
                                           
                                            <!--<textarea name="text" name="question" height="auto" width="auto" class=" textt" wrap="soft" maxlength="40" style="overflow:hidden; resize:none;"><?php  echo $question; ?></textarea>-->
                                        </div>
                                    </div>
                                    <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options"> 
                                        <label class="options">
                                            <div class="input-container cl"><textarea name="opt1" class="text"  required><?php  echo $opt1; ?></textarea></div>
                                            <input type="radio" name="option" value="opA" class="checkmark" <?=$answer == $opt1 ? ' checked' : '';?>></label>
                                           
                                            
                                        <label class="options">
                                            <div class="input-container cl"><textarea name="opt2" class="text"required><?php  echo $opt2; ?> </textarea></div> 
                                            <input type="radio" name="option" value="opB" class="checkmark" <?=$answer == $opt2 ? ' checked' : '';?>>  </label> 
                                            
                                        <label class="options">
                                            <div class="input-container cl"><textarea name="opt3" class="text"  required><?php  echo $opt3; ?></textarea></div>
                                            <input type="radio" name="option" value="opC" class="checkmark" <?=$answer == $opt3 ? ' checked' : '';?>>  </label> 
                                           
                                        <label class="options">
                                            <div class="input-container cl"><textarea name="opt4" class="text"  required><?php  echo $opt4; ?></textarea></div>
                                            <input type="radio" name="option" value="opD" class="checkmark" <?=$answer == $opt4 ? ' checked' : '';?>></label>
                                           
                                             
                                    </div>
                                
                                </div>
                                
                            
                            </div>
                            
                            <h5 style="margin-left:30px; color:#706c8c ">Previous Selected Answer:&nbsp;<span style="color:#1dc4e9 "> <?php echo $answer; ?></span></h5>
                            <br>
                            </div>
                            <!--<br>-->
                            <!--<div class="para">-->
                            
                            <!--</div>-->
                           
                            <div style="padding:20px;" class="quelevel">
                                <h4 >Question Level:</h4>
                                </div>
                                <div class="container">
                                    <div class="select-block">
                                <select name="level" value="Add Level" required>
                                <!--<option disabled selected>-- Select Level --</option>-->
                                <!--<select style="width: 50%; margin:30px 20px 20px 30px; height:25px;"  name="level" value="Add Level" required>-->
                                <option value="Easy" <?=$level == "Easy" ? ' selected="selected"' : '';?>><b>Easy</b></option>
                                <option value="Medium" <?=$level == "Medium" ? ' selected="selected"' : '';?>><b>Medium</b></option>
                                <option value="Hard" <?=$level == "Hard" ? ' selected="selected"' : '';?>><b>Hard</b></option>
    			                     </select>
    			                      <br><br>
        <div class="selectIcon">
          <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
            <path d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z"></path>
          </svg>
        </div>
        </div>
        </div>
      
                        </div>
                            <div class="btnn"><center><button name="submit1" class="jbtn" ><b>Update Question</b></button></center></div>
                                                 
                    <!--</div>-->
                 </form>
                                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
     if(isset($_POST["submit1"]))

        {  
             
$ques=mysqli_real_escape_string($link,$_POST['question']);
$a= mysqli_real_escape_string($link,$_POST['opt1']);
$b=mysqli_real_escape_string($link,$_POST['opt2']);
$c=mysqli_real_escape_string($link,$_POST['opt3']);
$d=mysqli_real_escape_string($link,$_POST['opt4']);
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
            
            $sql="update questions set question='".$ques."',opt1='".$a."',opt2='".$b."',opt3='".$c."',opt4='".$d."',answer='".$ans."',level='".$_POST['level']."' WHERE id='" . $_GET["userid"] . "'";
            mysqli_query($link,$sql) or die(mysqli_error($link));
            // }


               ?>
            <script type="text/javascript">
               window.location='newadd.php?userid='+"<?php echo $id;?>";
                  
            //    window.location='add_edit_questions.php?id='+"<?php echo $id; ?>";
            </script>
           <?php
        }
    ?>
<?php
}else{?>


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
            background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url(../CLient/bg.webp);
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
            <center><button class="jbtn" align="center" onclick="window.location.href = 'https://phptest.avianglobes.com/register.php';"><b>LOG IN</b>&nbsp;<i class="fa fa-arrow-right" aria-hidden="true" style="color:white"></i></button></center>
        </div>
    </body> 
<?php
    }
?>
</body>
</html>