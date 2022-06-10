<?php
$dbhost = 'localhost';
$dbname = 'giitsolu_testphp';
$dbusername = 'giitsolu_testphp';
$dbpassword = 'A!i-E_MjibT{';

$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
$con1 = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
?>