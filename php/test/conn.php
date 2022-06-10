<?php require 'dbconfig.php';

date_default_timezone_set('Asia/Kolkata');
$TIME =date("G:i:s A");
$DATE= date("d/m/Y");
// echo 'TIME '.$TIME.',DATE '.$DATE;
$Start_time = $DATE." ".$TIME;
$score = isset($_POST['score'])?$_POST['score']:'';
//$Start_time = isset($_POST['Start_time'])?$_POST['Start_time']:'';
$scoreper = isset($_POST['scoreper'])?$_POST['scoreper']:'';
$quiz_id = isset($_POST['quiz_id'])?$_POST['quiz_id']:'';
$id = isset($_POST['id'])?$_POST['id']:'';
$can_name = isset($_POST['can_name'])?$_POST['can_name']:'';
$client_id = isset($_POST['client_id'])?$_POST['client_id']:'';
$email = isset($_POST['email'])?$_POST['email']:'';
$quiz_name = isset($_POST['quiz_name'])?$_POST['quiz_name']:'';
$fileName = isset($_POST['fileName'])?$_POST['fileName']:'';
$durmin=isset($_POST['durmin'])?$_POST['durmin']:'';
$dursec=isset($_POST['dursec'])?$_POST['dursec']:'';
$quespri = isset($_POST['quespri'])?$_POST['quespri']:'';
$anspri = isset($_POST['anspri'])?$_POST['anspri']:'';

$quesstr= serialize( $quespri );
$ansstr= serialize( $anspri );
$sql = "INSERT INTO `results` (`quiz_id`,`cid`,`can_name`,`durmin`,`dursec`,`quiz_name`,`correct_score`,`Email`,`scoreper`,`Start_time`,`video_link`,`id`,`ques`,`answer`) 
        VALUES ('$quiz_id','$client_id','$can_name','$durmin','$dursec','$quiz_name','$score','$email','$scoreper','$Start_time','https://35.154.101.124/php/test/upload/$fileName','$id','$quesstr','$ansstr')";

$result = mysqli_query($conn,$sql);

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$status="Attempted";
if($id!=0){
    
$sql2 = "UPDATE details
SET STATUS ='$status'
WHERE id=$id";
$result2 = mysqli_query($conn,$sql2);
}
$condition = mysqli_query($conn,"SELECT count(*) FROM CL_CANS WHERE cid=$client_id and Email='$email'");
$data = mysqli_fetch_array($condition);
$count= $data[0];

if($count==0){
    $sqlnew= "INSERT INTO `CL_CANS` (`cid`,`can_name`,`Email`) VALUES ('$client_id','$can_name','$email')";
    $resultnew = mysqli_query($conn,$sqlnew);
    
    if ($resultnew)
        echo "New record created successfully";
    else
        echo "Error: " . $sqlnew . "<br>" . $conn->error;
}

$conn->close();
?>