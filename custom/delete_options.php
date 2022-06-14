<?php
session_start();
include "connection.php";

$userid=$_GET['userid'];
$id=$_GET['id'];
$sql = "DELETE FROM questions WHERE id='" .$id. "'";
if (mysqli_query($link, $sql)) {
    // echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
// mysqli_close($link);
?> 

<script type="text/javascript">
                    //   alert("exam added successfuly");
                    
                     window.location='newadd.php?userid='+"<?php echo $userid;?>";
                    
                    
 </script>