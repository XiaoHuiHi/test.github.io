<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/he.css">
    <title>Homepage | 1 Coin Sandwich</title>
</head>  

<style>
*{
    margin: 0;
    padding: 0;
    outline: none;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.homepage-content{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  padding: 0.5rem 1rem 1rem 1rem;
}

.homepage-card{
  background-color: white;
  box-shadow: 0px 1px 4px darkgray;
  border-radius: 15px;
  cursor: pointer;
}

.homepage-card:hover{
  box-shadow: #000000;
}

.card-image{
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 15px;
}

.card-detail{
  padding: 10px;
}

.card-detail h4{
  font-weight: bold;
}

.card-detail>h4>span{
  float: right;
} 


</style>
<body>


    <!--Sidebar-->
    <?php include "config.php" ?>
    <?php include "usersidebar.php" ?>
    <div class="homepage-content">


<!-- Display all Food from food table -->
<?php

require 'config1.php';
$conn = Connect();

$sql = "SELECT * FROM foodmenu WHERE options = 'ENABLE' ORDER BY Food_ID";
$result = mysqli_query($conn, $sql);
$id = $_GET['email']; 
$query = "select * from user where Email = '$id'"; 
$r = mysqli_query($conn,$query);
$re = mysqli_fetch_assoc($r);
  while($row = mysqli_fetch_assoc($result))
   {

?>
            <div class="container" style="width: 100%;">
              <div class="homepage-card">
                <img class="card-image" src="<?php echo $row["images_path"]; ?>">
                <div class="card-detail">
                    <h4><?php echo $row["Food_Name"]; ?><span>RM<?php echo $row["Food_Price"]; ?></span></h4>
                    <?php 
                    if(isset($_POST['submit']))
                    {
                        $id = mysqli_real_escape_string($conn,$_POST['foodname']);
                        $qty = mysqli_real_escape_string($conn,$_POST['quantity']);
                        $price = mysqli_real_escape_string($conn,$_POST['price']);


                        $sql = "INSERT INTO orders (foodname,quantity,price) VALUES ('{$id}','{$qty}','{$price}')";
                        $result = mysqli_query($conn,$sql); 
                        
                    }
                    ?>
                    <?php if(isset($_POST['submit'])){echo $name;}?><button class="las la-shopping cart" style="font-size:15px"> Add to Cart&nbsp;</button></a>
                    <a href="addintowishlist.php?email=<?php echo $re['Email'];?>&&id=<?php echo $row['Food_ID']?>"><button class="las la-heart" style="font-size:15px"> Wishlist&nbsp;</button></a>
              </div>
            </div>
</div>


            
<?php 
   }
?>
      
     



</body>
</html>