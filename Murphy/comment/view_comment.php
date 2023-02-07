
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
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Contact: " . $row["contact"]. " - Email: " . $row["email"]. " - Comment: " . $row["comment"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

