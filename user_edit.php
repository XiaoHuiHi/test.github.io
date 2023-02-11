<?php include("config.php"); ?>

<html>
<head><title>Edit Profile | 1 Coin Sandwich</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
    function validationForm()
    {
        var fname=document.addfrm.name.value;
        var femail=document.addfrm.email.value;
        var frole=document.addfrm.role.value;
        var fstatus=document.addfrm.status.value;

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var femail="Null";
        var username_flag=false,email_flag=false,pw_flag=false;

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
    sup 
    {
        color: red;
    }
</style>
</head>
<body>

    <div class="middle">
    <fieldset>
		<?php
		 
			$id = $_REQUEST["email"]; 

			$result = mysqli_query($conn, "select * from user where Email = '$id'");
			$row = mysqli_fetch_assoc($result);
		?>
		
		<h1><b style="font-size: 50px;"><i class="fa fa-pencil" style="font-size:50px"></i> Edit Profile</b></h1>

		<form name="addfrm" method="post" action="">

			<p><label>Name<sup>*</sup> :</label><input type="text" name="name" size="50" value="<?php echo $row['Name']; ?>">

            <p><label>Email<sup>*</sup> :</label><input type="text" name="email" size="15" value="<?php echo $row['Email']; ?>">
		 
			<p><label>PhoneNumber<sup>*</sup> :</label><input type="text" name="pn" size="15" value="<?php echo $row['PhoneNumber']; ?>">

            <p><label>Date<sup>*</sup> :</label><input type="date" name="date" value="<?php echo $row['Date']; ?>">

            <p><label>Your Summary<sup>*</sup> :</label><textarea cols="60" rows="4" name="summary"><?php echo $row['Summary']; ?></textarea>
            
            <p>User Image<sup>*</sup> : (insert image files)<br>

            <p><input type="file" id="file"  name="image" class="form-control" multiple ></P>
			
			<p><input type="submit" name="savebtn" value="UPDATE">

            <div style="padding-bottom:5px;">
            <a href="User_profile.php?email=<?php echo $id ?>">Return user profile</a>
            </div>


		</form>
    </fieldset>
	</div>
    



</body>
</html>

<?php


if (isset($_POST["savebtn"])) 	
{
	$mname = $_POST["name"];  	
    $memail = $_POST["email"];  
	$mpn = $_POST["pn"];  
    $mdate = $_POST["date"];  	
	$msummary = $_POST["summary"];  
    $mimage = $_POST['image'];		
	
    
    mysqli_query($conn,"update user set Image='" . $_POST['image'] . "' where Email='$id'");

    if (!$mname)
    {
        echo "Please Key in Name !";
    }
    else if(!$memail)
    {
        echo "Please Key in Email !";
    }
    else if(!$mpn)
    {
        echo "Please Key in Phone Number !";
    }
    else if(!$mdate)
    {
        echo "Please Key in Date !";
    }
    else if(!$msummary)
    {
        echo "Please Key in Summary !";
    }
    else if(!$mimage)
    {
        echo "Please put the image ! ";
    }
    else
    {
    //     mysqli_query($conn,"updateuser set name='$mname', emaile='$memail', summary='$msummary', pn='$mpn', date='$mdate' where no=$id");
        mysqli_query($conn,"UPDATE user set name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', phonenumber='" . $_POST['pn'] . "' ,date='" . $_POST['date'] . "',summary='" . $_POST['summary'] . "' where Email='$id'");
        echo "Updated successfully !";
    }
    
	

	
}

?>
