<?php
$server="localhost";
$username="giitsolu_testphp";
$password="A!i-E_MjibT{";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection failed due to ".mysqli_connect_error());
    }
mysqli_select_db($con,'giitsolu_testphp');
?>