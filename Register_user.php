<?php
    session_start();
    
    include 'config.php';
    $msg = "";
    
    if(isset($_POST['submit']))
    {
        $name = mysqli_real_escape_string($conn,$_POST['user']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        
        $pass = mysqli_real_escape_string($conn,$_POST['pass']);
        $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
        // $code = mysqli_real_escape_string($conn,$_POST['']);

        // $name = mysqli_real_escape_string($conn,$_POST['submit']);
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE Email = '{$email}'"))>0)
        {
            $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>{$email} - This email address has been already exists.</div>";
        }
        else
        {
            if($pass !== $cpass)
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Password and Confirm Password do not Match</div>";
            }
            else if (!$name)
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; text-align: center; padding: 10px; text_align: center;'>Please Key in Your Username.</div>";
            }
            else if(!$email)
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; text-align: center; padding: 10px; text_align: center;'>Please Key in Your Email.</div>";
            }
            else if(filter_var($email,FILTER_VALIDATE_EMAIL) ===false) 
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; text-align: center; padding: 10px; text_align: center;'>Email is Invalid.</div>";
            }
            else if(!$pass)
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; text-align: center; padding: 10px; text_align: center;'>Please Key In Your Password!!!</div>";
            }

            if($pass === $cpass && $name && $email && $pass !='')
            {
                $sql = "INSERT INTO user (Name,Email,password,Image) VALUES ('{$name}','{$email}','{$pass}','profile.jpg')";
                $result = mysqli_query($conn,$sql);

                
                if($result)
                {
                    $msg = "<div style='background-color: green; color: white; font-weight: bold;border-radius: 30px; margin: 20px; margin-bottom: 0; padding: 10px; text-align: center; text_align: center;'>The Account have been create Successfuly</div>";
                }
                else
                {
                    $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Something Wrong Went.</div>";
                }
                header("Location: Login_user.php");
            }
            
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        sup
        {
            color: red;
        }
    </style>
    <!-- <script>
        function validate()
        {
            var username,password,email="Null",pw1;
            var username_flag=false,password_flag=false,email_flag=false,pw_flag=false;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            username=document.form.user.value;
            password=document.form.pass.value;
            email=document.form.email.value;
            pw1=document.form.cpassword.value;
            if(username.trim()=="")
            {
                document.getElementById("error_name").innerHTML ="Key in the correct username";
            }
            else
            {
                document.getElementById("error_name").innerHTML="&nbsp";
                username_flag=true;
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
            if(pw1!=password)
            {
                document.getElementById("error_pass2").innerHTML ="Password did not match";
            }
            else
            {
                document.getElementById("error_pass2").innerHTML="&nbsp";
                pw_flag=true;
            }
        }
        
    </script> -->
</head>
<body>
    
    <div class="container">
        <div class="login-box">
            <form name="form" method="post" action="">
            <h4>Register</h4>
            <?php echo $msg;?>
            <div class="box">
                <div name="login" class="login-input">
                    <!-- user -->
                    <p class="user"><label><i class="fa fa-address-card-o "></i> Username<sup>*</sup>&nbsp;</label><br>
                    <input maxlength="15" name="user" type="text" id="username" value="<?php if(isset($_POST['submit'])){echo $name;}?>"><br><span id="error_name"></span></p>
                    <!-- email -->
                    <p class="email">&nbsp;&nbsp;<label><i class="fa fa-envelope "></i> Email<sup>*</sup>&nbsp;</label><br>
                        &nbsp;&nbsp;<input name="email" type="text" id="email" value="<?php if(isset($_POST['submit'])){echo $email;}?>"><br>&nbsp;&nbsp;<span id="error_email"></span></p>
                    <!-- password -->
                    <p class="pass"><label><i class="fa fa-lock"></i>&nbsp; &nbsp;Password<sup>*</sup>&nbsp;&nbsp;&nbsp;</label><br><input maxlength="10" name="pass" type="password" id="password"><br><span id="error_pass"></span></p>

                    <p class="cpass">&nbsp;&nbsp;&nbsp;<label><i class="fa fa-lock"></i>&nbsp; Confirm Password<sup>*</sup></label>
                        <br>
                        &nbsp;&nbsp;<input maxlength="15" name="cpassword" type="password" id="cpassword"><br>&nbsp;&nbsp;<span id="error_pass2"></span></p>
                </div>
                <div class="submit">
                    <input type="submit" name="submit"  value="Register" onclick="validate()">
                </div>
                <br>
                <p>Back To <a href="Login_user.php">Login</a></p>
                <hr>
                <div class="login-img">
                    <a href="#"><img src="<?php echo "image/fb.png"?>" width="30px"></a>
                    <a href="#"><img src="<?php echo "image/g.png"?>" width="30px"></a>
                </div>
            </form>
                
            </div>
        </div>
    </div>
</body>
</html>



