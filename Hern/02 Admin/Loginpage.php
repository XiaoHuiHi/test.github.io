<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="outcontainer">
        <form action="loginprocess.php" method="POST">
        <h2>Get Started</h2>
        <div class="content">
            <div class="input-box">
                <label for="username">Admin name</label>
                <input type="text" placeholder="Enter Username" name="uname" required>
            </div>
            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" placeholder="Enter New Password" name="password" required>
            </div>
            <button type="submit" id="loginbtn">Log in</button>
            <label for="remember">
                <input type="checkbox" checked="checked">Remember me</input>
            </label>
            <a href="#" id="forgotpwd">Forgotten Password?</a>
            <div class="member">
                <button type="button" id="createbtn">Create New Account</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>