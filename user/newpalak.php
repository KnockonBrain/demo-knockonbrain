<?php
    session_start();
    $cid=$_SESSION['ID'];

    $dbhost = 'localhost';
    $dbname = "giitsolu_testphp";
    $dbusername = "giitsolu_testphp";
    $dbpassword = "A!i-E_MjibT{";
    
    $con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
                
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
$TestName = mysqli_query($con,"SELECT user_registered FROM users;");
		

	        while($data = mysqli_fetch_array($TestName)){
	            $date1=$data[0];
	            echo $date1;
	            $futureDate=date('Y-m-d h:i:s', strtotime('+1 year', strtotime($date1)) );
                echo $futureDate."<br>";
                $sql = "UPDATE users SET exp_date = '$futureDate' WHERE user_registered='$date1'";

                if ($con->query($sql) === TRUE) {
                  echo "Record updated successfully";
                } else {
                  echo "Error updating record: " . $con->error;
                }
	        }
	$con->close();
?>