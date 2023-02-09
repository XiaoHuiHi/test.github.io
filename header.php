<style>
.button {
    background-color: #4CAF50; 
}
.button2{
    background-color: #8a00e6;
    color: white;
}
.button3{
    background-color: #4c0080;
    color: white;
    height: 50px;
    width: 100px;
}
</style>

<div id="top">
        <div class="col-md-6">
            <ul class="menu">
                <li><a href="Homepage.php">Home</a></li>
				  <li><a href="Register.php">Register</a></li>
                <li><a href="cart.php">Go to Cart</a></li>
                <li><a href="login.php">Login</a></li>
				  <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>


</div>

<?php
if(isset($_SESSION['login_user1'])){

?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="las la-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="loading_dashboard.php">ADMIN CONTROL PANEL</a></li>
            <li><a href="adminlogout.php"><span class="las la-sign-out-alt"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="las la-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="cart.php"><span class="las la-shopping-cart"></span> Cart (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </a></li>
            <li><a href="logoutuser.php"><span class="las la-sign-out-alt"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

?>

    <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="las la-user"></span> Sign Up <span class="caret"></span> </a>
            <ul class="dropdown-menu">
            <li> <a href="customersignup.php"> User Sign-up</a></li>
            <li> <a href="managersignup.php"> Manager Sign-up</a></li>
            </ul>
        </li>
    
        <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="las la-sign-in-alt"></span> Login <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li> <a href="Login.php"> User Login</a></li>
            <li> <a href="adminloginpage.php"> Admin Login</a></li>
            </ul>
        </li>
    </ul>
    
<?php
}
?>
        </div>

</div>
</nav>