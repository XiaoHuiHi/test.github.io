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

    a:hover
    {
        background: linear-gradient(to left,#ffaa00,#ffea00);;
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
  </style>
  <?php
        $host = "SELECT * FROM host";
        $query = mysqli_query($conn,$host);
        $host_image = mysqli_fetch_assoc($query);

        
        $image = $host_image['image'] 
?>

</head>
<body>
<div class="sidebar">
        <nav>
            <ul>
                <li>
                    <a class="logo" href="#">
                        <?php echo '<img src="'.$image.'" >'?>
                        <span class="nav-item"><?php echo $host_image['name']?></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-cubes"></i>
                        <span class="nav-item">Product</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-clone"></i><span class="nav-item">Provissions</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="logout">
                        <i class="fa fa-sign-out"></i><span class="nav-item">Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
        </div>
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
