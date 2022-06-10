<?php
session_start();
if(isset($_SESSION['ID'])) {
    
    include "connection.php";
    session_start();
    $cid=$_SESSION['ID'];
    $username=$_SESSION['user_nicename'];
?>
<!DOCTYPE HTML> 
<html>
<head>
    <title>Create Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=428", initial-scale=1">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel=" icon" type="image/jpg" href="../images/fevicon.jpg"/>

    
  <style>
body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  background-color: #f1f1f1;
  background-position: center;
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
.content{
    margin-top: 100px;
    margin-left: 260px;
    background-position: center;
    background-size: cover;
    transition: 0.5s;
}

#check:checked ~ .content{
    margin-left: 300px;
    margin-right: 250px;
}
.add-test{
    cursor: pointer;
    border-radius: 5px;
    width: 170px;
    font-weight:525;
    color: #fff;
    background: #050a30;
    border: 0;
    padding: 12px 15px;
    font-size: 18px;
}
.add-test:hover{
    color:#050a30;
    background: #DDE0EF;
}
/*table*/
.card {
    width: fit-content;
    margin:auto;
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
    border-top: 2px solid #dee2e6; 
}
tr:nth-child(even) {
	background-color: #DDE0EF;
}
.add{
    cursor: pointer;
    color: #fff;
    border: 0;
    padding:8px 15px;
    font-size: 14px;
    font-weight:500;
    background-color:#050a30;
     border-radius: 5px;
}
.delete{
    background-color:#D23747;
    cursor: pointer;
    color: #fff;
    border: 0;
    padding:8px 15px;
    font-size: 14px;
    font-weight:500;
    border-radius: 5px;
}
.add:hover{
    background-color:#DDE0EF;
    color:#050a30;
    border:1.5px solid #050a30;
}
.delete:hover{
    background-color:#B72A38;
}
a{
 text-decoration:none;
 color:white;
}

/*Pop-Up */

.mb-3 {
    margin-bottom: 2rem!important;
    margin-left: 1rem!important;
    font-size: 20px;
}
.mb-2{
  margin-right:  5rem!important;
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
  padding: 20px;
  border: 1px solid #888;
  width: 600px;
  height: 350px;
  border-radius: 1.5em;
  box-shadow: 0px 11px 35px 2px #050a30;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  text-decoration: none;
  cursor: pointer;
}

#add1
{
  width:140px;
  background-color:#050a30;
  border:1px solid #050a30;
   color:white;
   font-size: 18px;
   box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
   padding: 12px 15px;
   margin-top: 0px;
   margin-bottom: 10px;
}
#add1:hover
  {
     background-color:#050a30;
     cursor: pointer;
     border:1px solid #050a30;
  }
  select,input {
        height: 25px;
        width: 250px;
    }



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
        width:fit-content;
        margin:auto;
        padding: 10px 20px;
        transition: 0s;
        margin-top:10%;
     }
     .card{
         margin-top:20px;
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
        font-size:1.1rem;
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
        <a href="https://phptest.avianglobes.com/CLient/profile.php"><img class="profile_image" src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/004/088/original/user.png"></img></a>
        
      </div>
      <a href="https://phptest.avianglobes.com/CLient/test.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><span>Schedule Test</span></a>
        <a href="../final2.php"><i class="fa fa-trophy" aria-hidden="true"></i><span>View Results</span></a>
        <a href="https://phptest.avianglobes.com/client12/addexamm.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Custom Test</span></a>
        <a href="https://phptest.avianglobes.com/CLient/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->

           
<!--add test table starts-->
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <center><h4 style="font-size: 25px;">CREATE TEST</h4></center>
            <form action="" name="form1" method="post" class="mb-3" style="padding:10px;">
                <div class="mb-3">
                    <label class="mb-2">Enter Test Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                    <input class="form-control" name="examname" type="text" placeholder="e.g. Digital Marketing" required>
                </div>
                <div class="mb-3">
                    <label class="mb-2" required>Select Duration of Test</label>
                    <select class="form-select" name="examtime">
                        <option value="10 ">10 Minutes</option>
                        <option value="20 ">20 Minutes</option>
                        <option value="30">30 Minutes</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label class="mb-2" required>Number of Question&nbsp&nbsp&nbsp</label>
                    <select class="form-select" name="noq">
                        <option value="10 ">10 Questions</option>
                        <option value="20 ">20 Questions</option>
    
                      </select>
                </div>
                <center><button type="submit" name="submit1" class="btn btn-primary" id="add1">ADD TEST</button></center>
            </form>

 </div>
</div>


    <div class="content">
        <center><button class="add-test" id="myBtn">CREATE TEST</button></center>
        <div class="card">
            <div class="card-header">
                <center><h3 class="card-title">Test</h3></center>
            </div>
            <div class="cart-body">
                <div class="table-wrap">
                    <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sr.No.</th>
                            <th scope="col">Test Name</th>
                            <th scope="col">Test Duration</th>
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
                                <th scope="row"><?php echo $count ?></th>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo $row['exam_time_in_minutes']; ?></td>
                                <td><?php echo $row['noq']; ?></td>
                                <td>
                                    <a href="addquess.php?userid=<?php echo $row['id']; ?>"><button type="button" class="add" id="add" >ADD
                                    </button></a>
                                </td>
                                <td>
                                     <a href="delete.php?userid=<?php echo $row["id"]; ?>"  onclick="return confirm('Are you sure?');" ><button type="button" class="delete">
                                       DELETE
                                    </button></a>
                                </td>
                            </tr>
                            <?php
                         } ?>
                    </tbody>
                </table>
            </div>
    </div>
    </div>
    </div>
<!--add test table ends-->

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
        $query="insert into exam_category values(NULL,'$_POST[examname]','$_POST[examtime]','$_POST[noq]','https://phptest.avianglobes.com/php/test/index.php', '$username', $cid)";
        mysqli_query($link,$query) or die(mysqli_error($link));
           ?>
        <script type="text/javascript">
            //   alert("exam added successfuly");
              window.location.href=window.location.href;
        </script>
       <?php
    }
?>

<?php
}else{?>
<head>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=428", initial-scale=1">
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


</script>


</body>
</html>
    
 