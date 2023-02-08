<?php 
include("config.php"); 



$get_order = "SELECT * FROM orderorder";
$run_order = mysqli_query($conn, $get_order);

if (mysqli_num_rows($run_order) > 0) {
  while ($row_order = mysqli_fetch_assoc($run_order)) {
    $food_ID = $row_order['foodid'];
    $food_name = $row_order['foodname'];
    $food_qty = $row_order['qty'];
    $food_price = $row_order['price'];
  }
} else {
  echo "No data found";
}

mysqli_close($conn);
?>

<html>
<head>
  <title>Order History</title>
  <style>
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
    sup {
      color: red;
    }
  </style>
</head>
<body>
  <div class="middle">
    <fieldset>

		
		<h1>Your Order</h1>
        <table border="1px">
            <thead>
                <th>Food ID</th>
                <th>Food Name</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </thead>
            <tbody>
                <?php
            if (!$conn) 
            {
			    die("Connection failed: " . mysqli_connect_error());
			}
              
								
			$get_orderrow_order = "select * from orderorder";
			$run_order = mysqli_fetch_assoc($conn,$get_order);

                while ($row_order = mysqli_fetch_assoc($run_order)) {
                    $food_ID = $row_order['foodid'];
                    $food_name = $row_order['foodname'];
                    $food_qty = $row_order['qty'];
                    $food_price = $row_order['price'];
                }
            ?>
            
            <tr>
								
								<td><?php echo $food_ID; ?></td>
								<th><?php echo $food_name; ?></td>
								<td>RM <?php echo $food_qty; ?></td>
								<td><?php echo $food_price; ?></td>
								
							</tr>
					
            </tbody>
        </table>
 
	   
	</fieldset>
	
</div>
 
            
</body>
</html>
