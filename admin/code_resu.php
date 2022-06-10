<?php
session_start();
// include("auth.php");
//include "header.php";
include "connection.php";
// session_start();
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
     window.location="index.php";
    </script>
    <?php
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/jpg" href="images/fevicon.jpg"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<script>
$(function(){
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function(){
        var field_userid = $(this).attr("id");
        var value = $(this).text();
  var string = value;
  $.post("code_resultd.php", { string: string,field_userid: field_userid}, function(data) {
           if(data != '')
     {
   message_status.show();
   message_status.text(data);
   //hide the message
   setTimeout(function(){message_status.hide()},1000);
     }
        });
    });
});
</script>

    <title>Project</title>
</head>

<body>
    
                            <!--<script>-->
                            <!--    $(document).ready(function()-->
                            <!--        {-->
                            <!--            $('#nav-toggle').click( function(e) -->
                            <!--            {-->
                            <!--                e.preventDefault();-->
                            <!--                e.stopPropagation(); -->
                            <!--                $('#toggle-item').toggle();-->
                            <!--            });-->
                            <!--            $('#toggle-item').click( function(e) -->
                            <!--            {-->
                            <!--                e.stopPropagation(); -->
                            <!--            });-->
                            <!--            $('body').click( function() -->
                            <!--            {-->
                            <!--                $('#toggle-item').hide();-->
                            <!--            });-->
                            <!--        });   -->
                            <!--</script>-->
        <!--<section class="head">-->
            <h2 align=center> Result of Applicants </h2>
        <!--</section>-->
                            
    <div class="container mt-4">
    
            
            <div class=" table1">
                <div class="col-sm my-3 px-2  pt-2">
            
        </div>
                <div class="table-responsive px-2 pt-2" id="con">
                <form action="" method="GET">
                <label>From</label>
                <input type="date" name="from" id="from" value"NULL"/>
                <label>To</label>
                <input type="date" name="to" id="to" value="NULL"/>
                <button type="submit" name="filter">Filter</button>
                </form><br>
                    <table class="table table-striped table-responsive-lg table-bordered" id="myTable" style="border: 1px;">
                        <thead>
                            <tr>
                                <th scope="col">RESULT ID</th>
                                  <th scope="col">EMAIL</th>
                                   <th scope="col">LANGUAGE</th>
                                <th scope="col">SCORE (%)</th>
                                <th scope="col">VIDEO REC</th>
                                <th scope="col">AI ACCURACY</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                              <?php
                              if(isset($_GET['from']) && isset($_GET['to'])) {
                                $from_date=$_GET['from'];
                                $to_date=$_GET['to'];
                                $query="SELECT * FROM code_result WHERE End_time BETWEEN '$from_date' AND '$to_date'";
                                $query_run=mysqli_query($link,$query);
                                $counter=0;$count=0;
                                if(mysqli_num_rows($query_run)>0){
                                foreach($query_run as $row){
                                    	          ?>
                                    	            <tr>
                                    	                <?php  ++$counter;?>
                                    				    <td><?php echo $row['rid'];?></td>
                                    				    <td><?php echo $row['email'];?></td>
                                    				    <td><?php echo $row['lg1'];?></td>
                                    				    <td><?php echo $row['res_per']?></td>
                                    				    <td><?php echo $row['video_link1'];?></td>
                                    				    <td><?php echo $row['video_link2'];?></td>
                                    				    <td><?php echo $row['AI_ACCURACY'];?></td>
                                    				    
                                    				    
                                    				    
                                    			    </tr>
                                    	          <?php
                                    	      }
                                    	      echo "Count: $counter";
                                    	  }
                    	                  else{
                             
                                                $res=mysqli_query($link,"select rid,email,lg1,res_per,video_link1,video_link2,AI_ACCURACY from code_result order by start_time DESC");
                          
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    $val=$row['AI_accuracy'];
                                                ?>
                                                <tr>
                                                   
                                                    <td><?php echo $row['rid']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                     <td><?php echo $row['lg1']; ?></td>
                                                     <?php
                                                     $scor=intval($row['res_per']);
                                                     
                                                     ?>
                                                    <td><?php echo $scor; ?></td>
                                                    <td><a href="<?php if($row['video_link1']=="https://test.avianglobes.com/Online%20Complier/upload/") {echo "https://phptest.avianglobes.com/CLient/failure.php";} else {echo $row['video_link1']; }?>">Video link1</a><br><a href="<?php if($row['video_link2']=="https://test.avianglobes.com/Online%20Complier/upload/"){echo "https://phptest.avianglobes.com/CLient/failure.php";} else {echo $row['video_link2'];} ?>">Video link2</a></td>
                                                    <!--<td><a href="<?php echo $row['video_link1']; ?>">Video Link</a></td> -->
                                                    
                                                   
                                                   
                                                    <td id="<?php echo $row['rid']; ?>" contenteditable="true"><?php echo $row['AI_ACCURACY']; ?></td>
                                                         
                                                 
                                                   
                                                  
                                                 
                                                </tr> 
                                               <?php
                                                }
                                        	   }
                                             } 
                                         else{
                                            
                                            $res=mysqli_query($link,"select rid,email,lg1,res_per,video_link1,video_link2,AI_ACCURACY from code_result order by start_time DESC");
                                          
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                $val=$row['AI_accuracy'];
                                            ?>
                                            <tr>
                                               
                                                <td><?php echo $row['rid']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                 <td><?php echo $row['lg1']; ?></td>
                                                 <?php
                                                 $scor=intval($row['res_per']);
                                                 
                                                 ?>
                                                <td><?php echo $scor; ?></td>
                                                <td><a href="<?php if($row['video_link1']=="https://test.avianglobes.com/Online%20Complier/upload/") {echo "https://phptest.avianglobes.com/CLient/failure.php";} else {echo $row['video_link1']; }?>">Video link1</a><br><a href="<?php if($row['video_link2']=="https://test.avianglobes.com/Online%20Complier/upload/"){echo "https://phptest.avianglobes.com/CLient/failure.php";} else {echo $row['video_link2'];} ?>">Video link2</a></td>
                                                <!--<td><a href="<?php echo $row['video_link1']; ?>">Video Link</a></td> -->
                                                
                                               
                                               
                                                <td id="<?php echo $row['rid']; ?>" contenteditable="true"><?php echo $row['AI_ACCURACY']; ?></td>
                                            </tr> 
                                            <?php
                                            }
                                         }
                                         ?>
                              </tbody>
                           </table>
                        </div>
                    </div>
               </div>
    
        
        
    <script>
        $(document).ready(function() {
    $('#myTable').DataTable();
} );
    </script>
    
     <script>
        $(document).ready(function(){
    $(".check").on('change',function(){
                var action = 'data';
                var test = $('#test').val();
                // alert(test);
                 $.ajax({
                 url:'code_filt.php',
                 method:'POST',
                 data:"action="+action+"&request="+test,
                 success:function(response){
                     $("#con").html(response);
                     $("#myTable").DataTable({
                        "destroy":true, 
                     });
                 }
                 });
          });
});

    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <br><br>
</body>

</html>