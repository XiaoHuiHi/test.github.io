
<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Homepage | 1 Coin Sandwich</title>
    <style>
        .nav
        {
            height: 100%; 
            width: 200px; 
            position: fixed; 
            z-index: 1; 
            top: 0; 
            left: 0;
            overflow-x: hidden; 
            padding-top: 20px;
            background-color:#f2f2f2;
        }
        .nav a 
        {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
          }
          .nav a:hover 
          {
            color: red;
          }
          .side
          {
            padding: 6px 8px 6px 16px;
            font-size: 25px;
            color: #818181;
            display: block;
          }
          .main 
          {
            margin-left: 200px; 
            padding: 0px 10px;
            font-size: 28px;
          }
          .user
          {
            display: block;
            width: 50%;
            margin-left: 50px;
          }
          table
          {
            width: 100%;
          }
          button:active
          {
            background-color: lightgray;
          }
          .box
          {
            width: 365px;
            float: left;
            border: 5px solid ;
            background-color: lightblue;
            padding: 50px;
            margin: 20px;
          }
          .insidebox
          {
            float: right;
          }

.sidebar
{
    outline: none;
    border: none;
    text-decoration: none;
    font-family: "Poppins", sans-serif;
    /* position:fixed; */
}

.logo1 a
{
    margin-left: 50px;
    float:left;
    /* border: 1px solid black; */
}

.logo1 a:hover
{
    background: none;
}

body
{
    background: #DDDDDD;
    margin-left: 120px;
    margin-right: 25px;
    margin-top: 30px;
}

nav
{
    position: fixed;
    top: 0;
    bottom: 0;
    height: 100%;
    left:0;
    background: linear-gradient(#ff7b00,#ffb700);
    width: 90px;
    overflow:hidden;
    transition: width 0.2s linear;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

.sidebarlogo a
{
    color: rgb(85,83,83);
    font-size: 14px;
    /* display: table; */
    
    padding: 5px;
    padding-left: 10px;
    margin: 10px 0 0 10px;
    
    text-decoration: none;
}
.logo 
{
    width: 200px;
    text-align: center;
    display: flex;
    transition: all 0.5s ease;
    margin: 10px 0 0 10px;
    
}
.logo img
{
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.logo img:hover
{
    cursor: pointer;
}

.logo span
{
    font-weight: bold;
    padding-left: 0px; 
    font-size: 18px; 
    text-transform: uppercase;  
}

.logo:hover
{
    background: none;
    cursor:unset;
}

.sidebar a
{
    color: rgb(85,83,83);
    font-size: 14px;
    display: table;
    width: 200px;
    padding: 5px;
    padding-left: 10px;
    margin-top: 10px;
    text-decoration: none;
}

.sidebar
{
    top: 0;
    left: 0;
}

.sidebar .fa
{
    position: relative;
    width: 70px;
    height: 40px;
    top: 14px;
    font-size: 20px;
    text-align: center;
}

.nav-item
{
    position: relative;
    top: 12px;
    margin-left: 10px;
}

.sidebar a:hover
{
    background: linear-gradient(to left,#ffaa00,#ffea00);
    color: white;
    transition: all 0.3s ease;

}

nav:hover
{
    width: 200px;
    transition: all 0.5s ease;
}

.logout
{
    position: absolute;
    bottom: 0;
}

          
*
{
  box-sizing: border-box;
    margin: 0;
    padding: 0;
}

          
          contaner::after
          {
            content: "";
            clear: both;
            display: table;
          }
          .order
          {
            float: left;
            border: 3px solid ;
            padding: 10px;
            margin: 10px;
          }
          .insideorder
          {
            float: right;
          }
          img
          {
            height: 100px;
          }
          .center
          {
            text-align: center;
          }
    </style>
</head>
<body>
<?php
        $host = "SELECT * FROM `admin`";
        $query = mysqli_query($conn,$host);
        $host_image = mysqli_fetch_assoc($query);
?>
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
                    <a href="staff.php?username=<?php echo $host_image['username']?>">
                        <i class="fa fa-wrench"></i><span class="nav-item">Staff</span>
                    </a>
                </li>
                <li>
                    <a href="adminlogout.php" class="logout">
                        <i name="fa"class="fa fa-sign-out"></i><span class="nav-item">Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
        </div>
    <div class="main">
        <p><i class="fa fa-tasks"></i> My Dashboard</p>
        <div class="contaner">
            <div class="box">
                <i class="fa fa-eye"></i> Views
                <span class="insidebox"> 99</span>
            </div>
            <div class="box">
                <i class="fa fa-share-alt"></i> Shares
                <span class="insidebox"> 15</span>
            </div>
            <div class="box">
                <i class="fa fa-thumbs-up"></i> Like
                <span class="insidebox"> 20</span>
            </div>
        </div>
        <br><br><br><br><br><br>
        <p>Recent Prodct</p>
        <table border="1px">
            <?php
            $sql = "select * from product;";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result)
            ?>
            <tr class="center">
                <td>Product Name :</td>
                <td>Product Category :</td>
                <td>Product Price :</td>
            </tr>
            <tr class="center">
                <td><?php echo $row["Prod_Name"];	?></td>
                <td><?php echo $row["Prod_cate"];?></td>
                <td><?php echo $row["Prod_price"];?></td>
            </tr>
        </table>
        <p>Recent Order</p>
        <table border="1px">
            <?php
            $sql = "select * from orderorder;";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result)
            ?>
            <tr class="center">
                <td>Food Name :</td>
                <td>Food Quantity :</td>
                <td>Food Price :</td>
            </tr>
            <tr class="center">
                <td><?php echo $row["foodname"];	?></td>
                <td><?php echo $row["qty"];?></td>
                <td><?php echo $row["price"];?></td>
            </tr>
            
        </table>
        
        <p>Recent User</p>
        <table border="1px">
            <?php
            $sql = "select * from user;";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result)
            ?>
            <tr class="center">
                <td>User Name :</td>
                <td>Date :</td>
                <td>Status :</td>
            </tr>
            <tr class="center">
                <td><?php echo $row["Name"];	?></td>
                <td><?php echo $row["Date"];?></td>
                <td><?php echo $row["Status"];?></td>
            </tr>
        </table>
        <br>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manage.php#">More User  <i class="fa fa-mail-forward"></i></button>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manageorder.php#">More Order  <i class="fa fa-mail-forward"></i></button>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manageproduct.php#">More Product  <i class="fa fa-mail-forward"></i></button>   
    </div>
</body>
=======
<?php include("config1.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>

    <title>Admin Homepage | 1 Coin Sandwich</title>

    <style>
        .nav
        {
            height: 100%; 
            width: 200px; 
            position: fixed; 
            z-index: 1; 
            top: 0; 
            left: 0;
            overflow-x: hidden; 
            padding-top: 20px;
            background-color:#f2f2f2;
        }
        .nav a 
        {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
          }
          .nav a:hover 
          {
            color: red;
          }
          .side
          {
            padding: 6px 8px 6px 16px;
            font-size: 25px;
            color: #818181;
            display: block;
          }
          .main 
          {
            margin-left: 200px; 
            padding: 0px 10px;
            font-size: 28px;
          }
          .user
          {
            display: block;
            width: 50%;
            margin-left: 50px;
          }
          table
          {
            width: 100%;
          }
          button:active
          {
            background-color: lightgray;
          }
          .box
          {
            width: 365px;
            float: left;
            border: 5px solid ;
            background-color: lightblue;
            padding: 50px;
            margin: 20px;
          }
          .insidebox
          {
            float: right;
          }

.sidebar
{
    outline: none;
    border: none;
    text-decoration: none;
    font-family: "Poppins", sans-serif;
    /* position:fixed; */
}

.logo1 a
{
    margin-left: 50px;
    float:left;
    /* border: 1px solid black; */
}

.logo1 a:hover
{
    background: none;
}

body
{
    background: #DDDDDD;
    margin-left: 120px;
    margin-right: 25px;
    margin-top: 30px;
}

nav
{
    position: fixed;
    top: 0;
    bottom: 0;
    height: 100%;
    left:0;
    background: linear-gradient(#ff7b00,#ffb700);
    width: 90px;
    overflow:hidden;
    transition: width 0.2s linear;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

.sidebarlogo a
{
    color: rgb(85,83,83);
    font-size: 14px;
    /* display: table; */
    
    padding: 5px;
    padding-left: 10px;
    margin: 10px 0 0 10px;
    
    text-decoration: none;
}
.logo 
{
    width: 200px;
    text-align: center;
    display: flex;
    transition: all 0.5s ease;
    margin: 10px 0 0 10px;
    
}
.logo img
{
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.logo img:hover
{
    cursor: pointer;
}

.logo span
{
    font-weight: bold;
    padding-left: 0px; 
    font-size: 18px; 
    text-transform: uppercase;  
}

.logo:hover
{
    background: none;
    cursor:unset;
}

.sidebar a
{
    color: rgb(85,83,83);
    font-size: 14px;
    display: table;
    width: 200px;
    padding: 5px;
    padding-left: 10px;
    margin-top: 10px;
    text-decoration: none;
}

.sidebar
{
    top: 0;
    left: 0;
}

.sidebar .fa
{
    position: relative;
    width: 70px;
    height: 40px;
    top: 14px;
    font-size: 20px;
    text-align: center;
}

.nav-item
{
    position: relative;
    top: 12px;
    margin-left: 10px;
}

.sidebar a:hover
{
    background: linear-gradient(to left,#ffaa00,#ffea00);
    color: white;
    transition: all 0.3s ease;

}

nav:hover
{
    width: 200px;
    transition: all 0.5s ease;
}

.logout
{
    position: absolute;
    bottom: 0;
}

          
*
{
  box-sizing: border-box;
    margin: 0;
    padding: 0;
}

          
          contaner::after
          {
            content: "";
            clear: both;
            display: table;
          }
          .order
          {
            float: left;
            border: 3px solid ;
            padding: 10px;
            margin: 10px;
          }
          .insideorder
          {
            float: right;
          }
          img
          {
            height: 100px;
          }
          .center
          {
            text-align: center;
          }
    </style>
</head>
<body>
<?php
        $host = "SELECT * FROM `admin`";
        $query = mysqli_query($conn,$host);
        $host_image = mysqli_fetch_assoc($query);
?>
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
                    <a href="http://localhost/DWP_1Coin_Project/adminlogout.php" class="logout">

                        <i name="fa"class="fa fa-sign-out"></i><span class="nav-item">Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
        </div>
    <div class="main">
        <p><i class="fa fa-tasks"></i> My Dashboard</p>
        <div class="contaner">
            <div class="box">
                <i class="fa fa-eye"></i> Views
                <span class="insidebox"> 99</span>
            </div>
            <div class="box">
                <i class="fa fa-share-alt"></i> Shares
                <span class="insidebox"> 15</span>
            </div>
            <div class="box">
                <i class="fa fa-thumbs-up"></i> Like
                <span class="insidebox"> 20</span>
            </div>
        </div>
        <br><br><br><br><br><br>
        <p>Recent Prodct</p>
        <table border="1px">
            <?php
            $sql = "select * from product;";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result)
            ?>
            <tr class="center">
                <td>Product Name :</td>
                <td>Product Category :</td>
                <td>Product Price :</td>
            </tr>
            <tr class="center">
                <td><?php echo $row["Prod_Name"];	?></td>
                <td><?php echo $row["Prod_cate"];?></td>
                <td><?php echo $row["Prod_price"];?></td>
            </tr>
        </table>
        <p>Recent Order</p>
        <table border="1px">
            <?php
            $sql = "select * from orderorder;";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result)
            ?>
            <tr class="center">
                <td>Food Name :</td>
                <td>Food Quantity :</td>
                <td>Food Price :</td>
            </tr>
            <tr class="center">
                <td><?php echo $row["foodname"];	?></td>
                <td><?php echo $row["qty"];?></td>
                <td><?php echo $row["price"];?></td>
            </tr>
            
        </table>
        
        <p>Recent User</p>
        <table border="1px">
            <?php
            $sql = "select * from user;";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result)
            ?>
            <tr class="center">
                <td>User Name :</td>
                <td>Date :</td>
                <td>Status :</td>
            </tr>
            <tr class="center">
                <td><?php echo $row["Name"];	?></td>
                <td><?php echo $row["Date"];?></td>
                <td><?php echo $row["Status"];?></td>
            </tr>
        </table>
        <br>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manage.php#">More User  <i class="fa fa-mail-forward"></i></button>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manageorder.php#">More Order  <i class="fa fa-mail-forward"></i></button>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manageproduct.php#">More Product  <i class="fa fa-mail-forward"></i></button>   
    </div>
</body>
>>>>>>> ef52eafee83641cec7ed9cc91c67b8032fe16a55:loading_dashboard.php
</html>