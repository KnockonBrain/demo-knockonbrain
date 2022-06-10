<?php
session_start();
unset($_SESSION["ID"]);
unset($_SESSION["user_nicename"]);
header("Location:../register.php");
?>