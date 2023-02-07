<?php
    include("config.php");
    
	$id=$_GET['No'];

	mysqli_query($conn,"delete from user where No='$id'");
	header("location: manage.php")
?>