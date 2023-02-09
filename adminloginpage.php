<?php
include('adminlogin.php'); 
include 'config.php';
if(isset($_SESSION['login_user1'])){
header("location: loading_dashboard.php"); 
}
?>

<!DOCTYPE html>
<html>
<?php 
    $h= "SELECT * FROM `admin`";
    $query = mysqli_query($conn,"$h");
    $is = mysqli_fetch_assoc($query);
?>
    <head>
        <title> Admin Login | 1 Coin Sandwich' </title>

    <link rel="stylesheet" href ="css/adminloginpage.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
        
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
                        <a href="loading_dashboard.php?<?php echo $username?>"><input type="submit" name="submit" value="Login"></a>
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