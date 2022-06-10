<?php
    session_start();
    $cid=$_SESSION['ID'];

    $dbhost = 'localhost';
    $dbname = "giitsolu_testphp";
    $dbusername = "giitsolu_testphp";
    $dbpassword = "A!i-E_MjibT{";
    
    $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
                
    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
?>
<?php
$rid=$_GET['rid'];
$condition = mysqli_query($conn,"SELECT * FROM `results` WHERE result_id=$rid");
$data = mysqli_fetch_array($condition);
$ques= $data['ques'];
$ans1=$data['answer'];
$quiz_name= $data['quiz_name'];
$durmin=$data['durmin'];
$dursec=$data['dursec'];
$quesarray=unserialize( $ques );
$ansarray=unserialize( $ans1 );
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Result</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style>
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
        
        .red input[type='radio']:after {
        width: 12px;
        height: 12px;
        border-radius: 15px;
        top: -5px;
        left: 1px;
        position: relative;
        background-color: red;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid red;
    }
    
        .badge {
            margin-top: 50px;
          float: right;
          margin-right: 80px;
          padding: 10px;
        } 
        .t{
            float: right;
            margin-right: -15px;
        }
        
        @media (max-width: 580px){
            
        .green input[type='radio']:after {
        width: 14px;
        height: 14px;
        margin-right: 2px;
        border-radius: 15px;
        top: -2.5px;
        left: 1px;
        position: relative;
        background-color: #32a866;
        display: inline-block;
        visibility: visible;
        border: 2px solid #32a866;
    }
    .red input[type='radio']:after {
        width: 14px;
        height: 14px;
        border-radius: 15px;
        top: -2.5px;
        left: 1px;
        position: relative;
        background-color: red;
        display: inline-block;
        visibility: visible;
        border: 2px solid red;
        }
    #option1{
        margin-top: 2px;
        margin-left: -30px;
        }
    p{
        width: 85%;
        margin-left: 30px;
        }
    .badge{
        margin-top: 30px;
        margin-right: 20px;
        }
    .t{
       margin-right: -60px; 
        }
    }
    </style>
    </head>
    <body>
        <?php
if($quesarray!=""){
?>
        <div style="font-family: 'Open Sans',sans-serif; margin-top: 50px;">
        <h2 style="text-align: center;"> <?php echo $quiz_name;?> </h2>
        <div style="float: right; margin-right: 90px;font-size:larger" class="t">
        <label >Duration : </label>
       <?php
        if($durmin<10){
            echo "0".$durmin." min ";
        }
        else{
            echo $durmin." min ";
        }
        if($dursec<10){
             echo "0".$dursec." sec";
        }
        else{
            echo $dursec." sec";
        }
        ?>
        </div>
        <br>
        <?php 
        $index=1;
        $i=0;
        foreach($quesarray as $key) {
            $Question = mysqli_query($conn,"SELECT * FROM questions WHERE id=$key");
			$data = mysqli_fetch_array($Question);
            $dataq=$data['question'];
            $dataopt1=$data['opt1'];
            $dataopt2=$data['opt2'];
            $dataopt3=$data['opt3'];
            $dataopt4=$data['opt4'];
            $datacans=$data['answer'];
            $value=$ansarray[$i++];
        ?>
        <p>
            <?php 
            echo $index++.". ".$dataq;
            ?>
        </p>
        <div style="margin-left: 80px; margin-top: -10px;">
            <?php if($value=="null"){
            ?> 
            <div class="d badge badge-danger">NOT-ATTEMPTED</div><br>
            <?php }
            else{?>
            <div class="d badge badge-success">ATTEMPTED</div><br>
            <?php
             }
            ?>
            
            <?php
            if($value==$dataopt1){
                if($datacans==$dataopt1){?>
                    <div class="green">
                    <input type="radio" id="option1"><font color="green"><?php echo $dataopt1; ?></font><br><br>
                    </div>
                <?php 
                }
                else{
                    ?>
                    <div class="red">
                    <input type="radio" id="option1"><font color="red"><?php echo $dataopt1; ?></font><br><br>
                    </div>
                    <?php
                }
            }
            else if($datacans==$dataopt1){ ?>
                <div class="green">
                <input type="radio" class="temp" id="option1"><font color="green"><?php echo $dataopt1; ?></font><br><br>
                </div>
            <?php }
            else{ ?>
                <input type="radio" class="temp" id="option1"><?php echo $dataopt1; ?><br><br>
                <?php
                } ?>
            <?php
            if($value==$dataopt2){
                if($datacans==$dataopt2){?>
                    <div class="green">
                    <input type="radio" id="option1"><font color="green"><?php echo $dataopt2; ?></font><br><br>
                    </div>
                <?php 
                }
                else{
                    ?>
                    <div class="red">
                    <input type="radio" id="option1"><font color="red"><?php echo $dataopt2; ?></font><br><br>
                    </div>
                    <?php
                }
            }
            else if($datacans==$dataopt2){ ?>
                <div class="green">
                <input type="radio" id="option1"><font color="green"><?php echo $dataopt2; ?></font><br><br>
                </div>
            <?php }
            else{ ?>
                <input type="radio" id="option1"><?php echo $dataopt2; ?><br><br><?php
                } ?>
            <?php
            if($value==$dataopt3){
                if($datacans==$dataopt3){?>
                    <div class="green">
                    <input type="radio" id="option1"><font color="green"><?php echo $dataopt3; ?></font><br><br>
                    </div>
                <?php 
                }
                else{
                    ?>
                    <div class="red">
                    <input type="radio" id="option1"><font color="red"><?php echo $dataopt3; ?></font><br><br>
                    </div>
                    <?php
                }
            }
            else if($datacans==$dataopt3){ ?>
                <div class="green">
                <input type="radio" id="option1"><font color="green"><?php echo $dataopt3; ?></font><br><br>
                </div>
            <?php }
            else{ ?>
                <input type="radio" id="option1"><?php echo $dataopt3; ?><br><br><?php
                } ?>
            <?php
            if($value==$dataopt4){
                if($datacans==$value){?>
                    <div class="green">
                    <input type="radio" id="option1"><font color="green"><?php echo $dataopt4; ?></font><br><br>
                    </div>
                <?php 
                }
                else{
                    ?>
                    <div class="red">
                    <input type="radio" id="option1"><font color="red"><?php echo $dataopt4; ?></font><br><br>
                    </div>
                    <?php
                }
            }
            else if($datacans==$dataopt4){ ?>
                <div class="green">
                <input type="radio" id="option1"><font color="green"><?php echo $dataopt4; ?></font><br><br>
                </div>
            <?php }
            else{ ?>
                <input type="radio" id="option1"><?php echo $dataopt4; ?><br><br><?php
                } ?>
        
        
        
        
        </div>
        </div>
        <?php 
           
        }
}else{
    ?>
    <div style="margin-top:20%;">
    
    <center><h1>ANSWER SHEET NOT AVAILABLE</h1></center>
    <br>
    <center><h2>Reason: This feature is added from 12-03-2022 </h2></center>
   
</div>
    <?php
    
}
        
        ?>
    </body>
</html>