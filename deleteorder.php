<?php
    include("config.php");
    
	$id=$_GET['foodid'];

	mysqli_query($conn,"delete from orderorder where foodid='$id'");

?>