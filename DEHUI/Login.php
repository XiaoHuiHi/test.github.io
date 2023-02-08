<?php

    include 'config.php';
    $msg = "";
    
    if(isset($_POST['submit']))
    {
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $password=mysqli_real_escape_string($conn,$_POST['pass']);

        $sql = "SELECT * FROM user WHERE Email = '{$email}' AND Password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        $r = mysqli_num_rows($result);
        if($r === 1)
        {
            header("location: welcome.php");
            
        }
        else{
            $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Email or Password do not match.</div>";
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="./Login.js"></script> -->
    <script>
        function validate()
        {
            var email,password;
            var password_flag=false;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var email_flag=false;
            email=document.form.email.value;
            password=document.form.pass.value;
            if (email.trim()=="")
            {
                document.getElementById("error_email").innerHTML="Please key in correct email";
                
            }
            else if(email.match(mailformat))
            {
                document.getElementById("error_email").innerHTML="&nbsp";
                email_flag=true;
            }
            else
            {
                document.getElementById("error_email").innerHTML="Please key in correct email";
            }
            if(password.trim()=="")
            {
                document.getElementById("error_pass").innerHTML ="Key in the correct password";
            }
            else
            {
                document.getElementById("error_pass").innerHTML="&nbsp";
                password_flag=true;
            }
        }
        
    </script>
</head>
<body>
    
    <div class="container">
        <div class="login-box">
            <form name="form" action="#" method="post">
            <h4>Login</h4>
            <?php echo $msg;?>
            <div class="box">
                <div. name="login" class="login-input">
                <?php
                    // if(isset($_COOKIE['emailid']) && isset($_COOKIE['password']))
                    // {
                    //     $emailid = $_COOKIE['emailid'];
                    //     $password = $_COOKIE['password'];
                    // }
                    // else
                    // {
                    //     $emailid = $password ='';
                    // }
                    // if(isset($_REQUEST['rememberme']))
                    // {
                    //     setcookie('emailid',$_POST['email'],time()+20);
                    //     setcookie('password',$_POST['pass'],time()+20);

                    // }
                ?>
                    <p class="email"><label><i class="fa fa-envelope"></i> Email:&nbsp;</label>
                    <br><input maxlength="50" name="email" type="email" id="email" value=""><br><span id="error_email"></span></p>

                    <p class="pass"><label><i class="fa fa-lock"></i>&nbsp; &nbsp;Password :&nbsp;&nbsp;&nbsp;</label><br><input maxlength="50" name="pass" type="password" id="password"  value=""><br><span id="error_pass"></span></p>
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="Login" onclick="validate()">
                </div>
                <br>
                <div class="forgot">
                    <a href="./Forgot.php">Forgot Password ?</a>
                    <a style="padding-left: 200px;" href="./Register.php">Register</a>
                </div>
                
                
                <hr>
                <div class="login-img">   
                        <a href="#"><img src="<?php echo "image/fb.png" ?>" width="30px"></a>
                        <a href="#"><img src="<?php echo "image/g.png"?>" width="30px"></a>

                </div>
            </form>
               
            </div>
        </div>
    </div>
</body>
</html>