<?php include("config.php"); ?>

<html>
    <head>
        <style>
            fieldset
            {
                background-color: #f2f2f2;
            }
            .middle
        {
            max-width: 900px;
            margin: auto; 
        }
        </style>

    </head>
<body>
<div class="middle">
    <h1>Please Give Us Your Valuable Comments!</h1>
    <h2>We want to say thank you and please come again!</h2>
    <fieldset>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact"><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="5" cols="60"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
    </form> 
    </fieldset>
    <i class="fa fa-sign-out"></i>
                <span><a href="http://localhost/DWP_1Coin_Project/Murphy/comment/view_comment.php" >Back To Comment Page</a></span>
        </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    

    $sql = "INSERT INTO comment (name, contact, email, comment)VALUES ('$name', '$contact', '$email', '$comment')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>