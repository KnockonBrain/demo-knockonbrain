<?php
session_start();
include "connection.php";
?>




<!doctype html>

<html class="no-js" lang="en">
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    KnockOnBrain-admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.1" rel="stylesheet" />
  <style>
    .button{
        padding:10px 240px;
        background-color:dodgerblue;
        border:1px solid #ddd;
        color:white;
        cursor:pointer;
    }
    .button:hover{
        background-color:royalblue;
    }
      
  </style>
  </head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100">
  </div>
  <main class="main-content position-relative border-radius-lg " style="margin-left:22%; width:50%; margin-right:-2%">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4" style="margin-top:30%" >
                <div class="card-header pb-0">
                    <h4 align="center">ADMIN PANEL</h4><br>
                    <form name="form1" action="" method="post">
                        <div class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold">
                            <label><b>USERNAME</b></label>
                            <input type="text"  name="username"  class="form-control" placeholder="Enter Username" required>
                        </div></span>
                            <div class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold">
                                <label><b>PASSWORD</b></label>
                                <input type="password"   name="password" class="form-control" placeholder="Password" required>
                        </div></span>
                        <div class="align-middle text-center">
                                    <!-- <label>
                                <input type="checkbox"> Remember Me -->
                            </label>
                                    <label class="align-middle text-center">
                                <!-- <a href="#">Forgotten Password?</a> -->
                            </label>

                                </div>
                                <button type="submit" name="submit1" class="button">Sign in</button>
                                <div class="align-middle text-center" id="errormsg" style="margin-top: 10px; display: none;" >
                                <strong>Invalid!</strong> Invalid Username and Password.
                                </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </form>
        </div>
    </div>
    </div>
    </div>
    </div>
</main>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>



<?php
         if(isset($_POST["submit1"]))

            {    
             $username=mysqli_real_escape_string($link,$_POST['username']);
             $password=mysqli_real_escape_string($link,$_POST['password']);

             $res=mysqli_query($link,"select * from admin_login where username='$username' && password='$password'    ");
            $count=mysqli_num_rows($res);
                if($count==0)
                {
                    ?>
                        <script type="text/javascript">
                      
                      document.getElementById("errormsg").style.display="block";
                         </script>


                    <?php



                }

                else
                { $_SESSION["admin"]=$username;
                ?>
                
                <script type="text/javascript">
              
               window.location="exam_category.php";
                </script>


            <?php
                }



            }
?>
