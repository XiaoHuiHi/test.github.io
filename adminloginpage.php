<?php
include('adminlogin.php'); 

if(isset($_SESSION['login_user1'])){
header("location: loading_dashboard.php?name=".$username); 
}
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href ="css/adminloginpage.css">

    <head>
        <title> Admin Login | 1 Coin Sandwich' </title>
    </head>
    
    <!--Sidebar!-->
    

        <div class="container">
            <div class="login-box">
                <form name="form" action="#" method="post">
                <h4>Admin Login</h4>
                <div class="box">
                    <div. name="login" class="login-input">
                        <p class="user"><label><i class="fa fa-user"></i>&nbsp; &nbsp;Username :&nbsp;</label><br>
                        <input id="username" type="text" name="username" placeholder="Your Username" required=""></p>

                        <p class="pass"><label><i class="fa fa-lock"></i>&nbsp; &nbsp;Password :&nbsp;&nbsp;&nbsp;</label><br>
                        <input id="password" type="password" name="password" placeholder="Password" required=""></p>
                    </div>
                    
                    <div class="submit">
                        <input type="submit" name="submit" value="Login">
                    </div>
                    <br>
                    <div class="forgot">
                        <a href="./Forgot.php">Forgot Password ?</a>
                        <a style="padding-left: 150px;" href="./adminsignup.php">Create a new account</a>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>