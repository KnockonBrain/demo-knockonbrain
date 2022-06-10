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
<link rel = 'stylesheet' href = 'index.css'>
<script src = 'source2.js'></script>
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

<body style="background-color: #eee; font-family: monospace; margin: 8px;" >

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
    <label class="ques-content"><b>Ques: </b><?php echo nl2br($qdesc); ?></label>
    <!--<div class="outer-flex-box">-->
    <div style="display:flex;">
    <div class="column1">
        <h4>Input</h4>
        <textarea class="sbtn1" type="text" ><?php echo $inp?></textarea>
    </div>
    <div class="column2">
        <h4>Output</h4>
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
    <div class="outer-flex-box">
    <div class="flex-container">
    <div class="column1">
        <h4>Input</h4>
        <textarea class="btn1" name="input1" id="input"  type="text" ><?php echo $inp?></textarea>
    </div>
    <div class="column2">
        <h4>Output</h4>
        <textarea readonly class="btn2" id="output" ></textarea>
    </div>
</div>
</div>
</form>
</body>
</html>
