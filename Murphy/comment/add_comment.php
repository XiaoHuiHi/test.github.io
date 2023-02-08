<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    
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

    $sql = "INSERT INTO comment (id, name, contact, email, comment)
    VALUES ($id, '$name', '$contact', '$email', '$comment')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<html>
    <head>
        <style>
            fieldset
            {
                background-color: #f2f2f2;
            }
        </style>
    </head>
<body>
<fieldset>
<form action="" method="post">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id"><br><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="contact">Contact:</label>
    <input type="text" id="contact" name="contact"><br><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>
    <label for="comment">Comment:</label>
    <textarea id="comment" name="comment"></textarea><br><br>
    <input type="submit" name="submit" value="Submit">
</form> 
</fieldset>
</body>
</html>
