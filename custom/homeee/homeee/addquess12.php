
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
body
{
    background-color: whitesmoke;
}
        .roww:after {
            content: "";
            display: table;
            clear: both;
        }

        nav {
            top: 25px;
            position: absolute;
            z-index: 1;
            width: 100%;
        }

        .toggle,
        #toggle-item {
            display: none;
        }

        nav .cul {
            margin-right: 30px;
            float: right;
        }

        nav ul li {
            display: inline-block;
            margin: 0 5px;
            font-family: "Podkova", serif;
        }

        nav ul li a {
            color: black;
            font-size: 21px;
            padding: 7px 13px;
            border-radius: 3px;
            text-decoration: none;
        }

        nav ul li a:hover {
            transition: .5s;
            color: #cccccc;
        }
        
        .bcontainer
        {
            width: 85%;
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
            background-image:url(images/challenge.jpg);
            float: left;
            width: 40%;
            height:500px;
        }
        .image h3
        {
            font-size: 46px;
            font-weight: normal;
            margin-top: 200px;
            text-align: center;
        }
        .addpage
        {
            width: 60%;
            float: right;
            padding: 20px 30px; 
        }

        .addpage .form
        {
            width: 500px;
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
            margin-right: 50px;
        }
        .addpage .boxxx
        {
            float: left;
            width: 194px;
        }
        .addpage label
        {
            font-size: 14px;
            font-weight: bold;
        }
        .addpage .text
        {
            width: 100%;
            margin:10px 0 15px;
            border: 1px solid gray;
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            padding: 0px 0 10px;
        }
        .addpage .tex
        {
            padding-bottom: 15px;
        }
        .addpage .textt
        {
            width: 88%;
            margin:10px 0 15px;
            border: 1px solid gray;
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            padding: 0px 0 10px;
            margin-right: 20px;
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
        @media (max-width:950px)
        {
            .image
            {
                height:745px;
            }
            .addpage .boxx
            {
                float: none;
            }
            .addpage .boxxx
            {
                float: none;
                width: auto;
            }
            .addpage .form
            {
                width: 350px;
            }
            .addpage .textt
            {
                width: 86%;
            }
            .addpage .tex
            {
                width: 86%;
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
                margin-top: 0;
                padding-top: 200px;
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
<?php
// include "header.php";
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

    <nav>
        <div class="toggle">
            <button class="openbtn" id="nav-toggle" onclick="openNav()"><i class="fas fa-bars icon"></i></button>
        </div>
        <ul class="cul">
            <li><a href="href="https://35.154.101.124/CLient/test.php"">Send Invite</a></li>
            <li><a href="exam_category.php">Add Exam</a></li>
            <li><a href="../CLient/logout.php">Logout</a></li>
        </ul>
        <div class="toggle-item" id="toggle-item">
            <div class="item"><a href="#">Send Invite</a></div>
            <hr>
            <div class="item"><a href="#">Add Exam</a></div>
            <hr>
            <div class="item"><a href="#">Logout</a></div>
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
                    <h3> Add Questions Inside <?php echo $exam_category   ?> Test </h3>
                </div>
                <div class="addpage">
                    
                <div class="form">
                        <h2> Add new questions</h2>
                        <div><label>Add Question </label></div>
                        <input type="text" name="question" class=" textt" placeholder="Question" id="question" required>
                    
                    <div class="roww">
                        <div class="boxx">
                            <div><label> Add Option1 </label></div>
                            <input type="text" name="opt1" class="text" placeholder="Option1" id="opt1" required>
                        </div>
                        <div class="boxx">
                            <div><label> Add Option2</label></div>
                            <input type="text" name="opt2" class="text" placeholder="Option2" id="opt2" required>
                        </div>
                    </div>
                    <div class="roww">
                        <div class="boxx">
                            <div><label> Add Option3</label></div>
                            <input type="text" name="opt3" class="text" placeholder="Option3" id="opt3" required>
                        </div>
                        <div class="boxx">
                            <div><label> Add Option4 </label></div>
                            <input type="text" name="opt4" class="text" placeholder="Option4" id="opt4" required>
                        </div>
                    </div>
                    <div class="roww">
                        <div class="boxx">
                            <div><label> Add Answer </label></div>
                            <input type="text" name="answer" class=" text" placeholder="Answer" id="ans" required>
                        </div>
                        <div class="boxxx">
                            <div><label> Add Level </label></div>
                            <select class= "text tex" name="level" value="Add Level" required>
                            <option>Select</option>
                            <option value="Easy">Easy</option>
                            <option value="Medium">Medium</option>
                            <option value="Hard">Hard</option>
			</select>
                        </div>
                    </div>   
                    
                        <div class="btnn"><button class="btn" name="submit1">Add Question</button></div>
                </div>
                    </div>
                    </div>
            </div>
        </section>
    <div class="container mt-5 mb-5 pl-5 pr-5">

        <p style="background-color: rgba(128, 128, 128, 0.322); font-weight: bold; font-size: 17px;">Questions</p>
        <div class="table-responsive">
            <table class="table table-striped table-responsive-lg table-lg" style="border: 1px;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Option1</th>
                        <th scope="col">Option2</th>
                        <th scope="col">Option3</th>
                        <th scope="col">Option4</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Level</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                                    $count=0;
                                    $res=mysqli_query($link,"select * from questions where category= '$exam_category' order by question_no asc")or die(mysqli_error($link));
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
                                            <td><a href="edit_options.php?userid=<?php echo $row["id"]; ?>&id=<?php echo $row["id"]; ?>">Edit</a></td>
                                            <td><a href="delete_options.php?userid=<?php echo $row['id']; ?>&id=<?php echo $row["id"]; ?>">Delete</a></td>
                                            
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
               $res=mysqli_query($link,"select * from questions where category= '$exam_category' order by id asc")or die(mysqli_error($link));

            
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
                 alert("Question Added successfully");
                  window.location.href=window.location.href;
            </script>
           <?php
            
            }
          ?>
</body>

</html>