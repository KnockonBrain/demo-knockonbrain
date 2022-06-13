<?php 
    session_start();
	require 'DBConnect.php';
    // include 'data.php';
    
        $cid=$_SESSION['ID'];
        // echo $cid;
    $mid=$_POST['aid'];
	if(isset($_POST['aid'])) {
	    
		$db = new DbConnect;
		$conn = $db->connect();
		$Emailone = mysqli_query($conn,"SELECT username FROM exam_category WHERE cid=$cid and main_category='$mid'");
	    $data = mysqli_fetch_array($Emailone);
	    $varRE= $data[0];
        $stmt = $conn->prepare("SELECT * FROM exam_category WHERE (cid = '$cid' or cid is NULL) and main_category='$mid' ORDER BY category");
        $stmtone = $conn->prepare("SELECT * FROM users WHERE user_email='$varRE'");
		$stmt->execute();
		$stmtone->execute();
		$booksone=$stmtone->fetchAll(PDO::FETCH_ASSOC);
		$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
		json_encode($booksone);
		echo json_encode($books);
	}

	function loadAuthors() {
        $cid=$_SESSION['ID'];
	   $db = new DbConnect;
		$conn = $db->connect();
        $jq =$conn->prepare("SELECT * From  main_category ORDER BY mname");
        $jq->execute() ;
        $authors = $jq->fetchAll(PDO::FETCH_ASSOC);
        return $authors;
	}

 ?>