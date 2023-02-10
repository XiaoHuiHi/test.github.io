<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <div class="main">
        <p><i class="fa fa-tasks"></i> My Dashboard</p>
        <div class="container">
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
        <button style="font-size: 25px;"><a href="http://localhost/DWP_1Coin_Project/manageuser.php">More User  <i class="fa fa-mail-forward"></i></button>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manageorder.php#">More Order  <i class="fa fa-mail-forward"></i></button>
        <button style="font-size: 25px;"><a href="http://localhost/DWP%20project/manageproduct.php#">More Product  <i class="fa fa-mail-forward"></i></button>   
    </div>
</body>

</html>