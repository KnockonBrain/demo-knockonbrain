<?php
session_start();
include "header.php";
include "connection.php";


$userid=$_GET['userid'];
$id=$_GET['id'];


$sql = mysqli_query($link,"SELECT * FROM questions WHERE id='" .$userid. "'");
$question='';
$question_no='';
$opt1='';
$opt2='';
$opt3='';
$opt4='';
$answer='';
$level='';
if ($sql) 
{
    // header("location: add_edit_questions.php?id=$id");
       while($row=mysqli_fetch_array($sql))
    {
        $question=$row["question"]; 
        $question_no=$row["question_no"];
        $opt1=$row["opt1"]; 
        $opt2=$row["opt2"]; 
        $opt3=$row["opt3"]; 
        $opt4=$row["opt4"]; 
        $answer=$row["answer"]; 
        $level=$row["level"]; 

    }
    
        
   

} else {
    echo "Error: " . mysqli_error($link);
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Question</h1>
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
                                                <div class="card-header"><strong>Update questions</strong></div>
                                                    <div class="card-body card-block">
                                                        <div class="form-group"><label for="company" class=" form-control-label">Question</label><input type="text" name="question" placeholder="Add Question" class="form-control" value="<?php  echo $question; ?>"></div>
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt1</label><input type="text" name="opt1" placeholder="Add Option1" class="form-control" value="<?php  echo $opt1; ?>" ></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt2</label><input type="text" name="opt2" placeholder="Add Option2" class="form-control" value="<?php  echo $opt2; ?>"></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt3</label><input type="text" name="opt3" placeholder="Add Option3" class="form-control" value="<?php  echo $opt3; ?>"></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt4</label><input type="text" name="opt4" placeholder="Add Option4" class="form-control" value="<?php  echo $opt4; ?>"></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Answer</label><input type="text" name="answer" placeholder="Add Answer" class="form-control" value="<?php  echo $answer; ?>"></div>                   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Level</label><select name="level" placeholder="Add Level" class="form-control" required>
                                                                                                                                        <option value="Easy">Easy</option>
                                                                                                                                        <option value="Medium">Medium</option>
                                                                                                                                        <option value="Hard">Hard</option>
                                                                                                                                       
                                                                                                                                      </select>
                                                                                                                                      <br><br>
                                                                                                                                      <!--<input type="text" name="level" placeholder="Add Level" class="form-control" required>-->
                                                                                                                                      </div> 
                                                        <div class="form-group">
                                                            <input type="submit" value="Update Question" name="submit1" class="btn btn-success">
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
            </div><!-- .animated -->
        </div><!-- .content -->


        <?php
         if(isset($_POST["submit1"]))

            {    
                $id=$_GET['id'];
                $sql="update questions set question='".$_POST['question']."',opt1='".$_POST['opt1']."',opt2='".$_POST['opt2']."',opt3='".$_POST['opt3']."',opt4='".$_POST['opt4']."',answer='".$_POST['answer']."',level='".$_POST['level']."' WHERE id='" . $_GET["userid"] . "'";
                mysqli_query($link,$sql) or die(mysqli_error($link));
                // if ($link->query($sql) === TRUE) {
                //     header("location: add_edit_questions.php?id=$id");
                // } 
            //  echo '<script>location.href = "add_edit_questions.php?id='.$id.'</script>';



                   ?>
                <script type="text/javascript">
                    // window.location('add_edit_questions.php?id='+"<?php echo $id; ?>");
                    window.location="exam_category.php";
                      
                //    window.location='add_edit_questions.php?id='+"<?php echo $id; ?>";
                </script>
               <?php
                 





            
            }
        ?>
                                
<?php
include "footer.php";
?>