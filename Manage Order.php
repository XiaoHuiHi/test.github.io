<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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

          container::after
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
<!--Sidebar!-->
<?php include "adminsidebar.php" ?>

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
    </div>
</body>
</html>