<?php
session_start();
    include 'config.php';
    $id = $_GET['id'];

    if(isset($_POST['change']))
    {
        // $file =$_FILES['image']['name'];

        // $query = "UPDATE product set image='$file' WHERE Prod_ID='$id'";

        // $res = mysqli_query($conn,$query);
        // if($res)
        // {
        //     move_uploaded_file($_FILES['image']['tmp_name'],"$file");
        // }
        $imageName = $_FILES['image']['name'];
            $imageTempName = $_FILES['image']['tmp_name'];
            $targetPath = "./image/".$imageName;
            if(move_uploaded_file($imageTempName,$targetPath))
            {
                $sql = "UPDATE product SET image ='$imageName' WHERE Food_Name='$id'";
                // $sql = "INSERT INTO product(image) VALUES('$imageName') WHERE Prod_ID = '$id'";
                $result = mysqli_query($conn,$sql);
            }
    }
            
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

    *
    {
        margin: 0;
        padding: 0;
    }
    .container
    {
        margin: 20%;
        margin-top: 30px;
        height: auto;
    }
    h1
    {
        text-align: center;
        background: linear-gradient(#ff7b00,#ffb700);
        border-bottom: 2px solid gray;
        padding: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        margin-bottom: 20px;
        font-size: 3em;
        font-family: 'Courier New', Courier, monospace;
    }
    fieldset
    {
        padding: 10px;
        height: 110%;
    }
    form
    {
        /* text-align: center; */
        padding-left: 20px;
        font-family: 'Courier New', Courier, monospace;
    }
    input
    {
        border: none;
        border-bottom: 1px solid black;
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 15px;
        padding-right: 20px;
    }
    input[type='file']
    {
        display: none;
    }
    .Choose
    {
        /* border: 1px solid ; */
        padding: 10px;
        border-radius: 20px;
        background: linear-gradient(#ff7b00,#ffb700);
        color: white;
    }
    .Choose:hover
    {
        cursor: pointer;
        background: linear-gradient(to left,#ffaa00,#ffea00);
        color: black;
    }
    input[type='submit']
    {
        padding: 10px;
        border-radius: 20px;
        background: linear-gradient(#ff7b00,#ffb700);
        color: white;
        border: none;
    }

    input[type='submit']:hover
    {
        cursor: pointer;
        background: linear-gradient(to left,#ffaa00,#ffea00);
        color: black;
    }

    h4
    {
        border-radius: 20px;
        background: linear-gradient(#ff7b00,#ffb700);
        width: 150px;
        padding: 7px;
    }
</style>
<?php
    // $p = "SELECT * FROM foodmenu where Food_Name = '$id'";
    // $query= mysqli_query($conn,$p);

    // $product = mysqli_fetch_assoc($query);
?>
<?php 
    
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM foodmenu WHERE Food_ID = $id");
        $p = mysqli_fetch_assoc($query);

        $d= $_GET['name'];
        $q= mysqli_query($conn,"SELECT * From `admin` where username = '$d'");
        $s=mysqli_fetch_assoc($q);
    ?>
<body>

    <div class="container">
    <h1>Edit Product</h1>
    <fieldset>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $p['Food_ID']?>">
        <label for=""><i class="fa fa-cube"></i> Product_Name:</label>
        <input name="prodname" type="text" value="<?php echo $p['Food_Name']?>">
        <br>
        <label for=""><i class="fa fa-usd"></i> Price:</label>
        <input type="text" name="price" value="<?php echo $p['Food_Price']?>">
        <br>
        <label for=""><i class="fa fa-archive"></i> Category:</label>
        <input type="text" name="cate" id="" value="<?php echo $p['Food_Cat']?>">
        <br>
        <label for=""><i class="fa fa-cubes"></i> Stock:</label>
        <input type="number" name="stock" id="" value="<?php echo $p['stock']?>">
        <br>
        <label for="file"  class="Choose"><i class="fa fa-camera"></i> Choose a Photo</label>
        <input type="file" id="file" name="image" class="form-control" multiple>
        <br>
        <br>
        <h4><i class="fa fa-picture-o"></i> ORIGINAL IMAGE:</h4>
        <img width="200px" src="<?php echo $p['images_path']?>" alt="">
        <?php ?>
        <br>
        <input type="submit" name="change" value="CHANGE">
        <br>
        <a href="Manage_prod.php?name=<?php echo $s['username']?>">Back To Manage Product</a>
        <a href="editproduct.php?id=<?php echo $p['Food_ID']?>&&name=<?php echo $s['username']?>">Refresh</a>

    </form>
    </fieldset>
    </div>
    <?php
    if(isset($_POST['change']))
    {

    // $id= $_POST['id'];
        $prodname= $_POST['prodname'];
        $code= $_POST['code'];
        $cate= $_POST['cate'];
        $image= $_POST['image'];
        $stock= $_POST['stock'];
        $price = $_POST['price'];
        mysqli_query($conn,"UPDATE foodmenu set Food_NAme='$prodname' , Food_Cat = '$cate',Food_Price='$price',stock = '$stock' WHERE Food_ID = '$id'");
        // header('location:Manage_prod.php');

            
    }
    


    ?>
</body>
</html>