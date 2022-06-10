 <?php
 session_start();
include "connection.php";
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
     window.location="index.php";
    </script>
    <?php
}
$sql = "DELETE FROM exam_category WHERE id='" . $_GET["userid"] . "'";
if (mysqli_query($link, $sql)) {
    // echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
// mysqli_close($link);
?> 

<script type="text/javascript">
                    //   alert("exam added successfuly");
                      window.location="exam_category.php";
 </script>