<style>
body {
  padding-top: 50px;
  height: 100%;
  background-repeat: repeat;
  background-size: cover;
  background-position: center;
}


#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: darkgreen;
  color: white;
}

.bg-4{
  background-color: #2f2f2f;
  color: #ffffff;

}

footer{
  display: block;
}

.mypanel{
  border: 1px solid #eaeaec; 
  margin: -1px 19px 3px -1px; 
  box-shadow: 0 1px 2px rgba(0,0,0,0.05); 
  background-color: #FAFAFA;  
  padding:15px;
  border-radius: 5px;
}

input{
  border: 5px solid white;
}


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
<nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="Homepage.php">1 Coin Sandwich'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>
          
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
else {

?>

<?php
}
?>
        </div>

</div>
</nav>