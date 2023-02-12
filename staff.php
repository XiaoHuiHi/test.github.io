<?php
session_start();
    include 'config.php';

    if(isset($_POST['upload']))
    {
        
        $name = $_POST["staffname"];
        $imageCount = count($_FILES['image']['name']);
        for($i=0;$i<$imageCount;$i++)
        {
            $imageName = $_FILES['image']['name'][$i];
            $imageTempName = $_FILES['image']['tmp_name'][$i];
            $targetPath = "images/".$imageName;
            if(move_uploaded_file($imageTempName,$targetPath))
            {
                $sql = "INSERT INTO `admin`(username,image) VALUES('$name','$imageName')";
                $result = mysqli_query($conn,$sql);
                if($result)
            {
                
            }
            }
            
        }
        

        // if($query_run)
        // {
        //     $msg = "<div style='background-color: green; color: white; font-weight: bold;border-radius: 30px; margin: 20px; margin-bottom: 0; padding: 10px; text_align: center;'>Image Profile Uploaded Successfully</div>";
        // }
    }
            
    
?>

<?php
        $host = "SELECT * FROM `admin`";
        $query = mysqli_query($conn,$host);
        $host_image = mysqli_fetch_assoc($query);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="staff.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
</head>
<style>
*
{
    margin: 0;
    padding: 0;
}


.sidebar
{
    outline: none;
    border: none;
    text-decoration: none;
    font-family: "Poppins", sans-serif;
    /* position:fixed; */
}

.logo1 
{
    margin-left: 20px;
    float:left;
    /* border: 1px solid black; */
}

.logo1 a:hover
{
    background: none;
}

body
{
    background: #DDDDDD;
    margin-left: 120px;
    margin-right: 25px;
    margin-top: 30px;
}

nav
{
    position: fixed;
    top: 0;
    bottom: 0;
    height: 100%;
    left:0;
    background: linear-gradient(#ff7b00,#ffb700);
    width: 90px;
    overflow:hidden;
    transition: width 0.2s linear;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

.sidebarlogo a
{
    color: rgb(85,83,83);
    font-size: 14px;
    /* display: table; */
    
    padding: 5px;
    padding-left: 10px;
    margin: 10px 0 0 10px;
    
    text-decoration: none;
}
.logo 
{
    width: 200px;
    text-align: center;
    display: flex;
    transition: all 0.5s ease;
    margin: 10px 0 0 10px;
    
}
.logo img
{
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.logo img:hover
{
    cursor: pointer;
}

.logo span
{
    font-weight: bold;
    padding-left: 16px; 
    font-size: 18px; 
    text-transform: uppercase;  
}

.logo:hover
{
    background: none;
    cursor:unset;
}

.sidebar a
{
    color: rgb(85,83,83);
    font-size: 14px;
    display: table;
    width: 200px;
    padding: 5px;
    padding-left: 10px;
    margin-top: 10px;
    text-decoration: none;
}

.sidebar
{
    top: 0;
    left: 0;
}

.sidebar .fa
{
    position: relative;
    width: 70px;
    height: 40px;
    top: 14px;
    font-size: 20px;
    text-align: center;
}

.nav-item
{
    position: relative;
    top: 12px;
    margin-left: 10px;
}

.sidebar a:hover
{
    background: linear-gradient(to left,#ffaa00,#ffea00);
    color: white;
    transition: all 0.3s ease;

}

nav:hover
{
    width: 200px;
    transition: all 0.5s ease;
}

.logout
{
    position: absolute;
    bottom: 0;
}
.team
{
    margin: 10%;
}
.col-md-3
{
    margin-top: 25px;
}

.col-md-3 .img-box
{
    opacity: 1;
    display: block;
    position: relative;
}

.col-md-3 h2
{
    font-size: 22px;
    font-weight: bold;
    margin-top: 15px;
}

.col-md-3 h3
{
    font-size: 15px;
    font-weight: bold;
    margin-top: 15px;
}

.img-box:after
{
    content: "";
    opacity: 0;
    
    background-color: rgba(0, 0, 0, 0.7);
    position:absolute;
    width: 200px;
    margin: auto;
    border: 1px solid black;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
}

.img-box ul
{
    margin: 0;
    padding: 20px 0;
    position:absolute;
    z-index: 1;
    bottom: 0;
    display: block;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
}

.img-box ul li
{
    width: 20px;
    height: 20px;
    /* border: 1px solid #fff; */
    border-radius: 50%;
    padding-bottom: 5px;
    margin: 4px;
    padding: 7px;
    display: inline-block;
    color: #fff;
    font-size: 17px;
}
.img-box a
{
    border: none;
    background: transparent;
    color: #fff;
    font-size: 20px;
}

.img-box a:hover
{
    cursor: pointer;
    color: #ff7b00;

}
.img-box img
{
    width: 200px;
}
.img-box:hover::after
{
    opacity: 1;
}

.img-box:hover ul
{
    opacity: 1;
}


.title h1
{
    border-bottom: 3px solid gray;
    text-align: center;
    font-size: 3em;
    font-family: sans-serif;
    background: linear-gradient(#ff7b00,#ffb700);
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    padding-bottom: 10px;
}

.title img
{
    width: 90px;
    /* vertical-align: top; */
    /* display: inline-block; */
}
.my-5 input[type="file"]
{
    /* border: none; */
    display: none;
}
.my-5 .Choose
{
    color: white;
    padding: 10px;
    border-radius: 20px;
    background: linear-gradient(#ff7b00,#ffb700);
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
}
.my-5 input[type="submit"]
{
    border: none;
    background: linear-gradient(#ff7b00,#ffb700);
    color: white;
    padding: 10px;
    border-radius: 20px;
    margin-left: 20px;
}
.my-5 .Choose:hover
{
    transition: all 0.5s ease;
    color: black;
    cursor: pointer;
    background: linear-gradient(to left,#ffaa00,#ffea00);
}
.my-5 input[type="submit"]:hover
{
    transition: all 0.5s ease;
    color: black;
    cursor: pointer;
    background: linear-gradient(to left,#ffaa00,#ffea00);
}



.staffname
{
    border: none;
    border-bottom: 1px solid black;
    background: transparent;
    margin-right: 20px;
}

.deleted
{
    color: white;
    padding: 10px;
    background-color: #52b788;
    margin-bottom: 10px;
    border-radius: 20px;
    text-align: center;
}
.nodelected
{
    color: white;
    padding: 10px;
    background-color: #d00000;
    margin-bottom: 10px;
    border-radius: 20px;
    text-align: center;
}

.row
{
    display: grid;
}

/* .remove a
{
    color: white;
}
.remove a:hover
{
    cursor: pointer;
    color: #ff7b00;
} */

</style>
<body>
<?php
        $id = $_GET['name'];
        $host = "SELECT * FROM `admin` where username = '$id'";
        $query = mysqli_query($conn,$host);
        $host_image = mysqli_fetch_assoc($query);
        
?>
    <div class="container">
        <?php
            include 'adminsidebar.php';
        ?>
        </div>
        
        <div class="title">
            
            <h1><div class="logo1">
            </div>Our Team</h1>
        </div>

        
        <section class="team">
            <?php
                if(isset($_SESSION['success'])&& $_SESSION['success'] != '')
                {
                    echo '<h3 class="deleted">'.$_SESSION['success'].'</h3>';
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['status'])&& $_SESSION['status'] != '')
                {
                    echo '<h3 class="nodeleted">'.$_SESSION['status'].'</h3>';
                    unset($_SESSION['status']);
                }
            ?>
            <form class="my-5" method="POST" enctype="multipart/form-data">
                    <label class="name"><i class="fa fa-address-card-o "></i> Name: </label>
                    <input type="text" id="staffname" class="staffname" name="staffname" maxlength="15">
                
                <input type="file" id="file"  name="image[]" class="form-control" multiple>
                <label for="file" class="Choose">
                    <i class="fa fa-picture-o"></i>
                    &nbsp; Choose a Photo
                </label>
                
                <input type="submit" name="upload" value="UPLOAD">
            </form>
            <div class="row">
            <?php
    $sql = "SELECT * FROM `admin`";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0)
    {
        while($fetch = mysqli_fetch_assoc($query))
        {
            ?>
            
            <div class='col-md-3' style='text-align: center;'>
            <div class='img-box' >
            <img src="<?php echo "images/".$fetch['image'];?>" class='img-responsive'>
            <form action="" method="POST">
            <input type="hidden" name="delete_id" value="<?php echo $fetch['username'];?>">
            <input type="hidden" name="del_image" value="<?php echo $fetch['image']?>">
                <ul>
                    <li><a href="delstaff.php?id=<?php echo $fetch['username']?>&&name=<?php echo $id?>"><i class='fa fa-trash-o' ></i></a></li>
                    <li><a href="editstaff.php?id=<?php echo $fetch['username']?>&&name=<?php echo $id?>"><i class='fa fa-info-circle'></i></a></li>
                </ul>
            </div>
            <h2 style="padding: 20px; padding-top:0;"><?php echo $fetch['username']?></h2>
            <h3 style="padding: 20px; padding-top:0;">Admin</h3>
            
            </form>
            </div>
            <?php
            }
    }
    
?>
                
            </div>
            


        </section>
        
    <script>
        const selected = document.querySelector(".selected")
        const optionContainer = document.querySelector(".option-container")
        const optionList = document.querySelector(".option")

        selected.addEventListener("click",()=>{
            optionContainer.classList.toggle("active")
        })
    </script>
</body>
</html>


