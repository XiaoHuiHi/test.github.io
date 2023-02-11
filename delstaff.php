<?php 
    include 'config.php';

    $id = $_GET['id'];
    $name = $_GET['name'];
    $query = "DELETE FROM `admin` WHERE username = '$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        // unlink("image/".$image);
        header("location: staff.php?name=".$name);
        $_SESSION['success']="Data is Deleted";
        
    }
    else
    {
        $_SESSION['status']="Data is Not Deleted";
    }
?>