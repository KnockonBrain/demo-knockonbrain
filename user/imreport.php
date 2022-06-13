<?php
    $server="localhost";
    $username="giitsolu_testphp";
    $password="A!i-E_MjibT{";

    $con=mysqli_connect($server,$username,$password);
    if(!$con){
    die("Connection failed due to mlk".mysqli_connect_error());
    }
    mysqli_select_db($con,'giitsolu_testphp');
    $id = $_GET['id'];
    $sql = "select * from mbti_result where id='$id' ";
    $trait = '';
    $per = '';
    $result = $con->query( $sql );
    if ( $result->num_rows > 0 ) {
        while( $row = $result->fetch_assoc() ) {
            $traits = $row['per_type'];
            $per = $row['per_score'];
        }
    }
   
    //echo $traits;
    //echo $per;
   // echo $email;
   
    $per_arr = preg_split ("/\,/", $per);
    if($traits=="INTJ"){
        $img="images/Intj.png";
        $label="ARCHITECT";
    }
    elseif($traits=="INTP"){
        $img="images/Intp.png";
        $label="LOGICIAN";
    }
    elseif($traits=="ENTJ"){
        $img="images/entj.png";
        $label="COMMANDER";
    }
    elseif($traits=="ENTP"){
        $img="images/entp.png";
        $label="DEBATER";
    }
    elseif($traits=="INFJ"){
        $img="images/infj.png";
        $label="ADVOCATE";
    }
    elseif($traits=="INFP"){
        $img="images/infp.png";
        $label="MEDIATER";
    }
    elseif($traits=="ENFJ"){
        $img="images/enfj.png";
        $label="PROTAGONIST";
    }
    elseif($traits=="ENFP"){
        $img="images/enfp.png";
        $label="CAMPAIGNER";
    }
    elseif($traits=="ISTJ"){
        $img="images/istj.png";
        $label="LOGISTICIAN";
    }
    elseif($traits=="ISFJ"){
        $img="images/isfj.png";
        $label="DEFENDER";
    }
    elseif($traits=="ESTJ"){
        $img="images/estj.png";
        $label="EXECUTIVE";
    }
    elseif($traits=="ESFJ"){
        $img="images/esfj.png";
        $label="CONSUL";
    }
    elseif($traits=="ISTP"){
        $img="images/istp.png";
        $label="VIRTUOSO";
    }
    elseif($traits=="ISFP"){
        $img="images/isfp.png";
        $label="ADVENTURER";
    }
    elseif($traits=="ESTP"){
        $img="images/estp.png";
        $label="ENTERPRENUER";
    }
    else {
        $img="images/esfp.png";
        $label="ENTERTAINER";
    }
    /* print_r($per_arr);
    echo $traits;
    echo $per_arr[0]; */
    include "../client12/jheader.php";
    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M2DF9WK');</script>
<!-- End Google Tag Manager -->
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" type="image/png" href="../favicon-logo1.png"/>
    <link rel=" icon" type="image/png" href="../favicon-logo1.png"/>  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
  <style>
      .wrapper1{

width:900px;height:500px;
padding-top: 10px;
padding-right:20px;
background-color: rgba(255,255,255,0.06);
border: 2px solid rgba(255,255,255,0.06);
border-radius: 10px;
box-shadow: 0 20px 30px rgba(0,0,0,0.2);
backdrop-filter: blur(10px);
  position:absolute;
  top:150%;
  left:28%;
  
}
.skills:not(:last-child){
margin-bottom: 30px;
}
.details{
width: 100%;
display: flex;
justify-content: space-between;
margin-bottom: 10px;
font-family: "Poppins",sans-serif;
color: #020000;
font-weight: 500;
}
.bar{
position: relative;
background-color: rgba(255,255,255,0.06);
border: 1px solid rgba(255,255,255,0.06);
padding: 9px 2px;
border-radius: 20px;
backdrop-filter: blur(10px);
}
.bar div{
position: relative;
width: 0;
height: 5px;
border-radius: 10px;
background-color: #addaff;
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


.name{
 font-family: "Poppins",sans-serif;
  color: #314f68;
font-size: 2em;
font-weight: 600;
margin-bottom: 10px;
text-align: center;
padding-top:20px;
}
.name-type{
font-family: "Poppins",sans-serif;
color: #020000;
font-weight: 500;
letter-spacing: 2px;
font-size: 2.3em;
font-weight: 600;
margin-bottom: 30px;
text-align: center;

}
.img-type{
width: 290px;
height:485px;
}
  </style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2DF9WK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="container wrapper1">
     <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">
        <img src="<?php echo $img ?>" class="img-type" >
    </div>
    <div class="col-sm-8" >
        <div class="name">Personality Type</div>
        <div class="name-type"><?php echo $label ?> ( <?php echo $traits ?> )</div>
        <div class="skills">
            <div class="details">
                <span><?php if($traits[0]=='I'){echo "INTROVERTED";} else {echo "EXTROVERTED";} ?></span>
                <span><?php echo $per_arr[0] ?>%</span>
            </div>
            <div class="bar">
                <div id="html-bar"></div>
            </div>
        </div>
        <div class="skills">
            <div class="details">
                <span><?php if($traits[1]=='N'){echo "INTUITIVE";} else {echo "OBSERVANT";} ?></span>
                <span><?php echo $per_arr[1] ?>%</span>
            </div>
            <div class="bar">
                <div id="css-bar"></div>
            </div>
        </div>
        <div class="skills">
            <div class="details">
                <span><?php if($traits[2]=='F'){echo "FEELING";} else {echo "THINKING";} ?></span>
                <span><?php echo $per_arr[2] ?>%</span>
            </div>
            <div class="bar">
                <div id="js-bar"></div>
            </div>
        </div>
        <div class="skills">
            <div class="details">
                <span><?php if($traits[3]=='F'){echo "PROSPECTING";} else {echo "JUDGING";} ?></span>
                <span><?php echo $per_arr[3] ?>%</span>
            </div>
            <div class="bar">
                <div id="jQuery-bar"></div>
            </div>
        </div>
        
    </div>
  </div>
    </div>

</body>
</html>
