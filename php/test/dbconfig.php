

<?php
$servername = "localhost" ;
$username = "giitsolu_testphp" ;
$password = "A!i-E_MjibT{";
$database = "giitsolu_testphp";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
