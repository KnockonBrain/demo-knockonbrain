
<?php
include '../config.php';
session_start();
$errors = array();
//to change password
if(isset($_POST['change'])) {
    $current = md5($_POST['current']);  
    $newPass = md5($_POST['newPass']);
    $newPassconfirm = md5($_POST['newPassconfirm']);;
    $cid=$_SESSION['ID'];
    if(empty($current)){
        array_push($errors,"Please enter your current password");//add error to errors array
    }
    if(empty($newPass)){
        array_push($errors,"New Password is required");
    }
    if ($newPass != $newPassconfirm) {
        array_push($errors, "Passwords donot match!! Enter again");
    }
    
    
    if(count($errors)==0){
        $query= "SELECT * FROM `users` WHERE `ID` = '$cid'";
        $result = mysqli_query($db,$query);
        $pass = mysqli_fetch_assoc($result);
        if($current == $pass['user_password']){
            //array_push($errors,"Incorrect password");
            $query2= "UPDATE `users` set  `user_password`='$newPass' Where `ID`='$cid'";
            $result = mysqli_query($db,$query2);
            echo '<script language="javascript">';
            echo 'alert("Password Changed Successfully")';
            echo '</script>';
        }
        else{
            array_push($errors,"Incorrect password");
        }
    }
}


//to change email
if(isset($_POST['EmailChange'])) {
    $currentEmail = mysqli_real_escape_string($db,$_POST['current_email']);  
    $newEmail = mysqli_real_escape_string($db,$_POST['new_email']);
    $cid=$_SESSION['ID'];
    if(empty($currentEmail)){
        array_push($errors,"Please enter your current email");//add error to errors array
    }
    if(empty($newEmail)){
        array_push($errors,"Please enter your new email");
    }
    if(count($errors)==0){
        $query= "SELECT * FROM `users` WHERE `ID` = '$cid'";
        $result = mysqli_query($db,$query);
        $email = mysqli_fetch_assoc($result);
        if($currentEmail == $email['user_email']){
            $query2= "UPDATE `users` set  `user_email`='$newEmail' Where `ID`='$cid'";
            $result = mysqli_query($db,$query2);
            echo '<script language="javascript">';
            echo 'alert("Email Changed Successfully")';
            echo '</script>';
        }
        else{
        array_push($errors,"Incorrect Email");
    }
    }
    
}
?>