<?php
session_start();
// include("auth.php");
//include "header.php";
include "./sidepanel.php";
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
    <link rel=" icon" type="image/png" href="../images/favicon-logo2.png"/>
     <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="images/fevicon.jpg"/>
   
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
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
  $.post("resultd.php", { string: string,field_userid: field_userid}, function(data) {
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
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
    
    <main class="main-content position-relative border-radius-lg " style=" margin-left: 20%; width: 80%;">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
        </nav>
      
      </div>
    </nav>
    <div class="container-fluid py-4">
      <div class="row" style="margin-left:2%">
        <div class="col-12">
          <div class="card mb-4"> 
            <div class="card-header pb-0">
                    <div class="card-header pb-0">
                    <h6>Test Request</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                    <!--<form action="" method="GET">-->
                    <!--<label class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">From</label>-->
                    <!--<input type="date" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" name="from" id="from" value="NULL"/>-->
                    <!--<label class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">To</label>-->
                    <!--<input type="date" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" name="to" id="to" value="NULL"/>-->
                    <!--<button type="submit" name="filter"class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Filter</button>-->
                    <!--</form>-->
                    <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0" id="table">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center text-secondary text-xs font-weight-bolder">CID</th>
                                <th class="text-uppercase text-center text-secondary text-xs font-weight-bolder">TEST NAME</th>
                                <th class="text-uppercase text-center text-secondary text-xs font-weight-bolder">JOB DESCRIPTION</th>
                            </tr>
                        </thead>
                   
                     <tbody>
                         <?php
                                $query="SELECT * FROM test_request";
                                $test=mysqli_query($link,$query);
                                if(mysqli_num_rows($test)>0){
                                  foreach($test as $row){
                         ?>
                        <tr>
                         <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['cid'];?></td>
                         <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['testname'];?></td>
                         <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['jobdesc'];?></td>
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
                    </div>
                    </div>
                    </div>
    <script>
      $(document).ready(function() {
    $('#table').DataTable( {
        "pagingType": "numbers"
    } );
} );
    </script>

</script>
     <script>
        $(document).ready(function(){
    $(".check").on('change',function(){
                var action = 'data';
                var test = $('#test').val();
                // alert(test);
                 $.ajax({
                 url:'filt.php',
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

    
</body>

</html>