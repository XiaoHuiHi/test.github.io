<?php
    include("config.php");
    
	$id=$_GET['Prod_ID'];

	mysqli_query($conn,"delete from user where Prod_ID='$id'");

?>