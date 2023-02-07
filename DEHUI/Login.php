<?php
    session_start();
    if(isset($_SESSION['SESSION_EMAIL']))
    {
        header("Location: welcome.php");
        die();
    }

    include 'config.php';
    $msg = "";
    if(isset($_POST['submit']))
    {
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $password=mysqli_real_escape_string($conn,$_POST['pass']);

        $sql = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);
            if(empty($row['code']))
            {
                $_SESSION['SESSION_EMAIL'] = $email;
                header("Location: welcome.php");
            }
            else
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Email or Password do not match.</div>";
            }
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
    <script src="./Login.js"></script>
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
                    <p class="email"><label><i class="fa fa-envelope"></i> Email:&nbsp;</label>
                    <br><input maxlength="50" name="email" type="email" id="email"><br><span id="error_email"></span></p>

                    <p class="pass"><label><i class="fa fa-lock"></i>&nbsp; &nbsp;Password :&nbsp;&nbsp;&nbsp;</label><br><input maxlength="50" name="pass" type="password" id="password"><br><span id="error_pass"></span></p>
                </div>
                <div class="remember">
                    <input type="checkbox" name="" id="remember"  name="rememberme" onclick="setcookie()"><span>Remember Me</span>
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
                <?php
                    $imagecode = "SELECT * FROM imageofphp";
                    $query = mysqli_query($conn,$imagecode);
                    while($imgcode = mysqli_fetch_assoc($query))
                    {
                        ?>
                        <a href="#"><img src="<?php echo "image/".$imgcode['imagecode']?>" width="30px"></a>
                        <?php
                    }
                ?>
                </div>
            </form>
                
            </div>
        </div>
    </div>
</body>
</html>