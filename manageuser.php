<?php include("config.php"); 

?>

<html>
<head><title>Manage User | 1 Coin Sandwich</title>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    fieldset
    {
        background-color: #f2f2f2;
    }
    .middle
    {
        max-width: 800px;
        margin: auto; 
    }
    *
    {
      font-size: 20px;
    }
    .left
    {
      float: right;
      margin-bottom: 50px;
    }
    td, th 
    {
      text-align: left;
      padding: 30px;
    }
    a:hover
    {
      color: red;
    }
    .img
    {
      width: 80px;
    }
  </style>
</head>
<body>

<div id="wrapper">

<div class="middle">
    <fieldset>
    <?php
        $sql = "select * from user";
        $result = mysqli_query($conn,$sql);

        $host = "SELECT * FROM `admin`";
        $query = mysqli_query($conn,$host);
        $host_image = mysqli_fetch_assoc($query);
        ?>
      <h1><i class="fa fa-address-book-o" style="font-size:50px"></i><b style="font-size: 50px;"> Manage User</b></h1>
      <table border="0px">
        <tr>
          <td>ID</td>
          <td>Image</td>
          <td>Name</td>
          <td>Email</td>
          <td>Role</td>
          <td>Status</td>
          <td>Manage</td>
        </tr>
        <?php

        while($row = mysqli_fetch_array($result))
        {
            ?>
      
        <tr>
          <td><?php echo $row["No"]; ?></td>
          <td><img class='img' src="<?php echo "images/".$row['image'];?>" ></td>
          <td><?php echo $row["Name"];	?></td>
          <td><?php echo $row["Email"];?></td>
          <td><?php echo $row["Role"];?></td>
          <td><?php echo $row["Status"];?></td>
          <td>           <a href="deletemanageuser.php?No=<?php echo $row['No']; ?>"><i class="fa fa-close" style="font-size:36px"></i></a>
            <a href="updatemanageuser.php?email=<?php echo $row['Email']; ?>&&name=<?php echo $host_image['username']?>" alt="update"><i class="fa fa-cog" style="font-size:36px"></i></a>
            </td>
        </tr>
            <?php

        }

		?>
			
      </table>
      <button style="background-color: gray;">1</button>
      <button>2</button>
      <button>3</button>
      <button>4</button>
      <button>5</button>
      <button>Next Page</button><span class="left"><a href="insertmanageuser.php" alt="insert"><i class="fa fa-plus-square"></i> <input type="button" value="ADD New User"></span></p>

      <a href="loading_dashboard.php?name=<?php echo $host_image['username']?>">Back to Dashboard</a>
      <span class="left"><br><button onclick="window.print()" header="">Generate user list report</button></span>

    </fieldset>
  </div>

	<div>

	</div>
	
</div>

</body>
</html>
