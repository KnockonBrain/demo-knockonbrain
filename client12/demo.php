<?php
session_start();
if(isset($_SESSION['ID'])) {
    include "header.php";
    include "connection.php";
    session_start();
    $cid=$_SESSION['ID'];
    $username=$_SESSION['user_nicename'];
    

?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <!-- <div class="page-title">
                        <h1>Add Exam</h1>
                    </div> -->
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
                            <div class="card-header"><strong>Add Exam Categories</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">New Exam Category</label><input type="text" name="examname" placeholder="Add Exam Category" class="form-control"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Exam Time In Minutes</label><select name="level" placeholder="Add time" class="form-control" required>
                                                                                                                                        <option value="10 ">10 min</option>
                                                                                                                                        <option value="20">20 min</option>
                                                                                                                                        <option value="30">30 min</option>
                                                                                                                                       <option value="40">40 min</option>
                                                                                                                                       
                                                                                                                                      </select>
                                                                                                                                      <br><br>
                                                                                                                                      <!--<input type="text" name="level" placeholder="Add Level" class="form-control" required>-->
                                                                                                                                      </div> 
                                <div class="form-group">
                                    <input type="submit" value="Add Exam" name="submit1" class="btn btn-success">
                                    
                            
                                 </div>
                    


                            </div>
                             </div>
                            </div>
&nbsp;

                           

                                                        
                      </div> <!-- .card -->
                    </form> 
                   </div> 

                </div>
                    <!--/.col-->
                    
                </div>
            </div><!-- .animated -->
         </div><!-- .content -->

         
         
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Level</strong> Form
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Easy</label></div>
                                                                <div class="col-12 col-md-9"><input type="email" id="hf-email" name="hf-email" placeholder="Enter Email..." class="form-control"><span class="help-block">Please enter your email</span></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Password</label></div>
                                                                <div class="col-12 col-md-9"><input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control"><span class="help-block">Please enter your password</span></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <!--<button type="reset" class="btn btn-danger btn-sm">-->
                                                        <!--    <i class="fa fa-ban"></i> Reset-->
                                                        <!--</button>-->
        </div>
    </div>
</div>

<?php
         if(isset($_POST["submit1"]))
            {   
                $query="insert into exam_category values(NULL,'$username.$_POST[examname]','$_POST[examtime]','https://35.154.101.124/php/test/index.php', $cid)";
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
}else echo "<h1>Please login first .</h1>";
?>

<?php


include "footer.php";


?>