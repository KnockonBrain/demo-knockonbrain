
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
      $amount="6000";
      $payment_status="completed";
      date_default_timezone_set("Asia/Kolkata");// set time_zone according to your location
      $date=date('y-m-d h:i:s');
     
     $end_date1= mysqli_query($con,"SELECT exp_date FROM users WHERE ID=$cid");
	$end_date2 = mysqli_fetch_array($end_date1);
	$end_date=$end_date2[0];
    $end_date= date('Y-m-d h:i:s', strtotime($end_date. ' + 12 months')); 

    //   $end_date = new DateTime('now');
    //   $end_date->modify('+12 month'); // or you can use '-90 day' for deduct
    //   $end_date = $end_date->format('Y-m-d h:i:s');
    //   echo $end_date;
      $plan="Yearly";
      mysqli_query($con,"insert into trial(cid,amount,payment_status,payment_id,date,end_date,plan) values('$cid','$amount','$payment_status','$payment_id','$date','$end_date','$plan')");
  
      mysqli_query($con,"UPDATE users SET type = 'subscribed',exp_date='$end_date' WHERE ID = $cid ");
      ?>
      
      <?php
  }
  

?>