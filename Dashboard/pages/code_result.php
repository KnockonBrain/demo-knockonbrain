<?php
session_start();
//include "header.php";
include "./sidepanel.php";
include "connection.php";

if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
    window.location="index.php";
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">

 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/jpg" href="images/fevicon.jpg"/>
   
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.1" rel="stylesheet" />
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
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <main class="main-content position-relative border-radius-lg " style=" margin-left: 20%; width: 80%;">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
        </nav>
        <!---<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div></div>--->
          </div></nav></main>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4" style="margin-left:23%">
            <div class="card-header pb-0">
              <h6>Code Results Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="card-body px-0 pt-0 pb-2" style="margin-left:8px">
                    <form action="" method="GET">
                    <label class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">From</label>
                    <input type="date" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" name="from" id="from" value="NULL"/>
                    <label class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">To</label>
                    <input type="date" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" name="to" id="to" value="NULL"/>
                    <button type="submit" name="filter"class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Filter</button>
                    </form>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="table">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RESULT ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">EMAIL</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LANGUAGE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SCORE(%)</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">VIDEO REC</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">AI ACCURACY</th>
                      
                      
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
                                    	                <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['cid'];?></span></td>
                                    				    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['rid'];?></span></td>
                                    				    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['email'];?></span></td>
                                    				    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['lg1'];?></span></td>
                                    				    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['res_per']?></span></td>
                                    				    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['video_link1'];?></span></td>
                                    				    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['video_link2'];?></span></td>
                                    				    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['AI_ACCURACY'];?></span></td>
                                    				    
                                    				    
                                    				    
                                    			    </tr>
                                    	          <?php
                                    	      }
                                    	      echo "Count: $counter";
                                    	  }
                    	                  else{
                             
                                                $res=mysqli_query($link,"select cid, rid,email,lg1,res_per,video_link1,video_link2,AI_ACCURACY from code_result order by start_time DESC");
                          
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    $val=$row['AI_accuracy'];
                                                ?>
                                                <tr>
                                                     <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['cid'];?></span></td>
                                                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['rid']; ?></span></td>
                                                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['email']; ?></span></td>
                                                     <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['lg1']; ?></span></td>
                                                     <?php
                                                     $scor=intval($row['res_per']);
                                                     
                                                     ?>
                                                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $scor; ?></span></td>
                                                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><a href="<?php if($row['video_link1']=="https://test.avianglobes.com/Online%20Complier/upload/") {echo "https://phptest.avianglobes.com/CLient/failure.php";} else {echo $row['video_link1']; }?>">Video link1</a><br><a href="<?php if($row['video_link2']=="https://test.avianglobes.com/Online%20Complier/upload/"){echo "https://phptest.avianglobes.com/CLient/failure.php";} else {echo $row['video_link2'];} ?>">Video link2</a></span></td>
                                                    <!--<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><a href="<?php echo $row['video_link1']; ?>">Video Link</a></span></td> -->
                                                    
                                                   
                                                   
                                                    <td class="align-middle text-center" id="<?php echo $row['rid']; ?>" contenteditable="true"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['AI_ACCURACY']; ?></span></td>
                                                         
                                                 
                                                   
                                                  
                                                 
                                                </tr> 
                                               <?php
                                                }
                                        	   }
                                             } 
                                         else{
                                            
                                            $res=mysqli_query($link,"select cid, rid,email,lg1,res_per,video_link1,video_link2,AI_ACCURACY from code_result order by start_time DESC");
                                          
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                $val=$row['AI_accuracy'];
                                            ?>
                                            <tr>
                                                <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['cid'];?></span></td>
                                                <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['rid']; ?></span></td>
                                                <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['email']; ?></span></td>
                                                 <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['lg1']; ?></span></td>
                                                 <?php
                                                 $scor=intval($row['res_per']);
                                                 
                                                 ?>
                                                <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $scor; ?></span></td>
                                                <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><a href="<?php if($row['video_link1']=="https://test.avianglobes.com/Online%20Complier/upload/") {echo "https://phptest.avianglobes.com/CLient/failure.php";} else {echo $row['video_link1']; }?>">Video link1</a><br><a href="<?php if($row['video_link2']=="https://test.avianglobes.com/Online%20Complier/upload/"){echo "https://phptest.avianglobes.com/CLient/failure.php";} else {echo $row['video_link2'];} ?>">Video link2</a></span></td>
                                                <!--<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><a href="<?php echo $row['video_link1']; ?>">Video Link</a></span></td> -->
                                                
                                               
                                               
                                                <td class="align-middle text-center" id="<?php echo $row['rid']; ?>" contenteditable="true"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['AI_ACCURACY']; ?></span></td>
                                            </tr> 
                                            <?php
                                            }
                                         }
                                         
                                           ?>
                     
                                </tbody>
                            </table>
                     
                       
    </div>
    </div>
  </main>
     <script>
      $(document).ready(function() {
    $('#table').DataTable( {
        "pagingType": "numbers"
    } );
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
   
</body>

</html>