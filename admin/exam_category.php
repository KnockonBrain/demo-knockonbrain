<?php
session_start();
// include("auth.php");
include "header.php";
include "connection.php";
include '../CLient/data.php';
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
     window.location="index.php";
    </script>
    <?php
}
$cid=$_SESSION['admin'];
$stmt = $pdo->prepare("SELECT mname FROM main_category ORDER BY mname");
$stmt->execute(['cid' => $cid]); 
$result = $stmt->FetchAll();
?>
<!DOCTYPE html>
<html>
<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Exam</h1>
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
                                
                                <div class="form-group">
                                    <label for="" class=" form-control-label">Select Exam Category</label>
                                    <select class="form-control text" name="main_category" placeholder="Select Category" id="main" size="1" required  onChange="hide()"><br>
                                        <option value="">Select Category</option>
                                            <?php
                                                foreach($result as $tname){
                                                    echo "<option value='".$tname['mname']."'> ".$tname['mname']." </option>";
                                                }
                                            ?>
                                        <option value="new_category">New Category</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <div  id="category" style="display:none;">
                                        <label for="" class=" form-control-label">New Exam Category</label>
                                        <input type="text" name="examcategory" placeholder="Add Exam Category" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">New Exam Name</label>
                                    <input type="text" name="examname" placeholder="Add Exam Name" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">No. of Questions</label>
                                    <select class="form-control" name="noq" placeholder="Select no. of questions">
                                        <option value="10">10 Questions</option>
                                        <option value="20">20 Questions</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Exam Time In Minutes</label>
                                    <select class="form-control" name="examtime" placeholder="Select Time">
                                        <option value="10">10 Minutes</option>
                                        <option value="20">20 Minutes</option>
                                        <option value="30">30 Minutes</option>
                                    </select>
                                </div>
                                
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
                                            <th scope="col">#</th>
                                            <th scope="col">Exam Category</th>
                                            <th scope="col">Exam Name</th>
                                            <th scope="col">Exam Time</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $count=0;
                                       $res=mysqli_query($link,"select * from exam_category where cid is NULL");
                                        while($row=mysqli_fetch_array($res))
                                        {
                                            $count=$count+1;
                                            ?>
                                            
                                             <tr>
                                                  <?php
                                                    $int = (int)$row['main_category'];
                                                    $res1=mysqli_query($link,"SELECT b.mname FROM exam_category a
                                                        INNER JOIN main_category b ON $int= b.mid");
                                                    $row1=mysqli_fetch_array($res1);
                                                ?>
                                                <th scope="row"><?php echo $count ?></th>
                                                <td><?php echo $row1['mname']; ?></td>
                                                <td><?php echo $row['category']; ?></td>
                                                <td><?php echo $row['exam_time_in_minutes']; ?></td>
                                                <td><a href="edit_exam.php?userid=<?php echo $row['id']; ?>">Edit</a></td>
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

                </div>
                    <!--/.col-->
                    
                </div>
            </div><!-- .animated -->
         </div><!-- .content -->

<?php
    if(isset($_POST["submit1"])){ 
        if($_POST[main_category]=='new_category'){
            $query1="select * from main_category where lower(mname)=trim(lower('$_POST[examcategory]')) ";
            $num=mysqli_query($link,$query1);
            if(mysqli_num_rows($num) > 0){
               echo '
                    <script type="text/javascript">
                        $(document).ready(function(){
                          swal({
                            position: "top-end",
                            type: "warning",
                            text: "Category already exists, please enter new!",
                            icon:"warning",
                            showConfirmButton: true,
                        })
                    });
                    </script>';
            }
            else{
                
                $query2="insert into main_category values(NULL,'$_POST[examcategory]')";
                mysqli_query($link,$query2) or die(mysqli_error($link));
                $query3="insert into exam_category values(NULL,'$_POST[examname]','$_POST[examtime]','$_POST[noq]','https://35.154.101.124/php/test/index.php',NULL,NULL,(select mid from main_category where mname='$_POST[examcategory]'))";
                mysqli_query($link,$query3) or die(mysqli_error($link));
?>
                <script type="text/javascript">
                    window.location.href=window.location.href;
                </script>
<?php
            }
        }
        else{
            $query1="select * from exam_category where lower(category)=trim(lower('$_POST[examname]')) && main_category=(select mid from main_category where mname='$_POST[main_category]') && cid IS NULL";
            $num=mysqli_query($link,$query1);
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
                $query="insert into exam_category values(NULL,'$_POST[examname]','$_POST[examtime]','$_POST[noq]','https://35.154.101.124/php/test/index.php',NULL,NULL,(select mid from main_category where mname='$_POST[main_category]'))";
                mysqli_query($link,$query) or die(mysqli_error($link));
            
?>
            <script type="text/javascript">
                  window.location.href=window.location.href;
            </script>
<?php
         }
        }
    }
?>
        
<script>
    function hide()
    {
        var sel = document.getElementById('main');
        var sv = sel.options[sel.selectedIndex].value;
    
    	if(sv!= 'new_category')
    		document.getElementById("category").style.display = "none";
    	
    	else
    		document.getElementById("category").style.display = "block";
    }   
</script>  
</body>
</html>
<?php
include "footer.php";
?>