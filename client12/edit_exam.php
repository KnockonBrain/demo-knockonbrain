
<?php
session_start();
include "header.php";
include "connection.php";

$sql = mysqli_query($link,"SELECT * FROM exam_category WHERE id='" . $_GET["userid"] . "'");
if ($sql) 
{
       while($row=mysqli_fetch_array($sql))
    {
        $exam_category=$row["category"]; 
        $exam_time=$row["exam_time_in_minutes"];
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
                        <h6><strong>Edit Exam</strong></h6>
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
                            <div class="card-header"><strong>Add Exam</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">New Exam Category</label><input type="text" name="examname" placeholder="Add Exam Category" class="form-control" value="<?php  echo $exam_category; ?>"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">Exam Time In Minutes</label><input type="text" name="examtime" placeholder="" class="form-control" value="<?php  echo $exam_time; ?>"></div>
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
                $query="update exam_category set category='".$_POST['examname']."',exam_time_in_minutes='".$_POST['examtime']."' WHERE id='" . $_GET["userid"] . "'";
                mysqli_query($link,$query) or die(mysqli_error($link));
                   ?>
                <script type="text/javascript">
                      
                      window.location="exam_category.php";
                </script>
               <?php

            
            }
?>
        
                                

<?php


include "footer.php";


?>