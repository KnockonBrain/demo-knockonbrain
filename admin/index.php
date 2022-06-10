<?php
session_start();
include "connection.php";
?>




<!doctype html>

<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>

</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" style="color: whitesmoke;">
                    <!-- <a href="index.html"> -->
                        <!-- <img class="align-content" src="images/logo.png" alt=""> -->
                    <!-- </a> -->
                    ADMIN LOGIN
                </div>
                <div class="login-form">
                    <form name="form1" action="" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text"  name="username"  class="form-control" placeholder="Enter Username" required>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password"   name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="checkbox">
                                    <!-- <label>
                                <input type="checkbox"> Remember Me -->
                            </label>
                                    <label class="pull-right">
                                <!-- <a href="#">Forgotten Password?</a> -->
                            </label>

                                </div>
                                <button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="alert alert-danger" id="errormsg"   style="margin-top: 10px; display: none;" >
                                <strong>Invalid!</strong> Invalid Username and Password.
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
