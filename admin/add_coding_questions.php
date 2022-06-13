<?php


session_start();
include "header.php";
//initializing variables
$username = "";
$email = "";
$errors = array();


//connect to db

$db = mysqli_connect('localhost','giitsolu_testphp','A!i-E_MjibT{','giitsolu_testphp') or die("could not connect to database");

//register users

if(isset($_POST['sub'])){

    $qdesc = mysqli_real_escape_string($db,$_POST['qdesc']);
    $inp1 = mysqli_real_escape_string($db,$_POST['inp1']);
    $inp2 = mysqli_real_escape_string($db,$_POST['inp2']);
    $inp3 = mysqli_real_escape_string($db,$_POST['inp3']);
    $out1 = mysqli_real_escape_string($db,$_POST['out1']);
    $out2 = mysqli_real_escape_string($db,$_POST['out2']);
    $out3 = mysqli_real_escape_string($db,$_POST['out3']);

    $query = "INSERT INTO code_question(qdesc,inp1,inp2,inp3,out1,out2,out3) values ('$qdesc' , '$inp1' , '$inp2','$inp3','$out1','$out2','$out3') ";
    mysqli_query($db,$query);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Questions</title>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<div class="container">
  <form action="add_coding_questions.php" method="POST">

    <label for="fname">Question Description</label>
    <input type="text" id="qdesc" name="qdesc" placeholder="enter question description">

    <label for="lname">Input 1</label>
    <input type="text" id="inp1" name="inp1" placeholder="input 1">
    <label for="lname">Input 2</label>
    <input type="text" id="inp2" name="inp2" placeholder="input 2">
    <label for="lname">Input 3</label>
    <input type="text" id="inp3" name="inp3" placeholder="input 3">

    <label for="lname">Input 4</label>
    <input type="text" id="inp4" name="inp4" placeholder="input 4">
    <label for="lname">Input 5</label>
    <input type="text" id="inp5" name="inp5" placeholder="input 5">
    
    
    <label for="lname">Output 1</label>
    <input type="text" id="out1" name="out1" placeholder="output 1">
    <label for="lname">Output 2</label>
    <input type="text" id="out2" name="out2" placeholder="output 2">
    <label for="lname">Output 3</label>
    <input type="text" id="out3" name="out3" placeholder="output 3">

    <label for="lname">Output 4</label>
    <input type="text" id="out4" name="out4" placeholder="output 4">
    <label for="lname">Output 5</label>
    <input type="text" id="out5" name="out5" placeholder="output 5">

    <input type="submit" value="Submit" name="sub">

  </form>
</div>
</body>
</html>