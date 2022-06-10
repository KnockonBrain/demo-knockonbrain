<?php include('config.php') ?>
<?php
  session_start();
  $upload_name= $_COOKIE['upload-name'];
  if (!isset($_SESSION['fn1']) || empty($_SESSION['fn1'])) //Assigning upload-file name
  {
    $_SESSION['fn1']=$upload_name;
  }
  else{
    $_SESSION['fn2']=$upload_name;
  }
  $qid= $_SESSION['qid'];
  if (!isset($_SESSION['lg1']) || empty($_SESSION['lg1'])) //Assigning language used by candidate
  {
    $_SESSION['lg1']=$_POST['lang'];
  }
  else{
    $_SESSION['lg2']=$_POST['lang'];
  }
  if (!isset($_SESSION['source1']) || empty($_SESSION['source1']))
  {
    $_SESSION['source1']=$_POST['source'];
  }
  else{
    $_SESSION['source2']=$_POST['source'];
  }

  if(isset($_POST['sub']) || !isset($_POST['sub1']) ){
        $input=array();
        $output=array();
        $sql = "SELECT inp1,inp2,inp3,out1,out2,out3 FROM code_question where qid='$qid' ";
        $result = $con->query($sql);
        $comp=["source_code" => $_POST['source'],"lang"=>$_POST['lang'] ];
        if ($result->num_rows > 0) {
         // output data of each row
            while($row = $result->fetch_assoc()) {
              $comp=["source_code" => $_POST['source'],"lang"=>$_POST['lang'],"input1"=> $row["inp1"],"input2"=>$row["inp2"],"input3"=>$row["inp3"],"output1"=> $row["out1"],"output2"=>$row["out2"],"output3"=>$row["out3"]];
        }
    } 
$source_code=$_POST['source'];
$_SESSION['lang']=$_POST['lang'];
$json=json_encode($comp);
$con->close();
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="demo.css">
<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    // API_KEY=  "dc68868170msh3026102c62a3405p16f8f1jsn2fecb9edd7b3";
    // API_KEY="562674fc4bmshef40738b4483f02p170561jsn9931ca7599fc";//sir last
    API_KEY = "3c1ba83cbcmshc6ff2ef22ce9c27p1f0a86jsn413dd2dddd8a";//sir final
    // API_KEY = "4fedfc7ad2mshc8604b72a0eb3d5p1fb597jsnd3e8b57570eb";//priyanshi
    // API_KEY = "02452f42ddmshac04c52ab0a9cedp1c9aa4jsn425135497922";//sir last
    // API_KEY = "f3c070bba9mshaa55aa20ff8af9dp1e70b8jsnb259d60bdbda";//sir new
    // API_KEY = "dc68868170msh3026102c62a3405p16f8f1jsn2fecb9edd7b3";//sir old
   // API_KEY = "cc8b719d1amsh9f15d4aa315ea24p176650jsnf0b3ff728bd6";
  //  API_KEY = "02452f42ddmshac04c52ab0a9cedp1c9aa4jsn425135497922";
  //API_KEY = "f44121d93dmshfc59844194f3c18p108c72jsnd3606fe98cf6";
 // API_KEY = "a5259cec17mshe952feba9845786p116fedjsn1493d206b753";
  var comp=<?= $json?>;
  var input="hello";
  var output1="hi";
  var i;
  var count=0;
  let max_count=0;
  //API_KEY = "cc8b719d1amsh9f15d4aa315ea24p176650jsnf0b3ff728bd6"; // Get yours for free at https://judge0.com/ce or https://judge0.com/extra-ce
  var language_to_id = {
    "Bash": 46,
    "C": 50,
    "C#": 51,
    "C++": 54,
    "Java": 62,
    "Python": 71,
    "Ruby": 72,
    "PHP": 68,
    "C#": 51,
    "JavaScript":63,
    "Ruby":72,
};
for(i=0;i<3;i++){
        if(i==0){
            input=comp.input1;
            output1=comp.output1;
        }
        else if(i==1){
            input=comp.input2;
            output1=comp.output2;
        }
        else if(i==2){
            input=comp.input3;
            output1=comp.output3;
        }
      run();
} 
if(i==3){
    console.log(count);
}

function encode(str) {
    return btoa(unescape(encodeURIComponent(str || "")));
}

function decode(bytes) {
    var escaped = escape(atob(bytes || ""));
    try {
        return decodeURIComponent(escaped);
    } catch {
        return unescape(escaped);
    }
}

function errorHandler(jqXHR, textStatus, errorThrown) {
}

function check(token) {
    $.ajax({
        url: `https://judge0-ce.p.rapidapi.com/submissions/${token}?base64_encoded=true`,
        type: "GET",
        headers: {
            "x-rapidapi-host": "judge0-ce.p.rapidapi.com",
            "x-rapidapi-key": API_KEY
        },
        success: function (data, textStatus, jqXHR) {
            if ([1, 2].includes(data["status"]["id"])) {
             setTimeout(function() { check(token) }, 1000);
            }
            else {
                var output = [decode(data["compile_output"]), decode(data["stdout"])].join("\n").trim();
                max_count+=1;
                console.log(data["status"]["description"]);
            if(data["status"]["id"] != "3")
                console.log("fail");
            else{
                count=count+1;
            }
            if(max_count==3){
                document.cookie = "myJavascriptVar = " + count; 
              $(document).ready(function() {
                   // document.getElementById('msg').style.display="block";
                   //  $('.circle-loader').toggleClass('load-complete');
                   //  $('.checkmark').toggle();
                });
                setTimeout(function(){
                    window.location.href = 'result.php';
                }, 3000);
              }
            }
        },
        error: errorHandler
    });
}

function run() {
    let encodedExpectedOutput = encode(output1);
   if (encodedExpectedOutput === "") {
       encodedExpectedOutput = null; // Assume that user does not want to use expected output if it is empty.
    }

    $.ajax({
        url: "https://judge0-ce.p.rapidapi.com/submissions?base64_encoded=true&wait=false",
        type: "POST",
        contentType: "application/json",
        headers: {
            "x-rapidapi-host": "judge0-ce.p.rapidapi.com",
            "x-rapidapi-key": API_KEY
        },
        data: JSON.stringify({
            "language_id": language_to_id[comp.lang],
            "source_code": encode(comp.source_code),
            "stdin": encode(input),
            "expected_output": encodedExpectedOutput,
            "redirect_stderr_to_stdout": true
        }),
        success: function(data, textStatus, jqXHR) {
         //   $("#output").val($("#output").val() + "\n🎉 Submission created.");
            console.log("before");
            setTimeout(function() { check(data["token"]) }, 2000);
            console.log("after");
        },
        error: errorHandler
    });

}


</script>
</head>
<body>
<!-- <label class="msg" id="msg">Successfully Submitted</label> -->
<!-- end about -->

<div class="content">
   <div class="loading">
<p>loading</p>
      <span></span>
   </div>
</div>
</body>
</html>





