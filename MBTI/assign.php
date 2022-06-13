<?php 
include( 'config.php' );
?> 
<?php
session_start();
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobile()){
    echo "<script>location.href='mobilerror.php';</script>";
}if ( empty( $_SESSION['cid'] ) )
  $_SESSION['cid'] = $_GET['cid'];
  //Assigning client ID
if ( empty( $_SESSION['email'] )) 
  $_SESSION['email'] = $_GET['m1'];
  if ( empty( $_SESSION['id'] )) 
  $_SESSION['id'] = $_GET['id'];
if ( empty( $_SESSION['flag'] )) 
  $_SESSION['flag'] = $_GET['f'];
  
$qu = array(
'cid' => $_SESSION['cid'], 
'id' => $_SESSION['id'],
'm1' => $_SESSION['email']
);
    $id101=$qu['id'];
    $email101=$qu['m1'];
  $attempt=mysqli_query($con,"SELECT count(*) FROM `mbti_result` WHERE ID101=$id101 and email='$email101'");
    $data_attempt = mysqli_fetch_array($attempt);
   

date_default_timezone_set("Asia/Kolkata");
    $curDate =date("Y-m-d H:i");
    $result_id=$_GET['id'];
    $query = "Select * from psycho_details where id='$result_id' ";
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($res);

// echo $qu;
if($row['exp_date'] >= $curDate || $_GET['id']==""){    
      if($data_attempt[0]<1){
        
        if($qu['m1']=="")
        {
          $da=http_build_query($qu);
            header("Location:newemail.php?$da");
        }  
        else{
        if ( isset( $_GET['start'] ) ) { //When start button is pressed
       
        $priname=$_GET['can_name'];
        header( "location:question.php? can_name=".$priname );
            date_default_timezone_set( 'Asia/Kolkata' ); 
            $_SESSION['TIMER'] = time() + 1800; //Allocating Time as 40 min (60*40) 
            $_SESSION['start_time'] = date( 'Y-m-d H:i:s' );
        }
        }
      }
        else{
        header( 'location:https://35.154.101.124/attemptsover.php' );
        }
    }
else{

   header( 'location:https://35.154.101.124/expirytest.php' );

}
?>
