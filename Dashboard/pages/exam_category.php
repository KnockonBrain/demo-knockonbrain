
 <?php
session_start();
//include "header.php";
include "./sidepanel.php";
include "connection.php";

if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
    //window.location="index.php";
    </script>
    <?php
}
$cid=$_SESSION['admin'];
$stmt= mysqli_query($link,"SELECT mname FROM main_category ORDER BY mname");
	$result = mysqli_fetch_array($stmt);
	 
                                        
// 	$typec= $data['type'];
// $stmt = $pdo->prepare("SELECT mname FROM main_category ORDER BY mname");
// // $stmt->execute(['cid' => $cid]); 
// $result = $stmt->FetchAll();
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
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

      
       
  <main class="main-content position-relative border-radius-lg " style="margin-left: 20%; width: 80%;">
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
        <!--<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>--->
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4" style="margin-left:24px">
            <div class="card-header pb-0">
                <div class="card-header">
                    <strong>Add Exam Categories</strong>
                    <?php
                     $res=mysqli_query($link,"SELECT mname FROM main_category ORDER BY mname");
//                                             while($row=mysqli_fetch_array($res)){
                                                
// 	     echo $row[0]."pti";
// 	 }
                                               
                                            ?>
                </div>
                <form name="form1" action="" method="post">  
                <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
            <label for="company" class=" form-control-label">Select Exam Category</label>
        <select class="form-control text" name="main_category" placeholder="Select Category" id="main" size="1" required  onChange="hide()"><br>
        <option value="">Select Category</option>
                                            <?php
                                             while($row=mysqli_fetch_array($res)){
	                                           
	                                            echo "<option value=".$row[0]."> ".$row[0]." </option>";
	                                           }
                                                // foreach($result as $tname){
                                                //     // echo "<option value=".$tname['mname']."> ".$tname['mname']." </option>";
                                                //     echo "<option value=".$tname."> ".$tname." </option>";
                                                // }
                                            ?>
                                        <option value="new_category">New Category</option>
                                    </select>
                                
                                
                                <div class="form-group">
                                    <div  id="category" style="display:none;">
                                        <label for="company" class=" form-control-label">New Exam Category</label>
                                        <input type="text" name="examcategory" placeholder="Add Exam Category" class="form-control" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="company" class="form-control-label">New Exam Name</label>
                                    <input type="text" name="examname" placeholder="Add Exam Name" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">No. of Questions</label>
                                    <select class="form-control" name="noq" placeholder="Select no. of questions">
                                        <option value="10">10 Questions</option>
                                        <option value="20">20 Questions</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Exam Time In Minutes</label>
                                    <select class="form-control" name="examtime" placeholder="Select Time">
                                        <option value="10">10 Minutes</option>
                                        <option value="20">20 Minutes</option>
                                        <option value="30">30 Minutes</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" value="Add Exam" name="submit1" class="btn btn-success">
                                 </div>
            
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Exam Category</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Exam Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Exam Time</th>
                      <th class="text-secondary opacity-7">Edit</th>
                      <th class="text-secondary opacity-7">Delete</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                                $count=0;
                               $res=mysqli_query($link,"select * from exam_category where cid is NULL");
                                while($row=mysqli_fetch_array($res))
                                {
                                    $count=$count+1;
                                    ?>
                                    
                                     <tr>
                                          <?php
                                            $int = (int)$row['main_category'];
                                            $res1=mysqli_query($link,"SELECT b.mname FROM exam_category a
                                                INNER JOIN main_category b ON $int= b.mid");
                                            $row1=mysqli_fetch_array($res1);
                                        ?>
                                        <th scope="row"><?php echo $count ?></th>
                                        <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row1['mname']; ?></span></td>
                                        <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['category']; ?></span></td>
                                        <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $row['exam_time_in_minutes']; ?></span></td>
                                        <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><a href="edit_exam.php?userid=<?php echo $row['id']; ?>">Edit</a></span></td>
                                        <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><a href="delete.php?userid=<?php echo $row["id"]; ?>"  onclick="return confirm('Are you sure?');" >Delete</a>
                                        </span></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                                 

                    </div>
                    </div>
                    </div>
                    </div>

                                    
            </div><!-- .animated -->
         </div><!-- .content -->
         </form>
</div>
          
 <?php
         if(isset($_POST["submit1"]))
            {   
                //  echo '<script>alert("duplicate")</script>';
                echo '<script> document.write("Duplicate exam category or exam name cannot be added"); </script>';
            if($_POST['main_category']=='new_category'){
                // echo '<script>document.write("chota bhai")</script>';
            $query1="select * from main_category where lower(mname)=trim(lower('$_POST[examcategory]')) ";
            $num=mysqli_query($link,$query1);
            if(mysqli_num_rows($num) > 0){
                echo '<script type="text/javascript>alert("duplicate")</script>';
                    //   echo '
                    //     <script type="text/javascript">
                    //         $(document).ready(function(){
                    //           swal({
                    //             position: "top-end",
                    //             type: "warning",
                    //             text: "Test name already exists in this category! Please enter new.",
                    //             icon:"warning",
                    //             showConfirmButton: true,
                    //             })
                    //         });
                    //     </script>';

            }
            else{
                
                $query2="insert into main_category values(NULL,'$_POST[examcategory]')";
                mysqli_query($link,$query2) or die(mysqli_error($link));
                // $temp="select mid from main_category where mname='$_POST[examcategory]";
                $query3="insert into exam_category values(NULL,'$_POST[examname]','$_POST[examtime]','$_POST[noq]','https://phptest.avianglobes.com/php/test/index.php',NULL,NULL,(select mid from main_category where mname='$_POST[examcategory]'),NULL)";
                // $query3="INSERT INTO `exam_category` (`category`, `exam_time_in_minutes`, `noq`, `link`, `username`, `cid`, `main_category`, `tab_id`) VALUES (NULL, 'others', '10', '20', '', 'palak', '56', '3', '1')";
    
                $result = mysqli_query($link,$query3);

                if ($result) {
                    echo "New record created successfully";
                } else {
                    echo "Error: ";
                }
?>
                <script type="text/javascript">
                    window.location.href=window.location.href;
                </script>
<?php
            }
        }
        else{

            $query1="select * from exam_category where lower(category)=trim(lower('$_POST[examname]')) && main_category=(select mid from main_category where mname='$_POST[main_category]') && cid IS NULL";
            $num=mysqli_query($link,$query1);
            if(mysqli_num_rows($num) > 0){
            
                // window.alert("Test name already exists in this category! Please enter new.");
              echo '
                    <script type="text/javascript">
                   
                            $(document).ready(function(){
                              swal({
                                position: "top-end",
                                type: "warning",
                                text: "Test name already exists in this category! Please enter new.",
                                icon:"warning",
                                showConfirmButton: true,
                               
                            })
                        });

                    </script>';
            }
            else{
                echo '<script>document.write("bada bhai");</script>';
                $query="insert into exam_category values(NULL,'$_POST[examname]','$_POST[examtime]','$_POST[noq]','https://phptest.avianglobes.com/php/test/index.php',NULL,NULL,(select mid from main_category where mname='$_POST[main_category]'),NULL)";
                mysqli_query($link,$query) or die(mysqli_error($link));
            
?>
            <script type="text/javascript">
                  window.location.href=window.location.href;
            </script>
<?php
         }
        }
            
            }
        else{

        }
?>
        
<script>
    function hide()
    {
        var sel = document.getElementById('main');
        var sv = sel.options[sel.selectedIndex].value;
    
    	if(sv!= 'new_category')
    		document.getElementById("category").style.display = "none";
    	
    	else
    		document.getElementById("category").style.display = "block";
    }   
</script>  
</tbody>
</table>  
    
 <!--- <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <!--<hr class="horizontal dark my-1">-->
      <!--<div class="card-body pt-sm-3 pt-0 overflow-auto">-->
        <!-- Sidebar Backgrounds -->
        <!---<div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <!--<div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <!--<div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      -->
  <!--   Core JS Files   -->
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  </main>
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