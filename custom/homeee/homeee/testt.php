
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title></title>
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
                width: 100%;
                z-index: 1;
                float: right;
            }
            .toggle, #toggle-item
            {
                display: none;
            }
            nav .cul
            {
                margin-right: 70px;
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
                background-image:linear-gradient( rgba(0, 12, 45, 0.5), rgba(0, 12, 45, 0.5) ),url(images/aminities-bg-1024x683.jpg);
                margin: 0;
                padding: 0;
            }
            .head h1
            {
                padding: 110px 0 310px;
                margin-left: 18%;
                color: white;
                font-size: 47px;
            }
            .test
            {
                width: 880px;
                background-color: white;
                margin: auto;
                box-sizing: border-box;
                box-shadow: 0 40px 120px -40px rgba(0, 0, 0, 0.5), 0 40px 120px -40px rgba(0, 0, 0, 0.5);
                top: 240px;
                position: absolute;
                left: 1%;
                right: 1%;
            }
            .test .testform
            {
                background-color: white;
                color:black;
                width: 530px;
                float: left;
                padding: 30px 50px 0px;
            }
            .test .info
            {
                float: right;
                background-color:#103F6E;
                color: white;
                width: 350px;
                padding: 40px 0px 170px 0px;
            }
            .test .info h4
            {
                text-align: center;
                font-size: 23px;
                margin-bottom: 40px;
            }
            .test .info .icon
            {
                margin-bottom: 28px;
                padding-left: 35px;
            }
            .test .info .icon i
            {
                font-size: 25px;
                margin-right: 15px;
            }
            .testform .rtest
            {
                float: right;
                font-size: 15px;
            }
            .testform .rtest i
            {
                color:0090FF;
            }
            .testform label
            {
                width: 100%;
                font-size: 17px;
            }
            .testform .rtest label
            {
                font-size: 14px;
            }
            .testform .text
            {  
                border-radius:6px;
                padding: 10px 8px;
                margin: 5px 10px 15px 0px;
                width: 100%;
                border: 1px solid gray;
            }
            .testform .text:focus
            {
                border: 1.5px solid #79b1ed;
                box-sizing: border-box;
                box-shadow: 0 0 4px 3px #BFDEFF;
                outline: none;  
            }
            .testform .btn
            {
                text-align: center;  
            }
            .testform button
            {
                padding: 12px 15px;
                width:170px;
                margin-top: 10px;
                cursor: pointer;
                font-size: 20px;
                outline: none;
                border:none;
                background-color:#3b4fe4;
                color: white;
                border-radius: 10px;
            }
            .testform button:hover
            {
                background-color:#43b2f0;
                cursor: pointer;
            }
            @media (max-width:950px)
            {
                .head h1
                {
                    margin-left: 13%;
                }
                .test
                {
                    width: 700px;
                }
                .test .testform
                {
                    width: 410px;
                }
                .test .info
                {
                    
                    width: 290px;
                }
                .test .info .icon
                {
                    padding-left: 25px;
                }
                .test .info .icon i
                {
                    font-size: 25px;
                    margin-right: 5px;
                }
            }
            @media (max-width:750px)
            {
                nav .cul
                {
                    margin-right: 20px;
                }
                .head h1
                {
                    text-align: center;
                    margin-left: auto;
                }
                .test
                {
                    width: 350px;
                }
                .test .info
                {
                    display: none;
                }
                .test .testform
                {
                    width: 350px;
                    float: none;
                    padding: 30px 30px 20px;
                }
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

                    padding: 10px 0;
                    position: absolute;
                }
                .toggle-item .item
                {
                    padding: 15px;
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
    </head>
    <body>
        <nav>
            <div class="row">
                <div class="toggle">
                    <button class="openbtn" id="nav-toggle" onclick="openNav()" ><i class="fas fa-bars icon"></i></button>  
                </div>
                <ul class="cul">
                    <li><a href="#">View Result</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
            <div class="toggle-item" id="toggle-item">
                <div class="item"><a href="#">View Result</a></div><hr>
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
            <h1> Scheduled Test</h1>
        </section>
        
        <section>
            <div class="test">
                <div class="row">
            
                    <div class="testform">
                        <form>
                            <div class="rtest">
                                <i class="text-primary fa fa-info"></i> <label>Test duration: 30 mins</label>
                            </div>
                            <i class="fas fa-check-square"></i>
                            <label>Select Test</label>
                            <select class="text" name="testtype" size="1" required >
                                <option value="Select...">Select...</option>
                                <option value="C">C</option>
                                <option value="C++">C++</option>
                                <option value="Java">Java</option>
                            </select>
                            <i class="fa fa-envelope icon"></i>
                            <label >Applicant E-mail ID</label>
                            <textarea type="text" class="text" id='address' name='address' required placeholder='You can invite upto 20 applicants at a time...&#10 example:&#10 anil@knockonbrain.com&#10 vashist@knockonbrain.com &#10 neelam@knockonbrain.com' style="height:150px"></textarea>
                            <div class="btn"><button>Send Invite <i class="fas fa-arrow-right"></i></button></div>
                        </form>
                    </div>  
                    <div class="info">
                        <h4> Contact Information </h4>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                            <label>contactus@knockonbrain.com</label>
                        </div>
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                            <label>+91 987 654 3210</label>
                        </div>
                    </div>
                </div>

            </div>
            
        </section>
    </body>
</html>

