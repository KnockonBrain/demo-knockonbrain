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

?>

      

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
                                                         <div class="form-group"><label for="company" class=" form-control-label" >Coding Question</label><textarea type="text" name="qdesc" placeholder="Add Question" class="form-control" required></textarea></div>
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp1</label><textarea  type="text" name="inp1" placeholder="Add Option1" class="form-control" required ></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp2</label><textarea  type="text" name="inp2" placeholder="Add Option2" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp3</label><textarea  type="text" name="inp3" placeholder="Add Option3" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp4</label><textarea  type="text" name="inp4" placeholder="Add Option4" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp5</label><textarea  type="text" name="inp5" placeholder="Add Option5" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp6</label><textarea  type="text" name="inp6" placeholder="Add Option6" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp7</label><textarea  type="text" name="inp7" placeholder="Add Option7" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp8</label><textarea  type="text" name="inp8" placeholder="Add Option8" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp9</label><textarea  type="text" name="inp9" placeholder="Add Option9" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp10</label><textarea  type="text" name="inp10" placeholder="Add Option10" class="form-control" required></textarea></div>   
                                                        
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out1</label><textarea  type="text" name="out1" placeholder="Add Answer" class="form-control" required></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out2</label><textarea  type="text" name="out2" placeholder="Add Answer" class="form-control" required></textarea></div>      
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out3</label><textarea  type="text" name="out3" placeholder="Add Answer" class="form-control" required></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out4</label><textarea  type="text" name="out4" placeholder="Add Answer" class="form-control" required></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out5</label><textarea  type="text" name="out5" placeholder="Add Answer" class="form-control" required></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out6</label><textarea  type="text" name="out6" placeholder="Add Answer" class="form-control" required></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out7</label><textarea  type="text" name="out7" placeholder="Add Answer" class="form-control" required></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out8</label><textarea  type="text" name="out8" placeholder="Add Answer" class="form-control" required></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out9</label><textarea  type="text" name="out9" placeholder="Add Answer" class="form-control" required></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out10</label><textarea  type="text" name="out10" placeholder="Add Answer" class="form-control" required></textarea></div>                  
                                                        
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
                                  <td>Input 1</td>
                                  <td>Input 2</td>
                                  <td>Input 3</td>
                                  <td>Output 1</td>
                                  <td>Output 2</td>
                                  <td>Output 3</td>
                                  <td>Edit</td>
                                  <td>Delete</td>
                                  

                                 </tr>
                                 </thead>
                               

                               <tbody>

                           <?php

                                    $count=0;
                               $res=mysqli_query($link,"select * from code_question order by qid asc")or die(mysqli_error($link));
                                while($row=mysqli_fetch_array($res))
                                        {
                                            $count=$count+1;
                                            ?>
                                            
                                            <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $row['qdesc']; ?></td>
                                            <td><?php echo $row['inp1']; ?></td>
                                            <td><?php echo $row['inp2']; ?></td>
                                            <td><?php echo $row['inp3']; ?></td>
                                            <td><?php echo $row['out1']; ?></td>
                                            <td><?php echo $row['out2']; ?></td>
                                            <td><?php echo $row['out3']; ?></td>
                                            <td><a href="code_edit_options.php?userid=<?php echo $row["qid"]; ?>&id=<?php echo $row["qid"]; ?>">Edit</a></td>
                                            <td><a href="code_delete_options.php?userid=<?php echo $row['qid']; ?>&id=<?php echo $row["qid"]; ?>"  onclick="return confirm('Are you sure?');">Delete</a></td>
                                            
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
              

            $qdesc=mysqli_real_escape_string($link,nl2br($_POST['qdesc']));
            $inp1=mysqli_real_escape_string($link,nl2br($_POST['inp1']));
            $inp2=mysqli_real_escape_string($link,nl2br($_POST['inp2']));
            $inp3=mysqli_real_escape_string($link,nl2br($_POST['inp3']));
            $inp4=mysqli_real_escape_string($link,nl2br($_POST['inp4']));
            $inp5=mysqli_real_escape_string($link,nl2br($_POST['inp5']));
            $inp6=mysqli_real_escape_string($link,nl2br($_POST['inp6']));
            $inp7=mysqli_real_escape_string($link,nl2br($_POST['inp7']));
            $inp8=mysqli_real_escape_string($link,nl2br($_POST['inp8']));
            $inp9=mysqli_real_escape_string($link,nl2br($_POST['inp9']));
            $inp10=mysqli_real_escape_string($link,nl2br($_POST['inp10']));
            $out1=mysqli_real_escape_string($link,$_POST['out1']);
            $out2=mysqli_real_escape_string($link,$_POST['out2']);
            $out3=mysqli_real_escape_string($link,$_POST['out3']);
            $out4=mysqli_real_escape_string($link,$_POST['out4']);
            $out5=mysqli_real_escape_string($link,$_POST['out5']);
            $out6=mysqli_real_escape_string($link,$_POST['out6']);
            $out7=mysqli_real_escape_string($link,$_POST['out7']);
            $out8=mysqli_real_escape_string($link,$_POST['out8']);
            $out9=mysqli_real_escape_string($link,$_POST['out9']);
            $out10=mysqli_real_escape_string($link,$_POST['out10']);
            //$query="insert into questions values(NULL,'$loop','$ques','$o1','$o2','$o3','$o4','$ans','$exam_category','$_POST[level]','$userid')";
            $query = "INSERT INTO code_question(qdesc,inp1,inp2,inp3,inp4,inp5,inp6,inp7,inp8,inp9,inp10,out1,out2,out3,out4,out5,out6,out7,out8,out9,out10) values ('$qdesc' , '$inp1' , '$inp2','$inp3','$inp4','$inp5','$inp6','$inp7','$inp8','$inp9','$inp10','$out1','$out2','$out3','$out4','$out5','$out6','$out7','$out8','$out9','$out10') ";

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