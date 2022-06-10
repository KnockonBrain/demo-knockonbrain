<?php
session_start();
if(isset($_SESSION['ID'])) {
    
    include "connection.php";
    session_start();
    $cid=$_SESSION['ID'];
    $username=$_SESSION['user_nicename'];

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

include("jheader.php");
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
    /*@import url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');*/
    /*@import url('https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js');*/
    /*@import url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');*/
/** {*/
/*    margin: 0;*/
/*    padding: 0;*/
/*    box-sizing: border-box*/
/*}*/


/*.container {*/
/*    background-color: #555;*/
/*    color: #ddd;*/
/*    border-radius: 10px;*/
/*    padding: 20px;*/
/*    font-family: 'Montserrat', sans-serif;*/
/*    max-width: 100px*/
/*}*/

/*.container>p {*/
/*    font-size: 32px*/
/*}*/
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
.options input[type="radio"]:hover:before {
    background: none repeat scroll 0 0 rgba(255, 255, 255, 0.5)
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
  .licl{
    margin-right:  1rem!important;
    margin-bottom: 1rem!important;
    margin-left: 1rem!important;
    font-size: 18px;
  }

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
  .h2cl{
    margin-right:  1rem!important;
    margin-bottom: 2rem!important;
    margin-left: 1rem!important;
  }
  .close {
      color: #aaaaaa;
      /*float: center;*/
      font-size: 28px;
      font-weight: bold;
      padding-right: 20px ;
      margin-left:95%;
      
    }
    .close:hover,
    .close:focus {
      color: red;
      text-decoration: none;
      cursor: pointer;
    }
    .table td, .table th {
        white-space: revert;
    }
   /*table {border-collapse:collapse; table-layout:fixed; width:310px;}*/
   /*table td {  word-wrap:break-word;}*/
    @media screen and (max-width: 1000px) {
        .modal{
            padding-top: 160px;
        }
        .modal-content{
            width:80%;
        }
    }
   @media screen and (max-width: 460px) {
       .select-block {
         width: 50%;
       }
       .quelevel {
           padding-left: 0 !important;
            padding-right: 0;
       }
       .modal{
            padding-top: 110px;
        }
        .modal-content{
            width:90%;
        }
        .licl{
            font-size:16px;
        }
        .h2cl{
            font-size:35px;
        }
   }
   @media screen and (max-width: 472px) {
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
                            <div class="row">
                                <!--[ daily sales section ] start-->
                                <div class="col-md-10 col-xl-8">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <!--<h6 class="mb-4">Daily Recruitments</h6>-->
                                           <form action="" name="form1" method="post">
                    <div>
                    <!--<iframe frameborder="0" width="100%" height="500px" src="https://replit.com/@vashist/Test?lite=true"></iframe>   -->
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

                          <div>
                            <span style="float: right; color: #050a30; cursor: pointer;" id="myBtn" class="mybtn"><i style="font-size:30px;" class="fa fa-info-circle"></i></span>
                            <div class="head" style="text-align:center;">
                            <h3>Add <?php echo $exam_category ?> Question</h3>
                             </div>
                          
                             <br>
                             <div class="container mt-sm-0 my-1">
                                <div class="question ml-sm-2 pl-sm-2 pt-2">
                                    <div class="py-2 h5">
                                        <div class="input-container">
                                            <textarea name="question" class=" textt" placeholder=" Enter Complete Question " required></textarea>
                                        </div>
                                    </div>
                                    <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options"> 
                                        <label class="options">
                                            <div class="input-container cl"><textarea name="opt1" class="text" placeholder=" Add Option-1 " required></textarea></div>
                                            
                                            <input type="radio" name="option" value="opA" class="checkmark" title="Correct Answer"></label> 
                                        <label class="options">
                                            <div class="input-container cl"><textarea name="opt2" class="text" placeholder=" Add Option-2 " required></textarea></div> 
                                            
                                            <input type="radio" name="option" value="opB" class="checkmark" title="Correct Answer">  </label> 
                                        <label class="options">
                                            <div class="input-container cl"><textarea name="opt3" class="text" placeholder=" Add Option-3 " required></textarea></div>
                                            
                                            <input type="radio" name="option" value="opC" class="checkmark" title="Correct Answer">  </label> 
                                        <label class="options">
                                            <div class="input-container cl"><textarea name="opt4" class="text" placeholder=" Add Option-4 " required></textarea></div>
                                    
                                            <input type="radio" name="option" value="opD" class="checkmark" title="Correct Answer"></label> 
                                    </div>
                                
                                </div>
                            </div>
                           
                            </div>
                            <br>
                            <div class="level">
                                <div style="padding:20px;" class="quelevel">
                                    <h4 >Question Level:</h4>
                                </div>
                                <div class="container">
                                    <div class="select-block">
                                    <select name="level" value="Add Level" required>
                                    <!--<option disabled selected>-- Select Level --</option>-->
                                    <!--<select style="width: 50%; margin:30px 20px 20px 30px; height:25px;"  name="level" value="Add Level" required>-->
                                    <option value="Easy"><b>Easy</b></option>
                                    <option value="Medium"><b>Medium</b></option>
                                    <option value="Hard"><b>Hard</b></option>
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
      
                        </div>
                            <div class="btnn"><center><button name="submit1" class="jbtn" ><b>Add Question</b></button></center></div>
                                                 
                    <!--</div>-->
                 </form>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $jq = ("select * from questions where quiz_id= '$id' order by question_no asc")or die(mysqli_error($link));
                                $jres = mysqli_query($link,$jq);
                                $jtotal=mysqli_num_rows($jres);
                                $easy=0;
                                $med=0;
                                $hard=0;
                                while($jrows=mysqli_fetch_array($jres)){
                                    $category=$jrows['level'];
                                    if($category=='Easy'){
                                        $easy=$easy+1;
                                    }
                                    else if($category=='Medium'){
                                        $med=$med+1;
                                    }
                                    else{
                                        $hard=$hard+1;
                                    }
                                }
                                $easy=($easy/$jtotal)*100;
                                $med=($med/$jtotal)*100;
                                $hard=($hard/$jtotal)*100;
                                ?>
                                <div class="col-md-12 col-xl-4">
                                    <div class="card yearly-sales">
                                        <div class="card-block">
                                            <h3 class="mb-4">Total Questions Entered</h3>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h2 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-60 m-r-10"></i><?php echo $jtotal ?></h2>
                                                </div>
                                                <!--<div class="col-3 text-right">-->
                                                <!--    <p class="m-b-0">80%</p>-->
                                                <!--</div>-->
                                            </div>
                                            <br><br><br>
                                            <div>
                                               <!--<h4 class="mb-4">Easy Level</h4> -->
                                               <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0">Easy Level</h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0"><?php echo intval($easy) ."%"; ?></p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: <?php echo intval($easy);?>%; background-color: #3bb78f;
background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 74%);" aria-valuenow="<?php echo intval($easy);?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <br><br>
                                            <div>
                                               <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0">Medium Level</h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0"><?php echo intval($med) ."%";?></p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
<!--                                                background-color: #3bb78f;-->
<!--background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 74%);-->
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: <?php echo intval($med);?>%; background-color: #fbb034;
background-image: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%);" aria-valuenow="<?php echo intval($med);?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <br><br>
                                            <div>
                                               <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0">Hard Level</h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0"><?php echo intval($hard) ."%"; ?></p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: <?php echo intval($hard);?>%; background:linear-gradient(-120deg,#d62121,#c72c2c);" aria-valuenow="<?php echo intval($hard);?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                                <!--[ year  sales section ] end-->
                                 <!--[ Recent Users ] start-->
                                <div class="col-xl-12 col-md-12">
                                    <div class="card Recent-Users" >
                                        <br>
                                        <h3 style="text-align: center;">All <?php echo $exam_category ?> Questions</h3>
                                        <div class="card-header">
                                
                                            
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive" >
                                                <table class="table table-hover" >
                                                    
       
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
            
            <td><a href="jupdateques.php?userid=<?php echo $row["id"]; ?>&id=<?php echo $userid; ?>"><i class="fa fa-edit"></i></a></td>
            
           
            
            <td><a href="delete_options.php?userid=<?php echo $userid; ?>&id=<?php echo $row["id"]; ?>"  onclick="return confirm('Are you sure?');"><i class="fa fa-trash-alt"></i></a></td>
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
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

 if(isset($_POST["submit1"]))
    {  
        //echo "hello";
         
$ques=mysqli_real_escape_string($link,$_POST['question']);
$a= mysqli_real_escape_string($link,$_POST['opt1']);
$b=mysqli_real_escape_string($link,$_POST['opt2']);
$c=mysqli_real_escape_string($link,$_POST['opt3']);
$d=mysqli_real_escape_string($link,$_POST['opt4']);
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
    $query="insert into questions values(NULL,'$loop','$ques','$a','$b','$c','$d','$ans','$exam_category','$_POST[level]','$userid')";

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