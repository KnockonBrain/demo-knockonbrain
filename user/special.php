<?php
    include 'data.php';
    $stmt1=mysqli_query($con1,"SELECT id FROM `code_result` WHERE id>0 order by id");
    while(($result=mysqli_fetch_array($stmt1))){
        $stmt=mysqli_query($con1,"UPDATE `code_details` set status='Attempted' WHERE id=$result[0]");
    }
                     
?>