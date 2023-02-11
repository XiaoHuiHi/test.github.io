<?php
    include 'config.php';
    $email = $_GET['email'];
    $id = $_GET['id'];
    
    $sql = "SELECT * From foodmenu where Food_ID = $id";
    $query = mysqli_query($conn,$sql);

    if($r = mysqli_fetch_assoc($query))
    {
        $name = $r['Food_Name'];
        $price = $r['Food_Price'];
        
        mysqli_query($conn,"INSERT INTO orders()");
    }

    
?>