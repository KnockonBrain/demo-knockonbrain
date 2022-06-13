<?php include( 'config.php' ) ?>
<?php
session_start();
$codeid=$_SESSION['codeid'];
$emailcode=$_SESSION['email'];
$attempt=mysqli_query($con,"SELECT count(*) FROM `code_result` WHERE id=$codeid and email='$emailcode'");
$data_attempt = mysqli_fetch_array($attempt);
$ques = array();
$ques[0] = $_SESSION['qid1'];
$ques[1] = $_SESSION['qid2'];

if ( $_SESSION['enable1'] != 0 ){ //If already attempted question
    if($data_attempt[0]<2){
        header('location:index.php?qid=' .$ques[0].'&codeid= '.$codeid. ' ');
        date_default_timezone_set( 'Asia/Kolkata' ); 
        $_SESSION['TIMER'] = time() + 600;
    }
    else//Overall attempts over
    {
        echo '<script type="text/javascript">';
        echo 'alert("Overall attempts over");';
        echo 'window.location.href = "test.php";';
        echo '</script>';
        
    }
} 
else {   //if not attempted
    //header('location:test.php');
    echo '<script type="text/javascript">';
    echo 'alert("Already attempted!");';
    echo 'window.location.href = "test.php";';
    echo '</script>';
}
?>