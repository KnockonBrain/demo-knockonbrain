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
    
?>
05/04/2022 17:50:36<br>
Date and Time of Attempt:
			<?php
			
			 $DatenTime=mysqli_query($con,"SELECT * FROM results WHERE result_id=4502");
               $data_attempt1 = mysqli_fetch_array($DatenTime); 
                $data = mysqli_fetch_array($DatenTime);
                $actualdate=$data_attempt1['Start_time'];
                echo $actualdate."<br>";
                echo (substr($actualdate,1,2))."-";
                $month=(substr($actualdate,3,2));
                if($month=="01")
                    echo "January";
                else if($month=="02")
                    echo "February";
                else if($month=="03")
                    echo "March";
                else if($month=="04")
                    echo "April";
                else if($month=="05")
                    echo "May";
                else if($month=="06")
                    echo "June";
                else if($month=="07")
                    echo "July";
                else if($month=="08")
                    echo "August";
                else if($month=="09")
                    echo "September";
                else if($month=="10")
                    echo "October";
                else if($month=="11")
                    echo "November";
                else if($month=="12")
                    echo "December";
                echo "-".(substr($actualdate,6,4))." ";
                $hour= (int)substr($actualdate,11,2);
                $min=substr($actualdate,14,2);
                
                if ($hour > 12){
                    $hour = $hour - 12;
                    $stamp="PM";
                    if($hour<10){
                        echo "0".$hour.":".$min." ".$stamp;
                    }
                    else
                        echo $hour.":".$min." ".$stamp;
                }
                else if ($hour == 00){
                    $hour = 12;
                    $stamp="AM";
                    echo $hour.":".$min." ".$stamp;
                }
                else if ($hour == 12) {
                    $hour = 12;
                    $stamp="PM";
                    echo $hour.":".$min." ".$stamp;
                }
                else {
                    $stamp="AM";
                    if($hour<10){
                        echo "0".$hour.":".$min." ".$stamp;
                    }
                    else
                        echo $hour.":".$min." ".$stamp;
                }
             
			?>
			<br><br>
    
<!--// $query = "SELECT user_registered FROM users WHERE 1";-->
<!--// $data = mysqli_query($con,$query);-->
<!--// $total = mysqli_num_rows($data);-->

<!--//                     if($total!=0){-->

<!--//                     while(($result=mysqli_fetch_assoc($data))){-->
<!--//                         $futureDate=date('$result', strtotime('+1 year'));-->
<!--//                         echo $futureDate;-->
<!--//                         $query2="UPDATE table_name-->
<!--//                                     SET exp_date = $result-->
<!--//                                     WHERE user_registered='$result';";-->
<!--//                     }-->
<!--//                 }-->
