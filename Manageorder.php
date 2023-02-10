<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Manage Order | 1 Coin Sandwich</title>
</head>
<body>
<!--Sidebar!-->
<?php include "adminsidebar.php" ?>

    <div class="main">
        <p><i class="fa fa-shopping-cart"></i> Manage Order</p>
        <br><br>
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