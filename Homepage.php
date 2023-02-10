<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/he.css">
    <title>Homepage | 1 Coin Sandwich</title>
</head>  

<body>

    <!--Header-->
    <?php include "header.php" ?>

    <!--Sidebar-->
    <?php include "config.php" ?>
    <?php include "usersidebar.php" ?>

<div class="container" style="width:40%;">

<!-- Display all Food from food table -->
<?php

require 'config1.php';
$conn = Connect();

$sql = "SELECT * FROM foodmenu WHERE options = 'ENABLE' ORDER BY Food_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["Food_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
<h4 class="text-dark"><?php echo $row["Food_Name"]; ?></h4>
<h5 class="text-info"><?php echo $row["Food_Cat"]; ?></h5>
<h5 class="text-danger">RM <?php echo $row["Food_Price"]; ?>/-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["Food_Name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["Food_Price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["Ref_ID"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>
</body>
</html>