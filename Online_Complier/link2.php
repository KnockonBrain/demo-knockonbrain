<?php
session_start();
$ques = array();
$ques[0] = $_SESSION['qid1'];
$ques[1] = $_SESSION['qid2'];
if ( $_SESSION['enable2'] != 0 ){   //If already attempted question
    header('location:index.php?qid=' .$ques[1]. ' ');
} 
else {   //if not attempted
    header('location:test.php');
}
?>