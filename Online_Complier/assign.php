<?php include( 'config.php' ) ?> 
<?php
session_start();
if ( isset( $_GET['start'] ) ) { //When start button is pressed
    header( 'location:test.php' );
    date_default_timezone_set( 'Asia/Kolkata' ); 
    $_SESSION['TIMER'] = time() + 2400; //Allocating Time as 40 min (60*40)
    $_SESSION['start_time'] = date( 'Y-m-d H:i:s' );
}
if ( empty( $_SESSION['cid'] ) )
  $_SESSION['cid'] = $_GET['cid']; //Assigning client ID
if ( empty( $_SESSION['email'] ) )
  $_SESSION['email'] = $_GET['m1']; //Assigning candidate email ID
if ( empty( $_SESSION['main-lang'] ) )
  $_SESSION['main-lang'] = $_GET['lang']; //Assigning default lang given by client
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
?>

