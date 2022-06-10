<?php

include "connection.php";
$userid='';
$userid=$_GET['userid'];
$exam_category='';
// $id='';

$sql = mysqli_query($link,"SELECT * FROM exam_category WHERE id='" .$userid. "'");

if ($sql) 
{
       while($row=mysqli_fetch_array($sql))
    {
        $exam_category=$row["category"]; 
        $exam_time=$row["exam_time_in_minutes"];
        $id=$row["id"];
    }

} else {
    echo "Error: " . mysqli_error($link);
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Questions</title>
    <style>
         * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
body
{
    background-color:#F8F8F8;
}
        .roww:after {
            content: "";
            display: table;
            clear: both;
        }

        nav {
            top: 20px;
            position: absolute;
            z-index: 1;
            width: 100%;
        }

        .toggle,
        #toggle-item {
            display: none;
        }

        nav .cul {
            margin-right: 10px;
            float: right;
        }

        nav ul li {
            display: inline-block;
            margin: 0 5px;
            font-family: "Podkova", serif;
        }

        nav ul li a {
            color: black;
            font-size: 18px;
            padding: 7px 8px;
            border-radius: 3px;
            text-decoration: none;
        }
        nav ul li a:hover {
            transition: .5s;
            color: #cccccc;
        }
        
        .bcontainer
        {
            width: 77%;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            margin: auto;
            margin-top: 100px;
            background-color: white;
        }
        .image
        {
            background-position: center; 
            background-size: cover; 
            position: relative;
            background-color:#103F6E;
            float: left;
            width: 40%;
            height:520px;
            color:white;
            padding: 40px 20px;
        }
        .image h3
        {
            font-size: 40px;
            font-weight: normal;
            text-align: left;
            padding-bottom: 20px;
        }
        .image h5
        {
            padding-bottom: 10px;
            padding-left:15px;
        }
        .image li
        {
            padding-bottom: 5px;
        }
        .addpage
        {
            width: 60%;
            float: right;
            padding: 25px 0 25px 20px ; 
        }

        .addpage .form
        {
            width:600px;
            margin: auto;
        }
        .addpage h2
        {
            font-weight: normal;
            font-size: 35px;
            margin-bottom: 30px;
        }
        .addpage .boxx
        {
            float: left;
            margin-right: 70px;
        }
        .addpage .boxxx
        {
            float: left;
            width: 213px;
        }
        .addpage label
        {
            font-size: 14px;
            font-weight: bold;
        }
        .addpage .text
        {
            width: 115%;
            margin:10px 0 15px;
            border: 1px solid gray;
            border-radius:6px;
            padding: 5px 8px;
        }
        .addpage .text:focus
            {
                border: 1.5px solid #79b1ed;
                box-sizing: border-box;
                box-shadow: 0 0 4px 3px #BFDEFF;
                outline: none;  
            }
        .addpage .tex
        {
            padding-bottom: 10px;
        }
        .addpage .textt
        {
            width: 88%;
            margin:10px 0 15px;
            border: 1px solid gray;
            border: 1px solid gray;
            border-radius:6px;
            padding: 5px 8px;
            margin-right: 20px;
        }
        .addpage .textt:focus
            {
                border: 1.5px solid #79b1ed;
                box-sizing: border-box;
                box-shadow: 0 0 4px 3px #BFDEFF;
                outline: none;  
            }
        .addpage .text:focus
        {
            outline: none;
        }
        .addpage .textt:focus
        {
            outline: none;
        }
        .addpage .btnn
        {
            text-align: center;
        }
        .addpage button
        {
            padding: 12px 10px;
            cursor: pointer;
            font-size: 17px;
            outline: none;
            border:none;
            background-color:#103F6E;
            color: white;
            border: 5px;
            margin-top: 15px;
        }
        .addpage button:hover
        {
            background-color:#43b2f0;
            cursor: pointer;
        }
        @media (max-width:1200px)
        {
            .image
            {
                height:600px;
            }
            .addpage .form
            {
                width: 450px;
            }
            .addpage .boxx
            {
                float: left;
                margin-right: 0px;
            }
            .addpage .textt
            {
                width: 90%;
            }
            .addpage .text
            {
                width: 90%;
            }
        }
        @media (max-width:950px)
        {
            .image
            {
                height:810px;
            }
            .addpage .boxx
            {
                float: none;
                margin-right: 0;
            }
            .addpage .boxxx
            {
                float: none;
                width: auto;
            }
            .addpage .form
            {
                width: auto;
            }
            .addpage .textt
            {
                width: 90%;
            }
        }
        @media (max-width:680px)
        {
            .image
            {
                height:500px;
                float: none;
                width: auto;
            }
            .image h3
            {
                padding-top: 0px;
            }
            .addpage
            {
                margin-top: 50px;
                float: none;
                width: auto;
            }
           
        }
        @media (max-width:470px) {
            nav .cul {
                display: none;
            }

            .toggle {
                display: block;
                width: 100%;
            }

            .openbtn {
                display: block;
                font-size: 28px;
                cursor: pointer;
                padding: 4px 10px;
                border: none;
                background-color: rgb(0, 0, 0, .3);
                margin: 17px 30px 0;
                color: white;
                float: right;
            }

            .openbtn:hover {
                background-color: black;
            }

            #toggle-item {
                width: 100%;
                background-color: black;
                margin-top: 16px;
                padding: 10px 0;
                position: absolute;
            }

            .toggle-item hr {
                color: #999999;
                ;
            }

            .toggle-item .item {
                padding: 5px;
                text-align: center;
                font-size: 22px;
                font-weight: bold;
                width: 100%;
            }

            .toggle-item .item a {
                cursor: pointer;
                width: 100%;
                color: #999999;
            }

            .toggle-item .item a:hover {
                color: white;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="toggle">
            <button class="openbtn" id="nav-toggle" onclick="openNav()"><i class="fas fa-bars icon"></i></button>
        </div>
        <ul class="cul">
            <li><a href="addexamm.php">Create Test</a></li>
            <li><a href="https://35.154.101.124/CLient/test.php">Schedule Test</a></li>
            <li><a href="../final2.php">View Result</a></a></li>
            <li><a href="../CLient/logout.php">Logout</a></li>
            <li><div><a href="#"><i class="fas fa-user icon"></i></a></div></li>
        </ul>
        <div class="toggle-item" id="toggle-item">
            <div class="item"><a href="addexamm.php">Create Test</a></div>
            <hr>
            <div class="item"><a href="https://35.154.101.124/CLient/test.php">Schedule Test</a></div>
            <hr>
            <div class="item"><a href="../final2.php">View Result</a></a></li></div>
            <div class="item"><a href="../CLient/logout.php">Logout</a></div>
            <hr>
        </div>
    </nav>
    <script>
        $(document).ready(function () {
            $('#nav-toggle').click(function (e) {
                e.preventDefault();
                e.stopPropagation();
                $('#toggle-item').toggle();
            });
            $('#toggle-item').click(function (e) {
                e.stopPropagation();
            });
            $('body').click(function () {
                $('#toggle-item').hide();
            });
        });
    </script>
    <section>
            <div class="bcontainer">
                <div class="roww">
                <div class="image">
                    <h3> Add Questions to <?php echo $exam_category   ?> Test</h3>
                    <h5> Instructions: </h5>
                    <ol class="list">
                        <li>Their should be atleast 20 questions to display your test properly.</li>
                        <li>Initially add atleast 10 Easy, 7 medium & 3 hard Questions,so the test will match the creteria of levels.</li>
                        <li>Enter complete answer in "Enter Correction Answer" field from one of the options you have given.</li>
                    </ol>
                </div>
                <form action=""name="form1" method="post">
                <div class="addpage">
                    
                <div class="form">
                        <h2> Add new questions</h2>
                        <div><label>Enter Question </label></div>
                        <input type="text" name="question" class=" textt" placeholder="Enter Complete Question"  required>
                    
                    <div class="roww">
                        <div class="boxx">
                            <div><label> Add Option-1 </label></div>
                            <input type="text" name="opt1" class="text" placeholder="Option-1"  required>
                        </div>
                        <div class="boxx">
                            <div><label> Add Option-2</label></div>
                            <input type="text" name="opt2" class="text" placeholder="Option-2"  required>
                        </div>
                    </div>
                    <div class="roww">
                        <div class="boxx">
                            <div><label> Add Option-3</label></div>
                            <input type="text" name="opt3" class="text" placeholder="Option-3"  required>
                        </div>
                        <div class="boxx">
                            <div><label> Add Option-4 </label></div>
                            <input type="text" name="opt4" class="text" placeholder="Option-4"  required>
                        </div>
                    </div>
                    <div class="roww">
                        <div class="boxx">
                            <div><label> Enter Correction Answer </label></div>
                            <input type="text" name="answer" class=" text" placeholder="Enter Complete Answer from Above Options"  required>
                        </div>
                        <div class="boxxx">
                            <div><label> Question Level </label></div>
                            <select class= "text tex" name="level" value="Add Level" required>
                            <option>Select</option>
                            <option value="Easy">Easy</option>
                            <option value="Medium">Medium</option>
                            <option value="Hard">Hard</option>
			                </select>
                        </div>
                    </div>   
                    
                        <div class="btnn"><button name="submit1" class="btn" >Add Question</button></div>
                </div>
                    </div>
                    
             </form>
            </div>
            </div>
        </section>
    <div class="container mt-5 mb-5 pl-5 pr-5">

        <p style="background-color: rgba(128, 128, 128, 0.322); text-align:center; font-weight: bold; font-size: 17px;">Questions <?php echo $exam_category   ?> Test</p>
        <div class="table-responsive">
            <table class="table table-striped table-responsive-lg table-lg" style="border: 1px;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Option-1</th>
                        <th scope="col">Option-2</th>
                        <th scope="col">Option-3</th>
                        <th scope="col">Option-4</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Level</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                               <?php

                                    $count=0;
                                     $res=mysqli_query($link,"select * from questions where quiz_id= '$id' order by question_no asc")or die(mysqli_error($link));
                                    while($row=mysqli_fetch_array($res))
                                        {
                                            $count=$count+1;
                                            ?>
                                             <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $row['question']; ?></td>
                                            <td><?php echo $row['opt1']; ?></td>
                                            <td><?php echo $row['opt2']; ?></td>
                                            <td><?php echo $row['opt3']; ?></td>
                                            <td><?php echo $row['opt4']; ?></td>
                                            <td><?php echo $row['answer']; ?></td>
                                            <td><?php echo $row['level']; ?></td>
                                            <td><a href="updateques.php?userid=<?php echo $row["id"]; ?>&id=<?php echo $row["id"]; ?>">Edit</a></td>
                                            <td><a href="delete_options.php?userid=<?php echo $row['id']; ?>&id=<?php echo $row["id"]; ?>"  onclick="return confirm('Are you sure?');">Delete</a></td>
                                            
                                             </tr>


                                             <?php
                                                }
  


                                        ?>
                </tbody>
            </table>
        </div>
    </div>


     <?php
         if(isset($_POST["submit1"]))
            {   
               $loop=0;
               $count=0;
               $res=mysqli_query($link,"select * from questions where quiz_id= '$id' order by id asc")or die(mysqli_error($link));

            
               $count=mysqli_fetch_row($res);
               if($count==0)
               {

               }
              else
               {
                    while($row=mysqli_fetch_array($res))
                    {
                        $loop=$loop+1;
                        mysqli_query($link,"update questions set question_no='$loop' where id=$row[id]");




                     }
                } 

            $loop=$loop+1;
            $query="insert into questions values(NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category','$_POST[level]','$userid')";

            mysqli_query($link,$query) or die(mysqli_error($link));

            ?>
            <script type="text/javascript">
                //  alert("Question Added successfully");
                  window.location.href=window.location.href;
            </script>
           <?php
            
            }
          ?>




</body>

</html>