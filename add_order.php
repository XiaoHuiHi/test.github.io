
<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head><title>Edit</title>
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
            <h1><b style="font-size: 50px;"><i class="fa fa-plus" style="font-size:50px"></i>Add New Food</b></h1>
            <form name="insertform" method="post" action="" >
                <select name="name" id="namef">
                    <option value="1" >Example of Food Name</option>
                    <option value="2"  >test1 (RM15.00)</option>
                    <option value="3"  >test2 (RM10.00)</option>
                    <option value="3"  >test3 (RM5.00)</option>
                </select><span id="error_fname"></span>
                <br>
                Food Name<sup>*</sup> :<br>
                <input type="text" name="fname" ><span id="error_fname"></span>
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
    $mname = $_POST['fname'];
    $mqty = $_POST['fqty'];
    
    
    if (!$mname)
    {
        echo "Please Key in the Correct Name follow the example !!";
        
    }
    else if(!$mqty)
    {
        echo "Please insert in Quantity !";
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




