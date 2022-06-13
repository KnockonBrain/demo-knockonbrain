
<?php
$servername ="localhost";
   $username = "giitsolu_testphp";
   $password = "A!i-E_MjibT{";
   $dbname= "giitsolu_testphp";


// Create connection
$link = mysqli_connect($servername, $username, $password ,$dbname);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
//  echo "Connected successfully";
?>