   <?php
     session_start();
    

    $dbhost = 'localhost';
    $dbname = "giitsolu_testphp";
    $dbusername = "giitsolu_testphp";
    $dbpassword = "A!i-E_MjibT{";
    
    $con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
                
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    } 
?>
     
<?php


  if(isset($_POST['payment_id'])){
      $payment_id=$_POST['payment_id'];
      $cid=$_SESSION['ID'];
    $email=$_SESSION['user_nicename'];
      $amount="1000";
      $payment_status="completed";
      date_default_timezone_set("Asia/Kolkata");// set time_zone according to your location
      $date=date('y-m-d h:i:s');
       
       $stmt=mysqli_query($con,"SELECT * FROM users WHERE ID=$cid");
       $data = mysqli_fetch_array($stmt);
       $end_date=$data['exp_date'];
       
      $plan="add-on2";
      mysqli_query($con,"insert into trial(cid,amount,payment_status,payment_id,date,end_date,plan) values('$cid','$amount','$payment_status','$payment_id','$date','$end_date','$plan')");
  
      mysqli_query($con,"UPDATE users SET type = 'add-on2' WHERE ID = $cid ");
   
  }
  

?>