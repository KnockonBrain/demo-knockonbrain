<?php
  include "../custom/jheader.php";
  session_start();
    $cid=$_SESSION['ID'];
    include 'data.php';
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport">
<title>Recruiter Details</title>
    <!--<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>-->
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->
<!--pagination-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<script>
      $(document).ready(function() {
    $('#table').DataTable( {
        "pagingType": "numbers"
    } );
} );
    </script>



<style>
body {
    background: #fff;
    font-size: 15px;
    margin-top: 0;
    /*margin-left:200px;*/
    /*background: #80d4ff;*/
}

  .tab{
           /*width: 100%;*/
           table-layout: fixed;
           margin: 25px 30px;
           color:black;
           margin-left:23%;
           
       }
.table-responsive {
    box-shadow: rgb(0 0 0 / 5%) 0px 20px 20px, rgb(0 0 0 / 12%) 0px 4px 6px, rgb(0 0 0 / 7%) 0px 6px 13px, rgb(0 0 0 / 5%) 0px -2px 5px;
    margin-left: 19%;
    width: 87%;
   /*padding:-50px -80px;*/
}
.table-wrapper {
    min-width: 960px;
    background: #fff;
    padding: 20px 20px;
    border-radius: 3px;
    box-shadow: 1px 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 15px;
    color: #fff;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title .btn {
    color: #566787;
    float: right;
    font-size: 13px;
    background: #fff;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-title .btn:hover, .table-title .btn:focus {
    color: #566787;
    background: #f2f2f2;
}
.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
    width:20px;
    
}
table.table tr th:first-child {
    width: 60px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}	
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}
table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
}
table.table td a:hover {
    color: #2196F3;
}
table.table td a.settings {
    color: #2196F3;
}
table.table td a.delete {
    color: #F44336;
}
table.table td i {
    font-size: 19px;
}
table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 5px;
}
.status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}
.text-success {
    color: #10c469;
}
.text-info {
    color: #62c9e8;
}
.text-warning {
    color: #FFC107;
}
.text-danger {
    color: #ff5b5b;
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}
.loader-bg .loader-track {
    display: none;
}
#rec h1{
    font-size:2rem;
    font-weight:bolder;
    color:black;
    text-align:center;
    margin-top:-40px;
    margin-bottom: 20px;
    margin-left:20%;
}

@media (max-width: 600px){
    #rec h1{
        margin-top: 20px !important;
        margin-left: 0%;
    }
    .tab td{
        padding: 0px !important;
    }
    .table-responsive{
        width: 88% !important;
        margin-left: 20px;
    }
}

</style>
</head>

<body>

<div id="rec">
    <h1>Invited Candidates Status</h1>
</div>
   
<div class="container-xl" style="font-family: 'Varela Round', sans-serif; color: #566787;font-size: 13px;">
    <div class="table-responsive">
        <div class="table-wrapper">
        
            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>						
                        <th>Test1</th>
                        <th>Test2</th>
                        <th>Test3</th>
                        <th>Test4</th>
                        <th>Test5</th>
                        <th>Status</th>
                        <!--<th>Action</th>-->
                    </tr>
                </thead>
               <tbody>
                     <?php
                   $count=1;
                     $query="Select DISTINCT(email), date from(
            (SELECT email, date FROM details where cid=$cid ORDER BY date )
            UNION
            (SELECT email, date FROM code_details where cid=$cid ORDER BY date )
            UNION
            (SELECT email, date FROM psycho_details where cid=$cid ORDER BY date )) as tableee45 GROUP BY email ORDER BY date desc";
    
                    
                    $data = mysqli_query($con1, $query);
        
                  while(($result=mysqli_fetch_array($data))){
                    echo "<tr><td> ".$count++."</td>";
                    $var_tempemail=$result[0];
                    
                    $date=array();
                    $stmt1=mysqli_query($con1,"SELECT SUBSTRING(date, 1, 10) from details where cid=$cid and email='$var_tempemail' group by date order by date desc");
                    $dataz=mysqli_fetch_array($stmt1);
                     array_push($date, $dataz[0]);
                     
                    $stmt1=mysqli_query($con1,"SELECT SUBSTRING(date, 1, 10)  from code_details where cid=$cid and email='$var_tempemail' group by date order by date desc");
                    $dataz=mysqli_fetch_array($stmt1);
                     array_push($date, $dataz[0]);
                     
                     $stmt1=mysqli_query($con1,"SELECT SUBSTRING(date, 1, 10) from psycho_details where cid=$cid and email='$var_tempemail' group by date order by date desc");
                    $dataz=mysqli_fetch_array($stmt1);
                     array_push($date, $dataz[0]);
                     
                    rsort($date);
                    $realdate=$date[0];
                    
                    $namearr=array();
                    $namearr2=array();
	                $a=0;
                    
                    // Fetching test names
                    $queryinside=mysqli_query($con1,"SELECT * from details where cid=$cid and email='$var_tempemail' and date like '$realdate%' group by quiz_id");

                    while($dataz=mysqli_fetch_array($queryinside)){
                        array_push($namearr,$dataz['quiz_id']);
                        array_push($namearr2,$dataz['status']);
                        $a++; 
                    }
                    
                    $queryinside2=mysqli_query($con1,"SELECT * from code_details where cid=$cid and email='$var_tempemail' and date like '$realdate%' group by id");

                    while($datay=mysqli_fetch_array($queryinside2)){
                        array_push($namearr,416);
                        array_push($namearr2,$datay['status']);
                        $a++; 
                    }
                    
                    $queryinside3=mysqli_query($con1,"SELECT * from psycho_details where cid=$cid and email='$var_tempemail' and date like '$realdate%' group by id");

                    while($datax=mysqli_fetch_array($queryinside3)){
                        array_push($namearr,417);
                        array_push($namearr2,$datax['status']);
                        $a++; 
                    }
                     echo "<td>$var_tempemail</td>";
                     $i=0;
                     for($k=0;$k<count($namearr);$k++){
                          $i++;
                          $value=$namearr[$k];
                         
                            if($value==416){
                                $stmt=mysqli_query($con1,"SELECT lang from code_details where cid=$cid and email='$var_tempemail'  and date like '$realdate%' group by id");

                            $dataw=mysqli_fetch_array($stmt);
                           if($namearr2[$k]=="Attempted")
                            echo "<td style='color:green';> Coding: ".$dataw[0]."</td>";
                            else
                            echo "<td> Coding: ".$dataw[0]."</td>";
                            }
                        
                            else{
                                $stmt=mysqli_query($con1,"SELECT category from exam_category where id='$value'");

                    $dataw=mysqli_fetch_array($stmt);
                    if($namearr2[$k]=="Attempted")
                            echo "<td style='color:green';>".$dataw[0]." </td>";
                            else
                             echo "<td> ".$dataw[0]."</td>";
                    
                   
                            }
                      }
                  
$neg=0;
foreach($namearr2 as $value2){
    
    if($value2=="Not Attempted"){
        $neg++;
    }
}
if($neg==0){
     $status="Completed";
}

else if($neg==count($namearr2)){
    $status="Not Completed";
}
else{
    $status="Partially Completed";
}


$i=count($namearr2);

    while($i!=5){
        echo "<td> - </td>";
        $i++;
    }


if($status=="Attempted"){
?>
<td><span class="status text-success">&bull;</span> <?php echo $status; ?></td>
<?php
}
else if($status=="Not Attempted"){
   ?>
<td><span class="status text-danger">&bull;</span> <?php echo $status; ?></td>
<?php 
}
else{
    ?>
<td><span class="status text-warning">&bull;</span> <?php echo $status; ?></td>
<?php 
}
                       echo "</tr>";
                        
                  }
                    ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>     
</body>
</html>