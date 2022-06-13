
<?php
//require_once("CLient/config.php");
    session_start();
   
    if(isset($_POST['submit'])) {
       $name = $_POST['name'];
       $mypassword = md5($_POST['password']); 

        $sql = "SELECT * FROM users WHERE user_nicename = '$name' and user_password = '$mypassword'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
       if($count==1){
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["user_nicename"] = $row['user_nicename'];
        }else {
                $sql = "SELECT * FROM users WHERE user_email = '$name' and user_password = '$mypassword'";
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
                $count2 = mysqli_num_rows($result);
                if($count2==1){
                $_SESSION["ID"] = $row['ID'];
                $_SESSION["user_nicename"] = $row['user_nicename'];
                }
                else{$message = "Invalid Username or Password!";}
        }
         
    }
         
            if(isset($_SESSION["ID"])) {
            header("Location:CLient/test.php");
            }
   
    
?>
<html>
<head>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/80d99e7a2a.js" crossorigin="anonymous"></script>
        <title>Client Login Page</title>

</head>
<body>
    <nav>
            <ul class="cul">
                <li><a class="active" href="#">Home</a></li>
            </ul>
        </nav> 
                              
 <section>
            <div class="bodyhead"> 
                <div class="row">
                    <div class="textheading">
                        <h1>Knock On Brain</h1>
                        <h2> Makes Recruitment Easy!</h2>
                    </div>
                    <form name="frmUser" method="post" action="" id="f1">
                    <div class="textform">
                        <div>
                            <?php
                       echo "<div style='color:#ffb3b3;'><strong><h1>$message</h1></strong></div>"
                       ?><br>
                            <div class="label1"><label for="username" class="">Username/Email</label></div>
                            <div class=""><input type="text" name="name" class="text1" id="username" required></div>
                            <div class="label1"><label for="pwd" class="">Password</label></div>
                            <div class=""><input type="password" name="password" class="text1" id="pwd" required></div>
                            <div class="check">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1"> Keep me signed in</label><br>
                            </div>
                            
                            <div class="button">
                                <input type="submit" name="submit" value="Login" id="submit" class="btn1">
                                
                                <a href="../register.php"><button type="button" class="btn2">Register</button></a>
                            </div>
                            <div class="forgot">
                                <p><a href="../CLient/forgetPassword/forget.php">Forgot your Password?</a></p>
                                
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
        <section>
            <div class="features">
                <h1> Features</h1>
                <div class="row">
                    <div class="box">
                        <div class=""><i class="fas fa-scroll icon"></i></div>
                        <h4>Schedule Unlimited Test For Free</h4>
                    </div>
                    <div class="box">
                        <div class=""><i class="fab fa-reddit icon"></i></div>
                        <h4>Auto Proctoring</h4>
                    </div>
                    <div class="box">
                        <div class=""><i class="fas fa-video icon"></i></div>
                        <h4>Watch Applicant Test Video Anytime</h4>
                    </div>
                </div>
                <div class="row boxes">
                    <div class="box1">
                        <div class=""><i class="fas fa-clock icon"></i></div>
                        <h4>Quick Process</h4>
                    </div>
                    <div class="box1">
                        <div class=""><i class="fas fa-list icon"></i></div>
                        <h4>10000+ Questions For Each Category</h4>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="benefits">
                <div class="row">                    
                    <div class="sideicons">
                        <h1> Benefits</h1>
                        <div class="box">
                            <div class="icon"><i class="fas fa-user-check"></i></div>
                            <h4>Easy To Use</h4>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fas fa-list-alt"></i></div>
                            <h4>Filter Applicants</h4>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fas fa-dollar-sign"></i></div>
                            <h4>Cost Saving Solution</h4>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fas fa-user-circle"></i></div>
                            <h4>Help & Support</h4>
                        </div>
                    </div>
                    <div class="image">
                        <img src="homeee/images/facilites.jpg">
                    </div>
                </div>
            </div>
        </section>
     
    <section>
            <div class="message">
                <div class="row">
                    <div class="ttform">
                        <h3>Send Us A Message</h3>
                        <p>We would love to hear from you!</p>
                        <div class="sform">
                            <h4>Thanks for contacting us, we will revert you soon!</h4>
                        </div>
                        <div class="dform">
                            <h4 id="error">Error! Try Again</h4>
                        </div>
                        <form id="myForm" method="POST">
                        <div class="form">
                            <div class="row">
                                <div class="bn">
                                    <div class="label"><label for="Name" class="">Name</label></div>
                                    <div class=""><input type="text" class="text" id="name" required></div>
                                </div>
                                <div class="bn">
                                    <div class="label"><label for="Email" class="">Email</label></div>
                                    <div class=""><input type="text" class="text" id="email" required></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="bn">
                                    <div class="label"><label for="Number" class="">Contact Number</label></div>
                                    <div class=""><input type="text" class="text" id="number" required></div>
                                </div>
                                <div class="bn">
                                    <div class="label"><label for="Organization" class="">Organization</label></div>
                                    <div class=""><input type="text" class="text" id="organization" required></div>
                                </div>
                            </div>
                            <div class="bnn">
                                    <div class="label"><label for="Message" class="">Your Message</label></div>
                                    <div class=""><textarea class="text" rows="2" id="message"></textarea></div>
                            </div>
                            <div class="button">
                                <button class="btn">Send</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
        //function sendEmail() {
            
           $(document).ready(function() {

        $('.btn').click(function(e) {
      e.preventDefault();
            
            
            var name = $("#name");
            var email = $("#email");
            var number = $("#number");
            var organization = $("#organization");
            var message = $("#message");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(number) && isNotEmpty(organization) && isNotEmpty(message)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       number:number.val(),
                       organization: organization.val(),
                       message: message.val()
                   }, success: function (respons) 
                   {
                        if(respons.status=="success")
                        {
                            $('#myForm')[0].reset();
                            $('.form').css('display','none');
                            $('.sform').css('display','block');
                            $('.dform').css('display',' none');
                        }
                        else
                        {
                            $('.dform').css('display','block');
                            $('.sform').css('display','none');
                            $('.form').css('display','none');
                        }
                   }
                });
            }
        });


        $('#error').click(function(e) {
            $('.form').css('display','block');
            $('.dform').css('display',' none');
        });
        
      });

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    </body>
</html>