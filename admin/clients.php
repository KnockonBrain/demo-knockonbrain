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
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Clients</strong>
                            </div>
                            <div class="card-body">
                                 <form action="" method="GET">
                                <label>From</label>
                                <input type="date" name="from" id="from" value="NULL"/>
                                <label>To</label>
                                <input type="date" name="to" id="to" value="NULL"/>
                                <button type="submit" name="filter">Filter</button>
                                </form>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                           
                                            <th scope="col">Email</th>
                                             <th scope="col">Phone-Number</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if(isset($_GET['from']) && isset($_GET['to'])) {
                                    	    $from_date=$_GET['from'];
                                    	    $to_date=$_GET['to'];
                                    	    $query="SELECT * FROM users WHERE user_registered BETWEEN '$from_date' AND '$to_date'";
                                    	    $query_run=mysqli_query($link,$query);
                                    	    $counter=0;$count=0;
                                    	    if(mysqli_num_rows($query_run)>0){
                                    	      foreach($query_run as $row){
                                    	          ?>
                                    	            <tr>
                                    	                <td><?php echo ++$counter;?></td>
                                    				    <td><?php echo $row['user_email'];?></td>
                                    				    <td><?php echo $row['Phone'];?></td>
                                    				    <td><?php echo $row['user_password'];?></td>
                                    				    <td><a href="edit_clients.php?userid=<?php echo $row["ID"]; ?>">Edit</a></td>
                                                    <td><a href="delete_clients.php?userid=<?php echo $row["ID"]; ?>"onclick="return confirm('Are you sure?');" >Delete</a></td>
                                    				    
                                    			    </tr>
                                    	          <?php
                                    	      }
                                    	      echo "Count: $counter";
                                    	  }
                    	                  else{
                    	                        $count=0;
                                                $res=mysqli_query($link,"select * from users order by user_registered DESC");
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    $count=$count+1;
                                                    ?>
                                                    <tr>
                                                    <th scope="row"><?php echo $count ?></th>
                                                    <td><?php echo $row['user_email']; ?></td>
                                                    <?php 
                                                    $phn=$row['Phone'];
                                                    if($phn==NULL)
                                                    {
                                                    ?>
                                                    <td><?php echo "NULL"; ?></td>
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                    <td><?php echo $phn; ?></td>
                                                    <?php
                                                    }
                                                    ?>
                                                    <td><?php $pass= $row['user_password'];  $pass1=md5($pass);
                                                    echo $pass; ?></td>
                                                    <td><a href="edit_clients.php?userid=<?php echo $row["ID"]; ?>">Edit</a></td>
                                                    <td><a href="delete_clients.php?userid=<?php echo $row["ID"]; ?>"onclick="return confirm('Are you sure?');" >Delete</a>
                                                    </td>
                                                    </tr>
                                                    <?php
                                                    }
                    	                        }
                                            }else{
	                                    $count=0;
                                        $res=mysqli_query($link,"select * from users order by user_registered DESC");
                                        while($row=mysqli_fetch_array($res))
                                        {
                                            $count=$count+1;
                                            ?>
                                            <tr>
                                            <th scope="row"><?php echo $count ?></th>
                                            <td><?php echo $row['user_email']; ?></td>
                                            <?php 
                                            $phn=$row['Phone'];
                                            if($phn==NULL)
                                            {
                                            ?>
                                            <td><?php echo "NULL"; ?></td>
                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                            <td><?php echo $phn; ?></td>
                                            <?php
                                            }
                                            ?>
                                            <td><?php $pass= $row['user_password'];  $pass1=md5($pass);
                                                            echo $pass; ?></td>
                                            <td><a href="edit_clients.php?userid=<?php echo $row["ID"]; ?>">Edit</a></td>
                                            <td><a href="delete_clients.php?userid=<?php echo $row["ID"]; ?>"onclick="return confirm('Are you sure?');" >Delete</a>
                                            </td>
                                
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
            </div><!-- .animated -->
        </div><!-- .content -->


        <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
                                
<?php
include "footer.php";
?>