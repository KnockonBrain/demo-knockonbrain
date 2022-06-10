<?php 
session_start();

$cid=$_SESSION['ID'];

    if(isset($_GET['filter'])){
        $filter = trim($_GET['filter']);
        if(!empty($_GET['filter'])){
             define('DB_SERVER', 'localhost');
          define('DB_USERNAME', 'giitsolu_testphp');
          define('DB_PASSWORD', 'A!i-E_MjibT{');
          define('DB_DATABASE', 'giitsolu_testphp');
          $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    

           //   $con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
          if($filter === "all"){
                $stmnt = $con->prepare('select Email,quiz_name,Start_time,video_link,scoreper,AI_accuracy from results where cid=? order by result_id DESC');
                 $stmnt->bind_param('i',$cid);
            }else {
               $stmnt = $con->prepare('select Email, quiz_name,Start_time,video_link,scoreper,AI_accuracy from results where cid=? and quiz_id=? order by result_id DESC');
                $stmnt->bind_param('ii',$cid,$filter);
              //$stmnt = $con->prepare('select Email,quiz_name,Start_time,video_link,scoreper,AI_accuracy from results where cid=? order by result_id DESC');
              //   $stmnt->bind_param('i',$cid);
            }
            $stmnt->execute();
            $stmnt->store_result();
            $stmnt->bind_result($email,$quiz_name,$Start_time,$video_link,$scoreper,$AI_accuracy);
            $final = array();
            while($stmnt->fetch()){
                $each = array(
                    'email'=>$email,
                    'quiz_name'=>$quiz_name,
                    'Start_time'=>$Start_time,
                    'video_link'=>$video_link,
                    'scoreper'=>$scoreper,
                    'AI_accuracy'=>$AI_accuracy,
                );
                array_push($final,$each);
            };
            echo json_encode($final);
            $stmnt->close();
            $con->close();
        };
    };
?>