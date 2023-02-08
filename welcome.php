<?php 
    session_start();
    if(!isset($_SESSION['SESSION_username']))
    {
        header("Location: adminloginpage.php");
        die();
    }
    
    include 'config.php';
    $query = mysqli_query($conn, "SELECT * FROM ADMIN Where EMAIL = '{$_SESSION['SESSION_EMAIL'] }'");

    if(mysqli_num_rows($query) >0)
    {
        $row = mysqli_fetch_assoc($query);

        echo "Welcome" ." " . $row['name'] . " " . "<a href='logout.php'>Logout</a>";
    }
?>