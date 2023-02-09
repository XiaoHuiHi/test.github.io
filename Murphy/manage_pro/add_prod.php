<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
	<head><title>Add New Food/Drink</title>
	<link href="design.css" type="text/css" rel="stylesheet" />
	<style>
		fieldset 
		{
      		background-color: #f2f2f2;
    	}
	</style>
</head>
<body>

<div id="wrapper">


	
	<div id="right">
	<fieldset>
		<h1>Insert New Food</h1>

		<form name="addfrm" method="post" action="">

			<p><label>Product ID:</label><input type="text" name="Prod_ID" size="80">
		 
			<p><label>Product Name:</label><input type="text" name="Prod_Name" size="10">
			
			<!--<p><label>Product Category:</label>
				<select name="Prod_cate">
					<option value="Food">Food</option>
					<option value="Drink">Drink</option>
				</select>-->
			<p><label>Product Category:</label><input type="text" name="Prod_cate" size="10">
			
			<p><label>Product Price:</label><input type="text" name="Prod_price" size="10">

			<p><label>Product Stock:</label><input type="number" name="Prod_stock">
			
			<p><input type="submit" name="savebtn" value="Save_inventory">

		</form>
	</fieldset>
	</div>
	
</div>


</body>
</html>

<?php
include("config.php");
if(isset($_POST["savebtn"])) 	
{
	$pro_id = $_POST["Prod_ID"];  	
	$pro_title = $_POST["Prod_Name"]; 
	$pro_img1 = $_POST['Prod_cate']; 	
	$pro_price = $_POST["Prod_price"];  	
	$pro_keywords = $_POST["Prod_stock"];  	
	
	mysqli_query($conn,"INSERT into product (Prod_ID, Prod_Name, Prod_cate, Prod_price, Prod_stock) values ('$pro_id','$pro_title','$pro_img1','$pro_price','$pro_keywords')");
	//mysqli_query($conn,"INSERT into product ( Prod_Name, Prod_cate, Prod_price, Prod_stock) values ('$pro_title','$pro_price','$pro_keywords')");

	
	?>
	
		<script type="text/javascript">
			alert("<?php echo $pro_title.' saved' ?>");
		</script>
	
	<?php
	
	
}

?>

