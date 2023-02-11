<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Payment Rec | 1 Coin Sandwich</title>

<style>
*{
    font-family: Arial, sans-serif;
}

h1{
    text-align: center; 
}

.table {
    overflow-x: scroll;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.table thead th {
    border: none;
    padding: 30px;
    font-size: 14px;
    color: #fff; 
    background: linear-gradient(#ff7b00,#ffb700);
    text-align: center; 
}

.active-row{
    border-bottom: 1px solid #dddddd;
    text-align: center;
}

.active-row td {
    border: none;
    padding: 30px;
    font-size: 14px;
    color: black; 
    background-color: #fff;
    text-align: center; 
}

.active-row :hover {
    font-weight: bold;
    color: #ffb700; 
    text-align: center; 
}

.btn {
  background-color: #ffb700;
  border-radius: 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 10px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  float: right;
}

.btn:hover {
  background-color: #ff7b00;
}
</style>
</head>
<body>
    <!--Sidebar!-->
    <?php include "adminsidebar.php" ?>
    
    <h1>Payment Record<h1>
    <div class="table-responsive">
              <table class="table">
                <thead class="thead">
                  <tr>
                  <th width="10%">Payment ID</th>
                  <th width="30%">Name</th>
                  <th width="30%">Email</th>
                  <th width="10%">Total Payment</th>
                  <th width="20%">Table No.</th>
                  <th width="5%">Action</th>
                  </tr>
                </thead>
                
            <?php
            $sql = "select * from checkout;";
            $result = mysqli_query($conn,$sql);
            // $row = mysqli_fetch_array($result);
            $name = $_GET['name'];
            
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <tr class="active-row" >
                <td style="font-weight:bold"><?php echo $row["checkid"];	?></td>
                <td><?php echo $row["Name"];?></td>
                <td><?php echo $row["Email"];?></td>
                <td>RM <?php echo $row["total"];?></td>
                <td><?php echo $row["table_number"];?></td>
                <td><a href="deletepayment.php?checkid=<?php echo $row['checkid']; ?>&&name=<?php echo $name?>"><i class="fa fa-close" style="font-size:36px;color:#dc3545;"></i></a></td>
            </tr>
        <?php
            }
        ?>
        </table>
    </div>
    <br><button class=btn onclick="window.print()">Print this page</button>
</body>
</html>

