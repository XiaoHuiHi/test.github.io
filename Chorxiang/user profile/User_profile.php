<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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
        .edit
        {
            float: right;
        }
        label
        {
            display: inline-block;
            width: 150px;
            text-align: right;
        }
        img
        {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }
        .bottom
        {
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <div class="middle">
        <fieldset>
            <?php
            $login_no=req
            $sql = "select * from user where no=$login_no"; // put from the user check login  ( where no=$login_no )
            $result = mysqli_query($conn,$sql);
           
            ?>
            <legend>User Profile</legend>   
            <form action="" method="POST">
                <?php
                $row = mysqli_fetch_array($result);
                    ?>

                <a class="edit" href="user_edit.php?edit&no=<?php echo $row['No']; ?>" alt="update">Edit Profile<i class="fa fa-pencil"></i></a>
 
                
                <label for="fname" ><i class="fa fa-user"></i> Full Name :</label>
                <?php echo $row["Name"]; ?>
                <label for="email"><i class="fa fa-envelope"></i>Email : </label>
                <?php echo $row["Email"];?>
                <div class="bottom">
                    <label for="fname"><i class="fa fa-phone"></i>Phone number :</label>
                    <?php echo $row["PhoneNumber"];?>
                    <label for="fname"><i class="fa fa-birthday-cake"></i>Date  :</label>
                    <?php echo $row["Date"];?>
                </div>

                <div>
                    <P>About me : </P>
                    <textarea rows="5" cols="60" placeholder="type some thing here"><?php echo $row["Summary"];?></textarea>
                </div>
                <?php echo "<br><br>";?>
                <i class="fa fa-sign-out"></i>
                <span><a href="#" >Back To Main Menu</a></span>
                <i class="fa fa-times"></i> 
                <span><a href="deleteprofile.php" >Delete Account</a></span>
            </form>

       </fieldset>
    </div>


    
</body>
</html>