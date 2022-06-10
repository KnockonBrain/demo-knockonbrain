<?php
include "data.php"; 
$string  = $_POST['string']; 
$field_userid  = $_POST['field_userid']; 
//$string = strtoupper($string);
// echo "$string=$field_user_id";
if ($string==''){
 echo "<p class='btn btn-info' align='center'>Please Insert field</p>";
}else{
 $sql = "UPDATE users SET company='$string' WHERE ID = '$field_userid' ";
 if ($pdo->query($sql) == TRUE) {
  echo "Record updated successfully";
 } else {
  echo "Error updating record: " . $pdo->error;
 }  
} 
?>