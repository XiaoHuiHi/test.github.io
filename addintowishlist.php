<?php
    include 'config.php';
    $email = $_GET['email'];
    $id = $_GET['id'];

    
    $sql = "SELECT * FROM foodmenu Where Food_ID = '$id'";
    $query = mysqli_query($conn,$sql);
    $r=mysqli_fetch_assoc($query);
    $name = $r['Food_Name'];
    $price = $r['Food_Price'];
    $image = $r['images_path'];
        mysqli_query($conn,"INSERT INTO wishlist (itemname,itemprice,itemimage) VALUES ('$name','$price','$image')");
        header("Location: Homepage.php?email=".$email);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="hidden" name="foodname" value="<?php echo $r['Food_Name']?>">
        <input type="hidden" name="foodprice" value="<?php echo $r['Food_Price']?>">
        <input type="hidden" name="foodimage" value="<?php echo $r['images_path']?>">
    </form>

</body>
</html>