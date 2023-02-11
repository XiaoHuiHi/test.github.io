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
                <th>Price per Item</th>
                <th>Total Price</th>
            </thead>
            <tbody>
                <?php
   
								

   $sql = "SELECT * FROM orderorder";
   $result = mysqli_query($conn,$sql);
   $total=0;
   
   while($row = mysqli_fetch_array($result))
   {
    $p=$row["price"];
    $q=$row["qty"];
$subtotal=$p*$q;
$total =  $total + $subtotal;

                  ?>
            
            <tr>
								
								<th><?php echo $row['foodid']; ?></th>
								<th><?php echo $row['foodname']; ?></th>
								<th><?php echo $row['qty']; ?></th>
                <th>RM<?php echo $row['price']; ?></th>
								<th>RM <?php echo $subtotal; ?></th>
								
							</tr>
					
            </tbody>
            <?php
          }
          ?>
        </table>
        <br><br>
        <a href="#">
				<i class="fa fa-edit">Home</i> 
		    </a>
        
        <br><button onclick="window.print()">Print this page</button>
	</fieldset>
	
</div>
 
            
</body>
</html>
