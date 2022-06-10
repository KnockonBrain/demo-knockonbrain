<?php include( 'config.php' ) ?> 
<?php
session_start();

date_default_timezone_set("Asia/Kolkata");
    $curDate =date("Y-m-d H:i");
    $result_id=$_GET['id'];
    $emailcode=$_GET['m1'];
    $query = "Select * from code_details where id='$result_id' ";
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($res);
    $attempt=mysqli_query($con,"SELECT count(*) FROM `code_result` WHERE id=$result_id and email='$emailcode'");
    $data_attempt = mysqli_fetch_array($attempt);
if($row['exp_date'] >= $curDate || $_GET['id']==""){ 
    if($data_attempt[0]<1){
        if ( isset( $_GET['start'] ) ) { //When start button is pressed
            header( 'location:test.php' );
            date_default_timezone_set( 'Asia/Kolkata' ); 
            $_SESSION['TIMER'] = time() + 1200; //Allocating Time as 20 min (60*40)
            $_SESSION['start_time'] = date( 'Y-m-d H:i:s' );
        }
        if ( empty( $_SESSION['cid'] ) )
          $_SESSION['cid'] = $_GET['cid']; //Assigning client ID
        if ( empty( $_SESSION['email'] ) )
          $_SESSION['email'] = $_GET['m1']; //Assigning candidate email ID
        if ( empty( $_SESSION['main-lang'] ) )
          $_SESSION['main-lang'] = $_GET['lang']; //Assigning default lang given by client
            if ( empty( $_SESSION['can_namecode'] ) )     //name
          $_SESSION['can_namecode'] = $_GET['can_namecode']; 
          if ( empty( $_SESSION['idcode'] ) )       //id
          $_SESSION['idcode'] = $_GET['id'];
        $_SESSION['count'] = 0;
        $_SESSION['lg1'] = '';
        $_SESSION['lg2'] = '';
        $_SESSION['fn1'] = '';
        $_SESSION['fn2'] = '';
        $sql = 'select qid from code_question ORDER BY RAND() LIMIT 2'; //Selection 2 questions randomly
        $ques = array();
        $result = $con->query( $sql );
        if ( $result->num_rows > 0 ) {
            while( $row = $result->fetch_assoc() ) {
                array_push( $ques, $row['qid'] );
            }
        }
        $con->close();
        $_SESSION['qid1'] = $ques[0]; 
        $_SESSION['qid2'] = $ques[1];
        $_SESSION['code1'] = $ques[0];
        $_SESSION['code2'] = $ques[1];
        $_SESSION['enable1'] = 1;  
        $_SESSION['enable2'] = 1;
    }
    else
    {
        header( 'location:https://phptest.avianglobes.com/attemptsover.php' );
    }
} 
else{
    header( 'location:https://phptest.avianglobes.com/testexpire.php' );
}
?>

