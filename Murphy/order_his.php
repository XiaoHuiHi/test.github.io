<?php 
include("config.php"); 





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
   
								

   $sql = "SELECT * FROM orderorder";
   $result = mysqli_query($conn,$sql);
   
   while($row = mysqli_fetch_array($result))
   {

                  ?>
            
            <tr>
								
								<td><?php echo $row['foodid']; ?></td>
								<td><?php echo $row['foodname']; ?></td>
								<td>RM <?php echo $row['qty']; ?></td>
								<td><?php echo $row['price']; ?></td>
								
							</tr>
					
            </tbody>
            <?php
          }
          ?>
        </table>
 
	   
	</fieldset>
	
</div>
 
            
</body>
</html>
