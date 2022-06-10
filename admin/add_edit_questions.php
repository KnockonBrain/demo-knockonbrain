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
$userid='';
$userid=$_GET['userid'];
$exam_category='';
// $id='';

$sql = mysqli_query($link,"SELECT * FROM exam_category WHERE id='" .$userid. "'");

if ($sql) 
{
       while($row=mysqli_fetch_array($sql))
    {
        $exam_category=$row["category"]; 
        $exam_time=$row["exam_time_in_minutes"];
        $id=$row["id"];
    }

} else {
    echo "Error: " . mysqli_error($link);
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-6">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Questions Inside <?php echo $exam_category   ?> Test</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                       
                        <div class="card-body">
                                <!-- Credit Card -->
                            <div class="col-lg-8">
                                <form action=""name="form1" method="post">
                                         <div class="card">
                                                <div class="card-header"><strong>Add new questions</strong></div>
                                                    <div class="card-body card-block">
                                                         <div class="form-group"><label for="company" class=" form-control-label" >Question</label><textarea  name="question" placeholder="Add Question" class="form-control" required></textarea></div>
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt1</label><textarea  type="text" name="opt1" placeholder="Add Option1" class="form-control" required ></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt2</label><textarea  type="text" name="opt2" placeholder="Add Option2" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt3</label><textarea  type="text" name="opt3" placeholder="Add Option3" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt4</label><textarea  type="text" name="opt4" placeholder="Add Option4" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Answer</label><textarea  type="text" name="answer" placeholder="Add Answer" class="form-control" required></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Level</label><select name="level" placeholder="Add Level" class="form-control" required>
                                                       
                                                        
                                                                                                                                        <option value="Easy">Easy</option>
                                                                                                                                        <option value="Medium">Medium</option>
                                                                                                                                        <option value="Hard">Hard</option>
                                                                                                                                       
                                                                                                                                      </select>
                                                                                                                                      <br><br>
                                                                                                                                      <!--<input type="text" name="level" placeholder="Add Level" class="form-control" required>-->
                                                                                                                                      </div>                                                                 <div class="form-group">
                                                            <input type="submit" value="Add Question" name="submit1" class="btn btn-success">
                                                        </div>   
                                                    </div>
                                                </div>
                                        </div>
                                </form>
                            </div>
                        </div> <!-- .card -->
                    </div>
                    <!--/.col-->
                </div>


                    <div class="row">
                    <div class="col-lg-12">
                    <div class="card">
                            <div class="card-body">

                               <table class="table table-bordered">
                               <thead>
                                 <tr>
                                  <td>No.</td>
                                  <td>Questions</td>
                                  <td>Option 1</td>
                                  <td>Option 2</td>
                                  <td>Option 3</td>
                                  <td>Option 4</td>
                                  <td>Answer</td>
                                  <td>Level</td>
                                  <td>Edit</td>
                                  <td>Delete</td>
                                  

                                 </tr>
                                 </thead>
                               

                               <tbody>

                           <?php

                                    $count=0;
                               $res=mysqli_query($link,"select * from questions where quiz_id= '$id' order by question_no asc")or die(mysqli_error($link));
                                while($row=mysqli_fetch_array($res))
                                        {
                                            $count=$count+1;
                                            ?>
                                            
                                            <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $row['question']; ?></td>
                                            <td><?php echo $row['opt1']; ?></td>
                                            <td><?php echo $row['opt2']; ?></td>
                                            <td><?php echo $row['opt3']; ?></td>
                                            <td><?php echo $row['opt4']; ?></td>
                                            <td><?php echo $row['answer']; ?></td>
                                            <td><?php echo $row['level']; ?></td>
                                            <td><a href="edit_options.php?userid=<?php echo $row["id"]; ?>&id=<?php echo $row["id"]; ?>">Edit</a></td>
                                            <td><a href="delete_options.php?userid=<?php echo $row['id']; ?>&id=<?php echo $row["id"]; ?>"  onclick="return confirm('Are you sure?');">Delete</a></td>
                                            
                                             </tr>


                                             <?php
                                        }



                           ?>
                            </tbody>
                                </table>
                                

                    </div>
                    </div>
                    </div>
                    </div>

                                    
            </div><!-- .animated -->
         </div><!-- .content -->
                                


 <?php
         if(isset($_POST["submit1"]))
            {   
               $loop=0;
               $count=0;
               $res=mysqli_query($link,"select * from questions where quiz_id= '$id' order by id asc")or die(mysqli_error($link));

            

            
               $count=mysqli_fetch_row($res);
               if($count==0)
               {

               }
              else
               {
                    while($row=mysqli_fetch_array($res))
                    {
                        $loop=$loop+1;
                        mysqli_query($link,"update questions set question_no='$loop' where id=$row[id]");




                     }
                } 

            $loop=$loop+1;
            $ques=mysqli_real_escape_string($link,$_POST['question']);
            $o1=mysqli_real_escape_string($link,$_POST['opt1']);
            $o2=mysqli_real_escape_string($link,$_POST['opt2']);
            $o3=mysqli_real_escape_string($link,$_POST['opt3']);
            $o4=mysqli_real_escape_string($link,$_POST['opt4']);
            $ans=mysqli_real_escape_string($link,$_POST['answer']);
            $query="insert into questions values(NULL,'$loop','$ques','$o1','$o2','$o3','$o4','$ans','$exam_category','$_POST[level]','$userid')";
            

            mysqli_query($link,$query) or die(mysqli_error($link));

            ?>
            <script type="text/javascript">
                //  alert("Question Added successfully");
                  window.location.href=window.location.href;
            </script>
           <?php
            
            }
?>

<?php
include "footer.php";
?>