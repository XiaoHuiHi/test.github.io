<?php include("dataconnection.php"); ?>

<?php
  if(isset($_POST['save']))
  {	 

    $mname = $_POST['name'];
    $mdate = $_POST['date'];
    $mrole = $_POST['role'];
    $mstatus = $_POST['status'];
    $sql = "INSERT INTO user (name,date,role,status) VALUES ('$mname','$mdate','$mrole','$mstatus')";
    if (mysqli_query($connect, $sql)) {
      echo "New record created successfully !";
    } else {
      echo "Error: " . $sql . "" . mysqli_error($connect);
    }
    mysqli_close($connect);
  }
?>