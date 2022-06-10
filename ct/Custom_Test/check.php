<?php
session_start();
echo $_SESSION['main-lang'];
echo $_SESSION['codingtest'];
echo $_SESSION['mcqtest'];
if($_SESSION['coding_test']==0)
    $ct="block";
else
    $ct="none";
if($_SESSION['mcq_test']==1)
    $mt="block";
else
    $mt="none";
?>