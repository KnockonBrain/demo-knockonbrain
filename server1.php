<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<?php
require_once("CLient/config.php");
session_start();


// Connect to databse
 //onn = mysqli_connect('localhost','euryed630gsg','!j+/kQ2mz;Pg0','hrtool') or die("Connection failed") ;

 //Register the users
if(isset($_POST['register'])){
   
    if(!filter_var($_POST['email'] ,FILTER_VALIDATE_EMAIL)){              //invalid email  
        
        header("location: register.php?Error=Invalid Email");
   
    
   
    }else{
        
        $phn = mysqli_real_escape_string($db,$_POST['phone_number']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
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
            
            $query="INSERT INTO users (user_email,user_password,Phone) VALUES ('$email','$pass','$phn')";

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
    header("Location:CLient/test.php");
    }

?>
