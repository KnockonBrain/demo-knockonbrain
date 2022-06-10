



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
        <div class="page-title">
            <h4>Add Exam</h4>
            
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
                                          <div class="card-header"><strong>Add Exam Categories</strong></div>
                                             <div class="card-body card-block">
                                                                        <div class="form-group"><label for="company" class=" form-control-label">New Exam Category</label><input type="text" name="examname" placeholder="Add Exam Category" class="form-control"></div>
                                                                        <div class="form-group"><label for="vat" class=" form-control-label">Exam Time In Minutes</label><select name="examtime" placeholder="Add time" class="form-control" required>
                                                                                                                                                                                <option value="10 ">10 min</option>
                                                                                                                                                                                <option value="20">20 min</option>
                                                                                                                                                                                <option value="30">30 min</option>
                                                                                                                                                                               <!--<option value="40">40 min</option>-->
                                                                                                                                                                               
                                                                                                                                                                              </select></div>
                                                                        <div class="form-group"><label for="vat" class=" form-control-label">Number of Questions</label><select name="noq" placeholder="" class="form-control" required>
                                                                                                                                                                                <option value="10 ">10 questions</option>
                                                                                                                                                                                <option value="20">20 questions</option>
                                                                                                                                                                                <!--<option value="30">30 questions</option>-->
                                                                                                                                                                               
                                                                                                                                                                              </select></div>                                                                                                      
                                                                        <div class="form-group">
                                                                            <input type="submit" value="Add Exam" name="submit1" class="btn btn-success">
                                                                            
                                                                    
                                                                         </div>
                            
        
        
                                                   </div>
                                             </div>
                                     </div>

                                                                    
                                        
                                        
                                        
                                                                    <div class="card">
                                                                    <div class="card-header">
                                                                        <strong class="card-title">Exam Categories</strong>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col">No.</th>
                                                                                    <th scope="col">Exam name</th>
                                                                                    <th scope="col">Exam Time</th>
                                                                                    <th scope="col">Total Questions</th>
                                                                                    
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
                                                                                    <td><?php echo $row['category']."_".$username; ?></td>
                                                                                    <td><?php echo $row['exam_time_in_minutes']; ?></td>
                                                                                    <td><?php echo $row['noq']; ?></td>
                                                                                    
                                                                                    <td><a href="add_edit_questions.php?userid=<?php echo $row['id']; ?>">Add Questions</a></td>
                                                                                    <td><a href="delete.php?userid=<?php echo $row["id"]; ?>"  onclick="return confirm('Are you sure?');" >Delete</a>
                                                                                    </td>
                                        
                                                                                </tr>
                                                                                       <?php
                                                                                }
                                        
                                        
                                        
                                                                            ?>
                                                                            </tbody>
                                                                        </table>
                                                                
                                                                    
                                                                    </div>
                                                                </div>
                                                                </div>
                                        
                                                                                                
                                                              </div> <!-- .card -->
                                                            </form> 
                             

                        </div>
                    <!--/.col-->
                    
                </div>
            </div><!-- .animated -->
         </div><!-- .content -->

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
}else echo "<h1>Please login first .</h1>";
?>

<?php


include "footer.php";


?>