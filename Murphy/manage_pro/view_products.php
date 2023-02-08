<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product</title>
</head>
<body>
	<fieldset>
    <table class="table table-striped table-bordered table-hover" border="1px">
						<thead>
							<th> Product ID:</th>
							<th> Product Name:</th>
							<th> Category: </th>
							<th> Product Price:</th>
							<th> Product Stock:</th>
							<th> Product Delete:</th>
							<th> Product Edit:</th>
						</thead>
						
						<tbody>
							<?php 

								$i=0;
								$get_pro = "select * from product";
								$run_pro = mysqli_query($conn,$get_pro);
								
								while($row_pro=mysqli_fetch_assoc($run_pro))
								{
									$pro_id = $row_pro['Prod_ID'];
									$pro_title = $row_pro['Prod_Name'];
									$pro_img1 = $row_pro['Prod_cate'];
									$pro_price = $row_pro['Prod_price'];
									$pro_keywords = $row_pro['Prod_stock'];
									
									$i++;
								
							?>
							
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $pro_title; ?></td>
								<th><?php echo $pro_img1; ?></td>
								<td>RM <?php echo $pro_price; ?></td>
								<td><?php echo $pro_keywords; ?></td>
								<td>
									<a href="del_prod.php?Prod_ID=<?php echo $pro_id; ?>">
										<i class="fa fa-trash-o"></i> Delete
								
									</a>
								</td>
								<td>
									<a href="edit_prod.php?Prod_ID=<?php echo $pro_id; ?>">
										<i class="fa fa-pencil"></i> Edit
								
									</a>
								</td>
							</tr>
						</tbody>
								<br><br>
								<a href="add_prod.php">
										<i class="fa fa-edit"></i> Add
								
									</a>

							<?php 
								} 
						?>
	</table>
	</fieldset>
</body>
</html>