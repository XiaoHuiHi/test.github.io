<?php
session_start();
    include 'config.php';
    $id = $_GET['id'];
    $name = $_GET['name'];
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
            
                $sql = "UPDATE `admin` SET image ='$imageName' WHERE username='$id'";
                // $sql = "INSERT INTO product(image) VALUES('$imageName') WHERE Prod_ID = '$id'";
                $result = mysqli_query($conn,$sql);
            
    }
            
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
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
    
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM `admin` WHERE username = '$id'");
        $p = mysqli_fetch_assoc($query);
    
    ?>
<body>

    <div class="container">
    <h1>Edit Admin</h1>
    <fieldset>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <label for=""><i class="fa fa-user"></i> Admin Name:</label>
        <input name="prodname" type="text" value="<?php echo $p['username']?>">
        <br>
        <label for=""><i class="fa fa-key"></i> Password:</label>
        <input type="text" name="password" value="<?php echo $p['password']?>">
        <br>
        <label for="file"  class="Choose"><i class="fa fa-camera"></i> Choose a Photo</label>
        <input type="file" id="file" name="image" class="form-control" multiple>
        <br>
        <br>
        <h4><i class="fa fa-picture-o"></i> ORIGINAL IMAGE:</h4>
        <div class="image">
            <img width="200px" src="<?php echo "images/".$p['image']?>" alt="">
        </div>
        
        <?php ?>
        <br>
        
        <input type="submit" name="change" value="CHANGE">
        <br>
        <a href="staff.php?name=<?php echo $name?>">Return Manage Staff</a> <a href="editstaff.php?id=<?php echo $id?>&&name=<?php echo $name?>">Refresh</a>

    </form>
    </fieldset>
    </div>
    <?php
    if(isset($_POST['change']))
    {

    // $id= $_POST['id'];
        $prodname= $_POST['prodname'];
        $price= $_POST['password'];
        mysqli_query($conn,"UPDATE `admin` set username='$prodname', password='$price' WHERE username = '$id'");
        // header('location: editstaff.php');

            
    }
    


    ?>
</body>
</html>