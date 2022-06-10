<?php
session_start();
// include("auth.php");
include "header.php";
include "connection.php";

if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
     window.location="index.php";
    </script>
    <?php
}
$cid=$_SESSION['admin'];

?>
<?php
$condition = mysqli_query($link,"SELECT Distinct category, id FROM `exam_category` WHERE cid is null order by category");
$count=0;
     while($data = mysqli_fetch_array($condition)){
	            $qnames[$data['category']]=$data['id'];
	            $count++;
	        }
	        
	       // foreach($qnames as $x => $x_value) {
        //       echo "category=" . $x . ", id=" . $x_value;
        //       echo "<br>";
        //     }
        //     foreach($qnames as $x => $x_value) {
        //       echo "category=" . $x;
        //       echo "<br>";
        //     }
        //     echo "count= ".$count;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Result</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style>
    input[type="submit"] {
      margin-bottom: 20px;
    }
    .mb-3{
        float: right;
    }
    .select-block {
      width: 300px;

      position: relative;
    }
    select {
      width: 100%;
      height: 50px;
      font-size: 100%;
      font-weight: bold;
      cursor: pointer;
      border-radius: 0;
      background-color: #1A33FF;
      border: none;
      border: 2px solid #1A33FF;
      border-radius: 4px;
      color: white;
      appearance: none;
      padding: 8px 38px 10px 18px;
      -webkit-appearance: none;
      -moz-appearance: none;
      transition: color 0.3s ease, background-color 0.3s ease, border-bottom-color 0.3s ease;
    }
    /* For IE <= 11 */
    select::-ms-expand {
      display: none;
    }
    .selectIcon {
      top: 7px;
      right: 15px;
      width: 30px;
      height: 36px;
      padding-left: 5px;
      pointer-events: none;
      position: absolute;
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    .selectIcon svg.icon {
      transition: fill 0.3s ease;
      fill: white;
    }
    select:hover,
    select:focus {
      color: #000000;
      background-color: white;
    }
    select:hover~.selectIcon,
    select:focus~.selectIcon {
      background-color: white;
    }
    select:hover~.selectIcon svg.icon,
    select:focus~.selectIcon svg.icon {
      fill: #1A33FF;
    }
    .green input[type='radio']:after {
        width: 12px;
        height: 12px;
        border-radius: 15px;
        top: -5px;
        left: 1px;
        position: relative;
        background-color: #32a866;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid #32a866;
    }
    
        p{
            box-sizing: border-box;
            width: 90%;
            margin-left: 60px;
            border: 1px solid #0951d6;
            border-radius: 5px;
            background: #36a8f5;
            color: white;
            padding: 12px;
        }
        .badge {
            margin-top: 50px;
          float: right;
          margin-right: 80px;
          padding: 10px;
        } 
    input{
        margin-top: 15px; 
        margin-left: 110px; 
        padding: 9px; 
        font-size: 15px; 
        cursor: pointer;
        border: 1px solid #1A33FF;
        border-radius: 4px;
        background: #99a4f7;
        color: white;
    }
    input:hover{
        background: white;
        color: #1A33FF;
    }
    
    </style>
    </head>
    <body>
        <form action="" method="post" class="mb-3" >
            <div class="select-block" style="margin-right: 25px;">
            <select name="category">
                 <option value="" disabled selected>Choose option</option>
                <?php foreach($qnames as $x => $x_value) {
                    echo '<option value="'.$x_value.'">'.$x.'</option>';
                    
                }?>
            </select>
        <div class="selectIcon">
          <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
            <path d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z"></path>
          </svg>
         
        </div>
         <input type="submit" name="submit" vlaue="Choose options">
        
        </div>
        
        
        </form>
        <div style="font-family: 'Open Sans',sans-serif;margin-top: 50px;">

        
        <?php
            if(isset($_POST['submit'])){
            if(!empty($_POST['category'])) {
                $selected = $_POST['category'];
            $subject=mysqli_query($link,"SELECT * FROM `exam_category` WHERE id=$selected");
            $data3 = mysqli_fetch_array($subject)
        ?>
        
                <h2 style="text-align: center;"> <?php echo $data3['category']; ?> </h2>
        <?php
        $index101=0;
        $questions=mysqli_query($link,"SELECT * FROM `questions` WHERE quiz_id=$selected");
        while($data2 = mysqli_fetch_array($questions)){
	            $quest=$data2['question'];
	            $opt1=$data2['opt1'];
	            $opt2=$data2['opt2'];
	            $opt3=$data2['opt3'];
	            $opt4=$data2['opt4'];
	            $rans=$data2['answer'];
	            $level=$data2['level'];
	            ?>
	            
            
	            <p>
            <?php echo ++$index101."- ". $quest; ?>
        </p>
        <div style="margin-left: 80px;">
            <?php
            if($level=="Hard"){
            ?> 
            <div class="d badge badge-danger">HARD</div>
            <?php }
            else if($level=="Medium"){?>
            <div class="d badge badge-warning">MEDIUM</div>
            <?php
             }
             else if($level=="Easy"){?>
            <div class="d badge badge-success">EASY</div>
            <?php
             }
            else{?>
            <div class="d badge badge-dark">NOT-MARKED</div>
            <?php
             }
            ?>
            
        <?php if($opt1==$rans){
            ?>
            <div class="green">
                <input type="radio" id="option1"><?php echo $opt1; ?><br><br>
            </div>
            <?php
        }
        else {?>
        <input type="radio" id="option1"><?php echo $opt1; ?><br><br>
        <?php } ?>
        <!--///////////////////////////////////////////-->
         <?php if($opt2==$rans){
            ?>
            <div class="green">
                <input type="radio" id="option1"><?php echo $opt2; ?><br><br>
            </div>
            <?php
        }
        else {?>
        <input type="radio" id="option1"><?php echo $opt2; ?><br><br>
        <?php } ?>
        <!--///////////////////////////////////////////////-->
         <?php if($opt3==$rans){
            ?>
            <div class="green">
                <input type="radio" id="option1"><?php echo $opt3; ?><br><br>
            </div>
            <?php
        }
        else {?>
        <input type="radio" id="option1"><?php echo $opt3; ?><br><br>
        <?php } ?>
        <!--///////////////////////////////////////////////////////-->
         <?php if($opt4==$rans){
            ?>
            <div class="green">
                <input type="radio" id="option1"><?php echo $opt4; ?><br><br>
            </div>
            <?php
        }
        else {?>
        <input type="radio" id="option1"><?php echo $opt4; ?><br><br>
        <?php } ?>
        <!--/////////////////////////////////////////////////////////-->
        <!--<input type="radio" id="option2"><?php echo $opt2; ?><br><br>-->
        <!--<input type="radio" id="option3"><?php echo $opt3; ?><br><br>-->
        <!--<input type="radio" id="option4"><?php echo $opt4; ?><br><br>-->
        </div>
	   <?php
	        }
            } else {
                echo 'Please select the value.';
            }
            }
	        
        ?>
        
        </div>
    </body>
</html>