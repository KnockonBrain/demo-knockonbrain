<?php
    session_start();
    $cid=$_SESSION['ID'];

    $dbhost = 'localhost';
    $dbname = "giitsolu_testphp";
    $dbusername = "giitsolu_testphp";
    $dbpassword = "A!i-E_MjibT{";
    
    $con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
                
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Report</title>
    <link rel="stylesheet" type="text/css" href="style_Report.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        crossorigin="anonymous">
	<script src="pdfdownloader_Report.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
</head>

<body>
	<div class="col-md-12 text-right mb-2 mt-2">Download report
    <button class="btn btn-primary" id="download" > Download pdf</button>
    </div>
<div id="report">
	<table style="width: 100%; table-layout: fixed; margin: 5px;">
		<tr>
			<td><img src="logo1.png">
			</td>
			<td id="heading">
				<b>Candidate Assessment Report<sup>1</sup></b>
			</td>
		</tr>
	</table>
<hr class="solid">
<table style="width: 100%; margin: 5px;">
	<tr>
	    <?php
	    if($_SERVER['REQUEST_METHOD']=='POST'){
            $var_currentemail=$_POST['currentemail'];
	
	    }
	    else{
	        echo "Can't fetch Email Id";
	    }
	    
	    
	    ?>
		<td style="width:60%">
			<b>Candidate Name: </b>
			    <?php $CanName = mysqli_query($con,"SELECT can_name FROM results WHERE cid=$cid and Email='$var_currentemail'");
			    $data = mysqli_fetch_array($CanName);
			    
			    
			   if(is_null($data)){
                    $CanName = mysqli_query($con,"SELECT can_name FROM code_result WHERE cid=$cid and email='$var_currentemail'");
                    $data = mysqli_fetch_array($CanName);
                    
                    if(is_null($data)){
                        $CanName = mysqli_query($con,"SELECT can_name FROM mbti_result WHERE cid=$cid and Email='$var_currentemail'");
                        $data = mysqli_fetch_array($CanName);
                        if(is_null($data));
                        else{
                       		//mbti_result
                            $varRE= $data[0];
                            }
                    }
                    else{
                    	//code result
                        $varRE= $data[0];
                        }
                }
                else{
                	//result
                    $varRE= $data[0];
                    }
                echo "$varRE";
			    ?>
			<br>
		</td>
		<td style="width:40%; margin-left: 5px;">
			<b>REPORT ID:</b> <i>
			    <?php
			   
                $ReportID = mysqli_query($con,"SELECT * FROM results WHERE cid=$cid and Email='$var_currentemail'");
                $data = mysqli_fetch_array($ReportID);
      
                if(is_null($data)){
                    $ReportIdCode = mysqli_query($con,"SELECT * FROM code_result WHERE cid=$cid and email='$var_currentemail'");
                    $data = mysqli_fetch_array($ReportIdCode);
                    
                    if(is_null($data)){
                        $ReportIdPsy = mysqli_query($con,"SELECT * FROM mbti_result WHERE cid=$cid and Email='$var_currentemail'");
                        $data = mysqli_fetch_array($ReportIdPsy);
                        if(is_null($data))
                            echo "Report does not  exist";
                        else{
                       		$table_Name='mbti_result';
                            $varRE= $data['id'];
                            }
                    }
                    else{
                    	$table_Name='code_result';
                        $varRE= $data['rid'];
                        }
                }
                else{
                	$table_Name='results';
                    $varRE= $data['result_id'];
                    }
            
                if ($vareRE < 9)
                    echo "REP0140000"."$varRE";
                else if ($vareRE < 99)
                    echo "REP014000"."$varRE";
                else if ($vareRE < 999)
                    echo "REP01400"."$varRE";
                else if ($vareRE < 9999)
                    echo "REP0140"."$varRE";
                else
                    echo "REP014"."$varRE";
                    ?>
			</i><br>
		</td>
	</tr>
	<tr>
		<td style="width:60%">
			<b>Candidate Email Id: </b>
			<?php
			$MailID = mysqli_query($con,"SELECT * FROM `" . $table_Name . "` WHERE cid=$cid and Email='$var_currentemail'");
	            $data = mysqli_fetch_array($MailID);
	            if($table_Name=="results")
	            	echo $data['Email'];
	            else
	            	echo $data['email'];
			?><br>
		</td>
		<td style="width:40%;">
			<b>CANDIDATE ID:</b> <i><?php
			
			$canID = mysqli_query($con,"SELECT * FROM `CL_CANS` WHERE Email='$var_currentemail'");
            $data = mysqli_fetch_array(	$canID);
            $can=$data['canid'];
            //echo $can;
			    if ($canid < 9)
                    echo "CAN014434000"."$can";
                 else if ($cid < 99)
                    echo "CAN01443400"."$can";
                else if ($cid < 999)
                    echo "CAN0144340"."$can";
                else if ($cid < 9999)
                    echo "CAN014434"."$can";
                else
                    echo "CAN014434"."$can";
                 //REP01443401
	            ?></i><br>
		</td>
	</tr>
	<tr>
		<td style="width:60%">
			<b>Test Ordered By: </b>
			<?php
			$CompanyName = mysqli_query($con,"SELECT * FROM users WHERE ID=$cid");
            $data = mysqli_fetch_array($CompanyName);
            echo $data['company'];
            ?><br></td>
        
		<td style="width:40%;">
			<b>CLIENT ID:</b> <i>
			<?php
			    if ($cid < 9)
                    echo "CLI202200000"."$cid";
                else if ($cid < 99)
                    echo "CLI20220000"."$cid";
                else if ($cid < 999)
                    echo "CLI2022000"."$cid";
                else if ($cid < 9999)
                    echo "CLI202200"."$cid";
                else
                    echo "CLI20220"."$cid";
			?></i><br>
		</td>
	</tr>
	<tr>
		<td style="width:60%">
		<b>Test Ordered: </b>
		<?php
		$TestName = mysqli_query($con,"SELECT * from results where cid=$cid and Email='$var_currentemail' GROUP BY quiz_id;");
		$TestCodeName = mysqli_query($con,"SELECT * from code_result where cid=$cid and Email='$var_currentemail' GROUP BY lg;");
		$TestMbtName = mysqli_query($con,"SELECT * from mbti_result where cid=$cid and Email='$var_currentemail';");
		
		
	        $arr1=array();
	        $i=0;
	        while($data = mysqli_fetch_array($TestName)){
	            $arr1[$i]=$data['quiz_name'];
	            $i++;
	        }
	        
	         $arr2=array();
	         $j=0;
	        while($data1 = mysqli_fetch_array($TestCodeName)){
	            $arr2[$j++]=$data1['lg']." Coding";
	        }
	        
	   
	        $string = join(', ', $arr1);
	        $stringab = join(', ', $arr2);
	        if(!empty($arr1) && !empty($arr2))
	        	echo $string.", ".$stringab;
	        else
	        	echo $string.$stringab;
	        	
	   
	         $data3=mysqli_fetch_array($TestMbtName);
		$yesorno=$data3['cid'];
		if($yesorno){
			
		if(empty($arr1) and empty($arr2))
            echo "Psychometric";
        else 
            echo ", Psychometric";}
	        
        ?><br></td>
	</tr>
	<tr>
		<td style="width:40%;">
			<b>Order Date: </b>
			<?php 
			if($table_Name=="results"){
				$detailstable="details";
			    $OrderDate=mysqli_query($con,"SELECT * FROM `" . $detailstable . "` WHERE cid=$cid and email='$var_currentemail'");
			 $data = mysqli_fetch_array($OrderDate);
			 echo (substr($data['date'],8,2))."-";
	            $month=(substr($data['date'],5,2));
	            if($month=="01")
	                echo "January";
	            else if($month=="02")
	                echo "February";
	            else if($month=="03")
	                echo "March";
	            else if($month=="04")
	                echo "April";
	            else if($month=="05")
	                echo "May";
	            else if($month=="06")
	                echo "June";
	            else if($month=="07")
	                echo "July";
	            else if($month=="08")
	                echo "August";
	            else if($month=="09")
	                echo "September";
	            else if($month=="10")
	                echo "October";
	            else if($month=="11")
	                echo "November";
	            else if($month=="12")
	                echo "December";
	            echo "-".(substr($data['date'],0,4));
			}
			else if($table_Name=="code_result"){
				$detailstable="code_details";
			    $OrderDate=mysqli_query($con,"SELECT * FROM `" . $detailstable . "` WHERE cid=$cid and email='$var_currentemail'");
			 $data = mysqli_fetch_array($OrderDate);
			 echo (substr($data['date'],8,2))."-";
	            $month=(substr($data['date'],5,2));
	            if($month=="01")
	                echo "January";
	            else if($month=="02")
	                echo "February";
	            else if($month=="03")
	                echo "March";
	            else if($month=="04")
	                echo "April";
	            else if($month=="05")
	                echo "May";
	            else if($month=="06")
	                echo "June";
	            else if($month=="07")
	                echo "July";
	            else if($month=="08")
	                echo "August";
	            else if($month=="09")
	                echo "September";
	            else if($month=="10")
	                echo "October";
	            else if($month=="11")
	                echo "November";
	            else if($month=="12")
	                echo "December";
	            echo "-".(substr($data['date'],0,4));
			}
			else{
				$detailstable="psycho_details";
			    $OrderDate=mysqli_query($con,"SELECT * FROM `" . $detailstable . "` WHERE cid=$cid and email='$var_currentemail'");
			 $data = mysqli_fetch_array($OrderDate);
			 echo (substr($data['date'],8,2))."-";
	            $month=(substr($data['date'],5,2));
	            if($month=="01")
	                echo "January";
	            else if($month=="02")
	                echo "February";
	            else if($month=="03")
	                echo "March";
	            else if($month=="04")
	                echo "April";
	            else if($month=="05")
	                echo "May";
	            else if($month=="06")
	                echo "June";
	            else if($month=="07")
	                echo "July";
	            else if($month=="08")
	                echo "August";
	            else if($month=="09")
	                echo "September";
	            else if($month=="10")
	                echo "October";
	            else if($month=="11")
	                echo "November";
	            else if($month=="12")
	                echo "December";
	            echo "-".(substr($data['date'],0,4));
			}
				
			
			
	       
        ?>
		</td>
	</tr>
</table>
	
<?php
        $testnameIT=array();
        $testnameApt=array();
        $indexApt=0;
        $index=0;
        for ($x = 0; $x < $i ; $x++) {
            if ($arr1[$x]=="Reasoning" || $arr1[$x]=="Aptitude" || $arr1[$x]=="Reasoning "){
                $testnameApt[$indexApt++]=$arr1[$x];
            }
            else
            	$testnameIT[$index++]=$arr1[$x];
        }
    ?>
    
    <?php
    if(empty($testnameApt)){
    
    
    ?>
    <hr class="solid">
<b>ANALYTICAL REASONING<sup>3</sup>: 
</b><br>
<table style="width:100%; table-layout: fixed;">
	<tr>
		<td style="width:60%">
			Number of attempts: 
			<br>
			Date and Time of Attempt: --
			<br><br>
		</td>
		<td style="width:40%;">
			Response State<sup>2</sup>: <b>
			     Not Attempted
			</b><br>
			Duration of the Test: --
			<br><br>
		</td>
	</tr>
	<tr>
		<td style="width:60%"> Score: 
		    
			<div class="progress" style="width: 70%; margin: 3px;">
   			<div class="progress-bar" role="progressbar" style="width: <?php echo "0"."%"; ?>;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
   			    %
   			</div>
   			</div> 
		</td>
		<td style="width:40%;">
			Grade: --
		</td>
	</tr>
</table>
<br>

<?php
  }
   else
   {
       foreach($testnameApt  as $Apttestnameindex ) {
       ?>
       
       
<hr class="solid">

<b><?php echo $Apttestnameindex;?></b><sup>3</sup><br>
<table style="width:100%; table-layout: fixed;">
	<tr>
		<td style="width:60%">
		    <?php
		        $Score=mysqli_query($con,"SELECT MAX(scoreper) FROM `results` where cid=$cid and Email='$var_currentemail' and quiz_name= '$Apttestnameindex'");
                $data = mysqli_fetch_array($Score);
                $varscore = $data[0];
		    ?>
			Number of attempts: 
			<?php
			$Attempt = mysqli_query($con,"Select Count(*) FROM results WHERE cid=$cid and Email='$var_currentemail' AND quiz_name = '$Apttestnameindex' ");
            $data_attempt = mysqli_fetch_array($Attempt);
            echo "$data_attempt[0]";
            ?>
            
			<br>
			Date and Time of Attempt:
			<?php
			 $DatenTime=mysqli_query($con,"SELECT * FROM results WHERE cid=$cid and Email='$var_currentemail' and quiz_name = '$Apttestnameindex' and scoreper='$varscore'");
                
                $data = mysqli_fetch_array($DatenTime);
                echo (substr($data['Start_time'],0,2))."-";
                $month=(substr($data['Start_time'],3,2));
                if($month=="01")
                    echo "January";
                else if($month=="02")
                    echo "February";
                else if($month=="03")
                    echo "March";
                else if($month=="04")
                    echo "April";
                else if($month=="05")
                    echo "May";
                else if($month=="06")
                    echo "June";
                else if($month=="07")
                    echo "July";
                else if($month=="08")
                    echo "August";
                else if($month=="09")
                    echo "September";
                else if($month=="10")
                    echo "October";
                else if($month=="11")
                    echo "November";
                else if($month=="12")
                    echo "December";
                echo "-".(substr($data['Start_time'],6,4))." ";
                $hour= (int)substr($data['Start_time'],11,2);
                $min=substr($data['Start_time'],14,2);
                
                if ($hour > 12){
                    $hour = $hour - 12;
                    $stamp="PM";
                    if($hour<10){
                        echo "0".$hour.":".$min." ".$stamp;
                    }
                    else
                        echo $hour.":".$min." ".$stamp;
                }
                else if ($hour == 00){
                    $hour = 12;
                    $stamp="AM";
                    echo $hour.":".$min." ".$stamp;
                }
                else if ($hour == 12) {
                    $hour = 12;
                    $stamp="PM";
                    echo $hour.":".$min." ".$stamp;
                }
                else {
                    $stamp="AM";
                    if($hour<10){
                        echo "0".$hour.":".$min." ".$stamp;
                    }
                    else
                        echo $hour.":".$min." ".$stamp;
                }
             
			?>
			<br><br>
		</td>
		<td style="width:40%;">
			Response State<sup>2</sup>: <b>
			    <?php
			    	
			    $state=mysqli_query($con,"SELECT * FROM results WHERE cid=$cid and Email='$var_currentemail' AND quiz_name = '$Apttestnameindex' and scoreper='$varscore'");
                $data = mysqli_fetch_array($state);
                if($data['AI_accuracy']=="CHEATED"){
                    echo "Invalid";
                }
                else
                    echo "Valid";
               
			    ?>
			</b><br>
			
			Duration of the Test: 
			<?php 
			
		        $Duration=mysqli_query($con,"SELECT * FROM results WHERE cid=$cid and email='$var_currentemail' AND quiz_name = '$Apttestnameindex' and scoreper='$varscore'");
                $data1 = mysqli_fetch_array($Duration);
                
                echo $data1['durmin']." Minutes ".$data1['dursec']." Seconds ";
            
			?><br><br>
			
		</td>
	</tr>
	<tr>
		<td style="width:60%"> Score: 
		    <?php 
                echo $varscore."%";
                $Attempt1 = mysqli_query($con,"Select * FROM results WHERE cid=$cid and Email='$var_currentemail' AND quiz_name = '$Apttestnameindex' AND scoreper=$varscore ");
            $data_attempt1 = mysqli_fetch_array($Attempt1);
            ?>
			<div class="progress" style="width: 70%; margin: 3px;">
   			<div class="progress-bar" role="progressbar" style="width:<?php echo $varscore."%"; ?>;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
   			    <?php
   			        echo $varscore."%";
   			        $var1= $varscore;
   			        
   			    ?>
   			</div>
   			</div> 
		</td>
		<td style="width:40%;">
			Grade: 
			<?php
                $myScore1=mysqli_query($con,"SELECT count(scoreper) FROM `results` where scoreper>=$var1 and quiz_name='$Apttestnameindex'");
                $myData1=mysqli_fetch_array($myScore1);
                $var02=$myData1[0];
                $myScore2=mysqli_query($con,"SELECT count(scoreper) FROM `results` where quiz_name='$Apttestnameindex'");
                $myData2 = mysqli_fetch_array($myScore2);
                $vartotal=$myData2[0];
                $var004=($var02/$vartotal)*100;
                $int_cast = ceil($var004);
                
			    if($var1<45){
                    echo "D (top $int_cast% of candidates)";
                    $grade="D";
                }
                else if($var1>=45 && $var1<55){
                    echo "C (top $int_cast% of candidates)";
                    $grade="C";
                }
                else if($var1>=55 && $var1<70){
                    echo "C+(top $int_cast% of candidates)";
                    $grade="C+";
                }
                else if($var1>=70 && $var1<80){
                    echo "B(top $int_cast% of candidates)"; 
                    $grade="B";
                }
                else if($var1>=80 && $var1<90){
                    echo "B+ (top $int_cast% of candidates)";
                    $grade="B+";
                }
                else if($var1>=90 && $var1<95){
                    echo "A (top $int_cast% of candidates)";
                    $grade="A";
                }
                else if($var1>=95 && $var1<=100){
                    echo "A+ (top $int_cast% of candidates)";
                    $grade="A+";
                }
            
			?>
			
		</td>
	</tr>
</table>


<?php
	
echo "<br><b>Assessment:</b>
	The candidate lies within top $int_cast percent of the candidates who have taken the test on KOB ( >5000 ). Since the sample set is large this can be a significant representation of the entire population.";


echo "<br><b>Description:</b> <i>";

        
        if($grade=="D")
            echo "Someone who would need handholding, coaching and guidance";
        else if($grade=="C")
            echo "Someone having an average capacity to acquire competence or skill through guidance";
        else if($grade=="C+")
            echo "Someone having good analytical reasoning skills can deliver with little guidance ";
        else if($grade=="B")
            echo "Someone who has good ability to learn, understand, or deal with new problems";
        else if($grade=="B+")
            echo "Someone having very good analytical reasoning ability";
        else if($grade=="A")
            echo "Someone with excellent problem-solving abilities";
        else if($grade=="A+")
            echo "Someone with excellent problem-solving abilities and can view the problem from different perspectives and approaches to solution";
   echo "</i><br>";
   
?>
<b>To view the complete Answer Sheet<a href="https://35.154.101.124/CLient/AnswerSheet.php?rid=
<?php
echo $data_attempt1['result_id'];
?>
" target="_blank"> Click Here</a></b>
<?php
      } 
      } ?>



   
    <?php
    if(empty($testnameIT)){
    
    
    ?>
    <hr class="solid">
<b>MCQ<sup>4</sup>: 
</b><br>
<table style="width:100%; table-layout: fixed;">
	<tr>
		<td style="width:60%">
			Number of attempts: 
			<br>
			Date and Time of Attempt: --
			<br><br>
		</td>
		<td style="width:40%;">
			Response State<sup>2</sup>: <b>
			     Not Attempted
			</b><br>
			Duration of the Test: --
			<br><br>
		</td>
	</tr>
	<tr>
		<td style="width:60%"> Score: 
		    
			<div class="progress" style="width: 70%; margin: 3px;">
   			<div class="progress-bar" role="progressbar" style="width: <?php echo "0"."%"; ?>;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
   			    %
   			</div>
   			</div> 
		</td>
		<td style="width:40%;">
			Grade: --
		</td>
	</tr>
</table>
<br>

<?php
  }
   else
   {
       foreach($testnameIT  as $mcqtestnameindex ) {
       ?>

<hr class="solid">
<b>MCQ<sup>4</sup>: 
<?php echo $mcqtestnameindex;?>
</b><br>
<table style="width:100%; table-layout: fixed;">
	<tr>
	    <?php
		        $Score=mysqli_query($con,"SELECT MAX(scoreper) FROM `results` where cid=$cid and Email='$var_currentemail' and quiz_name= '$mcqtestnameindex'");
                $data = mysqli_fetch_array($Score);
                $varscore = $data[0];
		    ?>
		<td style="width:60%">
			Number of attempts: 
			<?php
			    $Attempt = mysqli_query($con,"SELECT count(*) FROM results WHERE cid=$cid and Email='$var_currentemail' AND quiz_name = '$mcqtestnameindex'");
                $dataMCQ = mysqli_fetch_array($Attempt);
                echo "$dataMCQ[0]";
            ?>
			<br>
			Date and Time of Attempt:
			<?php
			
			    $DatenTime=mysqli_query($con,"SELECT * FROM results WHERE cid=$cid and Email='$var_currentemail' AND quiz_name = '$mcqtestnameindex'  and scoreper='$varscore'");
            $data = mysqli_fetch_array($DatenTime);
            echo (substr($data['Start_time'],0,2))."-";
            $month=(substr($data['Start_time'],3,2));
            if($month=="01")
                echo "January";
            else if($month=="02")
                echo "February";
            else if($month=="03")
                echo "March";
            else if($month=="04")
                echo "April";
            else if($month=="05")
                echo "May";
            else if($month=="06")
                echo "June";
            else if($month=="07")
                echo "July";
            else if($month=="08")
                echo "August";
            else if($month=="09")
                echo "September";
            else if($month=="10")
                echo "October";
            else if($month=="11")
                echo "November";
            else if($month=="12")
                echo "December";
            echo "-".(substr($data['Start_time'],6,4))." ";
            $hour= substr($data['Start_time'],11,2);
            
             if ($hour > 12){
                    $hour = $hour - 12;
                    $stamp="PM";
                    if($hour<10){
                        echo "0".$hour.":".$min." ".$stamp;
                    }
                    else
                        echo $hour.":".$min." ".$stamp;
                }
                else if ($hour == 00){
                    $hour = 12;
                    $stamp="AM";
                    echo $hour.":".$min." ".$stamp;
                }
                else if ($hour == 12) {
                    $hour = 12;
                    $stamp="PM";
                    echo $hour.":".$min." ".$stamp;
                }
                else {
                    $stamp="AM";
                    if($hour<10){
                        echo "0".$hour.":".$min." ".$stamp;
                    }
                    else
                        echo $hour.":".$min." ".$stamp;
                }
			?>
			<br><br>
		</td>
		<td style="width:40%;">
			Response State<sup>2</sup>: <b>
			    <?php
			    
			        $state=mysqli_query($con,"SELECT * FROM results WHERE cid=$cid and Email='$var_currentemail' AND quiz_name = '$mcqtestnameindex'  and scoreper='$varscore'");
                    $data = mysqli_fetch_array($state);
                     if($data['AI_accuracy']=="CHEATED")
                         echo "Invalid";
                     else
                        echo "Valid";
			   
			    ?>
			</b><br>
			Duration of the Test: 
 			<?php
    		$Duration=mysqli_query($con,"SELECT * FROM results WHERE cid=$cid and Email='$var_currentemail' AND quiz_name = '$mcqtestnameindex' and scoreper='$varscore'");
    		
    	
                $data = mysqli_fetch_array($Duration);
                
                echo $data['durmin']." Minutes ".$data['dursec']." Seconds ";
           
         ?><br><br>
		</td>
	</tr>
	<tr>
		<td style="width:60%"> Score: 
		    <?php
		        $ScoreIT=mysqli_query($con,"SELECT max(scoreper) FROM `results` where cid=$cid and Email='$var_currentemail' and quiz_name='$mcqtestnameindex' ");
                $data = mysqli_fetch_array($ScoreIT);
                 $var1=$data[0];
                echo $var1."%";
                $Attempt1 = mysqli_query($con,"Select * FROM results WHERE cid=$cid and Email='$var_currentemail' AND quiz_name = '$mcqtestnameindex' And scoreper=$var1  ");
            $data_attempt1 = mysqli_fetch_array($Attempt1);
              //if(is_null)
		    ?>
		   
			<div class="progress" style="width: 70%; margin: 3px;">
   			<div class="progress-bar" role="progressbar" style="width: <?php echo "$var1"."%"; ?>;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
   			    <?php echo $var1."%"; ?>
   			</div>
   			</div> 
		</td>
		<td style="width:40%;">
			Grade: 
			<?php
			
			if($mcqtestnameindex=="Java"|| $mcqtestnameindex=="Python"|| $mcqtestnameindex=="Web Developer"|| $mcqtestnameindex=="Manual Testing"){
                $myScorex=mysqli_query($con,"SELECT count(*) FROM `results` where scoreper>=$var1 and quiz_name='$mcqtestnameindex'");
                $myDatax=mysqli_fetch_array($myScorex);
                $varx=$myDatax[0];
                $myScorey=mysqli_query($con,"SELECT count(*) FROM `results` where quiz_name='$mcqtestnameindex'");
                $myDatay = mysqli_fetch_array($myScorey);
                $vartotaly=$myDatay[0];
                $varz=($varx/$vartotaly)*100;
                $int_castz = ceil($varz);
                
			        if($var1<45){
                        echo "D (top $int_castz% of candidates)";
                        $grade="D";
                    }
                    else if($var1>=45 && $var1<55){
                        echo "C (top $int_castz% of candidates)";
                        $grade="C";
                    }
                    else if($var1>=55 && $var1<70){
                        echo "C+(top $int_castz% of candidates)";
                        $grade="C+";
                    }
                    else if($var1>=70 && $var1<80){
                        echo "B(top $int_castz% of candidates)"; 
                        $grade="B";
                    }
                    else if($var1>=80 && $var1<90){
                        echo "B+ (top $int_castz% of candidates)";
                        $grade="B+";
                    }
                    else if($var1>=90 && $var1<95){
                        echo "A (top $int_castz% of candidates)";
                        $grade="A";
                    }
                    else if($var1>=95 && $var1<=100){
                        echo "A+ (top $int_castz% of candidates)";
                        $grade="A+";
                    }
				}
                else {
                    if($var1<45){
                        echo "D (top 55% of candidates)";
                        $grade="D";
                        $int_castz=55;
	                }    
                    else if($var1>=45 && $var1<55){
                        echo "C (top 40% of candidates)";
                        $grade="C";
                        $int_castz=40;
                    }
                    else if($var1>=55 && $var1<70){
                        echo "C+ (top 35% of candidates)";
                        $grade="C+";
                        $int_castz=35;
                    }
                    else if($var1>=70 && $var1<80){
                        echo "B (top 30% of candidates)";
                        $grade="B";
                        $int_castz=30;
                    }
                    else if($var1>=80 && $var1<90){
                        echo "B+ (top 20% of candidates)";
                        $grade="B+";
                        $int_castz=20;
                    }
                    else if($var1>=90 && $var1<95){
                        echo "A (top 10% of candidates)";
                        $grade="A";
                        $int_castz=10;
                    }
                    else if($var1>=95 && $var1<=100){
                        echo "A+ (top 5% of candidates)";
                        $grade="A+";
                        $int_castz=5;
                    }
                }
              
	
		?>		</td>
	</tr>
</table>
<br>
<?php
 
echo "<b>Assessment:</b> The candidate lies within top ". $int_castz ." percent of the candidates who have taken the test on KOB ( >10,000 ). Since the sample set is large this can be a significant representation of the entire population.  <br>";


echo "<b>Description:</b> <i>";
    
        if($grade=="D")
        echo "Someone who would need handholding, coaching and guidance  ";
    else if($grade=="C")
        echo "Someone having an average capacity to acquire competence or skill through guidance";
    else if($grade=="C+")
        echo "Someone good with basics of particular skill and have working experience";
    else if($grade=="B")
        echo "Someone who has a very good understanding of the concepts of required skill";
    else if($grade=="B+")
        echo "Someone who has an excellent knowledge about the required skill";
    else if($grade=="A")
        echo "Advance understanding of required technical skills and can work on any project from the beginning";
    else if($grade=="A+")
        echo "Expert in the required skill, and can add value to the competency of a particular area";
 
 echo "</i><br>";
?>
<b>To view the complete Answer Sheet<a href="https://35.154.101.124/CLient/AnswerSheet.php?rid=
<?php
echo $data_attempt1['result_id'];
?>
" target="_blank"> Click Here</a></b> 
<?php
    }
}
?>


<hr class="solid">
 <?php
		
		      $Score=mysqli_query($con,"SELECT max(res_per) FROM `code_result` where cid=$cid AND email='$var_currentemail'");
              $data = mysqli_fetch_array($Score);
              $varcodescore=$data[0];
              
              $CodeName= mysqli_query($con,"SELECT * FROM code_result WHERE cid=$cid AND email='$var_currentemail' and res_per='$varcodescore'");
                $data=  mysqli_fetch_array($CodeName);
              $datacn=$data['lg'];
             ?>

<b>CODING</b><sup>3</sup><b>: <?php
    echo $datacn;
      
    ?></b>
<table style="width:100%; table-layout: fixed;">
	<tr>
	    	
		<td style="width:60%">
			Number of attempts: 
			<?php
			 $Attempt = mysqli_query($con,"SELECT count(*) FROM code_result WHERE cid=$cid AND email='$var_currentemail' and lg='$datacn'");
             $dataCodeA = mysqli_fetch_array($Attempt);
              echo $dataCodeA[0];
            ?><br>
			Date and Time of Attempt: 
			<?php
			if($dataCodeA[0]==0)
				echo "--";
			else{
    			$DatenTime=mysqli_query($con,"SELECT * FROM code_result WHERE cid=$cid AND email='$var_currentemail' and res_per='$varcodescore' and lg='$datacn'");
                $data = mysqli_fetch_array($DatenTime);
                echo (substr($data['end_time'],8,2))."-";
                $month=(substr($data['end_time'],5,2));
                if($month=="01")
                    echo "January";
                else if($month=="02")
                    echo "February";
                else if($month=="03")
                    echo "March";
                else if($month=="04")
                    echo "April";
                else if($month=="05")
                    echo "May";
                else if($month=="06")
                    echo "June";
                else if($month=="07")
                    echo "July";
                else if($month=="08")
                    echo "August";
                else if($month=="09")
                    echo "September";
                else if($month=="10")
                    echo "October";
                else if($month=="11")
                    echo "November";
                else if($month=="12")
                    echo "December";
                echo "-".(substr($data['end_time'],0,4))." ";
                $hour= substr($data['end_time'],11,2);
                
                 if ($hour > 12){
                    $hour = $hour - 12;
                    $stamp="PM";
                    if($hour<10){
                        echo "0".$hour.":".$min." ".$stamp;
                    }
                    else
                        echo $hour.":".$min." ".$stamp;
                }
                else if ($hour == 00){
                    $hour = 12;
                    $stamp="AM";
                    echo $hour.":".$min." ".$stamp;
                }
                else if ($hour == 12) {
                    $hour = 12;
                    $stamp="PM";
                    echo $hour.":".$min." ".$stamp;
                }
                else {
                    $stamp="AM";
                    if($hour<10){
                        echo "0".$hour.":".$min." ".$stamp;
                    }
                    else
                        echo $hour.":".$min." ".$stamp;
                }
                }
			?><br><br>
		</td>
		<td style="width:40%;">
			Response State<sup>2</sup>: 
		    <b>	<?php
		    if($dataCodeA[0]==0)
				echo "Not Attempted";
			else{
			     $state=mysqli_query($con,"SELECT * FROM code_result WHERE cid=$cid AND email='$var_currentemail' and res_per='$varcodescore' and lg='$datacn'");
                  $data = mysqli_fetch_array($state);
                   if($data['AI_ACCURACY']=="CHEATED")
                  echo "Invalid";
                    else
                   echo "Valid";
			}?></b><br>
			Duration of the Test: 
			<?php
			if($dataCodeA[0]==0){
				echo "--";
			}
			else{
			    $Duration=mysqli_query($con,"SELECT * FROM code_result WHERE cid=$cid and email='$var_currentemail' and res_per='$varcodescore' and lg='$datacn'");
                $data = mysqli_fetch_array($Duration);
                $start_time= $data['start_time'];
                $end_time = $data['end_time'];
                $t1  = strtotime($start_time);
                $t2 = strtotime($end_time);
                $difference = $t2 - $t1;
                if($difference / 3600 > 0){
                    $hour = $difference / 3600;
                    $hour = (int)$hour;
                    $difference = $difference - ($hour * 3600);
                }else{
                     $hour = "00";
                }
                if($difference / 60 > 0){
                      $min = $difference / 60;
                      $min = (int)$min;
                      $difference = $difference - ($min * 60);
                }else{
                      $min = "00";
                }
               
                echo $min." Minutes ".$difference." Seconds";
              
            }
			?>
			 <br><br>
		</td>
	</tr>
	<tr>
		<td style="width:60%"> Score: 
	<?php   
	        $varconvertscore=(int)$varcodescore;
	        echo $varconvertscore."%";
            if($dataCodeA[0]==0){
                
            ?>
                <div class="progress" style="width: 70%; margin: 3px;">
   			<div class="progress-bar" role="progressbar" style="width:<?php echo $varconvertscore."%"; ?>;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <?php 
            }
			else{
         ?>
         
			<div class="progress" style="width: 70%; margin: 3px;">
   			<div class="progress-bar" role="progressbar" style="width:<?php echo $varconvertscore."%"; ?>;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
   			 <?php
              echo $varconvertscore."%";
              $var1=$varcodescore;
             } ?>
   			</div>
   			</div> 
		</td>
		<td style="width:40%;">
			Grade: 
			<?php
			if($dataCodeA[0]==0)
				echo "--";
			else{
    if($var1<45){
        echo "D (top 55% of candidates)";
        $grade="D";
        $gradenum=55;
    }
    else if($var1>=45 && $var1<55){
        echo "C (top 40% of candidates)";
        $grade="C";
        $gradenum=40;
    }
    else if($var1>=55 && $var1<70){
        echo "C+ (top 35% of candidates)";
        $grade="C+";
        $gradenum=35;
    }
    else if($var1>=70 && $var1<80){
        echo "B (top 30% of candidates)";
        $grade="B";
        $gradenum=30;
    }
    else if($var1>=80 && $var1<90){
        echo "B+ (top 20% of candidates)";
        $grade="B+";
        $gradenum=20;
    }
    else if($var1>=90 && $var1<95){
        echo "A (top 10% of candidates)";
        $grade="A";
        $gradenum=10;
    }
    else if($var1>=95 && $var1<=100){
        echo "A+ (top 5% of candidates)";
        $grade="A+";
        $gradenum=5;
    }
    }?>
		</td>
	</tr>
</table>


<?php
if($dataCodeA[0]==0);
			else{
echo "<br><b>Assessment:</b> The candidate lies within top ".$gradenum." percent of the candidates who have taken the test on KOB ( >10,000 ). Since the sample set is large this can be a significant representation of the entire population. <br>";}
?> 

<?php 
if($dataCodeA[0]==0);
			else{
echo "<b>Description:</b> <i>";
                     if($grade=="D")
        echo "Someone who is new to coding and is in the early stages of learning";
    else if($grade=="C")
        echo "Someone who can write simple code and understand the logic";
    else if($grade=="C+")
        echo "Someone who has a good understanding of coding concepts";
    else if($grade=="B")
        echo "Someone who can write functioning applications, understands basic algorithms and possesses some rudiments";
    else if($grade=="B+")
        echo "Someone who has the high level knowledge of required skill and has good experience as a Coder";
    else if($grade=="A")
        echo "Someone who can write cleaner, better designed, more maintainable code and  can get complex projects done";
    else if($grade=="A+")
        echo "Someone who can design high-level interactions of larger software systems developed by other engineers";
              } ?></i>

<hr class="solid">

<b>PSYCHOMETRIC TEST</b><sup>1,6</sup><br>
<b>Behavioral Traits</b><br><br>
<b>Important: <i>The following are some behavioral traits of the candidate from his responses in the test. However, these need to be validated during the interview seeking examples of instances where the candidate has exhibited these in his experience.</i></b><br>
<ul>
    <?php
        $Trait=mysqli_query($con,"SELECT * FROM `mbti_result` WHERE cid=$cid AND email='$var_currentemail';");
        $data = mysqli_fetch_array($Trait);
        $VAR101=$data['per_type'];
        
        if($VAR101=="ISFP"){
            echo "<li>	Service oriented individual</li>
            <li>	Learn best with hands-on training, has a very practical approach to work</li>
            <li>	Respective towards other people</li>
            <li>	Extremely observant and a good listener</li>
            <li>	Has a strong set of values</li>
            <li>	Highly creative, artistic and spiritual</li>
            <li>	Would want some independence in work, might give best results when micromanaged</li>
            <li>	Has good ability to manage with conflict in a team</li>";
        }
        
        if($VAR101=="ISTJ"){
        echo "<li>	Hard working. Loyal and faithful to the organization</li>
        <li>	Stable, practical and down-to-earth</li>
        <li>	Has good team leading skill</li>
        <li>	Able to take constructive criticism well </li>
        <li>	Tends to have a calm composure and is able to tolerate conflict situations peacefully</li>
        <li>	Like to deliver the work on time</li>
        <li>	Good team player </li>
        <li>	Has a professional approach and would rarely get personal to anyone</li>
        <li>	Has ability to work independently.</li>";
        }
        
        if($VAR101=="ISTP"){
        echo "<li>	Action-oriented, very optimistic, ready to take risks</li>
        <li>	Independent in work and pursues his targets and goals till they are achieved</li>
        <li>	self-confident, attractive and compelling personality</li>
        <li>	can handle any task that he is presented with.</li>
        <li>	Would need his own experiential understanding </li>
        <li>	Would perform best in non-stressful conditions, Under stress, may express his emotions </li>
        <li>	may be less sensitive to others’ emotions at times</li>";
        }
        
        if($VAR101=="INTJ"){
        echo "<li>	Takes his relationships and commitments seriously.</li>
        <li>	Value knowledge and efficiency.</li>
        <li>	Loves difficult theoretical challenges.</li>
        <li>	Good leader - creative, innovative and resourceful.</li>
        <li>	Calm, collected, extremely logical and analytical.</li>
        <li>	Can work better independently.</li>
        <li>	Conflict or criticism affects his work performance.</li>
        <li>	Face challenge to act in situations that require quick decision making</li>
        <li>	Somewhat like to be reserved</li>
        <li>	With the ability to see an issue from many sides, makes him good at problem solving</li>";
        }
        
        if($VAR101=="INTP"){
        echo "<li>	Values knowledge above anything else.</li> 
        <li>	Likes, theory and abstract ideas.</li>
        <li>	Excellent individual contributor and likes to work independently </li>
        <li>	Richly imaginative and creative.</li>
        <li>	Good to handle conflict or criticism.</li>
        <li>	Very independent, unconventional, and original.</li>
        <li>	Is through and careful in assessing satiation</li>
        <li>	Gives value and priority to his work.</li>";
        }
        
        if($VAR101=="ISFJ"){
        echo "<li>	Warm and kind-hearted who want to believe the best in people.</li>
        <li>	takes his responsibilities very seriously.</li>
        <li>	Good listeners and highly observant and aware of people's feelings and reactions.</li>
        <li>	Excellent organizational capabilities.</li>
        <li>	Value security, tradition, and peaceful living.</li>
        <li>	Stable, practical, down-to-earth and good at handling relationships</li>
        <li>	Places other people's needs over his own. </li>
        <li>	Is not very expressive and does not like to get into a conflict</li>
        <li>	Takes feedback very seriously</li>";
        }
        
        if($VAR101=="ESTP"){
        echo "<li>	Action-oriented, Fast-paced and Energetic.</li>
        <li>	Highly observant, Enthusiastic, good sense of humour , Great motivator.</li>
        <li>	Excellent ability to see an immediate problem and quickly devise a solution.</li>
        <li>	Takes good last minute decisions in a difficult situation</li>
        <li>	Does well even in restrictions.</li>
        <li>	He would break up task into many components and then tackle them one by one</li>
        <li>	Has own strong belief and stick to his principles.</li>
        <li>	Is practical, dislikes abstract theory without practical application</li>
        <li>	Makes decisions based on facts and logic, decision-making process is extremely goal oriented.</li>
        <li>	Likes to initiate things and let others follow them through to completion.</li>";
        }
        
        if($VAR101=="INFJ"){
        echo "<li>	Good communication skill and expertise in reporting.</li>
        <li>	Takes his commitments very seriously, and seeks lifelong relationships.</li>
        <li>	Constantly seeks meaning and purpose in everything, is highly principled.</li>
        <li>	Has a caring nature towards his team mates.</li>
        <li>	Is creative, visionary and a good listener</li>
        <li>	Polite and soft by nature.</li>
        <li>	Intuitively understand people and situations.</li>
        <li>	Does not express in conflict and criticism situations.</li>
        <li>	Has very high expectations for themselves and others.</li>";
        }
        
        if($VAR101=="INFP"){
        echo "<li>	Loyal and committed.</li>
        <li>	Sensitive and perceptive about what others are feeling</li>
        <li>	Nurturing, supportive and encouraging</li>
        <li>	Strives for a win-win situation.</li>
        <li>	Does not want to get into conflict and criticism.</li>
        <li>	Works on the feedback to improve himself.</li>
        <li>	May react very emotionally to stressful situations.</li>
        <li>	Never seek for credits of the work he has done.</li>";
        }
        
        if($VAR101=="ENTP"){
        echo "<li>	Foresighted and creative.</li>
        <li>	Inventive and enterprising.</li>
        <li>	Strong skill of being leader</li>
        <li>	 Lively and energetic, able to motivate the team </li>
        <li>	Values knowledge and competence</li>
        <li>	Good at communication skills.</li>
        <li>	Well focused towards his work.</li>
        <li>	Strong decision making ability.</li>";
        }
        
        if($VAR101=="ENFP"){
        echo "<li>	Good at communication</li>
        <li>	Very perceptive about people's thought and motives </li>
        <li>	Motivational & inspirational, keep the team energetic</li>
        <li>	Soft and polite nature</li>
        <li>	lively sense of humour, dramatic, energetic, optimistic</li> 
        <li>	Strives for win-win situations </li>
        <li>	Value others need  </li>
        <li>	Usually loyal and dedicated towards the organization</li>
        <li>	Looks for new and creative things</li>
        <li>	Good team player, accepts and values people as individuals</li>";
        }
        
        if($VAR101=="ENTJ"){
        echo "<li>	Well focused towards his work.</li>
        <li>	Good team leading skills</li>
        <li>	Ambitious</li>
        <li>	Good influencing skills </li>
        <li>	Enthusiastic and energetic</li>
        <li>	Take criticism as opportunity for improvement </li>
        <li>	Good at communication</li>
        <li>	Good at prioritizing his own work and needs</li>
        <li>	Takes time to adjust to stressful situations</li>";
        }
        
        if($VAR101=="ESFJ"){
        echo "<li>	The selfless quality of his personality type is genuine and pure.</li>
        <li>	His happiness is closely tied into the happiness and comfort of others around them.</li>
        <li>	Values security and stability more and has a strong focus on work.</li>
        <li>	Generally, can be a very good money managers.</li>
        <li>	Prefer to do things in a more established way.</li>
        <li>	He is extremely good at reading others and often change his own ways accordingly</li>
        <li>	Usually has very well-formed ideas and is never shy about expressing his opinions.</li>
        <li>	Sometimes may give others needs more priority than his own</li>
        <li>	Often expressive and emotionally in a crunch situation </li>
        <li>	Likes to be in control if things that he is doing</li>";
        }
        
        if($VAR101=="ESFP"){
        echo "<li>	Is a good within a group.</li>
        <li>	Definitely a spontaneous, optimistic individual with good sense of humor.</li>
        <li>	Has great artistic and creative sense.</li>
        <li>	He is a great team players and gets excited by new experiences</li>
        <li>	Is practical and makes the best out of any situation</li>
        <li>	Hi is simple, straight-forward and honest</li>
        <li>	Is very good at explaining the problem.</li>
        <li>	Does not like to be in conflict situations.</li>
        <li>	Gives value to others needs.</li>
        <li>	Takes feedback seriously</li>";
        }
        
        if($VAR101=="ESTJ"){
        echo "<li>	Enthusiastic, hardworking and friendly.</li>
        <li>	Does his work very sincerely</li>
        <li>	Tries to put in a lot of effort to fulfil his duties and obligations.</li>
        <li>	Honours traditions and laws and has a very clear set of standards and beliefs.</li>
        <li>	Usually good with managing finance.</li>
        <li>	Self-confident, straightforward and likes to lead the team.</li>
        <li>	Very committed towards his work and responsibilities.</li>
        <li>	Takes the work pressure personally.</li>
        <li>	May be expressive in emotional situations</li>
        <li>	A good individual contributor</li>";
        }
        
        if($VAR101=="ENFJ"){
        echo "<li>	Creative and full of new ideas</li>
        <li>	Interacts easily with people and maintains good relationships</li>
        <li>	Cares about what others are feeling </li>
        <li>	Values structure and organization </li>
        <li>	Values harmony, and good at creating it</li>
        <li>	Strong organizational capabilities</li>
        <li>	Loyal and honest with everyone</li>
        <li>	Tendency to help and uplift others</li>
        <li>	Performs best under positive encouragement </li>
        <li>	Finds ways to get results under different circumstances</li>";
        }
    
    ?>
</ul>

<hr class="solid">
1. This report is based on the candidate’s attempts to the questions and is thus reflective of his performance during the assessment time. These assessment results should always be considered in the context of all available information about a person; do not use this as the sole factor for makingFc employment-related decisions.<br>
2. Response state is generated by our Auto Proctoring Tool: ‘Valid’ indicated that the response of the candidate to the questions are valid and fair. ‘Invalid’ response state indicates that the inference from the candidate’s response is not valid.<br>
3. Analytical Reasoning: the test of 30 mins durations with 20 multiple choice questions. These questions are random selected from KOB’s pool of more than 10000 questions categorized into three difficulty levels. The test blue print is of 50% Low, 30% Medium, 20% High difficulty level.<br>
4. Our technical assessments (40+ tests categories that can be selected via drop down menus) KOB’s subject matter experts are constantly updating the question banks keeping them relevant to the current time and need.
5. Coding Assessment: Unique Set of questions and Auto check code on different test cases in background. <br>
6. Psychometric Assessment: We have a tie-up with the experts acros who are working with us on personality-based tests. There is 70 set of questions that have a time duration of 30 minutes to attempt. <br><br>
<b>Note: The assessment is the outcome of the candidate’s most recent attempt.</b><br><br>
All the tests are <b>auto proctored</b> using KOB’s Artificial Intelligence based auto proctoring tool that monitors if the candidate is using any unfair means to respond to the questions. We also provide a video recording of the test session as per need.

</div>
</body>
</html>