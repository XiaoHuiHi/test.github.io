<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Payment | 1 Coin Sandwich</title>

<style>
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
    background-color: #009879;
    text-align: center; 
}

.active-row{
    border-bottom: 1px solid #dddddd;
    text-align: center;
}

.active-row tr:hover {
    font-weight: bold;
    color: #009879;
}

.active-row td {
    border: none;
    padding: 30px;
    font-size: 14px;
    color: black; 
    background-color: #fff;
    text-align: center; 
}


</style>
</head>
<body>
    <!--Sidebar!-->
    <?php include "adminsidebar.php" ?>

    <div class="table-responsive">
              <table class="table">
                <thead class="thead">
                  <tr>
                  <th width="10%">Payment ID</th>
                  <th width="40%">Payment Name</th>
                  <th width="20%">Total Payment</th>
                  <th width="15%">Table</th>
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
                <td><?php echo $row["checkid"];	?></td>
                <td><?php echo $row["Name"];?></td>
                <td><?php echo $row["total"];?></td>
                <td><?php echo $row["table_number"];?></td>
                <td><a href="deletepayment.php?checkid=<?php echo $row['checkid']; ?>&&name=<?php echo $name?>"><i class="fa fa-close" style="font-size:36px;color:#dc3545;"></i></a></td>
            </tr>
        <?php
            }
        ?>
        </table>
    </div>
    <br><br><button onclick="window.print()">Print this page</button>
</body>

</html>