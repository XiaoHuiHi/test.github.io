<?php
session_start();
    include 'config.php';
    $msg='';
    if(isset($_POST['create']))
    {
        $prodname = mysqli_real_escape_string($conn,$_POST['prodname']);
        $price = mysqli_real_escape_string($conn,$_POST['price']);
        $code = mysqli_real_escape_string($conn,$_POST['code']);
        $cate = mysqli_real_escape_string($conn,$_POST['cate']);
        $stock = mysqli_real_escape_string($conn,$_POST['stock']);
        $imageName = $_FILES['image']['name'];
        $imageTempName = $_FILES['image']['tmp_name'];
        $targetPath = "image/".$imageName;
        if(move_uploaded_file($imageTempName,$targetPath))
        {
            // $sql = "INSERT INTO product(image) VALUES('$imageName')";
            $sql = "INSERT INTO product(Prod_Name,Prod_price,code,Prod_cate,Prod_stock,image) VALUES ('$prodname','$price','$code','$cate','$stock','$imageName')";

            $result = mysqli_query($conn,$sql);
        }
        if($result)
        {
            $msg = "<div style='background-color: green; color: white; font-weight: bold;border-radius: 30px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center; margin-bottom: 20px;'>The Product have been create Successfuly</div>";
        }
        else
        {
            $msg = "<div style='background-color: #f94144; color: white; font-weight: bold;border-radius: 20px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Something Wrong Went.</div>";
        }



        

        
    }
            
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
    $p = "SELECT * FROM product";
    $query= mysqli_query($conn,$p);

    $product = mysqli_fetch_assoc($query);
?>
<?php 
    
        // $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM product");
        $p = mysqli_fetch_assoc($query);
    
    ?>

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
</style>
<body>
    <div class="container">
    <h1>Create Product</h1>
    <?php echo "<div>".$msg."</div>"?>
    <fieldset>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id">
        <label for=""><i class="fa fa-cube"></i> Product_Name:</label>
        <input name="prodname" type="text">
        <br>
        <label for=""><i class="fa fa-usd"></i> Price:</label>
        <input type="text" name="price" >
        <br>
        <label for=""><i class="fa fa-code"></i> Code:</label>
        <input name="code" type="text" >
        <br>
        <label for=""><i class="fa fa-archive"></i> Category:</label>
        <input type="text" name="cate" id="" >
        <br>
        <label for=""><i class="fa fa-cubes"></i> Stock:</label>
        <input type="number" name="stock" id="" >
        <br>
        <label for="file"  class="Choose"><i class="fa fa-camera"></i> Choose a Photo</label>
        <input type="file" id="file" name="image" class="form-control" multiple>
        <br>
        <input type="submit" name="create" value="Create">
        <br>
        <a href="Manage_prod.php">Back To Manage Product</a>

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
        mysqli_query($conn,"UPDATE product set Prod_Name='$prodname' , Prod_cate = '$cate',Prod_price='$price',Prod_stock = '$stock',code='$code' WHERE Prod_ID = '$id'");
        header('location:Manage_prod.php');

            
    }
    


    ?>
</body>
</html>