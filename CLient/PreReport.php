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
 
include "../client12/jheader.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Result Table</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  </head>
  <style>
table {
    color:black;
    border-collapse: collapse;
    margin: auto;
    width: 100%;
    padding: 2rem 2 rem !important;
    margin-bottom: 1rem; 
    padding-top:10px !important;
    padding-bottom:10px !important;
    overflow:scroll;
  
}

.table td, .table th {
    border-top: 1px solid #eaeaea;
    word-wrap:break-word!important;
    padding: 1.05rem 0.75rem;
    white-space:normal;
}


tr:hover td {
    background-color: #edf6fa; 
}
.card {
    width:150%!important;
    margin-bottom:80px;
    background-color: #fff;
    border: 0;
    border-radius: .55rem;
    display: flex;
    flex-direction: column;
    word-wrap: break-word;
    background-clip: border-box;
    padding: 1.5rem 1.5rem 1rem 1.5rem;
    box-shadow: 0 9px 12px 0 #035753;
    border-radius:0px!important;
    max-height:610px!important;
   overflow-y:auto;
}
.cardheader {
    
    padding: 2px 20px 10px;
    background: 0 0;
    margin-bottom: 0;
}
.image{
    width: 70px;
    height: 60px;
    margin-top: -20px;
    margin-left: 210px;
    margin-bottom: -70px
}
.butn{
    background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
  border-color: #04a9f5;
  display: inline-block;
  font-weight: 400;
  text-decoration: none;
  border-radius: 5px;
  color: black;
  cursor: pointer;
}

.butn:hover{
	color: white;
	transition: all 500ms ease;
}
@media screen and (max-width: 1100px){
   
   .card{
       width:fit-content!important;
   }
   
   .image{
       
       display:none;
   }
    
}
@media all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait) {
  .card { 
      width:200%!important; 
      
  } 
   .image{
       
       display:none;
   }/*css rules for ipad portrait */
}
@media all and (device-width: 1024px) and (device-height: 768px) and (orientation:landscape) {
  .card { 
      color: blue; 
      
  } 
   .image{
       
       display:none;
   }/*css rules for ipad landscape */
}
@media screen and (max-width: 792px){
    
 
  .card {
      margin-left:10px;
      /*width:100%!important;*/
      overflow-x:scroll;
  }
  .table{
      overflow-x:scroll!important;
  }
  #filter{
      margin-top:25px;
      padding: 9px ;
      margin-left:10px;
  }
    .image{
       
       display:none;
   } 
    
}

@media (max-width:425px)
{
    html{
        width:fit-content;
        overflow:none!important;
    }
   .table{
       
       width:300px;
   }
   .card{
       width:fit-content!important;
   }

}
  </style>
 <body>
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
    <div class="col-xl-8 col-md-6 col-sm-12" >
                                    <div class="card Recent-Users" >
                                        <div class="card-header">
                                            <div>
                                                <img src="icon.png" class="image"></img> 
                                            </div>
                                           <center><h3>Candidate Report</h3></center>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive">
                                                 <?php
                                                if($cid==1175 || $cid==43 || $cid=1500){
                                                    ?>
                                                    <table class="table table-hover col-sm-12"  id="table">
                                                 
                                            <thead> 
        <tr>
            <th>SNo.</th>
            <th>Date</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Report</th>
        </tr>
        </thead>
        <tbody>
            <?php
            
                   $count=1;
                   $query="Select DISTINCT(Email),MAX(result_id) from(
                    (SELECT  Email,result_id FROM results where cid=$cid ORDER BY result_id )
                    UNION
                    (SELECT Email, rid FROM code_result where cid=$cid ORDER BY rid )
                    UNION
                    (SELECT  Email,id FROM mbti_result where cid=$cid ORDER BY id )) as tableee45 GROUP BY Email ORDER BY MAX(result_id) DESC,Email";
                    $data = mysqli_query($con, $query);
        
                  while(($result=mysqli_fetch_array($data))){
                    echo "<tr><td> ".$count++."</td>";
                    $var_tempemail=$result[0];
                    
                    $datequery=mysqli_query($con,"SELECT substring(End_time,1,10) from results WHERE cid=$cid and Email='$var_tempemail'");
                    $dataN=mysqli_fetch_array($datequery);
                    
                    if(is_null($dataN)){
                    $datequery= mysqli_query($con,"SELECT substring(end_time,1,10) from code_result WHERE cid=$cid and email='$var_tempemail'");
                    $dataN = mysqli_fetch_array($datequery);
                    
                    if(is_null($dataN)){
                        $datequery = mysqli_query($con,"SELECT substring(etime,1,10) from mbti_result WHERE cid=$cid and email='$var_tempemail'");
                        $dataN = mysqli_fetch_array($datequery);
                        if(is_null($dataN));
                        else{
                       		//mbti_result table results
                            $varN= $dataN[0];
                            }
                    }
                    else{
                    	//code_result table results
                        $varN= $dataN[0];
                        }
                }
                else{
                	//results table 
                    $varN= $dataN[0];
                }
                
                 
                    $queryinside=mysqli_query($con,"SELECT can_name from results where cid=$cid and email='$var_tempemail'");
                    $data2 = mysqli_fetch_array($queryinside);
                    
                    if(is_null($data2)){
                    $queryinside = mysqli_query($con,"SELECT can_name FROM code_result WHERE cid=$cid and email='$var_tempemail'");
                    $data2 = mysqli_fetch_array($queryinside);
                    
                    if(is_null($data2)){
                        $queryinside = mysqli_query($con,"SELECT can_name FROM mbti_result WHERE cid=$cid and Email='$var_tempemail'");
                        $data2 = mysqli_fetch_array($queryinside);
                        if(is_null($data2));
                        else{
                       		//mbti_result table results
                            $varRE= $data2['can_name'];
                            }
                    }
                    else{
                    	//code_result table results
                        $varRE= $data2['can_name'];
                        }
                }
                else{
                	//results table 
                    $varRE= $data2['can_name'];
                    }
                    echo "<td>".$varN."</td>";
                    echo "<td>".$varRE."</td>";
                    echo "<td> ".$var_tempemail."</td>";
               ?>
                    <td>
                    <form action="https://35.154.101.124/CLient/CandidateA_Report.php" method="post">
                        <input type=hidden id=currentemail name=currentemail value=<?php echo "$var_tempemail"?>>
              			<button class="butn" type="submit" style="padding: 8px; font-size: 14px;"> View Report</button></td>
              			</form>
              	</tr>
              	<?php
                  }
                ?>
       
       
        </tbody>
               
                                                </table> 
                                                    <?php
                                                }else{
                                                    ?>
                                                <table class="table table-hover col-sm-12"  id="table">
                                                 
                                            <thead> 
        <tr>
            <th>SNo.</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Report</th>
        </tr>
        </thead>
         <?php
                   $count=1;
                     $query="Select DISTINCT(Email),MAX(result_id) from(
    (SELECT  Email,result_id FROM results where cid=$cid ORDER BY result_id )
    UNION
    (SELECT Email, rid FROM code_result where cid=$cid ORDER BY rid )
    UNION
    (SELECT  Email,id FROM mbti_result where cid=$cid ORDER BY id )) as tableee45 GROUP BY Email ORDER BY MAX(result_id) DESC,Email";
    
                    
                    $data = mysqli_query($con, $query);
        
                  while(($result=mysqli_fetch_array($data))){
                    echo "<tr><td> ".$count++."</td>";
                    $var_tempemail=$result[0];
                    
                      $queryinside=mysqli_query($con,"SELECT can_name from results where cid=$cid and email='$var_tempemail'");
                    $data2 = mysqli_fetch_array($queryinside);
                    
                    
                    
                     if(is_null($data2)){
                    $queryinside = mysqli_query($con,"SELECT can_name FROM code_result WHERE cid=$cid and email='$var_tempemail'");
                    $data2 = mysqli_fetch_array($queryinside);
                    
                    if(is_null($data2)){
                        $queryinside = mysqli_query($con,"SELECT can_name FROM mbti_result WHERE cid=$cid and Email='$var_tempemail'");
                        $data2 = mysqli_fetch_array($queryinside);
                        if(is_null($data2));
                        else{
                       		//mbti_result table results
                            $varRE= $data2[0];
                            }
                    }
                    else{
                    	//code_result table results
                        $varRE= $data2[0];
                        }
                }
                else{
                	//results table 
                    $varRE= $data2[0];
                    }
                    
                    echo "<td>".$varRE."</td>";
                    echo "<td> ".$var_tempemail."</td>";
               ?>
                    <td>
                    <form action="https://35.154.101.124/CLient/Candidate_Report.php" method="post">
                        <input type=hidden id=currentemail name=currentemail value=<?php echo "$var_tempemail"?>>
              			<button class="butn" type="submit" style="padding: 8px; font-size: 14px;"> View Report</button></td>
              			</form>
              	</tr>
              	<?php
                  }
                ?>
       
       
        </tbody>
               
                                                </table>
                                                 <?php 
                                                } 
                                                ?>
                                                <!--<div id="pageNavPosition" class="pager-nav" align="center"></div>-->
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
</body>
</html>
  