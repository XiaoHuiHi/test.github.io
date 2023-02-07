<?php
    include("dataconnection.php");
    
	$id=$_GET['foodid'];

	mysqli_query($connect,"delete from order where foodid='$id'");
?>