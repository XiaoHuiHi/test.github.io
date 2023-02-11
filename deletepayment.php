<?php
    include("config.php");
    
	$id=$_GET['checkid'];
	$name = $_GET['name'];
	mysqli_query($conn,"delete from checkout where checkid='$id'");
	header("Location: managepayment.php?name=".$name);
?>