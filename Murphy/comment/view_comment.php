<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>VIEW COMMENTS</title>
    <style>
        body
        {
            background-image: url("https://i.pinimg.com/564x/52/9d/2b/529d2ba9360a0707359ca15b9cb184be.jpg");
            background-size: 100%;
            background-repeat:no-repeat;
        }

        .middle
        {
            max-width: 900px;
            margin: auto; 
        }

        fieldset
        {
            background-color: #f2f2f2;
        }

        .table 
        {
            table-layout: fixed;
            width: 900px;
            word-wrap: break-word;
        }

        
        
        </style>
</head>
<body>

<div class="middle">
    <h1>Customer's comments</h1>
    <fieldset>
    <div class="middle">
    <table class="table" border="1px">
						<thead>
							<th> ID</th>
							<th> Customer Name</th>
							<th> Customer Contact </th>
							<th> Customer Email</th>
							<th> Comment</th>
						</thead>
                        <tbody>
                            <?php

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "dwp_1coin_project";

                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM comment";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) 
                                {
                                    $comm_id = $row['id'];
									$cust_name = $row['name'];
									$cust_cont = $row['contact'];
									$cust_email = $row['email'];
									$comment = $row['comment'];
                                    
                                    //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Contact: " . $row["contact"]. " - Email: " . $row["email"]. " - Comment: " . $row["comment"]. "<br>";
                                
                            ?>
                            <tr>
                                <th><?php echo $comm_id; ?></th>
                                <th><?php echo $cust_name; ?></th>
                                <th><?php echo $cust_cont; ?></th>
                                <th><?php echo $cust_email; ?></th>
                                <td><?php echo $comment; ?></td>
                            </tr>
                        

                        </tbody>
                        <?php
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>

    </table>

                <span><a href="http://localhost/DWP_1Coin_Project/Murphy/comment/add_comment.php" >Add comment</a></span>
                <span><a href=# >Back to Main Page</a></span>
    </div>
                </div>
</body>
</html>
