<?php
    include("config.php");
    
	$id=$_GET['Food_ID'];

	mysqli_query($conn,"delete from orders where Food_ID='$id'");

?>