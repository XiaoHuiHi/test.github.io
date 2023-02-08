<?php
    include("config.php");
    
	$id=$_GET['Name'];

	mysqli_query($conn,"delete from user where Name='$id'");
	header("location: Register.php")
?>