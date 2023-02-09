<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <script>
    function validationForm()
    {
        var fn=document.forms["from1"]["Fullname"].value;
        var em=document.forms["from1"]["Email"].value;
        var pn=document.forms["from1"]["Phonenumber"].value;

        var checkem= /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9\.]+).([a-z]+)$/;

        if(fn==null || fn=="")
        {
            alert("Name cannot be blank");
            return false;
        }
        else if(!checkem.test(em))
        {
            alert("Email cannot be blank & must follow the example of email style");
            return false;
        }

        var ck=document.getElementById("tick").checked;
          
        if(ck==null || ck=="")
        {
            alert("Must agree the Terms and Conditions");
            return false;
        }
    }

    </script>

    <style>

        .middle
        {
            max-width: 900px;
            margin: auto; 
        }
        .fa 
        {
            font-size: 24px;
            width: 50px;
            text-align: center;
            margin: 5px 2px;
        }
        
        .fa:hover 
        {
            opacity: 0.7;
        }
        * 
        {
            box-sizing: border-box;
        }
        h3
        {
            text-align: center;
        }
        .row
        {
            margin-left:-5px;
            margin-right:-5px;
        }
        a:hover
        {
           color: red;
        }
        .box
        {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 15px;
            float: left;
            width: 70%;
            padding: 5px;
        }
        .box2
        {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 15px;
            float: left;
            width: 30%;
            padding: 5px;
        }
        input[type=text] 
        {
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 30px;
        }
        .botton
        {
            margin-top: 20px;
            border-radius: 30px;
        }
        span.price 
        {
            float: right;
            color: grey;
        }
        .selection
        {
            
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="middle">
        <h3>Payment pages</h3>
        <fieldset>
            <div class="row">
                <div class="box">
                    <form name="from1"  method="post" action=""  >
                        <label for="fname" ><i class="fa fa-user"></i>Full Name :</label>
                        <input type="text" name="Fullname" placeholder="Ali Lee">
                        <p id="full" style="font-size:0.8em; color:red"></p>
                        <label for="email"><i class="fa fa-envelope"></i>Email : </label>
                        <input type="text" name="Email" placeholder="AliLee@example.com">

                        <label for="fname"><i class="fa fa-phone"></i>Phone number :</label>
                        <input type="text" name="Phonenumber" placeholder="012-3456789">

                        <label for="fname" >Table number :</label>
                        <select name="tableno" >
                            <option value="0">Please select table number</option>
                            <option value="1">table 1</option>
                            <option value="2">table 2</option>
                            <option value="3">table 3</option>

                        </select>
                        
                        <div class="selection">
                            
                            <select name="choice">
                                <option value="0">Select payment method :</option>
                                <option value="1">TnG</option>
                                <option value="2">Debit or Credit card</option>
                                <option value="3">Cash</option>
                            </select>
                            <label>Accepted Cards :
                            <i class="fa fa-cc-mastercard"></i>
                            <i class="fa fa-cc-visa"></i>
                            </label><br>
        
                        </div>
                        <label>
                            <input type="checkbox" name="tick" > By clicking on, you agree to 1coin's <a href="#"> Terms and Conditions of Use.</a><br>
                            <input type="checkbox" checked="checked"> Email me with latest news<br>
                        </label>
        
                        <input type="submit" name="saveas" value="Continue to checkout" class="botton">
                        
                    </form>
                </div>
                <div class="box2">
                    <h4><i class="fa fa-shopping-cart"></i>Cart <span class="price" style="color:black"> </span>
                    <table>
                        <hr>
                    <?php
                    $sql = "SELECT * FROM orderorder";
                    $result = mysqli_query($conn,$sql);
                    $total=0;
                    ?>
                    <tr>
                    <td>Name </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>Quantity</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>Price</td>
                    </tr>

                    <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        $p=$row["price"];
                        $q=$row["qty"];
                    $subtotal=$p*$q;
                    $total =  $total + $subtotal;
                    ?>
                    <tr>
                    <td><?php echo $row["foodname"]; ?></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td><?php echo $row["qty"]; ?></td>
                    <td>&nbsp;&nbsp;&nbsp;</td>

                    <td>RM<?php echo $subtotal; ?></td>
                    </tr>
                    <?php
                    
                    }
                    ?>
                    </table>
                    <hr>
                    <p>Total :<span class="price" style="color:black"><b>RM <?php echo $total;?></b></span></p>
                </div>
            </div>
            <p><a href="http://localhost/DWP_1Coin_Project/Chorxiang/order/order.php">Back to order page</p>
        </fieldset>
    </div>

</body>
</html>


<?php
  if(isset($_POST['saveas']))
  {	 
    $mname = $_POST['Fullname'];
    $memail = $_POST['Email'];
    $mph = $_POST['Phonenumber'];
    $tabletable = $_POST['tableno'];
    $selected = $_POST['choice'];
    
    if (!$mname)
    {
        echo "Please Key in Name !";
        
    }
    else if(!$memail)
    {
        echo "Please Key in Email !";
        
    }
    else if(!$mph)
    {
        echo "Please Key in Phone Number !";
        
    }
    else if(!isset($_POST['tick']))
    {
        echo "Must agree the Terms and Conditions";
        
    }
    else if($selected==0)
    {
        echo "Please select the payment method";
    }
    else if($tabletable==0)
    {
        echo "Please select the table of your seet";        
    }
    else
    {
        $sql = "INSERT INTO checkout (Name,Email,Phonenumber,payment_method,table_number,total) VALUES ('$mname','$memail','$mph','$tabletable','$selected','$total')";
        if (mysqli_query($conn, $sql)) {
            echo "payment successfully !";

          } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
          }
          mysqli_close($conn);
    }

    
  }
?>