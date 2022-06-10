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


$sql = mysqli_query($link,"SELECT * FROM code_question WHERE qid='" .$userid. "'");
$qdesc='';
$inp1='';
$inp2='';
$inp3='';
$out1='';
$out2='';
$out3='';
if ($sql) 
{
    // header("location: add_edit_questions.php?id=$id");
       while($row=mysqli_fetch_array($sql))
    {
        $qdesc=$row["qdesc"]; 
        $inp1=$row["inp1"];
        $inp2=$row["inp2"]; 
        $inp3=$row["inp3"]; 
        $inp4=$row["inp4"]; 
        $inp5=$row["inp5"]; 
        $inp6=$row["inp6"]; 
        $inp7=$row["inp7"]; 
        $inp8=$row["inp8"]; 
        $inp9=$row["inp9"];
        $inp10=$row["inp10"];
        $out1=$row["out1"]; 
        $out2=$row["out2"]; 
        $out3=$row["out3"];
        $out4=$row["out4"];
        $out5=$row["out5"];
        $out6=$row["out6"];
        $out7=$row["out7"];
        $out8=$row["out8"];
        $out9=$row["out9"];
        $out10=$row["out10"];

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
                                                <div class="card-header"><strong>Update Coding questions</strong></div>
                                                    <div class="card-body card-block">
                                                         <div class="form-group"><label for="company" class=" form-control-label">Question</label><textarea name="qdesc" placeholder="Add Question" class="form-control" ><?php  echo $qdesc; ?></textarea></div>
                                                        <!--<div class="form-group"><label for="company" class=" form-control-label" >Coding Question</label><textarea type="text" name="qdesc"  class="form-control" required><?php  echo $qdesc; ?></textarea></div> -->
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp1</label><textarea  type="text" name="inp1"  class="form-control" required ><?php  echo $inp1; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp2</label><textarea  type="text" name="inp2"  class="form-control" required><?php  echo $inp2; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp3</label><textarea  type="text" name="inp3"  class="form-control" required><?php  echo $inp3; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp4</label><textarea  type="text" name="inp4"  class="form-control" required><?php  echo $inp4; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp5</label><textarea  type="text" name="inp5"  class="form-control" required><?php  echo $inp5; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp6</label><textarea  type="text" name="inp6"  class="form-control" required><?php  echo $inp6; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp7</label><textarea  type="text" name="inp7"  class="form-control" required><?php  echo $inp7; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp8</label><textarea  type="text" name="inp8"  class="form-control" required><?php  echo $inp8; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp9</label><textarea  type="text" name="inp9"  class="form-control" required><?php  echo $inp9; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add inp10</label><textarea  type="text" name="inp10"  class="form-control" required><?php  echo $inp10; ?></textarea></div>   
                                                        
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out1</label><textarea  type="text" name="out1"  class="form-control" required><?php  echo $out1; ?></textarea></div>   
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out2</label><textarea  type="text" name="out2" class="form-control" required><?php  echo $out2; ?></textarea></div>      
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out3</label><textarea  type="text" name="out3" class="form-control" required><?php  echo $out3; ?></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out4</label><textarea  type="text" name="out4" class="form-control" required><?php  echo $out4; ?></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out5</label><textarea  type="text" name="out5" class="form-control" required><?php  echo $out5; ?></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out6</label><textarea  type="text" name="out6" class="form-control" required><?php  echo $out6; ?></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out7</label><textarea  type="text" name="out7" class="form-control" required><?php  echo $out7; ?></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out8</label><textarea  type="text" name="out8" class="form-control" required><?php  echo $out8; ?></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out9</label><textarea  type="text" name="out9" class="form-control" required><?php  echo $out9; ?></textarea></div>                  
                                                        <div class="form-group"><label for="company" class=" form-control-label">Add Out10</label><textarea  type="text" name="out10" class="form-control" required><?php  echo $out10; ?></textarea></div>                  
                                                        
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
                $sql="update code_question set qdesc='".$qdesc."',inp1='".$inp1."',inp2='".$inp2."',inp3='".$inp3."',inp4='".$inp4."',inp5='".$inp5."',inp6='".$inp6."',inp7='".$inp7."',inp8='".$inp8."',inp9='".$inp9."',inp10='".$inp10."',out1='".$out1."',out2='".$out2."',out3='".$out3."',out4='".$out4."',out5='".$out5."',out6='".$out6."',out7='".$out7."',out8='".$out8."',out9='".$out9."',out10='".$out10."' WHERE qid='" . $_GET["userid"] . "'";
                mysqli_query($link,$sql) or die(mysqli_error($link));
                // if ($link->query($sql) === TRUE) {
                //     header("location: add_edit_questions.php?id=$id");
                // } 
            //  echo '<script>location.href = "add_edit_questions.php?id='.$id.'</script>';



                   ?>
                <script type="text/javascript">
                    // window.location('add_edit_questions.php?id='+"<?php echo $id; ?>");
                    window.location="add_edit_coding_questions.php";
                      
                //    window.location='add_edit_questions.php?id='+"<?php echo $id; ?>";
                </script>
               <?php
                 





            
            }
        ?>
                                
<?php
include "footer.php";
?>