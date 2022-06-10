<?php
session_start();

// include "jokeradd.php";
if(isset($_SESSION['ID'])) {
    
    include '../user/data.php';
    include "connection.php";
    session_start();
    $cid=$_SESSION['ID'];
    $username=$_SESSION['user_nicename'];
    
    $stmtvnew = mysqli_query($con1,"Select company from users where ID=$cid");
	$datapq = mysqli_fetch_array($stmtvnew);
	$resultvnew=$datapq[0];
	
    $stmt = $pdo->prepare("SELECT mname FROM main_category ORDER BY mname");
    $stmt->execute(['cid' => $cid]); 
    $result = $stmt->FetchAll();
    
    include "jheader.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customize Test</title>
      <script src="pagination.js"></script>
   
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>

</head>
<style>
      body {
         font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
          font-size: 1rem;
          font-weight: 400;
          /*background-color: #f1f1f1;*/
          background-position: center;
          background-size: cover;
         background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url(../user/bg.webp);
         /*background-image: url("images/bg2.jpg");*/
          overflow:visible;
        }

.pg-normal {
color: #000000;
font-size: 15px;
cursor: pointer;
padding: 2px 4px 2px 4px;
}

.pg-selected {
color: #fff;
font-size: 15px;
background: #333847;
padding: 2px 4px 2px 4px;
}
jbutton{
  background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
  color:#fff;
  border:none;
  border-radius:25px;
  position:relative;
  height:30px;
  font-size:1.3em;
  padding:0.5em 0.2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
jbutton:hover{
  background:#fff;
  color:#1dc4e9;
}
jbutton:before,jbutton:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
 background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
  transition:400ms ease all;
}
jbutton:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
jbutton:hover:before,jbutton:hover:after{
  width:100%;
  transition:200ms ease all;
  opacity:0.7;
}
.fixed-button{
    display:none;
    visibility:none;
}
  td {
       
        word-break: break-word;
    }
    .modal {

display: none; /* Hidden by default */
position: fixed; /* Stay in place */
z-index: 99111; /* Sit on top */
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
width: 40%;
border-radius: 0.55rem;
box-shadow: 0px 11px 35px 2px #050a30;
}
  #add1{
      background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
  }
  #add1:hover{
   height:50px;         
   width:150px;
   transition:800ms ease all;
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
    .theme-bg2:hover{
        background:linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
    }
    .theme-bg:hover{
        background: linear-gradient(-135deg, #899FD4 0%, #A389D4 100%);
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
   .select-block {
    width: 200px;
    margin: -60px 0px 0px 210px;
    position: relative;
  }
  .quelevel{
    margin-left:-20px;
    margin-top:20px;
    
  }
  .quelevel1{
    margin-left:-20px;
    margin-top:-30px;
    
  }
   @media screen and (max-width: 1085px){
      .modal-content{
          width:50%;
      }
   }
   @media screen and (max-width: 910px){
       
     .quelevel {
         padding:revert !important;
         margin:auto;
         text-align: center;
     }
       .quelevel1 {
         padding:revert !important;
         margin:auto;
         text-align: center;
     }
     select{
         margin: auto;
     }
     .select-block{
         margin: auto !important;
     }
    .category{
          margin-top: 20px !important;
      }
     
    }
     @media screen and (max-width: 700px){   
        .modal-content {
            width: 70%;
        }
    }
    </style>
    
        
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
   

     <!--[ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                     <!--[ breadcrumb ] start -->

                     <!--[ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                 <!--[ daily sales section ] start-->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col">
                                                    <h5 class="m-0">Create New Test</h5>
                                                </div>
                                                <!--<div class="col-auto">-->
                                                <!--    <label class="label theme-bg2 text-white f-14 f-w-400 float-right"></label>-->
                                                <!--</div>-->
                                            </div>
                                            <br>
                                               <div  class="submit1" ><jbutton class="jbtn"  id="myBtn"><b>Create Test</b></jbutton></div>
                                                       <i class="fab fa-angellist text-c-purple f-50 float-right"></i>
                                            
                                            <h6 class="text-muted mt-4 mb-0">You can create your test!! </h6>
                                        </div>
                                    </div>
                                </div>
                                <!--[ daily sales section ] end-->
                                
                                <!--[ year  sales section ] end-->
                                <!--[ Recent Users ] start-->
                                <div class="col-xl-15 col-md-10" >
                                    <div class="card Recent-Users" >
                                        <div class="card-header">
                                           <center><h3>Tests</h3></center>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive">
                                                <table class="table table-hover"  id="myTable">
                                                   <!--<table id="myTable" class="table">-->
                    <thead>
                        <tr>
                            <th scope="col">Sr.No.</th>
                            <th scope="col">Test Category</th>
                            <th scope="col">Test Name</th>
                            <th scope="col">Time Limit</th>
                            <th scope="col">Set of Questions</th>
                            <th scope="col">Add Questions</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from exam_category where cid = '$cid'");
                        while($row=mysqli_fetch_array($res))
                        {
                            $count=$count+1;
                            ?>
                             <tr>
                            <?php
                                // $category=$row['main_category'];
                                
                                $int = (int)$row['main_category'];
                                $res1=mysqli_query($link,"SELECT b.mname FROM exam_category a
                                    INNER JOIN main_category b ON $int= b.mid");
                                $row1=mysqli_fetch_array($res1);
                            ?>
                                <th scope="row"><?php echo $count ?></th>
                                <td><?php echo $row1['mname']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo $row['exam_time_in_minutes']; ?></td>
                                <td><?php echo $row['noq']; ?></td>
                                <td>
                                    <a href="newadd.php?userid=<?php echo $row['id']; ?>"><button type="button" class="label theme-bg2 text-white f-12" id="add" style="border:none; padding: 0.3rem 1.2rem;">ADD
                                    </button></a>
                                </td>
                                <td>
                                     <a href="delete.php?userid=<?php echo $row["id"]; ?>"  onclick="return confirm('Are you sure?');" ><button type="button" class="label theme-bg text-white f-12" style="border:none; padding: 0.3rem 1rem;">
                                       DELETE
                                    </button></a>
                                </td>
                            </tr>
                            <?php
                         } ?>
                    </tbody>
               
                </table>
                <div id="pageNavPosition" align="center"></div>
            </div>
        </div>
        
    </div>
</div>
                     <!--[ Recent Users ] end-->
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- The Modal -->
<div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close">&times;</span>
    <center><h4 style="font-size: 25px;">CREATE TEST</h4> </center>
            <form action="" name="form1" method="post" class="mb-3 category" style="margin:auto;">
                <!--dropdown-->
                 <div class="mb-3">
                   <div style="padding:20px;" class="quelevel">
                        <h5 style="color:grey;">Select Category</h5>
                    </div>
                    <div class="select-block">
                      <select class="text" name="main_category" size="1" required style="width:100%;" ><br>
                       <option value="">Select Category</option>
                            <?php
                                foreach($result as $tname){
                                    echo "<option value='".$tname['mname']."'> ".$tname['mname']." </option>";
                                }
                            ?>
                      </select>
                      <div class="selectIcon">
                            <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
                            <path d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z"></path>
                            </svg>
                       </div>
                    </div>
                 </div>
                <div class="mb-3">
                    <div style="padding:20px;" class="quelevel">
                        <h5 class="mb-2" style="color:grey;">Enter Test Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h5>
                    </div>
                    
                    <div class="select-block">
                    <input class="form-control" style="border: 2px solid #1dc4e9;" name="examname" type="text" placeholder="e.g. Digital Marketing" required>
                    </div>
                </div>
                
                <div class="mb-3">
                   <!--<label class="mb-2" required>Select Duration of Test</label>-->
                   <div style="padding:20px;" class="quelevel">
                        <h5 style="color:grey;">Select Duration of Test:</h5>
                    </div>
                    <div class="select-block">
                    
                    <select class="form-select" name="examtime">
                        <option value="10">10 Minutes</option>
                        <option value="20">20 Minutes</option>
                        <option value="30">30 Minutes</option>
                      </select>
                      <div class="selectIcon">
                    <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
                    <path d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z"></path>
                    </svg>
                    </div>
                    
                    </div>
                </div>
                <br>
                <div class="mb-3" style="margin-top: -1rem;">
                    <div style="padding:20px;" class="quelevel1">
                        <h5 style="color:grey;">Number of Questions:</h5>
                    </div>
                    <div class="select-block">
                    
                    <select class="form-select" name="noq">
                        <option value="10 ">10 Questions</option>
                        <option value="20 ">20 Questions</option>
    
                     </select>
                     <div class="selectIcon">
                    <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
                    <path d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z"></path>
                    </svg>
                    </div>
                    </div>
                </div>
                
                <center><button type="submit" name="submit1" class="btn btn-primary" id="add1">ADD TEST</button></center>
            </form>

 </div>
</div>

<!--<Modal Ends>-->

<?php
    if(isset($_POST["submit1"]))
    {   
        $query="insert into exam_category values(NULL,'$_POST[examname]','$_POST[examtime]','$_POST[noq]','https://phptest.avianglobes.com/php/test/index.php', '$username', $cid, (select mid from main_category where mname='$_POST[main_category]'), '$resultvnew')";
        mysqli_query($link,$query) or die(mysqli_error($link));
?>
        <script type="text/javascript">
            //   alert("exam added successfuly");
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
<script>
    var pager = new Pager('myTable', 6);
    pager.init();
    pager.showPageNav('pager', 'pageNavPosition');
    pager.showPage(1);
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
            background-position: center;
            background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url(../user/bg.webp);
            overflow:visible;
        }
        .main {
            border-radius: 5px;
            /*background-color: #FFFFFF;*/
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

</html>