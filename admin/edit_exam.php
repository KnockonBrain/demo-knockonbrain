<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
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
$sql = mysqli_query($link,"SELECT * FROM exam_category WHERE id='" . $_GET["userid"] . "'");
if ($sql) 
{
       while($row=mysqli_fetch_array($sql))
    {
        $main_category=$row["main_category"];
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
                        <h1>Edit Exam</h1>
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
                            <div class="card-header"><strong>Edit Exam Name</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">New Exam Name</label><input type="text" name="examname" placeholder="Add Exam Category" class="form-control" value="<?php  echo $exam_category; ?>"></div>
                                <!--<div class="form-group"><label for="vat" class=" form-control-label">Exam Time In Minutes</label><input type="text" name="examtime" placeholder="" class="form-control" value="<?php  echo $exam_time; ?>"></div>-->
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Exam Time In Minutes</label>
                                    <select class="form-control" name="examtime" placeholder="Select Time">
                                        <option value="10">10 Minutes</option>
                                        <option value="20">20 Minutes</option>
                                        <option value="30">30 Minutes</option>
                                    </select>
                                </div>
                                
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
                $query1="select * from exam_category where lower(category)=trim(lower('$_POST[examname]')) && main_category='$main_category' && cid IS NULL";
                $num=mysqli_query($link,$query1);
                ?>
                    <script type="text/javascript">
                        console.log(<?php $_POST[examname] ?>);
                    </script>
               <?php
                if(mysqli_num_rows($num) > 0){
                   echo '
                        <script type="text/javascript">
                        console.log("hi");
                            $(document).ready(function(){
                              swal({
                                position: "top-end",
                                type: "warning",
                                text: "Test name already exists in this category! Please enter new.",
                                icon:"warning",
                                showConfirmButton: true,
                                })
                            });
                        </script>';
                 }
                else{
                     console.log("HII");
                    $query="update exam_category set category='".$_POST['examname']."',exam_time_in_minutes='".$_POST['examtime']."' WHERE id='" . $_GET["userid"] . "'";
                    mysqli_query($link,$query) or die(mysqli_error($link));
                ?>
                    <!--<script type="text/javascript">-->
                    <!--      window.location="exam_category.php";-->
                    <!--</script>-->
               <?php
                } 
            }
            ?>
        
<?php


include "footer.php";


?>