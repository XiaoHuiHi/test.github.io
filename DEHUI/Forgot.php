<?php 
    session_start();

    include 'config.php';
    $msg = "";
    if(isset($_POST['submit'])) 
    {
        $email = mysqli_real_escape_string($conn,$_POST["email"]);

        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE email = '{$email}'"))>0)
        {
            header("Location: Reset.php?id=".$email);
        }
        else
        {
            $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>$email - This email address do not found.</div>";
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot</title>
    <link rel="stylesheet" href="./Forgot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        // function validate()
        // {
        //     var email;
        //     var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        //     var email_flag=false;
        //     email=document.form.email.value;
        //     if (email.trim()=="")
        //     {
        //         document.getElementById("error_email").innerHTML="Please key in correct email";
                
        //     }
        //     else if(email.match(mailformat))
        //     {
        //         document.getElementById("error_email").innerHTML="&nbsp";
        //         email_flag=true;
        //     }
        //     else
        //     {
        //         document.getElementById("error_email").innerHTML="Please key in correct email";
        //     }
        // }

    </script>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <form name="form" action="#" method="post">
            <h4>Forgot Password</h4>
            <?php echo $msg;?>
            <div class="box">
                <div name="login" class="login-input">
                    <!-- user -->
                    <p class="user"><label><i class="fa fa-envelope  "></i> Email<sup>*</sup></label><br>
                    <input maxlength="50" name="email" type="email" id="email"><br><span id="error_email"></span></p>
                </div>
                <div class="submit">
                    <input name="submit" type="submit" value="Forgot Password" onclick="validate()">
                </div>
            </form>
        </div>
    </div>
</body>
</html>