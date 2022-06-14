<?php

require_once("CLient/config.php");
session_start();
$cid=$_SESSION['ID'];


 if(isset($_POST['action'])){
     $brand = $_POST['request'];
    //  $output=$brand;
      if($brand != 'all'){
        $sql = "select * from results where cid='$cid' and quiz_id=$brand  order by Start_time DESC";
      }
      else{
          $sql = "select * from results where cid='$cid' order by Start_time DESC ";
      }
        $result = $db->query($sql);
        $output='';
          $scor=intval($row['scoreper']);
        echo'<table class="table table-striped table-responsive-lg table-bordered" id="myTable" style="border: 1px;">
                        <thead>
                            <tr>
                                <th scope="col">EMAIL</th>
                                <th scope="col">SCORE (%)</th>
                                <th scope="col">TEST NAME</th>
                                <th scope="col">TIME & DATE</th>
                                <th scope="col">VIDEO REC</th>
                                 <th scope="col">AI ACCURACY</th>
                            </tr>
                        </thead>';
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $acc="";
                // if($row['AI_accuracy']==''){
                //       $acc="Record not generated";
                //   }
                  
                     $acc=$row['AI_accuracy'];
                  
                 $output .='
                 <tr>
                    <td>'.$row['Email'].'</td>
                  
                               
                                 
                        <td>'.$scor.' </td>     
                  
                    <td>'.$row['quiz_name'].'</td>
                    <td>'.$row['Start_time'].'</td>
                    <td><a href='.$row['video_link'].'>Video Link</a></td>
                   <td>'.$acc.'</td>
                    
                   
                 </tr>';
                  
            }
        }
    
    echo $output;
 }
 
 ?>
 <html>
     <script type="text/javascript">
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
 </html>
 