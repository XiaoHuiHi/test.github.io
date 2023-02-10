<?php
    include 'config.php';
    $msg = "";
    
    $email=$_GET['email'];
    if(isset($_POST['reset']))
    {

    // $id= $_POST['id'];
        $pass= $_POST['pass'];
        $cpass= $_POST['cpassword'];
        if($pass == '' && $cpass == '' )
        {
            $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Please Fill in the Password and Confirm Password</div>";
        } 
        
        else if($pass == $cpass)
        {
            mysqli_query($conn,"UPDATE user set password='$pass' WHERE Email = '$email'");
            header("Location: Login_user.php");
        }  
        else
        {
            $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Password and Confirm Password do not match.</div>";
        }
        
        
            
    }
    
    else
    {
        $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Something Wrong Went.</div>";
    }         
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset</title>
    <link rel="stylesheet" href="Forgot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script>
        function validate()
        {
            var password,pw1;
            var password_flag=false,pw1_flag=false;
            password=document.form.pass.value;
            pw1=document.form.cpassword.value;
            if(password.trim()=="")
            {
                document.getElementById("error_pass").innerHTML ="Key in the correct password";
            }
            else
            {
                document.getElementById("error_pass").innerHTML="&nbsp";
                password_flag=true;
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
<style>
    .submit button
{
    width: 85%;
    padding: 10px 30px;
    display: block;
    margin: auto;
    background: linear-gradient(to right,#ff8800,#ffb700);
    border: 0;
    outline: none;
    border-radius: 30px;
    font-weight: bold;
    font-size: 0.9em;
}

.submit button:hover
{
    color: white;
    cursor: pointer;
    background: linear-gradient(to right,#f94144,#f3722c);
}
</style>
<body>
    <div class="container">
        <div class="login-box" style="height: 500px;">
            <form method="POST">
            <h4>Change Password</h4>
            <?php echo $msg;?>
            <div class="box">
                <div name="login" class="login-input">
                    <!-- user -->
                    <p class="user"><label><i class="fa fa-lock"></i> New Password <sup>*</sup></label><br>
                    <input maxlength="50" name="pass" type="password" ><br><span id="error_pass"></span></p>
                    
                    <p class="cpass">&nbsp;&nbsp;&nbsp;<label><i class="fa fa-lock"></i> Confirm Password<sup>*</sup></label>
                        <br>
                        &nbsp;&nbsp;<input maxlength="50" name="cpassword" type="password"><br>&nbsp;&nbsp;<span id="error_pass2"></span></p>
                        <!-- <br> -->
                        <p style="text-align: center;">Back to <a href="Login.php">Login</a></p>
                </div>
                <div class="submit">
                    <button type="submit" name="reset">RESET</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
<?php 
    
?>
</html>