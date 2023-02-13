<!DOCTYPE html>
<html>
<?php 
    include 'config.php';
    $msg = "";
    
    if(isset($_POST['submit']))
    {
        $name = mysqli_real_escape_string($conn,$_POST['username']);
        $pass = mysqli_real_escape_string($conn,$_POST['password']);
        $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
        
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `admin` where username = '$name'"))>0)
        {
            $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>{$name} - The user name has been already exists.</div>";
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
            else if(!$pass)
            {
                $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; text-align: center; padding: 10px; text_align: center;'>Please Key In Your Password!!!</div>";
            }

            if($pass === $cpass && $name && $pass !='')
            {
                $sql = "INSERT INTO `admin` (username,password,image) VALUES ('{$name}','{$pass}','profile.jpg')";
                $result = mysqli_query($conn,$sql);

                
                if($result)
                {
                    $msg = "<div style='background-color: green; color: white; font-weight: bold;border-radius: 30px; margin: 20px; margin-bottom: 0; padding: 10px; text-align: center; text_align: center;'>The Account have been create Successfuly</div>";
                }
                else
                {
                    $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Something Wrong Went.</div>";
                }
                header("Location: adminloginpage.php");
            }
            
            
        }
    }
?>
    <head>
        <title> Admin Sign-Up | 1 Coin Sandwich' </title>
    </head>

    <link rel="stylesheet" href ="css/adminloginpage.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
        <div class="container">
            <div class="login-box">
                <form name="form" method="post" action="">
                    <?php echo $msg?>
                <h4>Admin Sign-Up</h4>
                <div class="box">
                    <div name="login" class="login-input">
                        <!-- user -->
                        <p class="user"><label><span class="text-danger" style="margin-right: 5px;">*</span><i class="fa fa-address-card-o "></i>&nbsp; &nbsp;Username :&nbsp;</label><br>
                        <input id="username" type="text" name="username" placeholder="Your Username" required=""></p>
                        <!-- password -->
                        <p class="pass"><label><span class="text-danger" style="margin-right: 5px;">*</span><i class="fa fa-lock "></i>&nbsp; &nbsp;Password :&nbsp;</label><br>
                        <input id="password" type="password" name="password" placeholder="Password" required=""></p>
                        <p class="pass"><label><span class="text-danger" style="margin-right: 5px;">*</span><i class="fa fa-lock "></i>&nbsp; &nbsp;Comfirm Password :&nbsp;</label><br>
                        <input id="cpassword" type="password" name="cpassword" placeholder="Re-enter Password" required=""></p>
                    </div>

                    <div class="submit">
                        <input type="submit" name="submit"  value="Register">
                    </div>
                    <br>
                    <div class="account">
                        <a style="padding-left: 210px;" href="./adminloginpage.php">Have an account? Login.</a>
                    </div>

                    <hr>
                    <div class="login-img">
                        <a href="#"><img src="<?php echo "images/fb.png"?>" width="30px"></a>
                        <a href="#"><img src="<?php echo "images/g.png"?>" width="30px"></a>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>