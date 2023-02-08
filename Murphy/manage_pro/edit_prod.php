<?php include("config.php"); ?>
 
<html>
<head><title>Edit a Product</title>
<style>
    .middle
    {
        max-width: 800px;
        margin: auto; 
    }
    *
    {
      font-size: 20px;
    }
    fieldset
    {
        background-color: #f2f2f2;
    }
    a:hover
    {
      color: red;
    }
    sup
    {
      color: red;
    }
</style>
</head>
<body>
 

<div class="middle">
    <fieldset>
		<?php
		
		 
		$id = $_REQUEST["Prod_ID"];

		$result = mysqli_query($conn, "select * from product where Prod_ID = $id");
		$row = mysqli_fetch_assoc($result);

		?>
		
		<h1>Edit a Product</h1>
 
		<form name="addfrm" method="post" action="">
 
			<p><label>Product Name:</label><input type="text" name="Prod_Name" size="80" value="<?php echo $row['Prod_Name']; ?>">
		 
			<p><label>Product Price:</label><input type="text" name="Prod_price" size="10" value="<?php echo $row['Prod_price']; ?>">
			
			<p><label>Product Category[Sandwich/Drink]:</label><input type="text" name="Prod_cate" size="10" value="<?php echo $row['Prod_cate']; ?>">

			<p><label>Product Stock:</label><input type="number" name="Prod_stock" size="10" value="<?php echo $row['Prod_stock']; ?>">
			
			<p><input type="submit" name="savebtn" value="Update inventory">
 
		</form>
	   
	</fieldset>
	
</div>
 
 
</body>
</html>
 
<?php
 
if (isset($_POST["savebtn"])) 	
{
	$pro_title = $_POST["Prod_Name"];  	
	$pro_img1 = $_POST["Prod_cate"];  	
	$pro_price = $_POST["Prod_price"];  	
	$pro_keywords = $_POST["Prod_stock"];  		
	
	if (!$pro_title)
    {
        echo "Enter product name";
    }
	else if(!$pro_img1)
    {
        echo "Enter product category[Sandwich/Drink]";
    }
	else if(!$pro_price ||  is_nan($pro_price))
    {
        echo "Enter product price";
    }
	else if(!$pro_keywords ||  is_nan($pro_keywords))
    {
        echo "Enter product stock";
    }
	else
	{
 
		mysqli_query($conn,"UPDATE product set Prod_Name='" . $_POST['Prod_Name'] . "', Prod_cate='" . $_POST['Prod_cate'] . "', Prod_price='" . $_POST['Prod_price'] . "', Prod_stock='" . $_POST['Prod_stock'] . "'where Prod_ID=$id");
		echo "Updated successfully !";
	}

}
 
?>
