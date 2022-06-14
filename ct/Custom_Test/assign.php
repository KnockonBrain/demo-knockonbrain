<?php include( 'config.php' ) ?> 
<?php
session_start();

date_default_timezone_set("Asia/Kolkata");

// if ( isset( $_GET['start'] ) ) { //When start button is pressed
    header( 'location:test.php' );
    //date_default_timezone_set( 'Asia/Kolkata' ); 
   // $_SESSION['TIMER'] = time() + 2400; //Allocating Time as 40 min (60*40)
    $_SESSION['start_time'] = date( 'Y-m-d H:i:s' );
    $_SESSION['codeid']=$_GET['codeid'];
// }
if ( empty( $_SESSION['cid'] ) )
  $_SESSION['cid'] = $_GET['cid']; //Assigning client ID
if ( empty( $_SESSION['exp'] ) )
  $_SESSION['exp'] = $_GET['exp']; //Assigning expiry date
if ( empty( $_SESSION['email'] ) )
  $_SESSION['email'] = $_GET['m1']; //Assigning candidate email ID
if(isset($_GET['lang'])){
    //echo "hiii";
$_SESSION['codingtest']=1;
//echo $_SESSION['codingtest'];
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
}

if(isset($_GET['tid'])){
    $tid=$_GET['tid'];
    //echo $tid;
     $_SESSION['mcqid']=$_GET['mcqid'];
    $_SESSION['mcqtest']=$_GET['tid'];
    $n=sizeof($_GET['tid']);
    for($i=0;$i<$n;$i=$i+1){
        
        $t=$tid[$i];
        $getname='name'.$t;
        $_SESSION[$getname] = 1;
        //echo "Hello";
        //echo $getname;
    }
}
if(isset($_GET['type'])){
    $_SESSION['psychoid']=$_GET['psychoid'];
    $_SESSION['psychotest']=$_GET['type'];
    $_SESSION['nameMBTI']=1;
    $_SESSION['nameOCEAN']=1;
}

//echo $_SESSION['codingtest'];

?>

