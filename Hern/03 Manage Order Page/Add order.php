<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html>
<head><title>New Order</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .middle
    {
        max-width: 800px;
        margin: auto; 
    }
    sup
    {
      color: red;
    }
    *
    {
      font-size: 20px;
    }
    fieldset
    {
        background-color: #f2f2f2;
    }
    a:hover
    {
      color: red;
    }
</style>
</head>

  <body>
    <div class="middle">
        <fieldset>
            <h1><b style="font-size: 50px;"><i class="fa fa-plus" style="font-size:50px"></i>Add New Order</b></h1>
            <form name="insertform" method="post" action="" >
                <select name="name" id="fname">
                    <option value="1">Chicken Slice [RM10]</option>
                    <option value="2">Chicken Teriyaki [RM10}</option>
                    <option value="3">Italian B.M.T.™ [RM10]</option>
                    <option value="4">Meatball Marinara [RM10]</option>
                    <option value="5">Roasted Chicken [RM10]</option>
                    <option value="6">Roast Beef [RM10]</option>
                    <option value="7">Spicy Italian [RM10]</option>
                    <option value="8">Steak & Cheese [RM10]</option>
                    <option value="9">Subway Club™ [RM10]</option>
                    <option value="10">Subway Melt™ [RM10]</option>
                    <option value="11">Tuna [RM10]</option>
                    <option value="12">Seafood & Crab [RM10]</option>
                    <option value="13">Turkey Breast [RM10]</option>
                    <option value="14">Turkey Breast & Chicken Slice [RM10]</option>
                    <option value="15">Veggie Delite™ [RM10]</option>
                </select><span id="error_fname"></span>
                <br>
                Food Quantity<sup>*</sup> :<br>
                <input type="number" name="fqty" min="1" max="100" ><span id="error_fqty" ></span>

                <br><br>
                <input type="submit" name="save" value="submit" >
                <a href="order.php">Back to order list</a>
            </form>
        </fieldset>
    </div>
  </body>
</html>

<?php
  if(isset($_POST['save']))
  {	 
    $foodname = $_POST['fname'];
    $mqty = $_POST['fqty'];
    
    
    if (!$mname)
    {
        echo "Please key in the Correct Name follow the example !!";
        
    }
    else if(!$mqty)
    {
        echo "Please insert in quantity !";
    }
    else if($mname=="test1")
    {
        $sql = "select * from product  where Prod_ID=1"; // put from the price check in product list  ( where no=$login_no )
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result);
        $price=$row["Prod_price"];

        $sql = "INSERT INTO orderorder (foodname,qty,price) VALUES ('$mname','$mqty','$price')";
        if (mysqli_query($connect, $sql)) {
            echo "New order created successfully !";
          } else {
            echo "Error: " . $sql . "" . mysqli_error($connect);
          }
          mysqli_close($connect);

    }
    else if($mname=="test2")
    {
        $sql = "select * from product  where Prod_ID=2"; // put from the price check in product list  ( where no=$login_no )
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result);
        $price=$row["Prod_price"];

        $sql = "INSERT INTO orderorder (foodname,qty,price) VALUES ('$mname','$mqty','$price')";
        if (mysqli_query($connect, $sql)) {
            echo "New order created successfully !";
          } else {
            echo "Error: " . $sql . "" . mysqli_error($connect);
          }
          mysqli_close($connect);

    }
    else if($mname=="test3")
    {
        $sql = "select * from product  where Prod_ID=3"; // put from the price check in product list  ( where no=$login_no )
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result);
        $price=$row["Prod_price"];

        $sql = "INSERT INTO orderorder (foodname,qty,price) VALUES ('$mname','$mqty','$price')";
        if (mysqli_query($connect, $sql)) {
            echo "New order created successfully !";
          } else {
            echo "Error: " . $sql . "" . mysqli_error($connect);
          }
          mysqli_close($connect);

    }
    else
    {
      echo "Please Key in the Correct Name follow the example !!";

    }

    
  }
?>




