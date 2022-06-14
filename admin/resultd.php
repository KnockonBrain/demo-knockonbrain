<?php
include"connection.php"; 
$string  = $_POST['string']; 
$field_userid  = $_POST['field_userid']; 
$string = strtoupper($string);
// echo "$string=$field_user_id";
if ($string==''){
 echo "<p class='btn btn-info' align='center'>Please Insert field</p>";
}else{
 $sql = "UPDATE results SET AI_accuracy='$string' WHERE result_id = '$field_userid' ";
 if ($link->query($sql) == TRUE) {
  echo "Record updated successfully";
 } else {
  echo "Error updating record: " . $link->error;
 }  
} 
?>