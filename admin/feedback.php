<?php
session_start();
// include("auth.php");
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
$cid=$_SESSION['admin'];

?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Feedback</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <form name="form1" action="" method="post">
                            <div class="card-body">
                                <!-- feedback table -->

                                <div class="card" style="overflow-x: auto;">
                                <div class="card-header">
                                    <strong class="card-title">Candidate's Feedback</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Email-Id</th>
                                                <th scope="col">Test Name</th>
                                                <th scope="col">Rating</th>
                                                <th scope="col">Comments</th>
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
                                                     
                                                    <th scope="row"><?php echo $count ?></th>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['test_name']; ?></td>
                                                    <td><?php echo $row['rating']; ?></td>
                                                    <td><?php echo $row['comment']; ?></td>
                                                
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div> <!-- .card -->
            </form> 
        </div> 
    </div>
            <!--/.col-->
        </div>
    </div><!-- .animated -->
 </div><!-- .content -->


<?php
include "footer.php";
?>