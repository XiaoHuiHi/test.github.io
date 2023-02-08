<?php
    include("config.php");
    
	$id=$_GET['id'];

	mysqli_query($conn,"DELETE from product where Prod_ID='$id'");
	header("location: Manage_prod.php");
?>