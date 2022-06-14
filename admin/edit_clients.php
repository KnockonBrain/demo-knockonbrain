
<?php
session_start();
include "header.php";
include "connection.php";
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
     window.location="index.php";
    </script>
    <?php
}
$sql = mysqli_query($link,"SELECT * FROM users WHERE id='" . $_GET["userid"] . "'");
if ($sql) 
{
       while($row=mysqli_fetch_array($sql))
    {
        $username=$row["user_nicename"]; 
        $email=$row["user_email"];
        $pass=$row["user_password"];
        // $pass1=md5($pass);

    }

} else {
    echo "Error: " . mysqli_error($link);
}
// $id=$_GET["id"];
// $res=mysqli_query($link,"select * from exam_category where id=$id");







?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Clients</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <form name="form1" action="" method="post">
                       
                            <div class="card-body">
                                <!-- Credit Card -->
                            <div class="col-lg-6">
                           <div class="card">
                            <div class="card-header"><strong>Edit user</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">New Username</label><input type="text" name="username" placeholder="Username" class="form-control" value="<?php  echo $username; ?>"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">New Email</label><input type="text" name="email" placeholder="" class="form-control" value="<?php  echo $email; ?>"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">New Password</label><input type="text" name="password" placeholder="" class="form-control" value="<?php  echo $pass; ?>"></div>
                                <div class="form-group">
                                    <input type="submit" value="Update Exam" name="submit1" class="btn btn-success">
                                    
                            
                                 </div>
                    


                            </div>
                             </div>
                            </div>


                            
                                                        
                      </div> <!-- .card -->
                    </form> 
                   </div> 

                </div>
                    <!--/.col-->
                    
                </div>
            </div><!-- .animated -->
         </div><!-- .content -->

<?php
         if(isset($_POST["submit1"]))
            {   
               $pass1=md5($_POST['password']);
                $query="update users set user_nicename='".$_POST['username']."',user_email='".$_POST['email']."' ,user_password='$pass1' WHERE id='" . $_GET["userid"] . "'";
                       mysqli_query($link,$query) or die(mysqli_error($link));
                   ?>
                <script type="text/javascript">
                      
                      window.location="clients.php";
                </script>
               <?php

            
            }
?>
        
                                

<?php


include "footer.php";


?>