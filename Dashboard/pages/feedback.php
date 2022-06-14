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
</head>

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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row" style="margin-left:1%;">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Feedback Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="table">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder">#</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder ps-2">Email_Id</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder">Test Name</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder">Rating</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder">Comments</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                       <?php
                                            $count=0;
                                           $res=mysqli_query($link,"select * from feedback order by id desc");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                $count=$count+1;
                                                ?>
                                                
                                                 <tr>
                                                     
                                                    <th class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $count ?></th>
                                                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['email']; ?></span></td>
                                                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['test_name']; ?></span></td>
                                                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['rating']; ?></span></td>
                                                    <td style="white-space:normal"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['comment']; ?></span></td>
                                                
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <script>
      $(document).ready(function() {
    $('#table').DataTable( {
        "pagingType": "numbers"
    } );
} );
    </script>
                    
                        
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.1"></script>
</body>

</html>