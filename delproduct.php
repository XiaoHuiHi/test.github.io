<?php
    include("config.php");
    
	$id=$_GET['id'];
	$admin =$_GET['name'];
        $host = "SELECT * FROM `admin` where username = '$admin'";
        $query = mysqli_query($conn,$host);
        $host_image = mysqli_fetch_assoc($query);
	mysqli_query($conn,"DELETE from foodmenu where Food_ID='$id'");
	header("location: Manage_prod.php?name=".$host_image['username']);
?>