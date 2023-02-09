

<!DOCTYPE html>
<html>
<head>
    <title>Homepage | 1 Coin Sandwich</title>
</head>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    
<body>
    <!--Header-->
    <div class="container">
        <nav>
            <ul>
                <li>
                    <div class="sidebarlogo">
                    <a class="logo" href="#">

                        <span  class="nav-item"><?php echo $host_image['username']?></span>
                    </a>
                    </div>
                </li>
                <div class="sidebar"> 
                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-group"></i><span class="nav-item">Category</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-universal-access"></i><span class="nav-item">Product</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i><span class="nav-item">Order</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/DWP_1Coin_Project/Chorxiang/manage%20user/manage.php">
                        <i class="fa fa-info-circle"></i><span class="nav-item">Manage user</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-wrench"></i><span class="nav-item">Staff</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-book"></i><span class="nav-item">View report</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="logout">
                        <i name="fa"class="fa fa-sign-out"></i><span class="nav-item">Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
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

<!--Home Page-->
<div class="container" style="width:50%;">
<?php

require 'config.php';
$conn = Connect();

$sql = "SELECT * FROM foodmenu WHERE options = 'ENABLE' ORDER BY Food_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="order.php?action=add&id=<?php echo $row["Food_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
<h4 class="text-dark"><?php echo $row["Food_Name"]; ?></h4>
<h5 class="text-info"><?php echo $row["Food_Cat"]; ?></h5>
<h5 class="text-danger">RM <?php echo $row["Food_Price"]; ?>/-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["Food_Name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["Food_Price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["Ref_ID"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>
</body>
</html>