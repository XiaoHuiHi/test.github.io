<?php
    include("config.php");
    
	$id=$_GET['No'];
	$name = $_GET['name'];
	mysqli_query($conn,"delete from user where No='$id'");
	header("location: manageuser.php?name=".$name)
?>