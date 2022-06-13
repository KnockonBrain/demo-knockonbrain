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
                                                        <div class="form-group"><label for="company" class=" form-control-label">Question</label><textarea name="question" placeholder="Add Question" class="form-control" ><?php  echo $question; ?></textarea></div>
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt1</label><textarea name="opt1" placeholder="Add Option1" class="form-control"  ><?php  echo $opt1; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt2</label><textarea name="opt2" placeholder="Add Option2" class="form-control" ><?php  echo $opt2; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt3</label><textarea name="opt3" placeholder="Add Option3" class="form-control" ><?php  echo $opt3; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Opt4</label><textarea name="opt4" placeholder="Add Option4" class="form-control" ><?php  echo $opt4; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Answer</label><textarea name="answer" placeholder="Add Answer" class="form-control" ><?php  echo $answer; ?></textarea></div>                   
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
              $ques=mysqli_real_escape_string($link,$_POST['question']);
                $o1=mysqli_real_escape_string($link,$_POST['opt1']);
                $o2=mysqli_real_escape_string($link,$_POST['opt2']);
                $o3=mysqli_real_escape_string($link,$_POST['opt3']);
                $o4=mysqli_real_escape_string($link,$_POST['opt4']);
                $ans=mysqli_real_escape_string($link,$_POST['answer']);
                
                $sql="update questions set question='".$ques."',opt1='".$o1."',opt2='".$o2."',opt3='".$o3."',opt4='".$o4."',answer='".$ans."',level='".$_POST['level']."' WHERE id='" . $_GET["userid"] . "'";
                mysqli_query($link,$sql) or die(mysqli_error($link));
                // if ($link->query($sql) === TRUE) {
                //     header("location: add_edit_questions.php?id=$id");
                // } 
            //  echo '<script>location.href = "add_edit_questions.php?id='.$id.'</script>';



                   ?>
                <script type="text/javascript">
                    // window.location('add_edit_questions.php?id='+"<?php echo $id; ?>");
                    window.location="add_edit_exam_category.php";
                      
                //    window.location='add_edit_questions.php?id='+"<?php echo $id; ?>";
                </script>
               <?php
                 





            
            }
        ?>
                                
<?php
include "footer.php";
?>