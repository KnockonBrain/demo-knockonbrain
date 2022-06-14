<?php include( 'config.php' ) ?>
<?php
session_start();
$qid = $_GET['qid'];
$_SESSION['qid'] = $qid;
if ( $_SESSION['code1'] == $qid ) {
    if ( $_SESSION['enable1'] == 0 ){   //If already attempted question
        echo '<script type="text/javascript">';
        echo 'alert("Already attempted this question");';
        echo 'window.location.href = "test.php";';
        echo '</script>';
    } 
    else {   //if not attempted
        $_SESSION['enable1'] = 0;
    }
}
if ( $_SESSION['code2'] == $qid ) {
    if ( $_SESSION['enable2'] == 0 ) {  //If already attempted question
        echo '<script type="text/javascript">';
        echo 'alert("Already attempted this question");';
        echo 'window.location.href = "test.php";';
        echo '</script>';
    } else {  //if not attempted
        $_SESSION['enable2'] = 0;

    }
}
$sql = "select inp1, qdesc,out1 from code_question where qid='$qid' ";
$qdesc = '';
$inp='';
$out1='';
$result = $con->query( $sql );
if ( $result->num_rows > 0 ) {
    while( $row = $result->fetch_assoc() ) {
        $qdesc = $row['qdesc'];
        $inp = $row['inp1'];
        $out1=$row['out1'];
    }
}
$con->close();
?>
<html>
<head>
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src = 'codemirror/lib/codemirror.js'></script>
<link href = 'codemirror/lib/codemirror.css' rel = 'stylesheet'/>
<script src = 'codemirror/mode/shell/shell.js'></script>
<script src = 'codemirror/mode/clike/clike.js'></script>
<script src = 'codemirror/mode/python/python.js'></script>
<script src = 'codemirror/mode/ruby/ruby.js'></script>
<link rel = 'stylesheet' href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<!--<link rel = 'stylesheet' href = 'index.css'>-->
<!--<script src = 'source14.js'></script>-->
<script>
    //API_KEY = "cc8b719d1amsh9f15d4aa315ea24p176650jsnf0b3ff728bd6"; // Get yours for free at https://judge0.com/ce or https://judge0.com/extra-ce
// API_KEY = "f44121d93dmshfc59844194f3c18p108c72jsnd3606fe98cf6";sir
//API_KEY = "4fedfc7ad2mshc8604b72a0eb3d5p1fb597jsnd3e8b57570eb";//priyanshi
 API_KEY = "3c1ba83cbcmshc6ff2ef22ce9c27p1f0a86jsn413dd2dddd8a";//sir final
//  API_KEY = "02452f42ddmshac04c52ab0a9cedp1c9aa4jsn425135497922";//sir last
//  API_KEY="562674fc4bmshef40738b4483f02p170561jsn9931ca7599fc";//sir last
// API_KEY = "f3c070bba9mshaa55aa20ff8af9dp1e70b8jsnb259d60bdbda";//sir new
//  API_KEY = "dc68868170msh3026102c62a3405p16f8f1jsn2fecb9edd7b3";//sir old
//API_KEY="a5259cec17mshe952feba9845786p116fedjsn1493d206b753";
var language_to_id = {
    "C": 50,
    "C#": 51,
    "C++": 54,
    "Java": 62,
    "Python": 71,
    "PHP":68,
    "C#": 51,
    "JavaScript":63,
    "Ruby":72,
};

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
    $("#output").val(`${JSON.stringify(jqXHR, null, 4)}`);
    $("#run").prop("disabled", false);
}

function check(token) {
  //  $("#output").val($("#output").val() + "\n⏬ Checking submission status...");
    $.ajax({
        url: `https://judge0-ce.p.rapidapi.com/submissions/${token}?base64_encoded=true`,
        type: "GET",
        headers: {
            "x-rapidapi-host": "judge0-ce.p.rapidapi.com",
            "x-rapidapi-key": API_KEY
        },
        success: function (data, textStatus, jqXHR) {
            if ([1, 2].includes(data["status"]["id"])) {
                $("#output").val($("#output").val() + "\nℹ️ Status: " + data["status"]["description"]);
                setTimeout(function() { check(token) }, 1000);
            }
            else {
                var output = [decode(data["compile_output"]), decode(data["stdout"])].join("\n").trim();
                // var eoutput=$("#eoutput").val();
                 var eoutput2='<?php echo $out1; ?>';
               document.getElementById("cstatus2").style.visibility="visible";
                // $("#youtput").val(` `);
                
                if(data["status"]["description"] == "Accepted")
                {
                    data["status"]["description"] = "Compilation Successfull";
                    var statusp;
                    if(output==eoutput2){
                        statusp ="Your sample test case passed";
                        $("#cstatus").val(`Congratulations !!`);
                        $("#cstatus2").val(`Your code passed against sample test case, click on submit button to submit your code.`);
                        
                        document.getElementById("ctitle").style.color = "green";
                        document.getElementById("cstatus").style.color = "green";
                        
                        // $("#ctitle").style.color="red";
                        
                    }
                    else{
                        // data["status"]["description"] =data["expected_output"];
                        statusp ="Wrong Answer ";
                        $("#cstatus").val(`Wrong Answer :(`);
                        $("#cstatus2").val(`Your output and expected output are inconsistent.`);
                         document.getElementById("ctitle").style.color = "red";
                          document.getElementById("cstatus").style.color = "red";
                     
                    }
                    
                //for compiler msg (id=output)
                $("#output").val(`${statusp == "Your sample test case passed" ?  "🟢" :"🔴" } ${data["status"]["description"]}\n${statusp}`);
                //for yout output(id=youtput)
                 $("#youtput").val(`${output}`);
                }
                else{
                $("#cstatus").val(`Compilation Error :(`);
                $("#cstatus2").val(`There is some error in your code.`);
                
                 document.getElementById("ctitle").style.color = "red";
                 document.getElementById("cstatus").style.color = "red";
                //for compiler msg (id=output)
                $("#output").val(`🔴 ${data["status"]["description"]}\n${output}`);
                //for yout output(id=youtput)
                 $("#youtput").val(`~ no response ~`);
                }
                $("#run").prop("disabled", false);
            }
        },
        error: errorHandler
    });
}

function run() {
  //  alert("Hello");
    $("#run").prop("disabled", true);
    $("#output").val(" Compiling...");
     $("#cstatus").val("....");
      $("#cstatus2").val(` `);
      $("#youtput").val(` `);
 //   console.log($("#lang").val());
  //  console.log(typeof ($("#lang").val()));

    let encodedExpectedOutput = encode($("#expected-output").val());
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
            "language_id": language_to_id[$("#lang").val()],
            "source_code": encode($("#source").val()),
            "stdin": encode($("#input").val()),
            "expected_output": encodedExpectedOutput,
            "redirect_stderr_to_stdout": true
        }),
        success: function(data, textStatus, jqXHR) {
          //  $("#output").val($("#output").val() + "\n🎉 Submission created.");
            setTimeout(function() { check(data["token"]) }, 2000);
        },
        error: errorHandler
    });
}
function run1(){
    console.log("running");
    console.log(var1);
 //   alert($_SESSION['lang']);
  //  console.log( $("#output").val());
 //   $("#output").val(" Creating submission...");

}


$("body").keydown(function (e) {
    if (e.ctrlKey && e.keyCode == 13) {
        run();
    }
});

$("textarea").keydown(function (e) {
    if (e.keyCode == 9) {
        e.preventDefault();
        var start = this.selectionStart;
        var end = this.selectionEnd;

        var append = "    ";
        $(this).val($(this).val().substring(0, start) + append + $(this).val().substring(end));

        this.selectionStart = this.selectionEnd = start + append.length;
    }
});

$("#source").focus();
</script>
<!--<script src = 'temptemp2.js'></script>-->
<script src = 'https://code.jquery.com/jquery-3.5.0.js'></script>
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/video.js/7.0.0/video.min.js'></script>

<!-- Load RecordRTC core and adapter -->
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/RecordRTC/5.6.1/RecordRTC.js'></script>
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/6.1.4/adapter.js'></script>

<!-- Load VideoJS Record Extension -->
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/videojs-record/4.2.0/videojs.record.min.js'></script>
<script src = 'https://www.webrtc-experiment.com/EBML.js'></script>
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.5.0/jszip.min.js'></script>
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js'></script>
<script src = 'screen.js'></script>
<script>

window.history.forward();

function noBack() {
    window.history.forward();
}
var countDownDate = new Date( '<?php echo date('r', $_SESSION['TIMER']) ?>' ).getTime();

// Update the count down every 1 second
var x = setInterval( function() {

// Get today's date and time
var now = new Date().getTime();
    
// Find the distance between now and the count down date
var distance = countDownDate - now;
    
// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
// Output the result in an element with id="demo"
document.getElementById("clock-time").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
if(hours==0 && minutes==5 && seconds==0){
        alert('5 min are left');
    }
  // If the count down is over, write some text 
if (distance < 0) {
    clearInterval(x);
    alert('Time is Over!');
    window.location.href = "final.php";
}
}, 1000);
</script>
    <link href="codemirror/theme/dracula.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Compiler</title>
    <style>
    *{
    margin:0;
    padding:0;
}
body{
    background-color: #f3f7f7;
}
textarea {
    border: none;
    outline: none;
   
}
.header{
    height: 30px;
    background: #39424e;
    color:white;
    padding: 10px 10px;
    position: absolute;
    top:0;
    left:0;
    width: 98%;
    position:fixed;
    z-index:99;
}
.heading{
    background-color:#39424e ;
    position: absolute;
    top:10px;
    font-size: 26px;
    font-weight: 700;
    letter-spacing: 1px;
}
.clock-icon{
    color:white;
    background-color:#39424e ;
    position: absolute;
    top:13px;
    right:130px;
    font-size:25px !important;
}
.clock-time{
    color:white;
    background-color:#39424e ;
    position: absolute;
    top:13px;
    right:25px; 
    font-size:18px;
}
.code-panel{
    background-color:#e7eeef;
    padding-top:20px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 40px;
    box-shadow: rgb(0 0 0 / 20%) 0px 6px 16px 0px;
}
.outer-code-panel{
    padding: 5px 10px;
    margin-top:70px;
}
.code-heading{
    display: inline;
    font-size: 26px;
    font-weight: 700;
    margin-left:2px;
}
.lang-heading{
    display: inline;
    font-size: 18px;
    margin-left:880px; 
    position:absolute;
    top:100px;
    font-family:-webkit-body;
    font-weight:bold;
}
.ques-content{
    margin-left:2px;
    font-size:18px; 
}
.code-editor{
    margin-top: 20px;
}
.drp-lang{
    display: inline;
    float: right;
    margin-right: 10px;
}
.code-header{
    margin-bottom: 8px;
}
select{
    display: inline-block;
  box-sizing: border-box;
  border: 1px solid #eee;
  padding:2px 6px;
  width: 120px;
  height: 30px;
}
.submission{
    padding:15px 10px;
    height: 50px;

}
.btn{
    border-radius: 2px;
    background-color: #1ba94c;
    color: #fff;
    padding: 8px 10px;
    border: 1px solid #1ba94c;
    box-shadow: 0 4px 12px 0 rgba(27,169,76,.5);
    font-family: monaco,Courier,monospace;
    font-weight: 700;
    font-size: 20px;
    cursor: pointer;
    float: right;
    margin-right: 28px;
}
.btn-stop-recording{
    border-radius: 2px;
    background-color: #09f;
    color: #fff;
    padding: 8px 10px;
    border: 1px solid #09f;
    box-shadow: 0 4px 12px 0 rgb(25 178 229 / 50%);
    font-family: monaco,Courier,monospace;
    font-weight: 700;
    font-size: 20px;
    cursor: pointer;
    float: right;
    margin-right: 10px;
}
video{
    visibility:hidden;
    display:none;
}
.flex-container {
    display: flex;
    width: 100%;
    flex-direction: column;
    font-family: Georgia, serif;
    /*height:270px;*/
    /*margin-bottom: 15px;*/
    /*background-color:#e7eeef;*/
    /*padding-top:20px;*/
    /*padding-left: 10px;*/
    /*padding-right: 10px;*/
    /*padding-bottom: 40px;*/
    /*box-shadow: rgb(0 0 0 / 20%) 0px 6px 16px 0px;*/
    background: white;
  }
  
  .column1 {
    flex:30%;
    margin-bottom: 10px;
   
  }
  .column2 {
    flex:70%;

  }
  .btn1{
      height:230px;
      width: 90%;
      margin:10px 15px;
      resize: none;
      font-size: 18px;
      padding-left:5px;
      font-family: Georgia, serif;
  }
  .btn2{
    height:230px;
    width: 96%;
    margin:10px 15px;
    resize: none;
    font-size: 15px;
    padding-left:3px;
    font-family: Georgia, serif;
}
.btnp{
    height: 100px;
    width:90% ;
    background: #e1e7e8;
    margin:10px 15px;
    resize: none;
    font-size: 15px;
    padding-left:3px;
    font-family: Georgia, serif;
}
.sbtn1{
      height:130px;
      width: 90%;
      margin:10px 15px;
      resize: none;
      font-size: 18px;
      padding-left:5px;
      font-family: Georgia, serif;
  }
 
h4{
    margin-left:15px;
    font-size: 20px;
    color: #383838;
    /*font-weight: 700;*/
    margin-top: 5px;
}
h5{
    font-size: 12px !important;
    color: grey;
}
.outer-flex-box{
    display: flex;
    justify-content: center;
    padding: 5px 10px;
    margin-top: -20px;
}
.cstatus{
    background-color: #e1e7e8;
    
    font-weight: 700;
    margin-left:15px;
    padding-top:20px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 40px;
    box-shadow: rgb(0 0 0 / 20%) 0px 5px 16px -2px;
}
.h2{
    font-size: 31px !important;
}
        .sbtn1{
      height:130px;
      width: 90%;
      margin:10px 15px;
      resize: none;
      font-size: 18px;
      padding-left:5px;
      font-family: Georgia, serif;
  }
    </style>
</head>

<!--<body style="background-color: #eee; font-family: monospace; margin: 8px;" >-->
<body style="background-color: #e1e7e8; font-family: monospace; margin: 8px;" >
    <form action="demo.php" id="myform1" method="post" >
    <video controls autoplay playsinline></video>
    <div class="header">
            <label class="heading">CODING TEST</label>
            <i class="fa fa-clock-o clock-icon" aria-hidden="true"></i>
            <label class="clock-time" id="clock-time"></label>
        </div>
<div class="outer-code-panel">
    <div class="code-panel">
    <div class="code-header">
    <label class="code-heading">Code Here</label>
    <label class="lang-heading">Choose Language</label>
    <select name="lang" id="lang" class="drp-lang">
    <option selected><?php 
            $lang=$_SESSION['main-lang'];
            if($lang == "Cpp")
              {
                $lang="C++";
                echo $lang;
              }
            else if($lang == "Csharp")
              {
                $lang="C#";
                echo $lang;
              }
            else{
              echo $lang;
            }
            
     ?></option>
      <!--  <option>Bash</option>
        <option>C#</option>
        <option selected>C++</option>
        <option>C</option>
        <option>Java</option>
        <option>Python</option>
        <option>Ruby</option> -->
    </select>
</div>
<div class="code-ques">
    <label class="ques-content"><b>Ques: </b><?php echo nl2br($qdesc); ?></label><br>
    <!--<div class="outer-flex-box">-->
    <div style="display:flex;">
    <div class="column1">
        <h4 style="font-size: 20px;">Sample Input</h4>
        <textarea class="sbtn1" type="text" ><?php echo $inp?></textarea>
    </div>
    <div class="column2">
        <h4 style="font-size: 20px;">Sample Output</h4>
        <textarea class="sbtn1"  type="text" ><?php echo $out1?></textarea>
    </div>
</div>
<!--</div>-->
    <label class="ques-content"><b><br>
    Note: </b><br>1.Please note the resemblance between Sample Output and your Output.<br>2.Do not print any extra line or extra space in your output.<br>3.Kindly note the Output is case sensitive.</label>
</div>
<div class="code-editor">
    <textarea name="source" id="source" >
</textarea>
</div>
    <script>
                var editor = CodeMirror.fromTextArea
                    (document.getElementById('source'), {
                        lineNumbers: true,
                        autoRefresh:true,
                        styleActiveLine: true,
                        value:"You can code here!",
                        mode: "text/x-c++src",
                        theme: "dracula"
                    });
                    editor.setSize(null, 350);
                    editor.save();
                    var elem = document.getElementById('lang').value;
                    if(elem==="Java"){
                       // editor.setValue("public class GFG { \npublic static void main(String args[]) \n\t{ \n\t\tSystem.out.println(\"Hello World\"); \t} }");
                       editor.setValue("import java.io.*; \nimport java.util.Scanner; \npublic class Main { \npublic static void main(String args[]) \n\t{ \n\t\tSystem.out.println(\"Hello World\"); \n\t} \n}");
                    }
                    else if(elem=="C++"){
                             editor.setValue("#include <iostream>\n#include <string>\n\nint main()\n{\n\tstd::cout << \"Hello World! \" ;\n\treturn 0;\n}");
                    }
                    else if(elem=="C"){
                        editor.setValue("#include <stdio.h>\nint main()\n{\n\tprintf(\"Hello World!\");\n\treturn 0;\n}");
                    }
                    else if(elem=="Python"){
                        editor.setValue("def func():\n\tprint(\"Hello World\")\nfunc()");
                    }
                    else if(elem=="PHP"){
                        editor.setValue("\<\?php\n\techo \"Hello World!\"\n\?\>");
                    }
                    else if(elem =="C#")
                    {
                        editor.setValue("using System;\n\nnamespace HelloWorld\n{\n\tclass Program\n{\n\t\tstatic void Main(string[] args)\n\t\t\t{\n\t\t\t\t Console.WriteLine(\"Hello World!\"); \n\t\t\t}\n\t\t}\n\t}");
                    }
                    else if(elem == "JavaScript"){
                        editor.setValue("console.log(\"Hello World!!! \")");
                    }
                    else if(elem == "Ruby"){
                        editor.setValue("puts \"Hello World\"");
                    }
                   document.getElementById('lang').addEventListener('change', function() {
                       editor.save();
                       document.getElementById('source').value=editor.getValue();
                       elem=this.value;
                       var language;
                       if(elem==="C")
                            language="text/x-c";
                       else if(elem==="C++")
                            language="text/x-c++src";
                        else if(elem==="Java"){
                            language="text/x-java";
                            console.log("vnhgvgh");
                            document.getElementById('source').value="jhcbjskancjkasn";
                            console.log("vnhgvgh");
                        }
                        else if(elem == "PHP")
                            language="text/x-php";
                        else if(elem == "JavaScript")
                            language="text/javascript";
                        else if(elem == "C#")
                            language ="text/x-csharp";
                        else if(elem==="Python")
                            language="python";
                        else if(elem==="Ruby")
                            language="text/x-ruby";
                        else if(elem=="Bash")
                            language="shell";
                     //editor.setOption("mode", language);
                       editor.setOption("mode", language);  
                    });
                    console.log(elem);   
                    function changing(){
                    document.getElementById('source').value=editor.getValue();
                       console.log(editor.getValue());
                       console.log(document.getElementById('source').value);
                       window.scrollBy(0, 500);
                run();
            } 
        
        </script>
   </div>
</div>  
    <div class="submission">
        <input type="button"  name="sub1" class="btn-stop-recording" id="btn-stop-recording"  value="Submit" >
        <input  type="button" class="btn"  onclick="changing()" value="Run" />
    </div> 
     <div class="cstatus">
      
       <textarea readonly disabled="yes" class="btnp" name="cstatus" id="cstatus" type="text" style="background: white; width:97.7% !important;; margin-left:25px !important; font-size:30px;height: 62px;text-align:center;
    padding: 10px;padding-bottom:0px;margin-bottom:0px;color:black">Click on run button to run your code against sample test case.</textarea><br>
        <textarea readonly disabled="yes" class="btnp" name="cstatus2" id="cstatus2" type="text" style="background:white; width:97.7% !important;; margin-left:25px !important; font-size:20px;height: 40px;text-align:center;
    padding: 10px;color:black;margin-top:0px;padding-top:0px; visibility: hidden;">Click on Run button to run your code against sample test case...</textarea><br>
     
    <div class="outer-flex-box">
    <div class="flex-container" style="margin-left: 15px;">
        <div class="column1" id="ctitle" style="color: black;margin-left:15px;
    font-size: 20px;
    color: #383838;
    margin-top: 5px;">
           Sample Test Case
        </div>
    <div class="column1">
        <h4>Input</h4>
        <textarea readonly disabled="yes" class="btnp" name="input1" id="input"  type="text" style="background: #c2c4c4;"><?php echo $inp?></textarea>
    </div>
    <div class="column1">
        <h4>Expected Output</h4>
        <textarea readonly disabled="yes" class="btnp" name="eoutput" id="eoutput" type="text" style="background: #c2c4c4;"><?php echo $out1?> </textarea>
    </div>
     </div>
    <div class="flex-container">
        <div class="column1">
        <h4 style="padding-top: 43px; ">Compiler Message</h4>
        <textarea readonly disabled="yes" class="btnp" name="output" id="output"  type="text" ></textarea>
    </div>
    <div class="column2">
        <h4>Your Output</h4>
        <textarea readonly disabled="yes" class="btnp" id="youtput"></textarea>
    </div>
</div>
</div>
</div> <br>
</form>
</body>
</html>
