<?php
    $username = $POST['username'];
    $password = $POST['password'];

    mysql_connect("localhost","root","");
    mysql_select_db("dwp_1coin_project");

    $result = mysql_query("select * from adminlogin where username='$username' and password='$password'") or die ("Failed to query database".mysql_error());

    $row = mysql_fetch_array($result);

    if($row['username'] == $username && $row['password'] == $password){
        echo "Login success!!! Welcome ".$row['username'];
    }
    else{
        echo "Failed to login!!!";
    }

?>