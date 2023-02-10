<?php include("config.php"); ?>

<html>
<head><title>Manage Order | 1 Coin Sandwich</title>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    fieldset
    {
        background-color: #f2f2f2;
    }
    .middle
    {
        max-width: 800px;
        margin: auto; 
    }
    *
    {
      font-size: 20px;
    }
    .left
    {
      float: right;
      margin-bottom: 50px;
    }
    td, th 
    {
      text-align: left;
      padding: 30px;
    }
    a:hover
    {
      color: red;
    }
  </style>
</head>
<body>


<div class="middle">

    <fieldset>
        <?php
        $sql = "SELECT * FROM orders";
        $result = mysqli_query($conn,$sql);
        ?>
      <h1><i class="fa fa-shopping-cart" style="font-size:50px"></i><b style="font-size: 50px;"> Order</b></h1>
      <thead class="thead-dark">
      <tr>
      <th width="40%">Food Name</th>
      <th width="10%">Quantity</th>
      <th width="20%">Price Details</th>
      <th width="15%">Order Total</th>
      <th width="5%">Action</th>
      </tr>
      </thead>
      
        <?php

        while($row = mysqli_fetch_array($result))
        {
            ?>
        <tr>
          <td><?php echo $row["foodname"]; ?></td>
          <td><?php echo $row["quantity"];	?></td>
          <td>RM<?php echo $row["price"];?></td>
          <td><a href="deleteorder.php?Food_ID=<?php echo $row['Food_ID']; ?>"><i class="fa fa-close" style="font-size:36px"></i></a>
          </td>
        </tr>
            <?php
        
        }

		?>
			
      </table>
      <button style="background-color: gray;">1</button>
      <button>2</button>
      <button>3</button>
      <button>4</button>
      <button>5</button>
      <button>Next Page</button><span class="left"><a href="add_order.php" alt="insert"><i class="fa fa-plus-square"></i> <input type="button" value="ADD other food or drink"></span></p>
      <a href="Homepage.php">Return Home page
      <div class="left"><a href="payment.php" alt="payment"><i class="fa fa-plus-square"></i> <input type="button" value="Checkout"></div>

    </fieldset>
  </div>
	

