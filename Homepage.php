<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/he.css">
    <title>Homepage | 1 Coin Sandwich</title>
</head>  
<style>
   .homepage-content{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 0.5rem 1rem 1rem 1rem;
    /* border: 1px solid black; */
}

.homepage-card{
    background-color: var(--white);
    box-shadow: 0px 1px 4px #cfcfcf;
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

  while($row = mysqli_fetch_assoc($result))
   {

?>
<div class="container" style="width:100%;">
  <div class="homepage-card">
                <img class="card-image" src="<?php echo $row["images_path"]; ?>">
                <div class="card-detail">
                    <h4><?php echo $row["Food_Name"]; ?><span>RM10</span></h4>

                </div>
  </div>
</div>


            
<?php 
   }
?>
      
     



</body>
</html>