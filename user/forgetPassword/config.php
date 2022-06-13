<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'giitsolu_testphp');
   define('DB_PASSWORD', 'A!i-E_MjibT{');
   define('DB_DATABASE', 'giitsolu_testphp');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if($conn->connect_error)
    {
        echo"Please check your connection".mysql_error();
    }  
?>