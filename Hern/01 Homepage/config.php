<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "dwp_1coin_project";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>

<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: Login.php"); 
}

?>