<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="favicon-logo1.png" rel="icon">
  <link href="favicon-logo1.png" rel="apple-touch-icon">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script type="text/javascript">
    	function sendEmail() {
    	  var emailid="<?php echo $_POST['email']; ?>";
    	    Email.send({
    		Host: "cluster.ownmyserver.com",
    		Username: "info@knockonbrain.com",
    		Password: "knockonbrain",
    		To: "<?php echo $_POST['email']; ?>",
    		From: "info@knockonbrain.com",
    		Subject: "Welcome To KnockOnBrain",
    		Body: '<div style="background:#eee; padding: 1.5rem 1.5rem 0.5rem 1.5rem; font-family: Helvetica; font-size:17px; line-height:30px; color:#808080;"><div style="background:white; padding:2rem;"><strong><div style="text-align:center;"><img style="width:200px;  display:inline;" src="https://mcusercontent.com/305d6346e684474681c4ee34f/images/f28156d9-64a5-3c53-dcd6-11cc3513945d.jpg" alt=""></img></div><br><center>You’ve successfully registered with KnockOnBrain</center><br>Now you are with the best online screening tool! Boost up your hiring process and hire the best talent for your organization by conducting online tests of the candidates with auto proctoring features.<br><br>If you face any issue while using the tool, our support team is just a message away.<br>Here is a short video of tool usage guide: <a href="https://youtu.be/qZLlmxCNKg0">https://youtu.be/qZLlmxCNKg0</a><br> <br> <center><div><a href="https://phptest.avianglobes.com/register.php" style="cursor:pointer !important; background-color: #4154f1;border:none;text-align: center;display: inline-block;padding: 8px 14px 8px 14px;font-size: 1rem; text-decoration:none; letter-spacing: 0.7px; border-radius: 24px; color: #fff!important;"> <span>Try Now >>></span></a></div></center><br>Thank you for trusting us,<br>KnockOnBrain Team<br></strong></div><hr> <div style="font-size:12px; color:#656565; text-align:center; padding:0px 18px 9px 18px; line-height: 150%;"> <em>Copyright © <b>2021</b> <b>KnockonBrain</b>, All rights reserved.</em><br><strong>Our mailing address is:</strong><br><b>info@knockonbrain.com</b><br><br>Want to change how you receive these emails?<br>You can <a href="|UPDATE_PROFILE|">update your preferences</a> or <a href="|UNSUB|">unsubscribe from this list</a>.</div> </div>',
    	})
    	
    //     .then(function (message) {
    // 		alert(emailid)
    //   });
    	}
    </script>
</head>

<?php
require_once("user/config.php");
session_start();
 date_default_timezone_set("Asia/Kolkata");
$timestamp = date('Y-m-d H:i:s');
$date1 = new DateTime($timestamp); // Y-m-d
$date1->add(new DateInterval('P30D'));
$rightdate=$date1->format('Y-m-d h:i:s');
// echo $rightdate;

// Connect to databse
 //onn = mysqli_connect('localhost','euryed630gsg','!j+/kQ2mz;Pg0','hrtool') or die("Connection failed") ;

 //Register the users
if(isset($_POST['register'])){
   
    if(!filter_var($_POST['email'] ,FILTER_VALIDATE_EMAIL)){              //invalid email  
        
        header("location: register.php?Error=Invalid Email");
   
    
   
    }else{
        
        $phn = mysqli_real_escape_string($db,$_POST['phone_number']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $company = mysqli_real_escape_string($db,$_POST['company']);
        $pass = md5($_POST['pass']);

        // Checking if user exist
        
        $sql = "SELECT * FROM users WHERE user_email='$email'";
       $sql_phn = "SELECT * FROM users WHERE phone='$phn'";
        $result = mysqli_query($db,$sql);
        $result_phn = mysqli_query($db,$sql_phn);
      
        
        
        
        
        // If result matched $email, table row must be 1 row
        
        if(mysqli_num_rows($result)> 0) {
            echo '
                        <script type="text/javascript">
                            $(document).ready(function(){
                              swal({
                                position: "top-end",
                                type: "warning",
                                text: "Email already registered!",
                                icon:"warning",
                                showConfirmButton: true,
                               
                            })
                        });

                    </script>';
        }
        
        // elseif(mysqli_num_rows($result_name)> 0) {
        //   echo '
        //                 <script type="text/javascript">
        //                     $(document).ready(function(){
        //                       swal({
        //                         position: "top-end",
        //                         type: "warning",
        //                         text: "Username already registered!"
        //                         icon:"warning",
        //                         showConfirmButton: true,
                               
        //                     })
        //                 });

        //             </script>';
            
        // }
          
        else{        
        
            // Inserting the new user
            
            // $query="INSERT INTO users (user_email,user_password,Phone,company) VALUES ('$email','$pass','$phn','$company')";
         $query="INSERT INTO users (user_email,user_password, days_of_trial, exp_date ,Phone,company) VALUES ('$email','$pass','30', '$rightdate', '$phn','$company')";

             if(mysqli_query($db,$query) == true){
                echo '
                        <script type="text/javascript">
                            $(document).ready(function(){
                              swal({
                                position: "top-end",
                                text: "Successfully Registered!",
                                icon:"success",
                                showConfirmButton: true,
                               
                            })
                        });

                    </script>';
                    
                //automatic email  
                echo '
                    <script>
                        sendEmail();
                    </script>
                  ';
               
                  $name=$email;
                  $mypassword=$pass;
                  $sql = "SELECT * FROM users WHERE user_email = '$name' and user_password = '$mypassword'";
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
                $count2 = mysqli_num_rows($result);
                if($count2==1){
                $_SESSION["ID"] = $row['ID'];
                $_SESSION["user_nicename"] = $row['user_email'];
                }
                  header('location:user/mcq.php');               
            }else{
                 echo '
                        <script type="text/javascript">
                            $(document).ready(function(){
                              swal({
                                position: "top-end",
                                type: "warning",
                                text: "Registration Failed!",
                                icon:"warning",
                                showConfirmButton: true,
                               
                            })
                        });

                    </script>';
            }
                   
                
           
            
        }
    }
}



 // LOGIN USER

    if(isset($_POST['login_user'])) {
                         
       $name = $_POST['username'];
       $mypassword = md5($_POST['password']); 

    //     $sql = "SELECT * FROM users WHERE user_nicename = '$name' and user_password = '$mypassword'";
    //     $result = mysqli_query($db,$sql);
    //     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    //     $count = mysqli_num_rows($result);
    //   if($count==1){
    //     $_SESSION["ID"] = $row['ID'];
    //     $_SESSION["user_nicename"] = $row['user_nicename'];
        // }else {
                $sql = "SELECT * FROM users WHERE user_email = '$name' and user_password = '$mypassword'";
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
                $count2 = mysqli_num_rows($result);
                if($count2==1){
                $_SESSION["ID"] = $row['ID'];
                $_SESSION["user_nicename"] = $row['user_email'];
                }
                else{
                    echo '
                        <script type="text/javascript">
                            $(document).ready(function(){
                              swal({
                                position: "top-end",
                                type: "warning",
                                text: "Wrong email or password",
                                icon:"error",
                                showConfirmButton: true,
                               
                            })
                        });

                    </script>';
                }
    //     }
         
    }
         
    if(isset($_SESSION["ID"])) {
    header("Location:user/mcq.php");
    }

?>
</html>