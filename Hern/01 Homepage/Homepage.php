<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: Login.php"); 
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage | 1 Coin Sandwich</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <!--Header-->
    <!-- <input type="checkbox" id="cart">
    <label for="cart" class="label-cart"><span class="las la-shopping-cart"></span></label>
    <h3 class="logo">1 Coin Sandwich</h3> -->
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
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="About_us.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

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
            <li> <a href="#"> Admin Sign-up</a></li>
            </ul>
        </li>
    
        <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="las la-sign-in-alt"></span> Login <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li> <a href="Login.php"> User Login</a></li>
            <li> <a href="adminloginpage.php"> Admin Login</a></li>
            <li> <a href="#"> Admin Login</a></li>
            </ul>
        </li>
    </ul>
    
<?php
}
?>
        </div>

</div>
</nav>
    
    <!--Sidebar-->
    <div class="sidebar">
        <div class="sidebar-menu">
            <span class="las la-search"></span>
            <a href="#">Search</a>
        </div>
        <div class="sidebar-menu">
            <span class="las la-home"></span>
            <a href="#">Home</a>
        </div>
        <div class="sidebar-menu">
            <span class="lab la-gratipay"></span>
            <a href="#">Favs</a>
        </div>
        <div class="sidebar-menu">
            <span class="las la-user"></span>
            <a href="#">Profile</a>
        </div>
        <div class="sidebar-menu">
            <span class="las la-sliders-h"></span>
            <a href="#">Setting</a>
        </div>
    </div>
    
    <!--Home Page-->
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

<form method="post" action="cart.php?action=add&id=<?php echo $row["Food_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
<h4 class="text-dark"><?php echo $row["Food_Name"]; ?></h4>
<h5 class="text-info"><?php echo $row["Food_Cat"]; ?></h5>
<h5 class="text-danger">&#8377; <?php echo $row["Food_Price"]; ?>/-</h5>
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

    <!-- <div class="homepage">
        <div class="homepage-banner">
            <img src="Welcome.jpg"/>
        </div>

        <div class="homepage-title"><h2>Welcome Back!</h2></div>
        <div class="homepage-menu">
            <a href="#">Favourites</a>
            <a href="#">Best Seller</a>
            <a href="#">Sandwich</a>
            <a href="#">Beverages</a>
            <a href="#">All</a>
        </div>

        <div class="homepage-content">
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-slicedchicken-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Chicken Slice<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-chicken-teriyaki-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Chicken Teriyaki<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-italian-bmt-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Italian B.M.T.™<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-meatball-marinara-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Meatball Marinara<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-roasted-chicken-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Roasted Chicken<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-roast-beef-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Roast Beef<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-spicy-italian-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Spicy Italian<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-steakandcheese-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Steak & Cheese<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-subway-club-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Subway Club™<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-subway-melt-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Subway Melt™<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-tuna-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Tuna<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-seafood-sensation-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Seafood & Crab<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-turkey-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Turkey Breast<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-sliced-chicken-ham-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Turkey Breast & Chicken Slice<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-veggie-delite-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Veggie Delite™<span>RM10</span></h4>
                </div>
            </div> 
        </div>
    </div> -->
</body>
</html>