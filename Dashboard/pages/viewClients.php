<?php
session_start();
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

$cid=$_GET['userid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    KnockOnBrain-admin
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
  
  <style>
      #sidenav-main{
          display: inline !important;
      }
      
  </style>
</head>
<body class="g-sidenav-show   bg-gray-100">
<div class="container-fluid py-4">
    <p class="text-sm mb-0 text-uppercase font-weight-bold">MCQ</p>
    <main class="main-content position-relative border-radius-lg" style=" margin-left:24%; width:100%;">
        <h4 style="margin-top: -20px; margin-bottom: 20px">Test Conducted</h4>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">MCQ</p>
                    <h5 class="font-weight-bolder">
                       <?php
                            $query=mysqli_query($link,"SELECT count(*) from results where cid=$cid");
                            $data = mysqli_fetch_array($query);
                            echo $data[0];
                        ?>
                    </h5>
                    <!--<p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+55%</span>
                      since yesterday
                    </p>-->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Coding</p>
                    <h5 class="font-weight-bolder">
                       <?php
                            $query=mysqli_query($link,"SELECT count(*) from code_result where cid=$cid");
                            $data = mysqli_fetch_array($query);
                            echo $data[0];
                        ?>
                    </h5>
                    <!---<p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                      since last week
                    </p>--->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Personality</p>
                    <h5 class="font-weight-bolder">
                       <?php
                            $query=mysqli_query($link,"SELECT count(*) from mbti_result where cid=$cid");
                            $data = mysqli_fetch_array($query);
                            echo $data[0];
                        ?>
                    </h5>
                    <!---<p class="mb-0">
                      <span class="text-danger text-sm font-weight-bolder">-2%</span>
                      since last quarter
                    </p>--->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h4 style="margin-top:30px; margin-bottom: 30px">Invitation Sent</h4>
      </main>
</div>
<div class="container-fluid py-4" style="margin-top: -50px">
    <main class="main-content position-relative border-radius-lg" style=" margin-left:24%; width: 100%;">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">MCQ </p>
                    <h5 class="font-weight-bolder">
                       <?php
                            $query=mysqli_query($link,"SELECT count(*) from details where cid=$cid");
                            $data = mysqli_fetch_array($query);
                            echo $data[0];
                        ?>
                    </h5>
                    <!--<p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+55%</span>
                      since yesterday
                    </p>--->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Coding</p>
                    <h5 class="font-weight-bolder">
                      <?php
                            $query=mysqli_query($link,"SELECT count(*) from code_details where cid=$cid");
                            $data = mysqli_fetch_array($query);
                            echo $data[0];
                        ?>
                    </h5>
                    <!---<p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                      since last week
                    </p>---->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Personality</p>
                    <h5 class="font-weight-bolder">
                       <?php
                            $query=mysqli_query($link,"SELECT count(*) from psycho_details where cid=$cid");
                            $data = mysqli_fetch_array($query);
                            echo $data[0];
                        ?>
                    </h5>
                    <!--<p class="mb-0">
                      <span class="text-danger text-sm font-weight-bolder">-2%</span>
                      since last quarter
                    </p>--->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

</div>
<h4 style="margin-left:25%">Total Candidates Assessed</h4>
<div class="container-fluid py-4">
     <main class="main-content position-relative border-radius-lg" style=" margin-left:24%; width: 100%;">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Candidates</p>
                    <h5 class="font-weight-bolder">
                        <?php
                            $query=mysqli_query($link,"SELECT count(*) from CL_CANS where cid=$cid");
                            $data = mysqli_fetch_array($query);
                            echo $data[0];
                        ?>
                    </h5>
                    <!--<p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                      since last week
                    </p>--->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </main>
</div>
</body><!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <!--<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>-->
  <!--<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>-->
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

 