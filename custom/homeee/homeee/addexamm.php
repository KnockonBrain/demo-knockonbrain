<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
<style>
            *
            {
                padding: 0;
                margin: 0;
                text-decoration: none;
                list-style: none;
                box-sizing: border-box;
                font-family:'Open Sans',sans-serif;
            }
            .row:after 
            {
                content: "";
                display: table;
                clear: both;
            }
            nav
            {
                top:35px;
                position: absolute;
                z-index: 1;
                width: 100%;
            }
            .toggle, #toggle-item
            {
                display: none;
            }
            nav .cul
            {
                margin-right: 30px;
                float: right;
            }
            nav ul li
            {
                display: inline-block;
                margin: 0 5px;
                font-family: "Podkova", serif;
            }
            nav ul li a
            {
                color:#cccccc;
                font-size: 21px;
                padding: 7px 13px;
                border-radius: 3px;
                text-decoration: none;
            }
            nav ul li a:hover
            {
                transition: .5s;
                color: white;
            }
            .head
            {
                background-position: center; 
                background-size: cover; 
                position: relative;
                height:38vh;
                background-image:linear-gradient( rgba(0, 12, 45, 0.5), rgba(0, 12, 45, 0.5) ),url(images/green-chameleon-s9CC2SKySJM-unsplash.jpg);
            }
            .head h1
            {
                padding-top: 16vh;
                color: white;
                font-size: 47px;
                margin: auto;
                text-align: center;
                
            }
            @media (max-width:470px)
            {
                nav .cul
                {
                    display: none;
                }
                .toggle
                {
                    display: block;
                    width: 100%;
                }
                .openbtn 
                {
                    display: block;
                    font-size: 28px;
                    cursor: pointer;
                    padding: 4px 10px;
                    border: none;
                    background-color: rgb(0,0,0,.3);
                    margin:17px 30px 0;
                    color:white;
                    float: right;
                }
                .openbtn:hover
                {
                    background-color: black;
                }
                #toggle-item
                {
                    width:100%;
                    background-color: black;
                    margin-top: 16px;
                    padding: 10px 0;
                    position: absolute;
                }
                .toggle-item hr
                {
                    color:#999999;;
                }
                .toggle-item .item
                {
                    padding: 5px;
                    text-align: center;
                    font-size: 22px;
                    font-weight: bold;
                    width: 100%;
                }
                .toggle-item .item a
                {
                    cursor: pointer;
                    width: 100%;
                    color:#999999;
                }
                .toggle-item .item a:hover
                {
                    color:white;
                }
            }
            </style>
    <title>Project</title>
</head>

<body>
    <nav>
                <div class="toggle">
                    <button class="openbtn" id="nav-toggle" onclick="openNav()" ><i class="fas fa-bars icon"></i></button>  
                </div>
                <ul class="cul">
                    <li><a href="#">Send Invite</a></li>
                    <li><a href="#">Add Exam</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            <div class="toggle-item" id="toggle-item">
                <div class="item"><a href="#">Send Invite</a></div><hr>
                <div class="item"><a href="#">Add Exam</a></div><hr>
                <div class="item"><a href="#">Logout</a></div><hr>
            </div>
        </nav>
                            <script>
                                $(document).ready(function()
                                    {
                                        $('#nav-toggle').click( function(e) 
                                        {
                                            e.preventDefault();
                                            e.stopPropagation(); 
                                            $('#toggle-item').toggle();
                                        });
                                        $('#toggle-item').click( function(e) 
                                        {
                                            e.stopPropagation(); 
                                        });
                                        $('body').click( function() 
                                        {
                                            $('#toggle-item').hide();
                                        });
                                    });   
                            </script>
        <section class="head">
            <h1> Add Exam</h1>
        </section>
                            
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <div class="row" style="width: 100%;">
                    <p style="background-color: rgba(128, 128, 128, 0.322); font-weight: bold; margin-left: 12px;">Add Exam Categories</p>
                </div>
                <form class="mb-3" style="background-color: rgba(128, 128, 128, 0.103); padding:10px">
                    <div class="mb-3">
                        <label class="mb-2">New Exam Category</label>
                        <input class="form-control" type="text" placeholder="Add Exam Category">
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">Exam Time In Minutes</label>
                        <select class="form-select">
                            <option>10 min</option>
                            <option>20 min</option>
                            <option>30 min</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">Number of Questions</label>
                        <select class="form-select">
                            <option>10 questions</option>
                            <option>20 questions</option>
                            <option>30 questions</option>
                          </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Exam</button>
                </form>
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="row">
                    <p style="background-color: rgba(128, 128, 128, 0.322); font-weight: bold;">Exam Categories</p>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-responsive-lg table-lg" style="border: 1px;">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Exam Name</th>
                                <th scope="col">Exam Time</th>
                                <th scope="col">Total Questions</th>
                                <th scope="col">Add Questions</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Shailygiit.exam_Shailygiit</td>
                                <td>20</td>
                                <td>10</td>
                                <td>Add Questions</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Python_Shailygiit</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Add Questions</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Reasoning_Shailygiit</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Add Questions</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Java_Shailygiit</td>
                                <td>30</td>
                                <td>10</td>
                                <td>Add Questions</td>
                                <td>Delete</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>