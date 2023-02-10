<?php
    include 'config.php';
    // $imagecode = "SELECT * FROM imageofphp where imagecode";
    // $query = mysqli_query($conn,$imagecode);
    // $imgcode = mysqli_fetch_assoc($query)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wishlist | 1 Coin Sandwich</title>
    <!-- <link rel="stylesheet" href="./Wishlist_Page.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body
{
    background: #DDDDDD;
    margin-left: 120px;
    margin-right: 25px;
    margin-top: 30px;
    font-family: "Roboto",sans-serif;
    
}
.add
{
    padding: 10px;
}
.subway
{
    padding: 10px;
    background-color: white;
    border-radius: 20px;
    box-shadow: 3px 3px 10px black;
}
.subway a
{
    float: right;
    font-size: 20px;
}
.subway #home
{
    position: relative;
    color: black;
    text-decoration: none;
}
.info span
{
    font-style: italic;
    font-family: 'Times New Roman', Times, serif;
    text-align: justify;
    margin: 10px;
}
.subway #home:hover
{
    background-color: #222;
    color: white;
}
.imgoffood img
{
    margin: auto;
}
@font-face
{
    font-family: Hanged_Letters;
    src: url(./font/Hanging_Letters/Hanged_Letters.ttf);
    
}

@font-face {
    font-family: Guardian_Snowing_Demo;
    src:url(./font/guardian_snowing/Guardian_Snowing/Guardian_Snowing_Demo.ttf);
}
.wishlist
{
    padding: 12px;
    margin: 10px;
    border: 1px solid black;
    border-radius: 10px;
}
.subway .logo1 img
{
    height: 50px;
}
.Title h1
{
   text-align: center;
   background: linear-gradient(#ff7b00,#ffb700);
   padding: 10px;
   margin: 10px;
   border-radius: 1000px;
   font-family: Hanged_Letters;
   font-size: 60px;
   letter-spacing: 5px;
} 
.Title img
{
    height: 55px;
    width: 55px;
}

.item
{
    font-weight: bold;
    font-size: 30px;
    font-family: Guardian_Snowing_Demo;
    letter-spacing: 7px;
}

.imgoffood .title
{
    font-weight: bold;
    font-size: 30px;
    font-family: Guardian_Snowing_Demo;
    letter-spacing: 7px;
}

.stepper-input input
{
    width: 50px;
    height: 25px;
    border: none;
    text-align: center;
}

.stepper-input button
{

    font-size: 15px;
    text-align: center;
    width: 20px;
    height: 20px;
    cursor: pointer;
    border: none;
    transition: all 300ms ease-in-out;
    overflow: hidden;
    border-radius: 5px;
    background: linear-gradient(#ff7b00,#ffb700);
    color: #222;
    
}

.imgoffood img
{
    /* float: right; */
    width: 20%;
}

.cart
{
    display: inline-block;
    margin-top: 10px;   
}

.cart button
{
    background: linear-gradient(#ff7b00,#ffb700);
    height: 30px;
    border: 1px solid black;
    border-radius: 20px;
    /* padding-top: 10px; */
    padding-left: 10px;
    padding-right: 10px;
    color: white;
    font-weight: bold;
    font-size: 15px;
}

.cart button:hover
{
    cursor: pointer;
    background: #72efdd;
    color: black;
    
}

.delete
{
    border: none;
    background-color: transparent;
    float: right;
}

.delete:hover
{
    filter: grayscale(100%);
    cursor: pointer;
}

.imgoffood .love
{
    width: 30px; 
    /* float: right; */
}

.cart img
{
    width: 30px;
    float: left;
    margin-right: 10px;
}


.formControl
{
    padding: 10px;
    border-bottom: 1px solid  black;
}

.sidebar
{
    outline: none;
    border: none;
    text-decoration: none;
    font-family: "Poppins", sans-serif;
    /* position:fixed; */
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

.logo
{
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

a
{
    color: rgb(85,83,83);
    font-size: 14px;
    display: table;
    width: 260px;
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

a:hover
{
    background: linear-gradient(to left,#ffaa00,#ffea00);;
}

nav:hover
{
    width: 250px;
    transition: all 0.5s ease;
}

.logout
{
    position: absolute;
    bottom: 0;
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

.price
{
   border-radius: 20px;
   background: linear-gradient(#ff7b00,#ffb700); 
   width: 120px;
   margin-left: 8px;
   padding: 10px;
   /* vertical-align: middle; */
   float: right;
}
</style>
<?php
        $id = $_GET['email'];
        $host = "SELECT * FROM user Where Email = '$id'";
        $query = mysqli_query($conn,$host);
        $host_image = mysqli_fetch_assoc($query);
?>

<?php
    
?>
<body>
    <?php include 'usersidebar.php'?>
    <div class="subway">
        
        <div class="Title">
            <h1>My Wishlist</h1>
        </div>
        
        
        <div class="wishlist">
        <div class="form">
        <?php
                $wishlist = "SELECT * FROM wishlist";
                $query = mysqli_query($conn,$wishlist);
            
                while($fetch = mysqli_fetch_assoc($query))
                {
                    ?>
                    <div class="formControl">
                                <div class="imgoffood">
                                    <p class="title">
                                        <form action="" method="POST">
                                        <span class="item"><?php echo $fetch['itemname']?></span> 
                                            <input type="hidden" name="delete_id" value="<?php echo $fetch['id'];?>">
                                            <input type="hidden" name="del_image" value="<?php echo $fetch['itemimage']?>">
                                            <button type="submit" name ="delete" class="delete"><img class="love" src="<?php echo "image/love.png"?>" alt=""></button>
                                            
                                        </form>
                                        
                                        <img src="<?php echo "images/".$fetch['itemimage']?>" alt=""> </p> <div class="price">Price: <?php echo "RM ".$fetch['itemprice']?></div> 
                                </div>
                                
                                <div class="add">
                                    <div class="stepper-input">
                                        <button class="minus-btn">-</button>
                                        <input id="range" type="text" min="1" max="5" value="1">
                                        <button class="plus-btn">+</button>
                                    </div>
                                    <div class="cart">
                                        <img src="/image/shoppingcart.png" alt=""><button>Add to cart </button>
                                    </div>
                                </div>
                                    
                            </div>
                    <?php
                }

                if(isset($_POST['delete']))
                {
                    $id = $_POST['delete_id'];
                    $image = $_POST['del_image'];

                    $query = "DELETE FROM wishlist WHERE id = '$id'";
                    $query_run = mysqli_query($conn,$query);

                    if($query_run)
                    {
                        // unlink("image/".$image);
                        $_SESSION['success']="Data is Deleted";
                        // header("location: staff.php?delete successfully");
                    }
                    else
                    {
                        $_SESSION['status']="Data is Not Deleted";
                    }
                }
        ?>
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
    </div>
            
        </div>
    </div>
    <script>
        var incrementButton = document.getElementsByClassName('plus-btn');
    var decrementButton = document.getElementsByClassName('minus-btn');
    // console.log(incrementButton);
    // console.log(decrementButton);
    for(var i =0;i<incrementButton.length;i++)
    {
        var button = incrementButton[i];
        button.addEventListener('click',function(event){
            var buttonClicked =event.target;
            // console.log(buttonClicked);
            var input=buttonClicked.parentElement.children[1];
            // console.log(input);
            var inputValue = input.value;
            // console.log(inputValue);
            var newValue = parseInt(inputValue)+1;
            // console.log(newValue);
            input.value=newValue;
        })
    }


    for(var i =0;i<decrementButton.length;i++)
    {
        var button = decrementButton[i];
        button.addEventListener('click',function(event){
            var buttonClicked =event.target;
            // console.log(buttonClicked);
            var input=buttonClicked.parentElement.children[1];
            // console.log(input);
            var inputValue = input.value;
            // console.log(inputValue);
            var newValue = parseInt(inputValue)-1;
            // console.log(newValue);
            if(newValue>=0)
            {
                input.value = newValue;
            }
            
        })
    }
    
    </script>
</body>

</html>