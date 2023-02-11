<?php 
include("config.php"); 





?>

<html>
<head>
  <title>Order History</title>
  <style>
    body
    {
      background-image: url("https://i.pinimg.com/564x/52/9d/2b/529d2ba9360a0707359ca15b9cb184be.jpg");
      background-size: 100%;
      background-repeat:no-repeat;
    }
    .middle {
      max-width: 800px;
      margin: auto; 
    }

    * {
      font-size: 20px;
    }

    fieldset {
      background-color: #f2f2f2;
    }
    a:hover {
      color: red;
    }

    table
    {
      width: 100%;
    }
    
    
  </style>


</head>
<body>

  <div class="middle">
    <fieldset>

		
		<h1>Your Order</h1>
        <table border="1px">
            <thead>
                <th>Order ID</th>
                <th>Food Name</th>
                <th>Quantity</th>
                <th>Price per Item</th>
                <th>Total Price</th>
            </thead>
            <tbody>
                <?php
   
								
    $email = $_GET['email'];
   $sql = "SELECT * FROM orders";
   $result = mysqli_query($conn,$sql);
   $total=0;
   
   while($row = mysqli_fetch_array($result))
   {
    $p=$row["price"];
    $q=$row["quantity"];
    $subtotal=$p*$q;
    $total =  $total + $subtotal;

                  ?>
            
            <tr>
								
								<th><?php echo $row['order_ID']; ?></th>
								<th><?php echo $row['foodname']; ?></th>
								<th><?php echo $row['quantity']; ?></th>
                <th>RM<?php echo $row['price']; ?></th>
								<th>RM <?php echo $subtotal; ?></th>
								
							</tr>
					
            </tbody>
            <?php
          }
          ?>
        </table>
        <br><br>
        <a href="Homepage.php?email=<?php echo $email?>">
				<i class="fa fa-edit">Return Home page</i> 
		    </a>
        
        <br><br><button style="float: right;" onclick="window.print()">Print this page</button>
	</fieldset>
	
</div>
 
            
</body>
</html>
