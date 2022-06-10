<?php
$server="localhost";
$username="giitsolu_psychotest";
$password="Test@giit09";

$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection failed due to ".mysqli_connect_error());
 }
 mysqli_select_db($con,'giitsolu_testphp');
 $id = $_GET['id'];
 $sql = "select * from DeployModel_results where id='$id' ";
 $traits = '';
 $per = '';
 $email = '';
 $result = $con->query( $sql );
 if ( $result->num_rows > 0 ) {
     while( $row = $result->fetch_assoc() ) {
         $traits = $row['traits'];
         $per = $row['percentage'];
         $email = $row['email'];
     }
 }

 //echo $traits;
 //echo $per;
// echo $email;

 $traits_arr = preg_split ("/\,/", $traits);
 $per_arr = preg_split ("/\,/", $per);

 //print_r($traits_arr);
 //echo $per_arr[0];
 
 include "../client12/jheader.php";
 $con->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Psychometric Test</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
     <link rel="shortcut icon" type="image/png" href="../favicon-logo1.png"/>
    <link rel=" icon" type="image/png" href="../favicon-logo1.png"/>
    <!--Stylesheet-->
    <!--<link rel="stylesheet" href="testing.css"> -->
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #fff;
}
.wrapper1{
    width: 60%;
    min-width: 500px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 60%;
    top: 500%;
}
.container{
    width: 100%;
    padding: 50px 30px;
    background-color: rgba(255,255,255,0.06);
    border: 2px solid rgba(255,255,255,0.06);
    border-radius: 10px;
    box-shadow: 0 20px 30px rgba(0,0,0,0.2);
    backdrop-filter: blur(10px);
}

.container *{
    font-family: "Poppins",sans-serif;
    color: #020000;
    font-weight: 500;
}
.heading{
    margin-bottom: 10px;
    letter-spacing: 2px;
    font-size:20px;
}
.hemail{
    position:inline;
    margin-bottom:20px;
}
.demail{
    font-weight:bold;
}
.skills:not(:last-child){
    margin-bottom: 30px;
}
.details{
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}
.bar{
    position: relative;
    background-color: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.06);
    padding: 7px 10px;
    border-radius: 20px;
    backdrop-filter: blur(10px);
}
.bar div{
    position: relative;
    width: 0;
    height: 5px;
    border-radius: 10px;
    background-color: #badefc;
    border: 1px solid #1c97fc;
    box-shadow: 0 0 5px rgba(28,151,252,0.6);
}
#html-bar{
    animation: html-fill 2s forwards;
}
@keyframes html-fill{
    100%{
        width: <?php echo $per_arr[0] ?>%;
    }
}
#css-bar{
    animation: css-fill 2s forwards;
}
@keyframes css-fill{
    100%{
        width: <?php echo $per_arr[1] ?>%;
    }
}
#js-bar{
    animation: js-fill 2s forwards;
}
@keyframes js-fill {
    100%{
        width: <?php echo $per_arr[2] ?>%;
    }
}
#jQuery-bar{
    animation: jQuery-fill 2s forwards;
}
@keyframes jQuery-fill{
    100%{
        width: <?php echo $per_arr[3] ?>%;
    }
}
#jQuery-bar1{
    animation: jQuery-fill1 2s forwards;
}
@keyframes jQuery-fill1{
    100%{
        width: <?php echo $per_arr[4] ?>%;
    }
}
    </style>
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61309803d6e7610a49b3408e/1feit3k4h';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
    <div class="wrapper1">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="container">
            
            <div class="heading">PSYCHOMETRIC TEST RESULTS</div>
            <div class="hemail">Candidate E-mail:&nbsp;&nbsp;<span class="demail"><?php echo $email?></span> </div>
               
            
            <div class="skills">
                <div class="details">
                    <span><?php echo $traits_arr[0] ?></span>
                    <span><?php echo $per_arr[0] ?>%</span>
                </div>
                <div class="bar">
                    <div id="html-bar"></div>
                </div>
            </div>
            <div class="skills">
                <div class="details">
                    <span><?php echo $traits_arr[1] ?></span>
                    <span><?php echo $per_arr[1] ?>%</span>
                </div>
                <div class="bar">
                    <div id="css-bar"></div>
                </div>
            </div>
            <div class="skills">
                <div class="details">
                    <span><?php echo $traits_arr[2] ?></span>
                    <span><?php echo $per_arr[2] ?>%</span>
                </div>
                <div class="bar">
                    <div id="js-bar"></div>
                </div>
            </div>
            <div class="skills">
                <div class="details">
                    <span><?php echo $traits_arr[3] ?></span>
                    <span><?php echo $per_arr[3] ?>%</span>
                </div>
                <div class="bar">
                    <div id="jQuery-bar"></div>
                </div>
            </div>
             <div class="skills">
                <div class="details">
                    <span><?php echo $traits_arr[4] ?></span>
                    <span><?php echo $per_arr[4] ?>%</span>
                </div>
                <div class="bar">
                    <div id="jQuery-bar1"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>