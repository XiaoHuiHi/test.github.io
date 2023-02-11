<?php
    include 'config.php';
    $id = $_GET['id'];
    $email = $_GET['email'];

    $query = "DELETE FROM wishlist WHERE id = '$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        // unlink("image/".$image);
        $_SESSION['success']="Data is Deleted";
        header("location: wishlist.php?email=".$email);
    }
    else
    {
        $_SESSION['status']="Data is Not Deleted";
    }
?>

