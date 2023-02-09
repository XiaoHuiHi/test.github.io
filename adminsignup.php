<!DOCTYPE html>
<html>

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
                        <input id="cpassword" type="cpassword" name="cpassword" placeholder="Re-enter Password" required=""></p>
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
                        <a href="#"><img src="<?php echo "image/fb.png"?>" width="30px"></a>
                        <a href="#"><img src="<?php echo "image/g.png"?>" width="30px"></a>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>