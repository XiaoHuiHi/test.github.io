<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head><title>Edit</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
    function validationForm()
    {
        var fname=document.insertform.name.value;
        var femail=document.insertform.email.value;
        var frole=document.insertform.role.value;
        var fstatus=document.insertform.status.value;

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var femail="Null";
        var username_flag=false,email_flag=false,role_flag=false,status_flag;

            if(fname.trim()=="")
            {
                document.getElementById("error_name").innerHTML ="Name cannot be blank";
            }
            else
            {
                document.getElementById("error_name").innerHTML="&nbsp";
                username_flag=true;
            }

            if (femail.trim()=="")
            {
                document.getElementById("error_email").innerHTML="email cannot be blank & must follow the example of email style";
                
            }
            else if(femail.match(mailformat))
            {
                document.getElementById("error_email").innerHTML="&nbsp";
                email_flag=true;
            }
            else
            {
                document.getElementById("error_email").innerHTML="email cannot be blank & must follow the example of email style";
            }

            if(frole.trim()=="")
            {
                document.getElementById("error_role").innerHTML ="role cannot be blank & must follow the example of role style";
            }
            else if(frole.trim()!=Customer || frole.trim()!=VIP)
            {
                document.getElementById("error_role").innerHTML ="role cannot be blank & must follow the example of role style";
            }
            else
            {
                document.getElementById("error_role").innerHTML="&nbsp";
                role_flag=true;
            }

            if(fstatus.trim()=="")
            {
                document.getElementById("error_status").innerHTML ="status cannot be blank & must follow the example of status style";
            }
            else if(fstatus.trim()!=Active || fstatus.trim()!=Inactive)
            {
                document.getElementById("error_role").innerHTML ="status cannot be blank & must follow the example of status style";
            }
            else
            {
                document.getElementById("error_status").innerHTML="&nbsp";
                status_flag=true;
            }

    }

    </script>
<style>
    .middle
    {
        max-width: 800px;
        margin: auto; 
    }
    sup
    {
      color: red;
    }
    *
    {
      font-size: 20px;
    }
    fieldset
    {
        background-color: #f2f2f2;
    }
    a:hover
    {
      color: red;
    }
</style>
</head>

  <body>
    <div class="middle">
        <fieldset>
            <h1><b style="font-size: 50px;"><i class="fa fa-plus" style="font-size:50px"></i>Add New User</b></h1>
            <form name="insertform" method="post" action="" >

                Name<sup>*</sup> :<br>
                <input type="text" name="name" ><span id="error_name"></span>
                <br>
                Email<sup>*</sup> :<br>
                <input type="email" name="email"><span id="error_email"></span>
                <br>
                Role<sup>*</sup> : (Customer / VIP)<br>
                <input type="text" name="role"><span id="error_role"></span>
                <br>(email@gmail.com)
                <br>
                Status<sup>*</sup> : (Active / Inactive)<br>
                <input type="text" name="status"><span id="error_status"></span> <br>
                User Image<sup>*</sup> : (insert the file picture)<br>
                <p><input type="file" id="file"  name="image" class="form-control" multiple></P>
                <br>
                <input type="submit" name="save" value="submit" onsubmit="validationForm()">
                <a href="manageuser.php">Back to manage user list</a>
            </form>
        </fieldset>
    </div>
  </body>
</html>

<?php
  if(isset($_POST['save']))
  {	 
    $mname = $_POST['name'];
    $memail = $_POST['email'];
    $mrole = $_POST['role'];
    $mstatus = $_POST['status'];
    $mimage = $_POST['image'];
    $img = $_POST['image'];
    
    // $sql = "INSERT INTO user (image) VALUES ()";
    // $result = mysqli_query($conn,$sql);


    if (!$mname)
    {
        echo "Please Key in Name !";
        
    }
    else if(!$memail)
    {
        echo "Please Key in Email !";
        
    }
    else if(!$mrole)
    {
        echo "Please Key in Role !";
        
    }
    else if(!$mstatus)
    {
        echo "Please Key in Status !";
        
    }
    else if(!$mimage)
    {
        echo "Please put the image ! ";
    }
    else if($mrole=="VIP")
    {

        if($mstatus == "Active")
        {
            $sql = "INSERT INTO user (image,name,email,role,status) VALUES ('$img','$mname','$memail','$mrole','$mstatus')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
              } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
              }
              mysqli_close($conn);
        }
        else if($mstatus == "Inactive")
        {
            $sql = "INSERT INTO user (image,name,email,role,status) VALUES ('$img','$mname','$memail','$mrole','$mstatus')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
              } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
              }
              mysqli_close($conn);
        }
        else
        {
            echo "Please Key the Correct Role and Status follow the two selection !";
        }
    }
    else if($mrole=="Customer")
    {

        if($mstatus == "Active")
        {
            $sql = "INSERT INTO user (image,name,email,role,status) VALUES ('$img','$mname','$memail','$mrole','$mstatus')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
              } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
              }
              mysqli_close($conn);
        }
        else if($mstatus == "Inactive")
        {
            $sql = "INSERT INTO user (image,name,email,role,status) VALUES ('$img','$mname','$memail','$mrole','$mstatus')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
              } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
              }
              mysqli_close($conn);
        }
        else
        {
            echo "Please Key the Correct Role and Status follow the two selection !";
        }
    }
    else
    {
        echo "Please Key the Correct Role and Status follow the two selection !";
    }

    // else
    // {
    //     $sql = "INSERT INTO user (name,email,role,status) VALUES ('$mname','$memail','$mrole','$mstatus')";
    //     if (mysqli_query($connect, $sql)) {
    //         echo "New record created successfully !";
    //       } else {
    //         echo "Error: " . $sql . "" . mysqli_error($connect);
    //       }
    //       mysqli_close($connect);

    // }

    
  }
?>




